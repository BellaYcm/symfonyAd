<?php

/* ScourgenWebBundle:Default:index.html.twig */
class __TwigTemplate_59d4d03dc9bcca42560131f1d3740810aa699f798acd9ad645d15307029010b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ScourgenWebBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'my_js' => array($this, 'block_my_js'),
            'my_css' => array($this, 'block_my_css'),
            'maincontent' => array($this, 'block_maincontent'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ScourgenWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_my_js($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c49bd95_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c49bd95_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c49bd95_part_1_test_1.js");
            // line 4
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" ></script>
    ";
        } else {
            // asset "c49bd95"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c49bd95") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c49bd95.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" ></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 7
    public function block_my_css($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3115068_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3115068_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3115068_part_1_test_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "3115068"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3115068") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3115068.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 12
    public function block_maincontent($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container\">
        <p>test";
        // line 14
        echo twig_escape_filter($this->env, twig_reverse_filter($this->env, twig_upper_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))), "html", null, true);
        echo "</p>
        <p>test";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "</p>

    </div>
    ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "ScourgenWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  103 => 18,  97 => 15,  93 => 14,  90 => 13,  87 => 12,  71 => 9,  66 => 8,  63 => 7,  47 => 4,  42 => 3,  39 => 2,  11 => 1,);
    }
}
