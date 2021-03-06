<?php

/* eZDemoBundle:line:place.html.twig */
class __TwigTemplate_2e719b250db100b7771b81c4e594c3cae261f6f158e143c70e282380d9f4c300 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 4
        echo "<div class=\"place-list-item\"
    data-place-name=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "\"
    data-place-lat=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('ezpublish.content')->getTranslatedFieldValue((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "location"), "latitude", array()), "html", null, true);
        echo "\"
    data-place-long=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('ezpublish.content')->getTranslatedFieldValue((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "location"), "longitude", array()), "html", null, true);
        echo "\">
    <h2>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentInfo", array()), "mainLocationId", array()))), "html", null, true);
        echo "\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
        echo "
        </a>
    </h2>

    <div class=\"infobox-content\">
        <h2>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentInfo", array()), "mainLocationId", array()))), "html", null, true);
        echo "\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "
            </a>
        </h2>
        ";
        // line 20
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("attr" => array("class" => "place-list-image"), "parameters" => array("alias" => "small")));
        echo "
    </div>
    
    <div class=\"row\">
        ";
        // line 24
        if ($this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image")) {
            // line 25
            echo "            <div class=\"span8\">
                ";
            // line 26
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "description");
            echo "
            </div>
        ";
        } else {
            // line 29
            echo "            <div class=\"span2\">
                ";
            // line 30
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("attr" => array("class" => "place-list-image"), "parameters" => array("alias" => "large")));
            echo "
            </div>
            <div class=\"span6\">
                ";
            // line 33
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "description");
            echo "
            </div>
        ";
        }
        // line 36
        echo "
    </div>
    <div class=\"row span8\">
        <a class=\"place-list-link\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentInfo", array()), "mainLocationId", array()))), "html", null, true);
        echo "\"> >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("more"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:line:place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  91 => 36,  85 => 33,  79 => 30,  76 => 29,  70 => 26,  67 => 25,  65 => 24,  58 => 20,  52 => 17,  48 => 16,  39 => 10,  35 => 9,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
