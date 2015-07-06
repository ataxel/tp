<?php

/* EzPublishCoreBundle::viewbase_layout.html.twig */
class __TwigTemplate_0972fd03a210c705816ba616925299e9a5942726a2fc5c48a0f8fb16f20d7622 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle::viewbase_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 4,);
    }
}
