<?php

namespace CP\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\CPBundle\Form\Type\ContactType;

class JeunepublicController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $representations = $em->getRepository('CPBundle:Jeunepublic')->findBy(array('published' => '1'));

        return $this->render('CPBundle:JeunePublic:index.html.twig', array('representations'=> $representations));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $jeunepublic = $em->getRepository('CPBundle:Jeunepublic')->find($id);
        $jeunepublicimages = $em->getRepository('CPBundle:JeunepublicImage')->findByJeunepublic($id);

        if ($jeunepublic)
        {
            $jeunepublic->setVideo1($this->convertYoutube($jeunepublic->getVideo1()));
            $jeunepublic->setVideo2($this->convertYoutube($jeunepublic->getVideo2()));
            $jeunepublic->setVideo3($this->convertYoutube($jeunepublic->getVideo3()));

            return $this->render('CPBundle:Jeunepublic:view.html.twig', array('jeunepublic' => $jeunepublic, 'jeunepublicImages' => $jeunepublicimages));
        }
        return $this->render('CPBundle:Jeunepublic:view.html.twig', array('jeunepublic' => null, 'jeunepublicImages' => null));
    }

    public function convertYoutube($string) {
        return preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe width='100%' height='200' src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
            $string
        );
    }

}
