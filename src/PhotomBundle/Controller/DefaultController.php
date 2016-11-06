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
        $username = "root";
        $password = "homecoming96";
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
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("SELECT idUsuarioContenido, username, imagenContenido, descripcioncontenido, idContenido FROM Contenido JOIN Usuario ON Contenido.idUsuarioContenido = Usuario.id ORDER BY idContenido DESC");
      $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result =  $query->fetchAll();
      foreach ($result as $key => $post) {
        $result[$key]['imagenContenido'] = base64_encode($post['imagenContenido']);
      }
      $connTarget = null;
      return $this->render('PhotomBundle::Home.html.twig', array("inicio" => $result));
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
        elseif ($type == "video") {
          $fotoName  = md5(uniqid()).'.'.$foto->guessExtension();
          $foto->move($this->getParameter('videos_directorio'), $fotoName);
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

      return new JsonResponse(array(
        'pub' => $idPub,
        'com' => $comment,
        'usuario' => $usuario
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
      $seguido = $request->request->get('seguirA');
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("SELECT id FROM Usuario WHERE username_canonical = :usuario");
      $query->bindParam(":usuario", $seguido);
      $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result =  $query->fetchAll();
              $connTarget = null;
      return new JsonResponse(array(
        'status' => 1,
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
      * @Route("/perfil")
      */
      public function perfilAction()
      {
        $usuario = $this->getUser()->getId();
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("SELECT id, username, nombreUsuario, perfilUsuario,email, generoUsuario FROM Usuario WHERE id = :usuario");
        $query->bindParam(":usuario", $usuario);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        $connTarget = null;
        return $this->render('PhotomBundle::Profile.html.twig', array('usuario'=> $result[0]));
      }

    /**
     * @Route("/perfil/{visitado}")
     */
     public function perfilVisitaAction($visitado)
     {

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
       return $this->render('PhotomBundle::Profile.html.twig', array('usuario' => $result[0]));
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
        return $this->redirect('/');
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
      * @Route("/search")
      */
      public function searchAction(Request $request){
        $searchTerm = $request->request->get('term');
        $searchTerm = "%".$searchTerm."%";
        $connTarget = $this->connectToDB();

        $query = $connTarget->prepare("SELECT nombreUsuario, username_canonical FROM Usuario WHERE nombreUsuario LIKE :search");
        $query->bindParam(":search", $searchTerm);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        $connTarget = null;
        return new JsonResponse(array(
          'resultados' => $result
        ));
      }
}
