<?php

/* eZDemoBundle:full:place.html.twig */
class __TwigTemplate_f9198d9b74f6324df2439a3830bddc3198b8c4ad8c14aae5051fb4fbd32211a5 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div>
    <div class=\"row\">
        <div class=\"span6 place-name\">
            <h1>";
        // line 6
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name");
        echo "</h1>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 10
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image"))) {
            // line 11
            echo "            <div class=\"span6\">
                ";
            // line 12
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("attr" => array("class" => "place-image"), "parameters" => array("alias" => "imageplacesize")));
            // line 15
            echo "
            </div>
            <div class=\"span4\">
        ";
        } else {
            // line 19
            echo "            <div class=\"span10\">
        ";
        }
        // line 21
        echo "                ";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "location", array("attr" => array("class" => "place-location"), "parameters" => array("showInfo" => false, "width" => "100%", "zoom" => 16)));
        // line 24
        echo "
            </div>
    </div>
    <div class=\"row\">
        <div class=\"span10\">
            ";
        // line 29
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "description", array("attr" => array("class" => "place-description")));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  63 => 24,  60 => 21,  56 => 19,  50 => 15,  48 => 12,  45 => 11,  43 => 10,  36 => 6,  31 => 3,  28 => 2,);
    }
}
