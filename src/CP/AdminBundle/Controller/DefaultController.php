<?php

namespace CP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }


    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $numberSpectacles = $em->getRepository('CPBundle:Spectacle')->getNumberEntities();
        $numberAgendas = $em->getRepository('CPBundle:Agenda')->getNumberEntities();
        $numberJeunepublics = $em->getRepository('CPBundle:Jeunepublic')->getNumberEntities();
        $numberSlides = $em->getRepository('CPBundle:Slide')->getNumberEntities();
        $numberArticles = $em->getRepository('CPBundle:Produit')->getNumberEntities();

        return $this->render('AdminBundle:Default:menu.html.twig', array ('numberSpectacles' => $numberSpectacles, 'numberArticles' => $numberArticles, 'numberJeunepublics' => $numberJeunepublics,'numberAgendas' => $numberAgendas,'numberSlides' => $numberSlides));
    }
}
