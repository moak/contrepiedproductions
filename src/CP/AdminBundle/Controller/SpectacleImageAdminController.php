<?php

namespace CP\AdminBundle\Controller;

use CP\AdminBundle\Form\Type\SpectacleImageLongAdminType;
use CP\CPBundle\Entity\SpectacleImage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\SpectacleImageAdminType;

class SpectacleImageAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $spectacleImages = $em->getRepository('CPBundle:SpectacleImage')->findAll();

        if ($spectacleImages)
        {
            return $this->render('AdminBundle:SpectacleImageAdmin:index.html.twig', array('spectacleimages' => $spectacleImages));
        }
        return $this->render('AdminBundle:SpectacleImageAdmin:index.html.twig', array('spectacleimages' => null));
    }


    public function addAction (Request $request)
    {
        $spectacleImage = new SpectacleImage();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new SpectacleImageAdminType(), $spectacleImage);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($spectacleImage);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_spectacleimages'));
        }

        return $this->render('AdminBundle:SpectacleImageAdmin:add.html.twig', array(
            'form'      =>  $form->createView(),
        ));
    }

    public function editAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $spectacleImage = $em->getRepository('CPBundle:SpectacleImage')->find($id);

        $form = $this->get('form.factory')->create(new SpectacleImageAdminType(), $spectacleImage );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($spectacleImage);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_spectacleimages'));
        }


        return $this->render('AdminBundle:SpectacleImageAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'spectacleImage'  => $spectacleImage
        ));
    }


    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $spectacleImage = $em->getRepository('CPBundle:SpectacleImage')->find($id);

        if(!$spectacleImage)
        {
            throw $this->createNotFoundException('No player found');
        }
        $em = $this->getDoctrine()->getManager();


        $em->flush();

        $em->remove($spectacleImage);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_spectacleimages'));
    }


}
