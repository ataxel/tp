<?php

/* eZDemoBundle::page_footer.html.twig */
class __TwigTemplate_2b412e72fb03c3308a1244dce37c0731fca5e8a02a7b02bf2facf2e55023c4b3 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<footer>
    <div class=\"claim-wrapper\">
        <div class=\"container\">
            <div class=\"nav-collapse\">
                Powered by <a href=\"http://ez.no/ezpublish\" title=\"eZ Publish&#8482; CMS Open Source Web Content Management\">eZ Publish&#8482; CMS Open Source Web Content Management</a>.
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                ";
        // line 12
        $this->env->loadTemplate("eZDemoBundle:footer:address.html.twig")->display(array_merge($context, array("content" => (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))));
        // line 13
        echo "            </div>
            <div class=\"span4 nav-collapse\">
                ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("eZDemoBundle:Footer:latestContent", array("currentContentId" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentInfo", array()), "id", array()))));
        echo "
            </div>
            <div class=\"span4 nav-collapse\">
                ";
        // line 18
        $this->env->loadTemplate("eZDemoBundle:footer:links.html.twig")->display(array_merge($context, array("content" => (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))));
        // line 19
        echo "            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  44 => 18,  38 => 15,  34 => 13,  32 => 12,  19 => 1,);
    }
}
