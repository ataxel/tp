<?php

/* eZDemoBundle:parts/blog:extra_info.html.twig */
class __TwigTemplate_b25636c8f679dca8433b613fbade4bf2b7897877d1cd9b71ca02adfb74f20a27 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 6
        $this->env->loadTemplate("design:parts/blog/extra_info.tpl")->display(array_merge($context, array("used_node" => (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "view_parameters" => $this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : $this->getContext($context, "ezpublish")), "viewParameters", array()))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts/blog:extra_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
