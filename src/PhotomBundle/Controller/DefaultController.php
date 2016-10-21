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
        $password = "";
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
      $query = $connTarget->prepare("SELECT idUsuarioContenido, imagenContenido, descripcioncontenido FROM Contenido ORDER BY idContenido DESC");
      $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result =  $query->fetchAll();
      foreach ($result as $key => $post) {
        $result[$key]['imagenContenido'] = base64_encode($post['imagenContenido']);
      }
      return $this->render('PhotomBundle::Home.html.twig', array("inicio" => $result));
    }

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

        // $fotoName  = md5(uniqid()).'.'.$foto->guessExtension();
        // $foto->move($this->getParameter('foto_directorio'), $fotoName);

        dump($foto->getMimeType());
        die();
        return $this->redirect('/');
    }

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
      return new JsonResponse(array(
        'status' => 1,
      ));
    }

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
         if( $this->getUser()->getId() == $result[0]['id']){
           return $this->redirect('/perfil');
         }
         dump($result);
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
}
