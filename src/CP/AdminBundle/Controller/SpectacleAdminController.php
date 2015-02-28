<?php

namespace CP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\SpectacleAdminType;
use CP\AdminBundle\Form\Type\SpectacleLongAdminType;
use CP\CPBundle\Entity\Spectacle;

class SpectacleAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $spectacles = $em->getRepository('CPBundle:Spectacle')->findAll();

        if ($spectacles)
        {
            return $this->render('AdminBundle:SpectacleAdmin:index.html.twig', array('spectacles' => $spectacles));
        }
        return $this->render('AdminBundle:SpectacleAdmin:index.html.twig', array('spectacles' => null));
    }

    public function addAction (Request $request)
    {
        $spectacle = new Spectacle();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new SpectacleAdminType(), $spectacle);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($spectacle);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_spectacles'));
        }

        return $this->render('AdminBundle:SpectacleAdmin:add.html.twig', array(
            'form'      =>  $form->createView(),
        ));
    }

    public function editAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $spectacle = $em->getRepository('CPBundle:Spectacle')->find($id);

        $form = $this->get('form.factory')->create(new SpectacleAdminType(), $spectacle );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($spectacle);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_spectacles'));
        }

        return $this->render('AdminBundle:SpectacleAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'spectacle'  => $spectacle
        ));
    }

    public function editLongAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $spectacle = $em->getRepository('CPBundle:Spectacle')->find($id);

        $form = $this->get('form.factory')->create(new SpectacleLongAdminType(), $spectacle );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($spectacle);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_spectacles'));
        }


        return $this->render('AdminBundle:SpectacleAdmin:editLong.html.twig', array(
            'form'      =>  $form->createView(),
            'spectacle'  => $spectacle
        ));
    }



    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $spectacle = $em->getRepository('CPBundle:Spectacle')->find($id);

        if(!$spectacle)
        {
            throw $this->createNotFoundException('No player found');
        }
        $em = $this->getDoctrine()->getManager();

        $application = $em->getRepository('CPBundle:Application')->find(1);

        $application->setSpectacle(null);
        $em->flush();
        $em->remove($spectacle);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_spectacles'));
    }


}
