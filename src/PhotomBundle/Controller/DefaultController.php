<?php

namespace PhotomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
      $photon = "hola mundo";
      // $conn =$this->get('database_connection');;
      // $queryBuilder = $conn->createQueryBuilder();
      $connTarget = $this->connectToDB();
      $query = $connTarget->prepare("SELECT idUsuarioContenido, imagenContenido, descripcioncontenido FROM Contenido");
      $query->execute();
      $result = $query->setFetchMode(PDO::FETCH_ASSOC);
      $result =  $query->fetchAll();
      foreach ($result as $key => $post) {
        $result[$key]['imagenContenido'] = base64_encode($post['imagenContenido']);
      }

      // $queryBuilder->select('imagencontenido, descripcionContenido, nombreDueño');
      //             ->from('Contenido', 'C';
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
        // $conn =$this->get('database_connection');;
        // $queryBuilder = $conn->createQueryBuilder();
        // $queryBuilder->insert('Contenido')
        //     ->setValue("nombreContenido", '?')
        //     ->setValue("imagenContenido", '?')
        //     ->setValue("descripcionContenido", '?')
        //     ->setValue("idUsuarioContenido", '?')
        //     ->setParameter(0, "Publicacion 1")
        //     ->setParameter(1, $file_content)
        //     ->setParameter(2, $pieFoto)
        //     ->setParameter(3, $usuario->getId())
        // ;
        // $query = $queryBuilder->execute();
        return $this->redirect('/');
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
        return $this->render('PhotomBundle::Profile.html.twig', array('usuario'=> $result[0]));
      }

      /**
       * @Route("/perfil/{visitado}")
       */
       public function perfilVisitaAction($visitado)
       {
         return $this->render('PhotomBundle::Profile.html.twig');
       }

      /**
       * @Route("/admin")
       */
       public function homeAdminAction()
       {
         return $this->render('PhotomBundle::HomeAdmin.html.twig');
       }
}
