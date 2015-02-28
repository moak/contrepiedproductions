<?php

namespace CP\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\CPBundle\Form\Type\ContactType;

class SpectacleController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $representations = $em->getRepository('CPBundle:Spectacle')->findAll();

        return $this->render('CPBundle:Spectacle:index.html.twig', array('representations'=> $representations));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $spectacle = $em->getRepository('CPBundle:Spectacle')->find($id);
        $spectacleimages = $em->getRepository('CPBundle:SpectacleImage')->findBySpectacle($id);
        if ($spectacle)
        {
            $spectacle->setVideo1($this->convertYoutube($spectacle->getVideo1()));
            $spectacle->setVideo2($this->convertYoutube($spectacle->getVideo2()));
            $spectacle->setVideo3($this->convertYoutube($spectacle->getVideo3()));

            return $this->render('CPBundle:Spectacle:view.html.twig', array('spectacleImages' => $spectacleimages, 'spectacle' => $spectacle));
        }
        return $this->render('CPBundle:Spectacle:view.html.twig', array('spectacle' => null));
    }


    public function convertYoutube($string) {
        return preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe width='100%' height='200' src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
            $string
        );
    }


}
