<?php

namespace CP\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\CPBundle\Form\Type\NewsletterType;
use CP\CPBundle\Form\Type\EnquiryType;
use CP\CPBundle\Entity\Enquiry;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $slides = $em->getRepository('CPBundle:Slide')->findAll();
        $application = $em->getRepository('CPBundle:Application')->find(1);
        return $this->render('CPBundle:Default:index.html.twig', array('slides' => $slides, 'application' => $application));
    }


    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $application = $em->getRepository('CPBundle:Application')->find(1);
        return $this->render('CPBundle:Default:menu.html.twig', array('application' => $application));
    }

    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $mailer = $this->get('mailer');
                $message = $mailer->createMessage()
                    ->setSubject($enquiry->getSubject())
                    ->setFrom($enquiry->getEmail())
                    ->setTo('contrepiedproductions@gmail.com.com')
                    ->setBody($enquiry->getBody())
                ;
                $mailer->send($message);

                return $this->redirect($this->generateUrl('cp_homepage'));
            }
        }
       return $this->render('CPBundle:Default:contact.html.twig', array(
           'form'      =>  $form->createView(),

       ));

    }


    public function newsletterAction(Request $request)
    {
        $form = $this->createForm(new NewsletterType());

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {

                return $this->redirect($this->generateUrl('cp_homepage'));
            }
        }
        return $this->render('CPBundle:Default:newsletter.html.twig', array(
            'form'      =>  $form->createView(),
        ));

    }
}
