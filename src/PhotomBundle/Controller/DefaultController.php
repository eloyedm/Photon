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
        // $username = "superphoton";
        // $password = "Homecoming#96";
        $username = 'root';
        $password = "homecoming96";
        $conn = new PDO("mysql:host=$servername;dbname=photon", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }

    public function resizeImage($image, $newSize){
      list($width, $height) = getimagesizefromstring($image);
      $new_width = $width*$newSize;
      $new_height = $height*$newSize;
      $origin = imagecreatefromstring($image);
      $image = imagescale($origin, $new_width, $new_height);
      ob_start();
      imagejpeg($image);
      $contents = ob_get_contents();
      ob_end_clean();
      return $contents;
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
      // $result =  $query->fetchAll();$post['perfilUsuario']
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
        $newImage = $this->resizeImage($post['perfilUsuario'], 0.1);
        $result[$key]['imagenContenido'] = base64_encode($post['imagenContenido']);
        $result[$key]['perfilUsuario'] = base64_encode($newImage);
        $idPub = $result[$key]['idContenido'];
        $connTarget = $this->connectToDB();
        $comments = $connTarget->prepare("CALL displayPublicacionesAmigos(:Pub)");
        $comments->bindParam(":Pub", $idPub);
        $comments->execute();
        $commentsResult = $comments->setFetchMode(PDO::FETCH_ASSOC);
        $commentsResult = $comments->fetchAll();
        foreach($commentsResult as $keyC => $commen){
          $newComment = $this->resizeImage($commen['FotoComentarista'], 0.1);
          $commentsResult[$keyC]['FotoComentarista'] = base64_encode($newComment);
        }
        $connTarget = null;
        if($post['username_canonical'] == $this->getUser()->getUsernameCanonical()){
          $own = true;
          $result[$key]['own'] = $own;
        }
        else{
          $own = false;
          $result[$key]['own'] = $own;
        }
        array_push($result[$key], $commentsResult);
      }
      $connTarget = $this->connectToDB();
      $notifications = $connTarget->prepare("CALL getNotificationUSer(:idUsuario)");
      $notifications->bindParam(":idUsuario", $id);
      $notifications->execute();
      $notifList = $notifications->setFetchMode(PDO::FETCH_ASSOC);
      $notifList = $notifications->fetchAll();
      return $this->render('PhotomBundle::Home.html.twig', array(
        "inicio" => $result,
        "friends" => $friendsList,
        'notifications' => $notifList
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
          // if($file_content == @imagecreatefromjpeg($foto) || $file_content == @imagecreatefrompng($foto) || $file_content == @imagecreatefromwbmp($foto)){
            $connTarget = $this->connectToDB();
            $query = $connTarget->prepare("CALL insertContent(:nombre, NULL, :descripcion, :imagen, :idUsuario)");
            $query->bindParam(':nombre', $titulo);
            $query->bindParam(':imagen', $file_content);
            $query->bindParam(':descripcion', $pieFoto);
            $query->bindParam(':idUsuario', $usuario);
            $query->execute();
            $connTarget = null;
          // }
        }
        elseif ($type == "video" || $type == "octet-stream") {
          $fotoName = md5(uniqid()).'.'.$foto->guessExtension();
          $foto->move($this->getParameter('videos_directorio'), $fotoName);
          $connTarget = $this->connectToDB();
          $query = $connTarget->prepare("CALL insertContent(:nombre, :video, :descripcion, NULL, :idUsuario)");
          $query->bindParam(':nombre', $titulo);
          $query->bindParam(':video', $fotoName);
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
      $query = $connTarget->prepare("CALL insertNOtification(:comentario, NULL, 0, :idContenido, :idUsuario)");
      $query->bindParam(':comentario', $comment);
      $query->bindParam(':idContenido', $idPub);
      $query->bindParam(':idUsuario', $usuario);
      $query->execute();
      $connTarget = null;
      $user = $this->getUser();
      $usuario = $user->getNombreusuario();
      $canonusuario = $user->getUsernameCanonical();
      $image = $user->getPerfilusuario();
      $image = stream_get_contents($image);
      $image = base64_encode($image);
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
      $query = $connTarget->prepare("CALL insertNOtification(NULL, 1, 0, :idContenido, :idUsuario)");
      $query->bindParam(':idContenido', $idPub);
      $query->bindParam(':idUsuario', $usuario);
      $query->execute();
      $connTarget = null;

      return new JsonResponse(array(
        "status"=> "ok"
      ));
    }

    /**
     * @Route("/delete/content")
     */
    public function deleteContentAction(Request $request){
      if($this->isGranted("ROLE_USER")){
        $idPub = $request->query->get('idPub');
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("CALL deleteContent(:pub)");
        $query->bindParam(':pub', $idPub);
        $query->execute();
        $connTarget = null;
        return new JsonResponse(array(
          "status"=> "ok"
        ));
      }
      else{
        return new Response('ERROR', Response::HTTP_ERROR);
      }
    }

    /**
     * @Route("/content/edit/publication")
     */
    public function contentEditAction(Request $request){
      $text = $request->request->get('newText');
      $idPub = $request->request->get("idPub");
      $image = $request->files->get('newImage');
      $type = explode("/", $image->getMimeType());
      $type = $type[0];
      if( $type == 'image' ){
        $connTarget = $this->connectToDB();
        $file_content = file_get_contents($image->getPathName());
        $query = $connTarget->prepare("CALL updateContent(:pub, :descripcion, :imagen, NULL)");
        $query->bindParam(':pub', $idPub);
        $query->bindParam(':descripcion', $text);
        $query->bindParam(':imagen', $file_content);
        $query->execute();
        $connTarget = null;
      }
      elseif ($tpye == 'video') {
        $fotoName = md5(uniqid()).'.'.$image->guessExtension();
        $image->move($this->getParameter('videos_directorio'), $fotoName);
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("CALL updateContent(:pub, :descripcion, NULL, :video)");
        $query->bindParam(':pub', $idPub);
        $query->bindParam(':descripcion', $text);
        $query->bindParam(':video', $image);
        $query->execute();
        $connTarget = null;
      }
      else{
        return new Response('ERROR', Response::HTTP_ERROR);
      }

      return $this->redirect("/perfil");
    }

    /**
     * @Route("/detail/content/{idPub}")
     */
    public function detailContentAction(Request $request, $idPub){
      $usuario = $this->getUser();
      $name = $usuario->getUsernameCanonical();
      $usuario = $usuario->getId();
      $idPub = intval($idPub);
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("CALL getDetail(:pub)");
      $query->bindParam(":pub", $idPub);
      $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result =  $query->fetchAll();
      $result[0]['imagenContenido'] = base64_encode($result[0]['imagenContenido']);
      $result[0]['perfilUsuario'] = base64_encode($result[0]['perfilUsuario']);
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("CALL displayPublicacionesAmigos(:pub)");
      $query->bindParam(":pub", $idPub);
      $query->execute();
      $resultComentarios = $query->setFetchMode(PDO::FETCH_ASSOC);
      $resultComentarios =  $query->fetchAll();
      $connTarget = null;
      foreach ($resultComentarios as $key => $value) {
        $resultComentarios[$key]['FotoComentarista'] = base64_encode($value['FotoComentarista']);
      }
      array_push($result[0], $resultComentarios);
      $result[0]['idContenido'] = $idPub;
      $result[0]['username_canonical'] = $name;
      $result[0]['own'] = true;
      $connTarget = $this->connectToDB();
      $notifications = $connTarget->prepare("CALL getNotificationUSer(:idUsuario)");
      $notifications->bindParam(":idUsuario", $id);
      $notifications->execute();
      $notifList = $notifications->setFetchMode(PDO::FETCH_ASSOC);
      $notifList = $notifications->fetchAll();
      return $this->render("PhotomBundle::DetailPost.html.twig", array(
        'inicio' => $result,

        'notifications' => $notifList
      ));
    }

    /**
     * @Route("/detail/content/{idNotif}/{idPub}")
     */
    public function detailContentReadAction(Request $request,$idNotif, $idPub){
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("CALL updateNotification(:pub)");
      $query->bindParam(":pub", $idNotif);
      $query->execute();
      return $this->redirect("/detail/content/".$idPub);
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
      $query = $connTarget->prepare("CALL followUser(:name, :id, @res)");
      $query->bindParam(":name", $seguido);
      $query->bindParam(":id", $usuario);
      $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result =  $query->fetchAll();
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
       $gender = $parameters->get("gender");
       $birthDate = $parameters->get("birthDate");
       $country = $parameters->get("country");
       $domicilio = $parameters->get("city");
       $work = $parameters->get("work");
       $email = $parameters->get("email");
       $about = $parameters->get("about");
       $privacy = $parameters->get("privacy");
       $connTarget = $this->connectToDB();
       $query = $connTarget->prepare("CALL updateUser(:usuario, :userName, :email, :name, :gender, :date, :home, :privacy, :about, :country) ");
       $query->bindParam(":usuario", $usuario);
       $query->bindParam(":userName", $userName);
       $query->bindParam(":name", $name);
       $query->bindParam(":email", $email);
       $query->bindParam(":gender", $gender);
       $query->bindParam(":date", $birthDate);
       $query->bindParam(":home", $domicilio);
       $query->bindParam(":privacy", $privacy);
       $query->bindParam(":about", $about);
       $query->bindParam(":country", $country);
       $query->execute();
       $connTarget = null;
      return new JsonResponse(array(
        'usuario' => $usuario,
        'title' => $title,
        'username' => $userName,
        'name' => $name,
        'birthDate' => $birthDate,
        'country' => $country,
        'domicilio' => $domicilio,
        'work' => $work,
        'email' => $email,
        'about' => $about,
        'gender' => $gender
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
         $query = $connTarget->prepare("CALL editProfileImage(:foto, :idUsuario)");
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
         $query = $connTarget->prepare("CALL editBanner(:foto, :idUsuario)");
         $query->bindParam(':foto', $file_content);
         $query->bindParam(':idUsuario', $id);
         $query->execute();
         $connTarget = null;
        }
       return $this->redirect("/perfil");
     }

     /**
     * @Route("/user/set/privacidad")
     */
     public function userSetPrivacidadAction(Request $request){
       $usuario = $this->getUser()->getId();
       $status = $request->query->get("status");
       $connTarget = $this->connectToDB();
       $query = $connTarget->prepare("CALL setPrivacy(:id, :status)");
       $query->bindParam(":id", $usuario);
       $query->bindParam(":status", $status);
       $query->execute();
       return new Response('OK', Response::HTTP_OK);
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
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("SELECT idPregunta, preguntaUno FROM getQuestionCatalog");
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        $onnTarget = null;
        foreach ($result as $key => $value) {
          $result[$key]['preguntaUno'] = utf8_encode($value['preguntaUno']);
        }
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("SELECT idPais, nombrePais FROM getPaises");
        $query->execute();
        $paises = $query->setFetchMode(PDO::FETCH_ASSOC);
        $paises =  $query->fetchAll();
        $onnTarget = null;
        return $this->render("PhotomBundle::CompletarRegistro.html.twig", array(
          'questions' => $result,
          'paises' => $paises
        ));
      }

      /**
      * @Route("/complete/registration/info")
      */
      public function completeRegisterAction(Request $request){
        $parameter = $request->request;
        $usuario = $this->getUser()->getId();
        $fecha = $parameter->get('fechaNacimiento');
        $domicilio = $parameter->get('domicilio');
        // $encoder_service = $this->get("security.encoder_factory");
        // $user = $this->getUser();
        // $encoder = $encoder_service->getEncoder($user);
        //
        // $encoded_pass = $encoder->encodePassword($domicilio, $user->getSalt());
        // $contra = 'contraeloy';
        // dump($domicilio);
        // dump($encoder->isPasswordValid($user->getPassword(), $domicilio, $user->getSalt()));
        // die();
        $descripcion = $parameter->get('descripcion');
        $privacidad = $parameter->get('privacidad');
        $pais = $parameter->get('pais');
        $preguntasRespondidas = array();
        for($i = 1; $i < 8; $i++){
          $numero = 'checkPregunta-'.$i;
          $pregunta = $parameter->get($numero);
          $texto = 'respuesta-'.$i;
          $respuesta = $parameter->get($texto);
          if($pregunta != NULL && $respuesta != NULL){
            $preguntasRespondidas[$pregunta] = $respuesta;
          }
        }
        $foto = $request->files->get('banner');
        $type = explode("/", $foto->getMimeType());
        $type = $type[0];
        if($type == "image"){
          $file_content = file_get_contents($foto->getPathName());
          $connTarget = $this->connectToDB();
          $query = $connTarget->prepare("CALL insertOtherData(:idUsuario, :fecha, :domicilio, :banner, :privacidad, :descripcion, :pais)");
          $query->bindParam(':idUsuario', $usuario);
          $query->bindParam(':fecha', $fecha);
          $query->bindParam(':domicilio', $domicilio);
          $query->bindParam(':banner', $file_content);
          $query->bindParam(':privacidad', $privacidad);
          $query->bindParam(':descripcion', $descripcion);
          $query->bindParam(':pais', $pais);
          $query->execute();
          $connTarget = $this->connectToDB();
          $query = $connTarget->prepare("CALL insertQuestions(:idUsuario, :respuesta, :idPregunta)");
          $query->bindParam(':idUsuario', $usuario);
          $query->bindParam(':respuesta', $respuesta);
          $query->bindParam(':idPregunta', $pregunta);
          foreach ($preguntasRespondidas as $key => $value) {
            $respuesta = $value;
            $pregunta = $key;
            $query->execute();
          }
          return $this->redirect("/perfil");
        }

      }

      /**
      * @Route("/recover/password")
      */
      public function recoverPasswordAction(){
        return $this->render("PhotomBundle::Recover.html.twig");
      }

      /**
      * @Route("/recover/password/getQuestions")
      */
      public function recoverPasswordQuestionsAction(Request $request){
        $user = $request->request->get("user");
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("CALL getQuestionsUser(:user)");
        $query->bindParam(":user", $user);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        foreach ($result as $key => $value) {
            $result[$key]['preguntaUno'] = utf8_encode($value['preguntaUno']);
        }
        if(count($result) > 0){
          return new JsonResponse(array(
            "questions" => $result
          ));
        }
        else {
          return new Response('ERROR', Response::HTTP_ERROR);
        }
      }

      /**
      * @Route("/update/password")
      */
      public function updatePassword(Request $request){
        $parameter = $request->request;
        $usuario = $parameter->get('usuario');
        $pregunta  = $parameter->get('pregunta');
        $respuesta = $parameter->get('respuesta'.$pregunta);
        $pass = $parameter->get('nuevaPass');
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("SELECT questionCorrect(:usuario, :respuesta, :pregunta) AS question");
        $query->bindParam(":usuario", $usuario);
        $query->bindParam(":respuesta", $respuesta);
        $query->bindParam(":pregunta", $pregunta);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        if($result[0]['question']){
          $user_manager = $this->get("fos_user.user_manager");
          $user  = $user_manager->findUserByUsername($usuario);
          $encoder_service = $this->get('security.encoder_factory');
          $encoder = $encoder_service->getEncoder($user);
          $encoded_pass = $encoder->encodePassword($pass, $user->getSalt());
          $connTarget = $this->connectToDB();
          $query = $connTarget->prepare("CALL updatePassword(:usuario, :password)");
          $query->bindParam(":usuario", $usuario);
          $query->bindParam(":password", $encoded_pass);
          $query->execute();
          return $this->redirect("/login");
        }
      }

     /**
      * @Route("/perfil")
      */
      public function perfilAction()
      {
        $usuario = $this->getUser()->getId();
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("CALL perfilCargar(:usuario)");
        $query->bindParam(":usuario", $usuario);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        $result[0]['perfilUsuario'] = base64_encode($result[0]['perfilUsuario']);
        $result[0]['bannerUsuario'] = base64_encode($result[0]['bannerUsuario']);
        $connTarget = null;
        $connTarget = $this->connectToDB();
        $querySeguidores = $connTarget->prepare("CALL getAllFriends(:idUsuario, 1)");
        $querySeguidores->bindParam(":idUsuario", $usuario);
        $querySeguidores->execute();
        $seguidores = $querySeguidores->setFetchMode(PDO::FETCH_ASSOC);
        $seguidores =  $querySeguidores->fetchAll();
        $connTarget = null;
        foreach ($seguidores as $key => $value) {
          $seguidores[$key]['perfilUsuario'] = base64_encode($value['perfilUsuario']);
        }
        $connTarget = $this->connectToDB();
        $querySeguidos = $connTarget->prepare("CALL getSeguidos(:idUsuario)");
        $querySeguidos->bindParam(":idUsuario", $usuario);
        $querySeguidos->execute();
        $seguidos = $querySeguidos->setFetchMode(PDO::FETCH_ASSOC);
        $seguidos =  $querySeguidos->fetchAll();
        $connTarget = null;
        foreach ($seguidos as $key => $value) {
          $seguidos[$key]['perfilUsuario'] = base64_encode($value['perfilUsuario']);
        }

        $connTarget = $this->connectToDB();
        $queryPublicaciones = $connTarget->prepare("CALL getPublicationsPropia(:idUsuario)");
        $queryPublicaciones->bindParam(":idUsuario", $usuario);
        $queryPublicaciones->execute();
        $publicaciones = $queryPublicaciones->setFetchMode(PDO::FETCH_ASSOC);
        $publicaciones =  $queryPublicaciones->fetchAll();
        $connTarget = null;
        foreach ($publicaciones as $key => $value) {
          // $newPostImage = $this->resizeImage($value['perfilUsuario'],0.3);
          $publicaciones[$key]['perfilUsuario'] = base64_encode($value['perfilUsuario']);
          $publicaciones[$key]['imagenContenido'] = base64_encode($value['imagenContenido']);
          if($value['username_canonical'] == $this->getUser()->getUsernameCanonical()){
            $own = true;
            $publicaciones[$key]['own'] = $own;
          }
          else{
            $own = false;
            $publicaciones[$key]['own'] = $own;
          }
        }
        $connTarget = $this->connectToDB();
        $queryPaises = $connTarget->prepare("SELECT idPais, nombrePais FROM getPaises");
        $queryPaises->execute();
        $paises = $queryPaises->setFetchMode(PDO::FETCH_ASSOC);
        $paises =  $queryPaises->fetchAll();
        $connTarget = null;
        $connTarget = $this->connectToDB();
        $notifications = $connTarget->prepare("CALL getNotificationUSer(:idUsuario)");
        $notifications->bindParam(":idUsuario", $id);
        $notifications->execute();
        $notifList = $notifications->setFetchMode(PDO::FETCH_ASSOC);
        $notifList = $notifications->fetchAll();
        return $this->render('PhotomBundle::Profile.html.twig',
          array(
            'usuario'=> $result[0],
            'editable' => true,
            'seguidores' => $seguidores,
            'seguidos' => $seguidos,
            'publicaciones' => $publicaciones,
            'paises' => $paises,
            'notifications' => $notifList
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
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("CALL getProfileAdmin()");
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetchAll();
        dump($result);
        return $this->render('PhotomBundle::HomeAdmin.html.twig', array(
          'reportes' => $result
        ));
     }

     /**
      * @Route("/profile/")
      */
      public function profileAction()
      {
        return $this->redirect('/complete/registration/info');
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
        $query = $connTarget->prepare("CALL reportUser(:usuarioReportador, :razon, :contenido, '')");
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
        $query = $connTarget->prepare("SELECT idRazon, nombreRazon, descripcionRazon FROM getRazones;");
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
        $fechaIni = '2016-01-01';
        $fechaFin = '2016-01-01';
        $fechaIniTemp = $request->query->get('fechaIni');
        $fechaFinTemp = $request->query->get('fechaFin');
        $filtroFecha = 0;
        if($fechaIniTemp != NULL){
          $fechaIni = $fechaIniTemp;
        }
        if($fechaFinTemp != NULL){
          $fechaFin = $fechaFinTemp;
          $filtroFecha= 1;
        }
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
        $queryPosts = $connTarget->prepare("CALL findContent(:search, :filtro, :fechaIn, :fechaFi)");
        $queryPosts->bindParam(":search", $search);
        $queryPosts->bindParam(":filtro", $filtroFecha);
        $queryPosts->bindParam(":fechaIn", $fechaIni);
        $queryPosts->bindParam(":fechaFi", $fechaFin);
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
          if($post['username_canonical'] == $this->getUser()->getUsernameCanonical()){
            $own = true;
            $resultPosts[$key]['own'] = $own;
          }
          else{
            $own = false;
            $resultPosts[$key]['own'] = $own;
          }
          array_push($resultPosts[$key], $commentsResult);
        }
        return $this->render('PhotomBundle::Search.html.twig', array(
          'usuarios' => $resultUsers,
          'posts' => $resultPosts
        ));
      }

      /**
      * @Route("/get/notifications")
      */
      public function getNotificationsAction(Request $request){
        $usuario = $this->getuser()->getId();
        $connTarget = $this->connectToDB();
        $usuario = $this->getUser()->getId();
        $query = $connTarget->prepare("CALL getNotificationUser(:user)");
        $query->bindParam(":user", $usuario);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();
        $session = $this->get('session');
        if($session->get('notifId')){
          if($session->get('notifId') != end($result)['idNotificacion']){
            $this->get('session')->set('notifId', end($result)['idNotificacion']);
            end($result)['perfilUsuario'] = base64_encode(end($result)['perfilUsuario']);
            end($result)['username'] = utf8_encode(end($result)['username']);
            end($result)['username_canonical'] = utf8_encode(end($result)['username_canonical']);
            end($result)['nombreUsuario'] = utf8_encode(end($result)['nombreUsuario']);
            end($result)['comentarioNotificacion'] = utf8_encode(end($result)['comentarioNotificacion']);
            return new JsonResponse(array(
              'user' => end($result)['username'],
              'username_canonical' => end($result)['username_canonical'],
              'nombreUsuario' => end($result)['nombreUsuario'],
              'idContenidoNotificacion' => end($result)['idContenidoNotificacion'],
              'comentarioNotificacion' => end($result)['comentarioNotificacion'],
              'gustaNotificacion' => end($result)['gustaNotificacion'],
              'id' => end($result)['idNotificacion']
            ));
          }
          else{
            return new Response('ERROR', Response::HTTP_NOT_FOUND);
          }
        }
        else{
          $this->get('session')->set('notifId', end($result)['idNotificacion']);
          return new Response('ERROR', Response::HTTP_NOT_FOUND);
        }

      }

      //ADMIN

      /**
      * @Route("/admin/set/block")
      */
      public function setBlockUser(Request $request){
        $parameters = $request->request;
        $dateFin = $parameters->get('date');
        $comentario = $parameters->get('comentario');
        $reporte = $parameters->get('idReporte');
        $reportado = $parameters->get('idUsuarioReporte');
        $connTarget = $this->connectToDB();
        $query = $connTarget->prepare("CALL blockUser(:reporte, :usuarioReportado, :comentario, :tiempo)");
        $query->bindParam(":reporte", $reporte);
        $query->bindParam(":usuarioReportado", $reportado);
        $query->bindParam(":comentario", $comentario);
        $query->bindParam(":tiempo", $dateFin);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $query->fetchAll();

        return $this->redirect("/admin");
      }
}
