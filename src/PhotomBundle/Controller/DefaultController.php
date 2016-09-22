<?php

namespace PhotomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $photon = "hola a todos";
        return $this->render('PhotomBundle:Default:index.html.twig', array("photon" => $photon));
    }
}
