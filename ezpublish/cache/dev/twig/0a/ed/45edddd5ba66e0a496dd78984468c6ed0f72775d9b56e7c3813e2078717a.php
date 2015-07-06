<?php

/* EzPublishCoreBundle:FieldType/RichText/tag:default_inline.html.twig */
class __TwigTemplate_0aed45edddd5ba66e0a496dd78984468c6ed0f72775d9b56e7c3813e2078717a extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "[[ RichText template tag <strong>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</strong> is not configured ]]
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/tag:default_inline.html.twig";
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
