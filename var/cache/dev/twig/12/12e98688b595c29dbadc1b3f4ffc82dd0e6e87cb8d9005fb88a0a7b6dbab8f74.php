<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f03c2c694c81e6e49cabc3884a64dc54e7cfe8f56bdeb7dd1e26accbcaea5f1a extends Twig_Template
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
        $__internal_20a39e2654591dea38ea9d8cec1e780a940954b991f3a5b03ed9d3e0d1503dde = $this->env->getExtension("native_profiler");
        $__internal_20a39e2654591dea38ea9d8cec1e780a940954b991f3a5b03ed9d3e0d1503dde->enter($__internal_20a39e2654591dea38ea9d8cec1e780a940954b991f3a5b03ed9d3e0d1503dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_20a39e2654591dea38ea9d8cec1e780a940954b991f3a5b03ed9d3e0d1503dde->leave($__internal_20a39e2654591dea38ea9d8cec1e780a940954b991f3a5b03ed9d3e0d1503dde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
