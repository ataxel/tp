<?php

/* eZDemoBundle:parts:related_content.html.twig */
class __TwigTemplate_7e488525ddedff4c4f0dd50ba4608ed46620341a9eb0acfa162ff8cb0278178e extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $this->env->loadTemplate("design:parts/related_content.tpl")->display(array_merge($context, array("node" => (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts:related_content.html.twig";
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
