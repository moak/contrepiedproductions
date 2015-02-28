<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_01629458d10fba1325b2219dd6a1f288841764ee4607f57a3bfe353c53839774 extends Twig_Template
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
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row\">
        <div class=\"container\">
            <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
                <div class=\"panel panel-info\" >
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">Log in</div>
                        <!--<div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"#\">Forgot password?</a></div>-->
                    </div>

                    <div style=\"padding-top:30px\" class=\"panel-body\" >

                        <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                        <form class=\"form form-horizontal\" role=\"form\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                            </div>
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            </div>

                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                                <label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos.stay_connected", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-md-4\">
                                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </div>
                            </div>


                            ";
        // line 43
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 44
            echo "                                ... ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo " ...
                            ";
        }
        // line 46
        echo "
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  102 => 44,  100 => 43,  92 => 38,  84 => 33,  72 => 24,  66 => 21,  62 => 20,  46 => 6,  40 => 5,  37 => 4,  11 => 1,);
    }
}
