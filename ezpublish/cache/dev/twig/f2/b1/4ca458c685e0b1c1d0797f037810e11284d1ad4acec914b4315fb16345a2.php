<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:content_inline_denied.html.twig */
class __TwigTemplate_f2b14ca458c685e0b1c1d0797f037810e11284d1ad4acec914b4315fb16345a2 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "[[ Content #";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ": You do not have permission to view this Content ]]
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:content_inline_denied.html.twig";
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
