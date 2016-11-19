<?php

namespace PhotomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\FileBag;
use Doctrine\DBAL\DriverManager;
use PhotomBundle\Entity\Contenido;
use \PDO;

class DefaultController extends Controller
{

    public function connectToDB(){
        $servername = "localhost";
        $username = "superphoton";
        $password = "Homecoming#96";
        // $username = 'root';
        // $password = "homecoming96";
        $conn = new PDO("mysql:host=$servername;dbname=photon", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      // phpinfo();
      // die();
      $connTarget = $this->connectToDB();
      $id = $this->getUser()->getId();
      // $query = $connTarget->prepare("SELECT idUsuarioContenido, username, imagenContenido, descripcioncontenido, idContenido FROM Contenido JOIN Usuario ON Contenido.idUsuarioContenido = Usuario.id ORDER BY idContenido DESC");
      // $query->execute();
      // $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      // $result =  $query->fetchAll();
      // foreach ($result as $key => $post) {
      //   $result[$key]['imagenContenido'] = base64_encode($post['imagenContenido']);
      // }

      $query = $connTarget->prepare("CALL getPublicationsFriends(:idUsuario)");
      $query->bindParam(":idUsuario", $id);
      $query->execute();
      // $query = $connTarget->prepare("SELECT @res");
      // $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result = $query->fetchAll();
      $connTarget = null;
      $connTarget = $this->connectToDB();
      $friends = $connTarget->prepare("CALL getAllFriends(:idUsuario, 0)");
      $friends->bindParam(":idUsuario", $id);
      $friends->execute();
      $friendsList = $friends->setFetchMode(PDO::FETCH_ASSOC);
      $friendsList = $friends->fetchAll();
      $connTarget = null;
      foreach ($result as $key => $post) {
        $result[$key]['imagenContenido'] = base64_encode($post['imagenContenido']);
        $result[$key]['perfilUsuario'] = base64_encode($post['perfilUsuario']);
        $idPub = $result[$key]['idContenido'];
        $connTarget = $this->connectToDB();
        $comments = $connTarget->prepare("CALL displayPublicacionesAmigos(:Pub)");
        $comments->bindParam(":Pub", $idPub);
        $comments->execute();
        $commentsResult = $comments->setFetchMode(PDO::FETCH_ASSOC);
        $commentsResult = $comments->fetchAll();
        foreach($commentsResult as $keyC => $commen){
          $commentsResult[$keyC]['FotoComentarista'] = base64_encode($commen['FotoComentarista']);
        }
        $connTarget = null;
        array_push($result[$key], $commentsResult);
      }
      return $this->render('PhotomBundle::Home.html.twig', array(
        "inicio" => $result,
        "friends" => $friendsList
      ));
    }

    //CONTENT

    /**
     * @Route("/content/new/upload")
     */
    public function uploadAction(Request $request)
    {
        $usuario = $this->getUser();
        $usuario = $usuario->getId();
        $titulo = "hola mundo";
        $pieFoto = $request->request->get('pieDeFoto');
        $foto = $request->files->get('foto');
        $type = explode("/", $foto->getMimeType());
        $type = $type[0];
        if($type == "image"){
          $file_content = file_get_contents($foto->getPathName());
          if($file_content == @imagecreatefromjpeg($foto) || $file_content == @imagecreatefrompng($foto) || $file_content == @imagecreatefromwbmp($foto)){
            $connTarget = $this->connectToDB();
            $query = $connTarget->prepare("INSERT INTO Contenido(nombreContenido, imagenContenido, descripcionContenido, idUsuarioContenido)
                                    VALUES(:nombre,:imagen, :descripcion, :idUsuario)");
            $query->bindParam(':nombre', $titulo);
            $query->bindParam(':imagen', $file_content);
            $query->bindParam(':descripcion', $pieFoto);
            $query->bindParam(':idUsuario', $usuario);
            $query->execute();
            $connTarget = null;
          }
        }
        elseif ($type == "video") {
          $fotoName = md5(uniqid()).'.'.$foto->guessExtension();
          $foto->move($this->getParameter('videos_directorio'), $fotoName);
          $connTarget = $this->connectToDB();
          $query = $connTarget->prepare("INSERT INTO Contenido(nombreContenido, videoContenido, descripcionContenido, idUsuarioContenido)
                                  VALUES(:nombre,:imagen, :descripcion, :idUsuario)");
          $query->bindParam(':nombre', $titulo);
          $query->bindParam(':imagen', $fotoName);
          $query->bindParam(':descripcion', $pieFoto);
          $query->bindParam(':idUsuario', $usuario);
          $query->execute();
          $connTarget = null;
        }

        return $this->redirect('/');
    }

    /**
     * @Route("/content/addComment")
     */
    public function commentAction(Request $request)
    {
      $usuario = $this->getUser();
      $usuario = $usuario->getId();
      $idPub = $request->request->get('idPub');
      $comment = $request->request->get('comment');
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("INSERT INTO Notificacion(comentarioNotificacion, idContenidoNotificacion, idUsuarioNotificador)
                              VALUES(:comentario, :idContenido, :idUsuario)");
      $query->bindParam(':comentario', $comment);
      $query->bindParam(':idContenido', $idPub);
      $query->bindParam(':idUsuario', $usuario);
      $query->execute();
      $connTarget = null;
      $user = $this->getUser();
      $usuario = $user->getNombreusuario();
      $canonusuario = $user->getUsernameCanonical();
      $image = base64_encode($user->getPerfilusuario());
      return new JsonResponse(array(
        'pub' => $idPub,
        'com' => $comment,
        'usuario' => $usuario,
        'image' => $image,
        'link' => $canonusuario
      ));
    }

    /**
     * @Route("/content/like")
     */
    public function likeAction(Request $request){
      $usuario = $this->getUser();
      $usuario = $usuario->getId();
      $idPub = $request->request->get('idPub');
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("INSERT INTO Notificacion(gustaNotificacion, idContenidoNotificacion, idUsuarioNotificador)
                              VALUES(1, :idContenido, :idUsuario)");
      $query->bindParam(':idContenido', $idPub);
      $query->bindParam(':idUsuario', $usuario);
      $query->execute();
      $connTarget = null;

      return new JsonResponse(array(
        "status"=> "ok"
      ));
    }

    //USERS

    /**
     * @Route("/users/follow")
     */
    public function followAction(Request $request)
    {
      $usuario = $this->getUser();
      $usuario = $usuario->getId();
      $seguido = $request->query->get('seguirA');
      $connTarget = $this->connectToDB();
      // $query = $connTarget->prepare("SELECT id FROM Usuario WHERE username_canonical = :usuario");
      // $query->bindParam(":usuario", $seguido);
      // $query->execute();
      $query = $connTarget->prepare("CALL followUser(:name, :id, @res)");
      $query->bindParam(":name", $seguido);
      $query->bindParam(":id", $usuario);
      $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result =  $query->fetchAll();
      $connTarget = null;
      $connTarget = null;
      return new JsonResponse(array(
        'status' => $result[0]['isFollowing'],
      ));
    }

    /**
     * @Route("/usuarios/editar")
     */
     public function usersEditarAction(Request $request){
       $parameters = $request->request;

       $usuario = $this->getUser()->getId();
       $title = $parameters->get("title");
       $userName = $parameters->get("userName");
       $name = $parameters->get("name");
       $birthDate = $parameters->get("birthDate");
       $country = $parameters->get("country");
       $city = $parameters->get("city");
       $work = $parameters->get("work");
       $email = $parameters->get("email");
       $about = $parameters->get("about");

      //  $connTarget = $this->connectToDB();
      //  $query = $connTarget->prepare("UPDATE Usuario SET username= :userName, nombreUsuario= :name, email= :email, descripcionUsuario=:about WHERE id=:usuario");
      //  $query->bindParam(":usuario", $usuario);
      //  $query->bindParam(":userName", $userName);
      //  $query->bindParam(":name", $nombreUsuario);
      //  $query->bindParam(":email", $email);
      //  $query->bindParam(":about", $about);
      //  $query->execute();
      //  $connTarget = null;
      return new JsonResponse(array(
        'usuario' => $usuario,
        'title' => $title,
        'username' => $userName,
        'name' => $name,
        'birthDate' => $birthDate,
        'country' => $country,
        'city' => $city,
        'work' => $work,
        'email' => $email,
        'about' => $about
      ));
     }

     /**
     * @Route("/user/upload/profilePicture")
     */
     public function usersUploadProfilePictureAction(Request $request)
     {
       $foto = $request->files->get('profilePicture');
       $type = explode("/", $foto->getMimeType());
       $type = $type[0];
       if($type == 'image'){
         $id = $this->getUser()->getId();
         $file_content = file_get_contents($foto->getPathName());
         $connTarget = $this->connectToDB();
         $query = $connTarget->prepare("UPDATE Usuario SET perfilUsuario= :foto WHERE id= :idUsuario");
         $query->bindParam(':foto', $file_content);
         $query->bindParam(':idUsuario', $id);
         $query->execute();
         $connTarget = null;
        }
       return $this->redirect("/perfil");
     }

     /**
     * @Route("/user/upload/bannerPicture")
     */
     public function usersUploadBannerPictureAction(Request $request)
     {
       $foto = $request->files->get('bannerPicture');
       $type = explode("/", $foto->getMimeType());
                $type = $type[0];
       if($type == 'image'){
         $id = $this->getUser()->getId();
         $file_content = file_get_contents($foto->getPathName());
         $connTarget = $this->connectToDB();
         $query = $connTarget->prepare("UPDATE Usuario SET bannerUsuario= :foto WHERE id= :idUsuario");
         $query->bindParam(':foto', $file_content);
         $query->bindParam(':idUsuario', $id);
         $query->execute();
         $connTarget = null;
        }
       return $this->redirect("/perfil");
     }
    //PAGES

    /**
     * @Route("/home")
     */
     public function homeAction()
     {
       return $this->render('PhotomBundle::Home.html.twig');
     }

    /**
    * @Route("/entrar")
    */
     public function logInAction()
     {
       return $this->render('PhotomBundle::LogIn.html.twig');
      }

    /**
     * @Route("/registrarse")
     */
     public function registerAction()
     {
       return $this->render('PhotomBundle::Registrar.html.twig');
     }

     /**
      * @Route("/register/confirmed")
      */
      public function registerConfirmedAction()
      {

        return $this->render("PhotomBundle::CompletarRegistro.html.twig");
      }

     /**
      * @Route("/perfil")
      */
      public function perfilAction()
      {
        $usuario = $this->getUser()->getId();
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("SELECT id, username, nombreUsuario, perfilUsuario, bannerUsuario, email, generoUsuario FROM Usuario WHERE id = :usuario");
        $query->bindParam(":usuario", $usuario);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        $result[0]['perfilUsuario'] = base64_encode($result[0]['perfilUsuario']);
        $result[0]['bannerUsuario'] = base64_encode($result[0]['bannerUsuario']);
        $connTarget = null;
        return $this->render('PhotomBundle::Profile.html.twig',
          array(
            'usuario'=> $result[0],
            'editable' => true
          ));
      }

    /**
     * @Route("/perfil/{visitado}")
     */
     public function perfilVisitaAction($visitado)
     {
       if($visitado == $this->getUser()->getUsernameCanonical()){
         return $this->redirect("/perfil");
       }
       $connTarget = $this->connectToDB();
       $query = $connTarget->prepare("SELECT id, username, nombreUsuario, perfilUsuario,email, generoUsuario FROM Usuario WHERE username_canonical = :usuario");
       $query->bindParam(":usuario", $visitado);
       $query->execute();
       $result = $query->setFetchMode(PDO::FETCH_ASSOC);
       $result =  $query->fetchAll();
       $connTarget = null;
       if( $this->getUser()->getId() == $result[0]['id']){
         return $this->redirect('/perfil');
       }
       return $this->render('PhotomBundle::Profile.html.twig',
          array(
            'usuario' => $result[0],
            'editable' => false
          ));
     }

    /**
     * @Route("/admin")
     */
     public function homeAdminAction()
     {
       return $this->render('PhotomBundle::HomeAdmin.html.twig');
     }

     /**
      * @Route("/profile")
      */
      public function profileAction()
      {
        return $this->redirect('/perfil');
      }


      //REPORTS

      /**
      * @Route("/report/sendReport")
      */
      public function reportAction(Request $request){
        $usuario = $this->getUser();
        $usuario = $usuario->getId();
        $idPub = $request->request->get('idPub');
        $reason = $request->request->get('idReason');
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("INSERT INTO ReportarUsuario(idContenidoReportado, idUsuarioReportador, idRazonReportado) VALUES(:contenido, :usuarioReportador, :razon)");
        $query->bindParam(":contenido", $idPub);
        $query->bindParam(":usuarioReportador", $usuario);
        $query->bindParam(":razon", $reason);
        $query->execute();
        $connTarget = null;
        return new Response('OK', Response::HTTP_OK);
      }

      /**
      * @Route("/report/reasons")
      */
      public function reportReasonsAction()
      {
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("SELECT idRazon, nombreRazon, descripcionRazon FROM Razon;");
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        foreach ($result as $key => $value) {
          $result[$key]['nombreRazon'] = utf8_encode($value['nombreRazon']);
          $result[$key]['descripcionRazon'] = utf8_encode($value['descripcionRazon']);
        }
        return new JsonResponse(array(
          'razones' => $result
        ));
      }

      //SEARCH

      /**
      * @Route("/livesearch")
      */
      public function liveSearchAction(Request $request){
        $searchTerm = $request->query->get('term');
        // $searchTerm = "%".$searchTerm."%";
        $connTarget = $this->connectToDB();
        $usuario = $this->getUser()->getId();
        $queryUsers = $connTarget->prepare("CALL findUser(:search, :user)");
        $queryUsers->bindParam(":search", $searchTerm);
        $queryUsers->bindParam(":user", $usuario);
        $queryUsers->execute();
        $resultUsers = $queryUsers->setFetchMode(PDO::FETCH_ASSOC);
        $resultUsers =  $queryUsers->fetchAll();
        foreach ($resultUsers as $key => $post) {
          $resultUsers[$key]['perfilUsuario'] = base64_encode($post['perfilUsuario']);
        }
        // $query = $connTarget->prepare("SELECT nombreUsuario, username_canonical FROM Usuario WHERE nombreUsuario LIKE :search");
        // dump($resultUsers, $searchTerm);
        // die();

        // $queryContent = $connTarget->prepare("CALL")
        $connTarget = null;
        return new JsonResponse(array(
          'resultados' => $resultUsers
        ));
      }

      /**
      * @Route("/search")
      */
      public function searchAction(Request $request){
        $search = $request->query->get('busqueda');
        $connTarget = $this->connectToDB();
        $usuario = $this->getUser()->getId();
        $queryUsers = $connTarget->prepare("CALL findUser(:search, :user)");
        $queryUsers->bindParam(":search", $search);
        $queryUsers->bindParam(":user", $usuario);
        $queryUsers->execute();
        $resultUsers = $queryUsers->setFetchMode(PDO::FETCH_ASSOC);
        $resultUsers =  $queryUsers->fetchAll();
        foreach ($resultUsers as $key => $post) {
          $resultUsers[$key]['perfilUsuario'] = base64_encode($post['perfilUsuario']);
        }
        $connTarget = null;
        $connTarget = $this->connectToDB();
        $queryPosts = $connTarget->prepare("CALL findContent(:search, 0, '2016-01-01', '2016-01-01')");
        $queryPosts->bindParam(":search", $search);
        $queryPosts->execute();
        $resultPosts = $queryPosts->setFetchMode(PDO::FETCH_ASSOC);
        $resultPosts =  $queryPosts->fetchAll();
        $connTarget = null;
        foreach ($resultPosts as $key => $post) {
          $resultPosts[$key]['imagenContenido'] = base64_encode($post['imagenContenido']);
            $resultPosts[$key]['perfilUsuario'] = base64_encode($post['perfilUsuario']);
          $idPub = $resultPosts[$key]['idContenido'];
          $connTarget = $this->connectToDB();
          $comments = $connTarget->prepare("CALL displayPublicacionesAmigos(:Pub)");
          $comments->bindParam(":Pub", $idPub);
          $comments->execute();
          $commentsResult = $comments->setFetchMode(PDO::FETCH_ASSOC);
          $commentsResult = $comments->fetchAll();
          foreach($commentsResult as $keyC => $commen){
            $commentsResult[$keyC]['FotoComentarista'] = base64_encode($commen['FotoComentarista']);
          }
          $connTarget = null;
          array_push($resultPosts[$key], $commentsResult);
        }
        return $this->render('PhotomBundle::Search.html.twig', array(
          'usuarios' => $resultUsers,
          'posts' => $resultPosts
        ));
      }
}
