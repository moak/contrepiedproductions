<?php

/* CPBundle:Default:index.html.twig */
class __TwigTemplate_2e09c94a53e7116807c3471c182f3d8eb9c0e39df3e163541d8116b3531d7537 extends Twig_Template
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
        <div class=\"box\">
            <div class=\"col-lg-12 text-center\">
                <div id=\"carousel-example-generic\" class=\"carousel slide\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators hidden-xs\">
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 19
            echo "                            ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 20
                echo "                                <div class=\"item active\">
                                    <img class=\"img-responsive img-full\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "path", array()))), "html", null, true);
                echo "\" alt=\"\">
                                </div>
                            ";
            } else {
                // line 24
                echo "                                <div class=\"item\">
                                    <img class=\"img-responsive img-full\" src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "path", array()))), "html", null, true);
                echo "\" alt=\"\">
                                </div>
                            ";
            }
            // line 28
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </div>

                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                        <span class=\"icon-prev\"></span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                        <span class=\"icon-next\"></span>
                    </a>
                </div>


                <hr class=\"tagline-divider\">
                <h2>
                    <small>
                        <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "citation", array()), "html", null, true);
        echo "</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"box\">

            <div class=\"col-sm-4 text-center\">
                <div class=\"features\">

                    <img class=\"img-responsive mainpage\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/association.gif"), "html", null, true);
        echo "\" alt=\"\">
                    <h3>Découvrez
                        <small>l'association</small>
                    </h3>
                </div>
            </div>
            <div class=\"col-sm-4 text-center\">
                <div class=\"features\">
                    <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("cp_produits");
        echo "\"><img class=\"img-responsive mainpage\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/boutique.gif"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <h3>Visitez
                        <small>notre boutique</small>
                    </h3>
                </div>
            </div>
            <div class=\"col-sm-4 text-center\">
                <div class=\"features\">
                    <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("cp_newsletter");
        echo "\"><img class=\"img-responsive mainpage\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter.gif"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <h3>Abonnez vous <small>(1 502)</small></h3>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>



    <br>
    ";
        // line 84
        if ((($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "spectacle", array()) != null) || ($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "jeunepublic", array()) != null))) {
            // line 85
            echo "    <div class=\"row\">

            <div class=\"col-lg-12\">

                ";
            // line 89
            if (($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "spectacle", array()) != null)) {
                // line 90
                echo "                    ";
                $this->env->loadTemplate("CPBundle:Spectacle:template.html.twig")->display(array_merge($context, array("representation" => $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "spectacle", array()))));
                // line 91
                echo "                ";
            }
            // line 92
            echo "
                ";
            // line 93
            if (($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "jeunepublic", array()) != null)) {
                // line 94
                echo "                    ";
                $this->env->loadTemplate("CPBundle:Jeunepublic:template.html.twig")->display(array_merge($context, array("representation" => $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "jeunepublic", array()))));
                // line 95
                echo "                ";
            }
            // line 96
            echo "        </div>
    </div>
    ";
        }
        // line 99
        echo "

";
    }

    public function getTemplateName()
    {
        return "CPBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 99,  207 => 96,  204 => 95,  201 => 94,  199 => 93,  196 => 92,  193 => 91,  190 => 90,  188 => 89,  182 => 85,  180 => 84,  164 => 73,  151 => 65,  140 => 57,  124 => 44,  107 => 29,  93 => 28,  87 => 25,  84 => 24,  78 => 21,  75 => 20,  72 => 19,  55 => 18,  39 => 4,  36 => 3,  11 => 1,);
    }
}
