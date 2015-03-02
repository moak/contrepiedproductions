<?php

/* CPBundle:Spectacle:index.html.twig */
class __TwigTemplate_6bdcc7aca21ce8c3255b5bb43a2c5baa4103113b8fe8581c22159460746bd8bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["representations"]) ? $context["representations"] : $this->getContext($context, "representations")));
        foreach ($context['_seq'] as $context["_key"] => $context["representation"]) {
            // line 6
            echo "    <div class=\"row\">
        <div class=\"box\">

                <div class=\"col-md-4\">
                    <br><br>
                    <p class=\"title text-center\"><strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["representation"], "titleSecond", array()), "html", null, true);
            echo "</strong></p>
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cp_spectacle_view", array("id" => $this->getAttribute($context["representation"], "id", array()))), "html", null, true);
            echo "\"> <img class=\"img-responsive \" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["representation"], "image", array()), "path", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                </div>
                <div class=\"col-md-8\">
                    <p class=\"title_second text-center\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["representation"], "title", array()), "html", null, true);
            echo "</p>
                    <span class=\"pull-right\"><h3><strong>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["representation"], "prix", array()), "html", null, true);
            echo " €</strong></h3></span>
                    <hr>
                    <p>
                        ";
            // line 19
            echo $this->getAttribute($context["representation"], "descriptionShort", array());
            echo "
                    </p>
                    <p class=\"pull-right\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cp_spectacle_view", array("id" => $this->getAttribute($context["representation"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-block btn-info\">Plus d'info</button></a></p>

                </div>


            <div class=\"clearfix\"></div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['representation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "



";
    }

    public function getTemplateName()
    {
        return "CPBundle:Spectacle:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  80 => 21,  75 => 19,  69 => 16,  65 => 15,  57 => 12,  53 => 11,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
