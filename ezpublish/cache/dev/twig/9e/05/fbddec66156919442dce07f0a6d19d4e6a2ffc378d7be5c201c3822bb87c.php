<?php

/* eZDemoBundle:block:content_grid_1col_2rows.html.twig */
class __TwigTemplate_9e05fbddec66156919442dce07f0a6d19d4e6a2ffc378d7be5c201c3822bb87c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"block-type-content-grid block-view-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "view", array()), "html", null, true);
        echo "\">

";
        // line 3
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()) != "")) {
            // line 4
            echo "    <div class=\"attribute-header\">
        <h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
            echo "</h2>
    </div>
";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($context["item"], "locationId", array()), "viewType" => "block_item", "params" => array("image_class" => "contentgrid"))));
            // line 21
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:content_grid_1col_2rows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  49 => 21,  46 => 12,  41 => 11,  39 => 10,  36 => 8,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
