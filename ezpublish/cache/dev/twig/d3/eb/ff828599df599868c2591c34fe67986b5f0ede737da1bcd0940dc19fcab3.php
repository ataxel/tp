<?php

/* WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig */
class __TwigTemplate_d3ebff828599df599868c2591c34fe67986b5f0ede737da1bcd0940dc19fcab3 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        if (twig_length_filter($this->env, $this->env->getExtension('breadcrumbs')->getBreadcrumbs())) {
            // line 2
            echo "  ";
            ob_start();
            // line 3
            echo "    <ul id=\"";
            echo twig_escape_filter($this->env, (isset($context["listId"]) ? $context["listId"] : $this->getContext($context, "listId")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "html", null, true);
            echo "\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
      ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 5
                echo "        <li";
                if ((array_key_exists("itemClass", $context) && twig_length_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : $this->getContext($context, "itemClass"))))) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : $this->getContext($context, "itemClass")), "html", null, true);
                    echo "\"";
                }
                if ((!$this->getAttribute($context["loop"], "first", array()))) {
                    echo " itemprop=\"child\"";
                }
                echo ">
          ";
                // line 6
                if (($this->getAttribute($context["b"], "url", array()) && (!$this->getAttribute($context["loop"], "last", array())))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "url", array()), "html", null, true);
                    echo "\" itemprop=\"url\"";
                    if ((array_key_exists("linkRel", $context) && twig_length_filter($this->env, (isset($context["linkRel"]) ? $context["linkRel"] : $this->getContext($context, "linkRel"))))) {
                        echo " rel=\"";
                        echo twig_escape_filter($this->env, (isset($context["linkRel"]) ? $context["linkRel"] : $this->getContext($context, "linkRel")), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                }
                // line 7
                echo "          <span itemprop=\"title\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["b"], "text", array()), $this->getAttribute($context["b"], "translationParameters", array()), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                echo "</span>
          ";
                // line 8
                if (($this->getAttribute($context["b"], "url", array()) && (!$this->getAttribute($context["loop"], "last", array())))) {
                    echo "</a>";
                }
                // line 9
                echo "  
          ";
                // line 10
                if (((!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))) && (!$this->getAttribute($context["loop"], "last", array())))) {
                    // line 11
                    echo "            <span class='";
                    echo twig_escape_filter($this->env, (isset($context["separatorClass"]) ? $context["separatorClass"] : $this->getContext($context, "separatorClass")), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</span>
        ";
                }
                // line 13
                echo "      </li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </ul>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 15,  94 => 13,  86 => 11,  84 => 10,  81 => 9,  77 => 8,  72 => 7,  60 => 6,  48 => 5,  31 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
