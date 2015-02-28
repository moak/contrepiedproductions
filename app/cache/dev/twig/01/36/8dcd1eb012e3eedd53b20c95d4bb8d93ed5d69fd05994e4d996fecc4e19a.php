<?php

/* AdminBundle:Default:menu.html.twig */
class __TwigTemplate_01368dcd1eb012e3eedd53b20c95d4bb8d93ed5d69fd05994e4d996fecc4e19a extends Twig_Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"\">Administration </a>
    </div>
    <!-- /.navbar-header -->

    <ul class=\"nav navbar-top-links navbar-right\">


        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i>  Déconnection</a>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">

                <li>
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                </li>

                <li>
                    <a target=\"_blank\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("cp_homepage");
        echo "\"><i class=\"fa fa-arrow-circle-right fa-fw\"></i> Aller sur le site</a>
                </li>

                <li>
                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_application");
        echo "\"><i class=\"fa fa-bicycle fa-fw\"></i> Général</a>
                </li>

                <li>
                    <a href=\"#\"><span class=\"badge\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["numberSlides"]) ? $context["numberSlides"] : $this->getContext($context, "numberSlides")), "html", null, true);
        echo "</span> Slider <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("admin_slides");
        echo "\">Liste des slides</a>
                        </li>

                        <li>
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("admin_slide_add");
        echo "\">Ajouter un slide</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>


                <li>
                    <a href=\"#\"><span class=\"badge\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["numberSpectacles"]) ? $context["numberSpectacles"] : $this->getContext($context, "numberSpectacles")), "html", null, true);
        echo "</span> Spectacles <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("admin_spectacles");
        echo "\">Liste des spectacle</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_spectacleimages");
        echo "\">Images des spectacles</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("admin_spectacle_add");
        echo "\">Ajouter un spectacle</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>


                <li>
                    <a href=\"#\"><span class=\"badge\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["numberJeunepublics"]) ? $context["numberJeunepublics"] : $this->getContext($context, "numberJeunepublics")), "html", null, true);
        echo "</span> Jeune public <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("admin_jeunepublics");
        echo "\">Liste des jeune public</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("admin_jeunepublics");
        echo "\">Images des jeunes publics</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("admin_jeunepublic_add");
        echo "\">Ajouter un jeune public</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href=\"#\"><span class=\"badge\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["numberAgendas"]) ? $context["numberAgendas"] : $this->getContext($context, "numberAgendas")), "html", null, true);
        echo "</span> Agenda <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("admin_agendas");
        echo "\">Consulter agenda</a>
                        </li>

                        <li>
                            <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("admin_agenda_add");
        echo "\">Ajouter une date</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href=\"#\"><span class=\"badge\">";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["numberArticles"]) ? $context["numberArticles"] : $this->getContext($context, "numberArticles")), "html", null, true);
        echo "</span> Boutique <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("admin_produits");
        echo "\">Liste des produits</a>
                        </li>

                        <li>
                            <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("admin_produit_add");
        echo "\">Ajouter un produit</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 116,  189 => 112,  183 => 109,  173 => 102,  166 => 98,  160 => 95,  150 => 88,  144 => 85,  138 => 82,  132 => 79,  121 => 71,  115 => 68,  109 => 65,  103 => 62,  92 => 54,  85 => 50,  79 => 47,  72 => 43,  65 => 39,  58 => 35,  42 => 22,  19 => 1,);
    }
}
