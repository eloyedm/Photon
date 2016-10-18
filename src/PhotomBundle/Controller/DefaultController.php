<?php

namespace PhotomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \PDO;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $photon = "hola a todos";
        // $conn =$this->get('database_connection');;
        // $users = $conn->fetchAll("SELECT * FROM Usuario");
        // dump($users);
        // die();
        return $this->render('PhotomBundle::Home.html.twig', array("photon" => $photon));
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
}
