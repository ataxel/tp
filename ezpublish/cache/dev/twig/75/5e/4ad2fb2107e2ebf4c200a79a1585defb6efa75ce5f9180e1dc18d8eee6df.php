<?php

/* eZDemoBundle::page_header_searchbox.html.twig */
class __TwigTemplate_755e4ad2fb2107e2ebf4c200a79a1585defb6efa75ce5f9180e1dc18d8eee6df extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("ezpublish_ezdemo_search"), "attr" => array("class" => "span4 form-search")));
        echo "
<label class=\"pull-right\" for=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchText", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    <span class=\"hidden\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
        echo "</span>
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchText", array()), 'widget', array("attr" => array("class" => "search-query span3", "placeholder" => $this->env->getExtension('translator')->trans("Search text"))));
        echo "

    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "hide hidden")));
        echo "
</label>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_header_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
