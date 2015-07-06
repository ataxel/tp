<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:location.html.twig */
class __TwigTemplate_31da1a0e64dc2394cb3d3c1ede952ff26b280a805acc8a6f0891e77f9f445ca5 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "viewType" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "params" => (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")))));
        // line 13
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  31 => 2,  19 => 1,);
    }
}
