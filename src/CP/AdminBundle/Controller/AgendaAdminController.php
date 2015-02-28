<?php

namespace CP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\AgendaAdminType;
use CP\CPBundle\Entity\Agenda;

class AgendaAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agendas = $em->getRepository('CPBundle:Agenda')->findAll();

        if ($agendas)
        {
            return $this->render('AdminBundle:AgendaAdmin:index.html.twig', array('agendas' => $agendas));
        }
        return $this->render('AdminBundle:AgendaAdmin:index.html.twig', array('agendas' => null));
    }

    public function addAction (Request $request)
    {
        $agenda = new Agenda();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new AgendaAdminType(), $agenda);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($agenda);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_agendas'));
        }

        return $this->render('AdminBundle:AgendaAdmin:add.html.twig', array(
            'form'      =>  $form->createView(),
        ));
    }

    public function editAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository('CPBundle:Agenda')->find($id);

        $form = $this->get('form.factory')->create(new AgendaAdminType(), $agenda );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agenda);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_agendas'));
        }

        return $this->render('AdminBundle:AgendaAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'agenda'  => $agenda
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository('CPBundle:Agenda')->find($id);

        if(!$agenda)
        {
            throw $this->createNotFoundException('No player found');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($agenda);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_agendas'));
    }


}
