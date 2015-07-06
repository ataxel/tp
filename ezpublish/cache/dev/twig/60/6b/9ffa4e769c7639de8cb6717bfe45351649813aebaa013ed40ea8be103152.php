<?php

/* eZDemoBundle:parts/article:star_rating.html.twig */
class __TwigTemplate_606b9ffa4e769c7639de8cb6717bfe45351649813aebaa013ed40ea8be103152 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $this->env->loadTemplate("design:parts/article/star_rating.tpl")->display(array_merge($context, array("node" => (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts/article:star_rating.html.twig";
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
