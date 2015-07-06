<?php

/* eZDemoBundle:email:feedback_form.txt.twig */
class __TwigTemplate_ef5be9b6a2ec05456c8c879d8cdeeaa88a0408395f6e1a03c492f61a33e4c5ec extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello,
A new feedback form has been submited.

Please find the related information:

- First name: %firstname%
- Last name: %lastname%
- Email: %email%
- Subject: %subject%
- Country: %country%
- Message:
\"%message%\"


Best regards,
The eZ Demobundle Team.", array("%firstname%" => (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "%lastname%" => (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname")), "%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "%subject%" => (isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "%country%" => (isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "%message%" => (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "messages");
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:email:feedback_form.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 13,  19 => 12,);
    }
}
