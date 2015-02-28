<?php

namespace CP\AdminBundle\Controller;

use CP\CPBundle\Entity\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\ApplicationAdminType;

class ApplicationAdminController extends Controller
{

    public function editAction (Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $application = $em->getRepository('CPBundle:Application')->find(1);

        $form = $this->get('form.factory')->create(new ApplicationAdminType(), $application );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($application);
            $em->flush();
            return $this->redirect($this->generateUrl('admin'));
        }

        return $this->render('AdminBundle:ApplicationAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'application'  => $application
        ));
    }


}
