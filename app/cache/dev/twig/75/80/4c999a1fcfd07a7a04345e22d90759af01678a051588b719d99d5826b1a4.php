<?php

/* ::base.html.twig */
class __TwigTemplate_75804c999a1fcfd07a7a04345e22d90759af01678a051588b719d99d5826b1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/contrepiedproductions.css"), "html", null, true);
        echo "\" />
        <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/swipebox.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.swipebox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jtable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.swipebox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- DataTables CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.4/css/jquery.dataTables.css\">



        <!-- DataTables -->
        <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.4/js/jquery.dataTables.js\"></script>



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>

        ";
        // line 43
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CPBundle:Default:menu"));
        echo "

        <div class=\"container\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ul class=\"list-inline pull-right\">
                            <li>
                                <a target=\"_blank\" href=\"https://www.facebook.com/pages/Contrepied-Productions/494781253961289\"><img src=\"/symfony_coc/web/images/facebook.svg\"></a>
                            </li>
                            <li class=\"footer-menu-divider\">&sdot;</li>

                            <li>
                                <a href=\"#\"><img src=\"/symfony_coc/web/images/twitter.svg\"></a>
                            </li>
                        </ul>
                        <p>Copyright &copy; 2015. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "<title>Contrepied Productions</title>";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  139 => 46,  133 => 10,  104 => 48,  101 => 47,  99 => 46,  93 => 43,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  47 => 15,  42 => 13,  38 => 12,  35 => 11,  33 => 10,  22 => 1,);
    }
}
