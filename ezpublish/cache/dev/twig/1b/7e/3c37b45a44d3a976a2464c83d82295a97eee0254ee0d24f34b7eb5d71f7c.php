<?php

/* eZDemoBundle::page_topmenu.html.twig */
class __TwigTemplate_1b7e3c37b45a44d3a976a2464c83d82295a97eee0254ee0d24f34b7eb5d71f7c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"navbar-inner\">
    <div class=\"container\">

        <a class=\"btn btn-navbar\" data-action=\"toggleclass\" data-class=\"nav-collapse\" data-target=\".main-navi .nav-collapse\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Navigation"), "html", null, true);
        echo "</a>

        <div class=\"nav-collapse\">
            <div class=\"nav\">
                ";
        // line 8
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), array("depth" => 1, "firstClass" => "firstli", "lastClass" => "lastli"));
        echo "
            </div>
        </div>

    </div>
</div>

";
        // line 15
        if (array_key_exists("submenu", $context)) {
            // line 16
            echo "<div class=\"navbar-inner sublevel\">
    <div class=\"container\">
        <div class=\"nav-collapse\">
            ";
            // line 19
            echo $this->env->getExtension('knp_menu')->render((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")), array("firstClass" => "firstli", "lastClass" => "lastli", "branch_class" => "nav"));
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_topmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  43 => 16,  41 => 15,  31 => 8,  24 => 4,  19 => 1,);
    }
}
