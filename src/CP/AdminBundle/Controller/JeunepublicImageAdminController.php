<?php

namespace CP\AdminBundle\Controller;

use CP\AdminBundle\Form\Type\JeunepublicImageLongAdminType;
use CP\CPBundle\Entity\JeunepublicImage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\JeunepublicImageAdminType;

class JeunepublicImageAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublicImages = $em->getRepository('CPBundle:JeunepublicImage')->findAll();

        if ($jeunepublicImages)
        {
            return $this->render('AdminBundle:JeunepublicImageAdmin:index.html.twig', array('jeunepublicimages' => $jeunepublicImages));
        }
        return $this->render('AdminBundle:JeunepublicImageAdmin:index.html.twig', array('jeunepublicimages' => null));
    }


    public function addAction (Request $request)
    {
        $jeunepublicImage = new JeunepublicImage();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new JeunepublicImageAdminType(), $jeunepublicImage);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($jeunepublicImage);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_jeunepublicimages'));
        }

        return $this->render('AdminBundle:JeunepublicImageAdmin:add.html.twig', array(
            'form'      =>  $form->createView(),
        ));
    }

    public function editAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublicImage = $em->getRepository('CPBundle:JeunepublicImage')->find($id);

        $form = $this->get('form.factory')->create(new JeunepublicImageAdminType(), $jeunepublicImage );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jeunepublicImage);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_jeunepublicimages'));
        }


        return $this->render('AdminBundle:JeunepublicImageAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'jeunepublicImage'  => $jeunepublicImage
        ));
    }


    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublicImage = $em->getRepository('CPBundle:JeunepublicImage')->find($id);

        if(!$jeunepublicImage)
        {
            throw $this->createNotFoundException('No player found');
        }
        $em = $this->getDoctrine()->getManager();


        $em->flush();

        $em->remove($jeunepublicImage);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_jeunepublicimages'));
    }


}
