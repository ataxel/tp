<?php

/* eZDemoBundle:footer:address.html.twig */
class __TwigTemplate_b4aad80e26534a289a3b0bd2aa50f48beb463cf890ecdcff8a57c4b1cbf3c430 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        if ((!(null === (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))))) {
            // line 2
            echo "<h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Get in touch"), "html", null, true);
            echo "</h3>
<address>
    ";
            // line 4
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro", array("editMode" => false));
            // line 11
            echo "
</address>
";
        }
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:footer:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  27 => 4,  21 => 2,  19 => 1,);
    }
}
