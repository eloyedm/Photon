<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5a0de38d82de2a745b92d912e3fca68996aa76b354846a1c1b895ed84eea98c2 extends Twig_Template
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
        $__internal_9a2932a94ec6fec2fd98a49835f3c88ad268acd7afa4085c57f0780f653a3263 = $this->env->getExtension("native_profiler");
        $__internal_9a2932a94ec6fec2fd98a49835f3c88ad268acd7afa4085c57f0780f653a3263->enter($__internal_9a2932a94ec6fec2fd98a49835f3c88ad268acd7afa4085c57f0780f653a3263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9a2932a94ec6fec2fd98a49835f3c88ad268acd7afa4085c57f0780f653a3263->leave($__internal_9a2932a94ec6fec2fd98a49835f3c88ad268acd7afa4085c57f0780f653a3263_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
