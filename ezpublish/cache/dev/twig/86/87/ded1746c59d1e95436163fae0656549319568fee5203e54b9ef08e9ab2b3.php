<?php

/* NovaeZSEOBundle:fields:novaseometas.html.twig */
class __TwigTemplate_8687ded1746c59d1e95436163fae0656549319568fee5203e54b9ef08e9ab2b3 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EzPublishCoreBundle::content_fields.html.twig");

        $this->blocks = array(
            'novaseometas_field' => array($this, 'block_novaseometas_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EzPublishCoreBundle::content_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_novaseometas_field($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('novaezseo_extension')->computeMetas((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), (isset($context["contentInfo"]) ? $context["contentInfo"] : $this->getContext($context, "contentInfo"))), "html", null, true);
        echo "
    ";
        // line 5
        $context["isCanonicalFind"] = false;
        // line 6
        echo "    ";
        $context["isTtitleFind"] = false;
        // line 7
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "value", array()), "metas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 8
            echo "        ";
            if ((!twig_test_empty($this->getAttribute($context["meta"], "content", array())))) {
                // line 9
                echo "            ";
                if (($this->getAttribute($context["meta"], "name", array()) == "title")) {
                    // line 10
                    echo "                <title>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "content", array()), "html", null, true);
                    echo "</title>
                ";
                    // line 11
                    $context["isTtitleFind"] = true;
                    // line 12
                    echo "            ";
                } elseif (($this->getAttribute($context["meta"], "name", array()) == "canonical")) {
                    // line 13
                    echo "                <link rel=\"canonical\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "content", array()), "html", null, true);
                    echo "\" />
                ";
                    // line 14
                    $context["isCanonicalFind"] = true;
                    // line 15
                    echo "            ";
                } else {
                    // line 16
                    echo "                <meta name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "name", array()), "html", null, true);
                    echo "\" content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "content", array()), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 18
                echo "        ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    ";
        if (($this->getAttribute((isset($context["contentInfo"]) ? $context["contentInfo"] : null), "mainLocationId", array(), "any", true, true) && ((isset($context["isCanonicalFind"]) ? $context["isCanonicalFind"] : $this->getContext($context, "isCanonicalFind")) == false))) {
            // line 21
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute((isset($context["contentInfo"]) ? $context["contentInfo"] : $this->getContext($context, "contentInfo")), "mainLocationId", array()))), "html", null, true);
            echo "\" />
    ";
        }
        // line 23
        echo "    ";
        if (((isset($context["isTtitleFind"]) ? $context["isTtitleFind"] : $this->getContext($context, "isTtitleFind")) == false)) {
            // line 24
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["contentInfo"]) ? $context["contentInfo"] : $this->getContext($context, "contentInfo"))), "html", null, true);
            echo "</title>
    ";
        }
    }

    public function getTemplateName()
    {
        return "NovaeZSEOBundle:fields:novaseometas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  98 => 23,  92 => 21,  89 => 20,  83 => 19,  80 => 18,  72 => 16,  69 => 15,  67 => 14,  62 => 13,  59 => 12,  57 => 11,  52 => 10,  49 => 9,  46 => 8,  41 => 7,  38 => 6,  36 => 5,  31 => 4,  28 => 3,);
    }
}
