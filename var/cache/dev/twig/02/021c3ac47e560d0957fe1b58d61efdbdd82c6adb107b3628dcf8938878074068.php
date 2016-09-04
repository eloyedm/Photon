<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1278e19fdfda757c84c6531d2261f7fc1fe295107229ac3e99c96400f1cb29e6 extends Twig_Template
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
        $__internal_a987e7b6b7ccfa8b73e1c9aa87e127be4c5fa636dc05e423a5f33e58c387287a = $this->env->getExtension("native_profiler");
        $__internal_a987e7b6b7ccfa8b73e1c9aa87e127be4c5fa636dc05e423a5f33e58c387287a->enter($__internal_a987e7b6b7ccfa8b73e1c9aa87e127be4c5fa636dc05e423a5f33e58c387287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a987e7b6b7ccfa8b73e1c9aa87e127be4c5fa636dc05e423a5f33e58c387287a->leave($__internal_a987e7b6b7ccfa8b73e1c9aa87e127be4c5fa636dc05e423a5f33e58c387287a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
