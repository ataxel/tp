<?php

/* eZDemoBundle:parts/article:tip_a_friend.html.twig */
class __TwigTemplate_68ae809e81f468aaced0020ed7c1efffdcd5620211e4be2b665cd62a0962de61 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $this->env->loadTemplate("design:parts/article/tip_a_friend.tpl")->display(array_merge($context, array("node" => (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts/article:tip_a_friend.html.twig";
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
