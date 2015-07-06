<?php

/* eZDemoBundle::page_mainarea.html.twig */
class __TwigTemplate_91bdc111dac8c5958b6c9cb42db083355e801eb5a7561e830a88251c383e156a extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"span";
        $context["innerColumnSize"] = ((array_key_exists("innerColumnSize", $context)) ? (_twig_default_filter((isset($context["innerColumnSize"]) ? $context["innerColumnSize"] : $this->getContext($context, "innerColumnSize")), 12)) : (12));
        echo " main-content\">
    ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo "</div>
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_mainarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  27 => 3,  25 => 2,  20 => 1,);
    }
}
