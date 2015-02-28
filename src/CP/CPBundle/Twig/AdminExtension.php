<?php

namespace CP\CPBundle\Twig;

class AdminExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('prix', array($this, 'prixFilter')),
            new \Twig_SimpleFilter('mois', array($this, 'moisFilter')),
        );
    }


    public function prixFilter($prix)
    {
        if ( $prix != 0)
            $result = $prix . " €";
        else
            $result ="Entrée libre";

        return $result;
    }

    public function moisFilter($mois)
    {
        if ( $mois == 1)
            $result = "Janvier";
        if ( $mois == 2)
            $result = "Février";
        if ( $mois == 3)
            $result = "Mars";
        if ( $mois == 4)
            $result = "Avril";
        if ( $mois == 5)
            $result = "Mai";
        if ( $mois == 6)
            $result = "Juin";
        if ( $mois == 7)
            $result = "Juillet";
        if ( $mois == 8)
            $result = "Aout";
        if ( $mois == 9)
            $result = "Septembre";
        if ( $mois == 10)
            $result = "Octobre";
        if ( $mois == 11)
            $result = "Novembre";
        if ( $mois == 12)
            $result = "Décembrer";


        return $result;
    }


    public function getName()
    {
     return 'admin_extension';
    }
}