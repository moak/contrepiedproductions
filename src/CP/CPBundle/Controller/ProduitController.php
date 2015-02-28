<?php

namespace CP\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CPBundle:Produit')->findAll();

        if ($produits)
        {
            return $this->render('CPBundle:Produit:index.html.twig', array('produits'=> $produits));
        }
        return $this->render('CPBundle:Produit:index.html.twig', array('produits'=> null));
    }

    public function produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('CPBundle:Produit')->find($id);

        if ($produit)
        {
            return $this->render('CPBundle:Produit:produit.html.twig', array('produit'=> $produit));
        }
        return $this->render('CPBundle:Produit:produit.html.twig', array('produit'=> null));
    }
}
