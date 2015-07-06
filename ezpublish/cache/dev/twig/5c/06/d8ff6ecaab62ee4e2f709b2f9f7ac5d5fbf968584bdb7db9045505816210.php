<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:content_inline.html.twig */
class __TwigTemplate_5c06d8ff6ecaab62ee4e2f709b2f9f7ac5d5fbf968584bdb7db9045505816210 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewContent", array("locationId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "viewType" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "params" => (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")))));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:content_inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 12,  19 => 1,);
    }
}
