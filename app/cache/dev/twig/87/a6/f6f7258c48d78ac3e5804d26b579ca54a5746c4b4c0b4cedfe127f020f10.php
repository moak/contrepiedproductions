<?php

/* CPBundle:Default:menu.html.twig */
class __TwigTemplate_87a6f6f7258c48d78ac3e5804d26b579ca54a5746c4b4c0b4cedfe127f020f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"brand\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "title", array()), "html", null, true);
        echo "</div>
<div class=\"address-bar\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "titleSecond", array()), "html", null, true);
        echo "</div>

<!-- Navigation -->
<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("cp_homepage");
        echo "\">Contrepied Prod</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("cp_homepage");
        echo "\">Home</a>
                </li>
                <li>
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("cp_spectacles");
        echo "\">Spectacles</a>
                </li>
                <li>
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("cp_jeunepublics");
        echo "\">Jeune public</a>
                </li>
                <li>
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("cp_agenda");
        echo "\">Agenda</a>
                </li>
                <li>
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("cp_produits");
        echo "\">Boutique</a>
                </li>
                <li>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("cp_contact");
        echo "\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "CPBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  74 => 34,  68 => 31,  62 => 28,  56 => 25,  50 => 22,  41 => 16,  24 => 2,  19 => 1,);
    }
}
