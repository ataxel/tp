<?php

/* eZDemoBundle::page_head_displaystyles.html.twig */
class __TwigTemplate_2fc4a5199db7057b09cb7f6c8599ed1614e267b023dbf97c11094f2fa7bc386c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 2
        $context["userId"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "APIUser", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "APIUser", array(), "any", false, true), "id", array()), "anonymous")) : ("anonymous"));
        // line 3
        echo "<style type=\"text/css\">
.limitdisplay-user { display: none; }
.limitdisplay-user-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")), "html", null, true);
        echo " { display: inline; }
.limitdisplay-user-block-";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")), "html", null, true);
        echo " { display: block; }
</style>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_head_displaystyles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  21 => 3,  19 => 2,);
    }
}
