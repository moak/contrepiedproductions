<?php

/* CPBundle:Agenda:index.html.twig */
class __TwigTemplate_7b136e6111b290c9fe9a66a5e53addcdfe3706c7a535dab979b82a73c37d6986 extends Twig_Template
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
    <div class=\"row\">


                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 9
            echo "                    <div class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"box\">
                                <div class=\"col-lg-2 text-center\">
                                    <h1 class=\"number-agenda oswald-font\">";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["agenda"], "date", array()), "d"), "html", null, true);
            echo "</h1>
                                    <h3>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["agenda"], "date", array()), "F"), "html", null, true);
            echo "</h3>

                                </div>
                                <div class=\"col-lg-6\">
                                    <h2 class=\"oswald-font\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["agenda"], "spectacle", array()), "html", null, true);
            echo "</h2>
                                    <p>
                                        <i class=\"fa fa-street-view\"></i></i> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["agenda"], "place", array()), "html", null, true);
            echo "
                                    </p>
                                    <p>
                                        <i class=\"fa fa-map-marker\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["agenda"], "address", array()), "html", null, true);
            echo "
                                    </p>
                                    <p>
                                        <i class=\"fa fa-clock-o\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["agenda"], "date", array()), "Y/m/d H:m"), "html", null, true);
            echo "
                                        ";
            // line 27
            if (($this->getAttribute($context["agenda"], "reservation", array()) != null)) {
                // line 28
                echo "                                            <a class=\"btn btn-info pull-right oswald-font\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["agenda"], "reservation", array()), "html", null, true);
                echo "\">Réserver</a>
                                        ";
            }
            // line 30
            echo "                                    </p>
                                </div>

                                <div class=\"col-lg-4 text-center\">
                                    <img class=\"img-responsive\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["agenda"], "image", array()), "path", array()))), "html", null, true);
            echo "\">
                                </div>

                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>




";
    }

    public function getTemplateName()
    {
        return "CPBundle:Agenda:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  101 => 34,  95 => 30,  89 => 28,  87 => 27,  83 => 26,  77 => 23,  71 => 20,  66 => 18,  59 => 14,  55 => 13,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
