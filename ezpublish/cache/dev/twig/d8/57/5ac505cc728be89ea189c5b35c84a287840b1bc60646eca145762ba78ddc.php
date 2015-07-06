<?php

/* eZDemoBundle:parts/place:place_list.html.twig */
class __TwigTemplate_d8575ac505cc728be89ea189c5b35c84a287840b1bc60646eca145762ba78ddc extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($this->getAttribute($context["place"], "contentInfo", array()), "mainLocationId", array()), "viewType" => "line")));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts/place:place_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  25 => 8,  23 => 7,  19 => 6,);
    }
}
