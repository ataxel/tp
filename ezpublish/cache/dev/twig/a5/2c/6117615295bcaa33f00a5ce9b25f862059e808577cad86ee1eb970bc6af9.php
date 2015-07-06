<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:content_denied.html.twig */
class __TwigTemplate_a52c6117615295bcaa33f00a5ce9b25f862059e808577cad86ee1eb970bc6af9 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        if (array_key_exists("class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        }
        echo "\">
    Content #";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ": You do not have permission to view this Content
</div>
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:content_denied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  19 => 1,);
    }
}
