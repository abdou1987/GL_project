<?php

namespace abd\helloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $em=$this->container->get('doctrine')->getEntityManager();
      
        $userss= $em->getRepository('abd\helloBundle\Entity\users')->findAll();

       return $this->render('abdhelloBundle:Default:index.html.twig', array('userss'=>$userss));
       //return $this->render('abdhelloBundle:Default:index.html.twig');
    }
}
