<?php

namespace CP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\SlideAdminType;
use CP\CPBundle\Entity\Slide;

class SlideAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $slides = $em->getRepository('CPBundle:Slide')->findAll();

        if ($slides)
        {
            return $this->render('AdminBundle:SlideAdmin:index.html.twig', array('slides' => $slides));
        }
        return $this->render('AdminBundle:SlideAdmin:index.html.twig', array('slides' => null));
    }

    public function addAction (Request $request)
    {
        $slide = new Slide();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new SlideAdminType(), $slide);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($slide);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_slides'));
        }

        return $this->render('AdminBundle:SlideAdmin:add.html.twig', array(
            'form'      =>  $form->createView(),
        ));
    }

    public function editAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $slide = $em->getRepository('CPBundle:Slide')->find($id);

        $form = $this->get('form.factory')->create(new SlideAdminType(), $slide );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slide);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_slides'));
        }

        return $this->render('AdminBundle:SlideAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'slide'  => $slide
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $slide = $em->getRepository('CPBundle:Slide')->find($id);

        if(!$slide)
        {
            throw $this->createNotFoundException('No player found');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($slide);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_slides'));
    }


}
