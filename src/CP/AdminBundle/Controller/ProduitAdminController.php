<?php

namespace CP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CP\AdminBundle\Form\Type\ProduitAdminType;
use CP\CPBundle\Entity\Produit;

class ProduitAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('CPBundle:Produit')->findAll();

        if ($produits)
        {
            return $this->render('AdminBundle:ProduitAdmin:index.html.twig', array('produits' => $produits));
        }
        return $this->render('AdminBundle:ProduitAdmin:index.html.twig', array('produits' => null));
    }

    public function addAction (Request $request)
    {
        $produit = new Produit();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new ProduitAdminType(), $produit);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($produit);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_produits'));
        }

        return $this->render('AdminBundle:ProduitAdmin:add.html.twig', array(
            'form'      =>  $form->createView(),
        ));
    }

    public function editAction ($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('CPBundle:Produit')->find($id);

        $form = $this->get('form.factory')->create(new ProduitAdminType(), $produit );

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_produits'));
        }

        return $this->render('AdminBundle:ProduitAdmin:edit.html.twig', array(
            'form'      =>  $form->createView(),
            'spectacle'  => $produit
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('CPBundle:Produit')->find($id);

        if(!$produit)
        {
            throw $this->createNotFoundException('No produit found');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_produits'));
    }


}
