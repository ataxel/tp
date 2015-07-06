<?php

/* eZDemoBundle::page_header_logo.html.twig */
class __TwigTemplate_9df26f8f0730973c70883d7d3b934b8ba5c646b4b859d265833652e350630b47 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"span8\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : $this->getContext($context, "ezpublish")), "rootLocation", array()));
        echo "\" title=\"\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ezdemo/images/logo-ez.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_header_logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
