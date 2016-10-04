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
        return $this->render('PhotomBundle:Default:index.html.twig', array("photon" => $photon));
    }
}
