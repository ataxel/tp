<?php

/* NovaeZSEOBundle::seometas_head.html.twig */
class __TwigTemplate_306e5713ba1c31c860bcbb71398061d690a1bb31d4d84d2a6a0ad8d40b885edc extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["novae_zseo"]) ? $context["novae_zseo"] : $this->getContext($context, "novae_zseo")), "default_metas", array()));
        foreach ($context['_seq'] as $context["name"] => $context["content"]) {
            // line 3
            echo "    ";
            if ((!twig_test_empty($context["content"]))) {
                // line 4
                echo "        <meta name=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" content=\"";
                echo twig_escape_filter($this->env, $context["content"], "html", null, true);
                echo "\"/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
";
        // line 8
        if ((array_key_exists("content", $context) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "fields", array(), "any", false, true), $this->getAttribute((isset($context["novae_zseo"]) ? $context["novae_zseo"] : $this->getContext($context, "novae_zseo")), "fieldtype_metas_identifier", array()), array(), "array", true, true))) {
            // line 9
            echo "    ";
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), $this->getAttribute((isset($context["novae_zseo"]) ? $context["novae_zseo"] : $this->getContext($context, "novae_zseo")), "fieldtype_metas_identifier", array()));
            echo "
";
        }
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["novae_zseo"]) ? $context["novae_zseo"] : $this->getContext($context, "novae_zseo")), "default_links", array()));
        foreach ($context['_seq'] as $context["rel"] => $context["attrs"]) {
            // line 12
            echo "    ";
            if ((!twig_test_empty($this->getAttribute($context["attrs"], "href", array())))) {
                // line 13
                echo "        ";
                $context["href"] = $this->getAttribute($context["attrs"], "href", array());
                // line 14
                echo "        <link rel=\"";
                echo twig_escape_filter($this->env, $context["rel"], "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["attrs"], "type", array(), "any", true, true)) {
                    echo " type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attrs"], "type", array()), "html", null, true);
                    echo "\"";
                }
                if ($this->getAttribute($context["attrs"], "title", array(), "any", true, true)) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attrs"], "title", array()), "html", null, true);
                    echo "\"";
                }
                if ($this->getAttribute((isset($context["href"]) ? $context["href"] : null), "location_id", array(), "any", true, true)) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), "location_id", array()))), "html", null, true);
                    echo "\"";
                }
                if ($this->getAttribute((isset($context["href"]) ? $context["href"] : null), "route", array(), "any", true, true)) {
                    echo " href=\"";
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), "route", array()));
                    echo "\"";
                }
                if ($this->getAttribute((isset($context["href"]) ? $context["href"] : null), "legacy_uri", array(), "any", true, true)) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => $this->getAttribute((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), "legacy_uri", array()))), "html", null, true);
                    echo "\"";
                }
                if ($this->getAttribute((isset($context["href"]) ? $context["href"] : null), "asset", array(), "any", true, true)) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), "asset", array())), "html", null, true);
                    echo "\"";
                }
                echo " />
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rel'], $context['attrs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : $this->getContext($context, "ezpublish")), "availableLanguages", array())) > 1)) {
            // line 19
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : $this->getContext($context, "ezpublish")), "availableLanguages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 20
                echo "        ";
                if (array_key_exists("location", $context)) {
                    // line 21
                    echo "            <link rel=\"alternate\" data-sa=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : $this->getContext($context, "ezpublish")), "translationSiteAccess", array(0 => $context["lang"]), "method"), "html", null, true);
                    echo "\" hreflang=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('novaezseo_extension')->getPosixLocale($context["lang"]), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), array("siteaccess" => $this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : $this->getContext($context, "ezpublish")), "translationSiteAccess", array(0 => $context["lang"]), "method"))), "html", null, true);
                    echo "\" />
        ";
                } else {
                    // line 23
                    echo "            ";
                    $context["route"] = $this->env->getExtension('ezpublish.routing')->getRouteReference(null, array("language" => $context["lang"]));
                    // line 24
                    echo "            ";
                    // line 25
                    echo "            ";
                    if (($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "route", array()) != "ez_legacy")) {
                        // line 26
                        echo "                <link rel=\"alternate\" hreflang=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('novaezseo_extension')->getPosixLocale($context["lang"]), "html", null, true);
                        echo "\" href=\"";
                        echo $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")));
                        echo "\" />
            ";
                    }
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 31
        echo "
";
        // line 32
        if ($this->getAttribute((isset($context["novae_zseo"]) ? $context["novae_zseo"] : $this->getContext($context, "novae_zseo")), "google_gatracker", array())) {
            // line 33
            echo "    ";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) != "prod")) {
                // line 34
                echo "    <!-- Google GA tracker : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novae_zseo"]) ? $context["novae_zseo"] : $this->getContext($context, "novae_zseo")), "google_gatracker", array()), "html", null, true);
                echo " -->
    ";
            } else {
                // line 36
                echo "        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', \"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novae_zseo"]) ? $context["novae_zseo"] : $this->getContext($context, "novae_zseo")), "google_gatracker", array()), "html", null, true);
                echo "\", 'auto');
            ga('send', 'pageview');
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "NovaeZSEOBundle::seometas_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 41,  166 => 36,  160 => 34,  157 => 33,  155 => 32,  152 => 31,  145 => 29,  142 => 28,  134 => 26,  131 => 25,  129 => 24,  126 => 23,  116 => 21,  113 => 20,  108 => 19,  106 => 18,  103 => 17,  62 => 14,  59 => 13,  56 => 12,  52 => 11,  46 => 9,  44 => 8,  41 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
