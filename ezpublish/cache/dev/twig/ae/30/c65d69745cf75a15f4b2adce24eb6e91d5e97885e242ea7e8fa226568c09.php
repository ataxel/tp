<?php

/* EzSystemsCommentsBundle::facebook.html.twig */
class __TwigTemplate_ae30c65d69745cf75a15f4b2adce24eb6e91d5e97885e242ea7e8fa226568c09 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'comments' => array($this, 'block_comments'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('comments', $context, $blocks);
    }

    public function block_comments($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((isset($context["include_sdk"]) ? $context["include_sdk"] : $this->getContext($context, "include_sdk"))) {
            // line 3
            echo "    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["app_id"]) ? $context["app_id"] : $this->getContext($context, "app_id")), "html", null, true);
            echo "\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    ";
        }
        // line 12
        echo "
    <div class=\"fb-comments\" data-href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-num-posts=\"";
        echo twig_escape_filter($this->env, (isset($context["num_posts"]) ? $context["num_posts"] : $this->getContext($context, "num_posts")), "html", null, true);
        echo "\" data-colorscheme=\"";
        echo twig_escape_filter($this->env, (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "EzSystemsCommentsBundle::facebook.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  43 => 12,  36 => 8,  29 => 3,  26 => 2,  20 => 1,);
    }
}
