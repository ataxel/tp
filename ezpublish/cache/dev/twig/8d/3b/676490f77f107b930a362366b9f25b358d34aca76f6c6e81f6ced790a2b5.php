<?php

/* eZDemoBundle:frontpage:feed_block.html.twig */
class __TwigTemplate_8d3b676490f77f107b930a362366b9f25b358d34aca76f6c6e81f6ced790a2b5 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 3
        echo "<div class=\"block-type-feed-reader item-list\">
    <div class=\"attribute-header\">
        <h2>
        ";
        // line 6
        if ((!twig_test_empty($this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link", array())))) {
            // line 7
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link", array()), 0, array(), "array"), "href", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title", array()), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 9
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title", array()), "html", null, true);
            echo "
        ";
        }
        // line 11
        echo "        </h2>
    </div>
    <article>
        <ul>
        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "item", array()), (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")), (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "            <li>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", array()), 0, array(), "array"), "href", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </ul>
    </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:frontpage:feed_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  58 => 19,  55 => 18,  50 => 17,  48 => 16,  42 => 11,  36 => 9,  26 => 7,  24 => 6,  19 => 3,);
    }
}
