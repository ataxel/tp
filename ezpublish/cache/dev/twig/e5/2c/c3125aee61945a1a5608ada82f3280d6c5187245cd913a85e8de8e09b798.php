<?php

/* eZDemoBundle:full:landing_page.html.twig */
class __TwigTemplate_e52cc3125aee61945a1a5608ada82f3280d6c5187245cd913a85e8de8e09b798 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"content-view-full\">
    <div class=\"class-landing-page\">

        <div class=\"attribute-page\">
            ";
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "page");
        echo "
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:landing_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  37 => 9,  31 => 4,  28 => 3,);
    }
}
