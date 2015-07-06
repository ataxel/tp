<?php

/* eZDemoBundle::breadcrumb.html.twig */
class __TwigTemplate_4e0b369d1529b3063721eaa46c49ef51fb3730458ba7962d0e2ebacadce3d701 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs(array("separator" => ">>"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
