<?php

/* eZDemoBundle:gallery_viewer:image.html.twig */
class __TwigTemplate_9210e85ab81eb31e7afcc74451242accd295b25ee6e8872181113f62c02f3988 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 5
        $context["image_alias"] = ((array_key_exists("image_alias", $context)) ? (_twig_default_filter((isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")), "gallery")) : ("gallery"));
        // line 6
        $context["total_items"] = ((array_key_exists("total_items", $context)) ? (_twig_default_filter((isset($context["total_items"]) ? $context["total_items"] : $this->getContext($context, "total_items")), 1)) : (1));
        // line 7
        $context["content_name"] = $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
        // line 8
        echo "<figure class=\"gallery-viewer-image visible\">
    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => (isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")), "alt" => (isset($context["content_name"]) ? $context["content_name"] : $this->getContext($context, "content_name")))));
        // line 17
        echo "
    <figcaption>
        <h3>
            <span class=\"counter\"><span>1</span>/";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["total_items"]) ? $context["total_items"] : $this->getContext($context, "total_items")), "html", null, true);
        echo "</span>
            <a href=";
        // line 21
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")));
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["content_name"]) ? $context["content_name"] : $this->getContext($context, "content_name")), "html", null, true);
        echo "</a>
        </h3>
        <div>
        ";
        // line 24
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "caption"))) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "caption");
            echo "
        ";
        }
        // line 27
        echo "        </div>
    </figcaption>
</figure>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:gallery_viewer:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  50 => 25,  48 => 24,  40 => 21,  36 => 20,  31 => 17,  28 => 10,  25 => 8,  23 => 7,  21 => 6,  19 => 5,);
    }
}
