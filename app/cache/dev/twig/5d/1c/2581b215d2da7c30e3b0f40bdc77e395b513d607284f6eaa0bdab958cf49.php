<?php

/* AdminBundle:SpectacleAdmin:index.html.twig */
class __TwigTemplate_5d1c2581b215d2da7c30e3b0f40bdc77e395b513d607284f6eaa0bdab958cf49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base_admin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des spectacles</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>



    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><p class=\"fa fa-home\"></p> Dashboard</a></li>
        <li class=\"active\">Spectacles</li>
    </ol>


    <!-- Page Content -->
    <div class=\"container\">
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_spectacle_add");
        echo "\"><button class=\"btn btn-default btn-success\">Ajouter un spectacle</button></a>
        <hr>
        ";
        // line 25
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            ";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["spectacles"]) ? $context["spectacles"] : $this->getContext($context, "spectacles"))) != 0)) {
            // line 36
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["spectacles"]) ? $context["spectacles"] : $this->getContext($context, "spectacles")));
            foreach ($context['_seq'] as $context["_key"] => $context["spectacle"]) {
                // line 37
                echo "                    <tr>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["spectacle"], "title", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_spectacle_edit", array("id" => $this->getAttribute($context["spectacle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-info\">Version courte</a>
                            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_spectacle_edit_long", array("id" => $this->getAttribute($context["spectacle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-success\">Version longue</a>
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_spectacle_delete", array("id" => $this->getAttribute($context["spectacle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-danger\">Suppprimer</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spectacle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        } else {
            // line 47
            echo "                <tr>
                    <td>-</td>
                    <td>0 spectacle trouvé</td>
                    <td>-</td>

                    <td></td>
                </tr>
            ";
        }
        // line 55
        echo "            </tbody>
        </table>
        <hr>


    </div>
    <!-- /.container -->

";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/footable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:SpectacleAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 66,  138 => 65,  126 => 55,  116 => 47,  113 => 46,  103 => 42,  99 => 41,  95 => 40,  90 => 38,  87 => 37,  82 => 36,  80 => 35,  68 => 25,  63 => 22,  53 => 15,  40 => 4,  37 => 3,  11 => 1,);
    }
}
