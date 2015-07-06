<?php

/* EzPublishCoreBundle:FieldType/RichText/tag:default.html.twig */
class __TwigTemplate_53288e9bad723b7b31a18cc639c0ebed0f976fa7bcd53f90f334ac6611cbeffd extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"";
        if (array_key_exists("align", $context)) {
            echo "align-";
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : $this->getContext($context, "align")), "html", null, true);
        }
        echo "\">
    RichText template tag <strong>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</strong> is not configured
</div>
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/tag:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  19 => 1,);
    }
}
