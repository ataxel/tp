<?php

/* eZDemoBundle::pagelayout_legacy.html.twig */
class __TwigTemplate_dae10243138a52cf1135da5a1375bb5f4cd3174cd18b5013883a4d8d6c772494 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["module_result"]) ? $context["module_result"] : $this->getContext($context, "module_result")), "content", array());
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::pagelayout_legacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,);
    }
}
