<?php

/* ScourgenWebBundle::layout.html.twig */
class __TwigTemplate_b984b9c7bc9aca09319902f46febe3168ded31f2fea346d72abea9d238c78b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gobal_css' => array($this, 'block_gobal_css'),
            'gobal_js' => array($this, 'block_gobal_js'),
            'my_js' => array($this, 'block_my_js'),
            'my_css' => array($this, 'block_my_css'),
            'head' => array($this, 'block_head'),
            'maincontent' => array($this, 'block_maincontent'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    ";
        // line 16
        $this->displayBlock('gobal_css', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('gobal_js', $context, $blocks);
        // line 32
        echo "
    <!--startjs !-->
    ";
        // line 34
        $this->displayBlock('my_js', $context, $blocks);
        // line 36
        echo "    <!--endjs !-->
    <!--startcss !-->
    ";
        // line 38
        $this->displayBlock('my_css', $context, $blocks);
        // line 40
        echo "    <!--endcss !-->


</head>
<body>
";
        // line 45
        $this->displayBlock('head', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('maincontent', $context, $blocks);
        // line 110
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/js/vendor/jquery-1.11.2.js"), "html", null, true);
        echo "\"><\\/script>')</script>

<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scourgenweb/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 16
    public function block_gobal_css($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6fe2649_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6fe2649_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6fe2649_bootstrap.min_1.css");
            // line 22
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
            // asset "6fe2649_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6fe2649_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6fe2649_bootstrap-theme.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
            // asset "6fe2649_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6fe2649_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6fe2649_main_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "6fe2649"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6fe2649") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6fe2649.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
    }

    // line 25
    public function block_gobal_js($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "38fc17b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_38fc17b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/38fc17b_modernizr-2.8.3-respond-1.4.2.min_1.js");
            // line 29
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "38fc17b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_38fc17b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/38fc17b.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "    ";
    }

    // line 34
    public function block_my_js($context, array $blocks = array())
    {
        // line 35
        echo "    ";
    }

    // line 38
    public function block_my_css($context, array $blocks = array())
    {
        // line 39
        echo "    ";
    }

    // line 45
    public function block_head($context, array $blocks = array())
    {
        // line 46
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <form class=\"navbar-form navbar-right\" role=\"form\">
                <div class=\"form-group\">
                    <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
";
    }

    // line 72
    public function block_maincontent($context, array $blocks = array())
    {
        // line 73
        echo "<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
    </div>
</div>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
    </div>

    <hr>
";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        // line 108
        echo "</div> <!-- /container -->
";
    }

    // line 103
    public function block_footer($context, array $blocks = array())
    {
        // line 104
        echo "    <footer>
        <p>&copy; Company 2015</p>
    </footer>
    ";
    }

    public function getTemplateName()
    {
        return "ScourgenWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 104,  246 => 103,  241 => 108,  239 => 103,  207 => 73,  204 => 72,  176 => 46,  173 => 45,  169 => 39,  166 => 38,  162 => 35,  159 => 34,  155 => 31,  141 => 29,  136 => 26,  133 => 25,  129 => 24,  103 => 22,  98 => 17,  95 => 16,  87 => 115,  82 => 113,  77 => 111,  74 => 110,  72 => 72,  69 => 71,  67 => 45,  60 => 40,  58 => 38,  54 => 36,  52 => 34,  48 => 32,  45 => 25,  43 => 16,  26 => 1,);
    }
}
