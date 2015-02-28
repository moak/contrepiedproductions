<?php

namespace CP\AdminBundle\Controller;

use CP\AdminBundle\Form\Type\JeunepublicLongAdminType;
use CP\CPBundle\Entity\Jeunepublic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\JeunepublicAdminType;

class JeunepublicAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublics = $em->getRepository('CPBundle:Jeunepublic')->findAll();

        if ($jeunepublics)
        {
            return $this->render('AdminBundle:JeunepublicAdmin:index.html.twig', array('jeunepublics' => $jeunepublics));
        }
        return $this->render('AdminBundle:JeunepublicAdmin:index.html.twig', array('jeunepublics' => null));
    }




    public function addAction (Request $request)
    {
        $jeunepublic = new Jeunepublic();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new JeunepublicAdminType(), $jeunepublic);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($jeunepublic);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_jeunepublics'));
        }

        return $this->render('AdminBundle:JeunepublicAdmin:add.html.twig', array(
            'form'      =>  $form->createView(),
        ));
    }

    public function editAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublic = $em->getRepository('CPBundle:Jeunepublic')->find($id);

        $form = $this->get('form.factory')->create(new JeunepublicAdminType(), $jeunepublic );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jeunepublic);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_jeunepublics'));
        }


        return $this->render('AdminBundle:JeunepublicAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'jeunepublic'  => $jeunepublic
        ));
    }


    public function editLongAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublic = $em->getRepository('CPBundle:Jeunepublic')->find($id);

        $form = $this->get('form.factory')->create(new JeunepublicLongAdminType(), $jeunepublic );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jeunepublic);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_jeunepublics'));
        }


        return $this->render('AdminBundle:JeunepublicAdmin:editLong.html.twig', array(
            'form'      =>  $form->createView(),
            'jeunepublic'  => $jeunepublic
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublic = $em->getRepository('CPBundle:Jeunepublic')->find($id);

        if(!$jeunepublic)
        {
            throw $this->createNotFoundException('No player found');
        }
        $em = $this->getDoctrine()->getManager();
        $application = $em->getRepository('CPBundle:Application')->find(1);

        $application->setJeunepublic(null);
        $em->flush();

        $em->remove($jeunepublic);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_jeunepublics'));
    }


}
