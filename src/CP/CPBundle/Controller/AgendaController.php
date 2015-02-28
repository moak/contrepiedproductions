<?php

namespace CP\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgendaController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agendas = $em->getRepository('CPBundle:Agenda')->getAgenda();

        return $this->render('CPBundle:Agenda:index.html.twig', array('agendas'=> $agendas));
    }
}
