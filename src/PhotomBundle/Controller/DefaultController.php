<?php

namespace PhotomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\FileBag;
use PhotomBundle\Entity\Contenido;
use \PDO;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        dump($this->getUser()->getId());
        $photon = "hola a todos";
        // $conn =$this->get('database_connection');;
        // $users = $conn->fetchAll("SELECT * FROM Usuario");
        // dump($users);
        // die();
        return $this->render('PhotomBundle::Home.html.twig', array("photon" => $photon));
    }

    /**
     * @Route("/content/new/upload")
     */
    public function uploadAction(Request $request)
    {
        $usuario = $this->getUser();
        $pieFoto = $request->request->get('pieDeFoto');
        $foto = $request->files->get('foto');
        $file_content = file_get_contents($foto->getPathName());

        $publicacion = new Contenido();
        $publicacion->setNombrecontenido("Publicacion 1");
        $publicacion->setImagencontenido($file_content);
        $publicacion->setDescripcioncontenido($pieFoto);
        $publicacion->setIdusuariocontenido($usuario);
        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($publicacion);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();


        die();
        // $conn =$this->get('database_connection');;
        // $users = $conn->fetchAll("SELECT * FROM Usuario");
        // dump($users);
        // die();
        return $this->redirect('/probando-forms/',$foto);
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
