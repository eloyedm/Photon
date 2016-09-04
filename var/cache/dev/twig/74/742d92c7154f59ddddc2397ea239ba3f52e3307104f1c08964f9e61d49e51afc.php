<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_789a5367c6ddd649e1386de93acba7b890c190d2458927e5ab91c4759031d65f extends Twig_Template
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
        $__internal_4cf43ac5dc7c2cb3e11b661a4219b65cd1740c9ad6403e46657bd97c9e1070fe = $this->env->getExtension("native_profiler");
        $__internal_4cf43ac5dc7c2cb3e11b661a4219b65cd1740c9ad6403e46657bd97c9e1070fe->enter($__internal_4cf43ac5dc7c2cb3e11b661a4219b65cd1740c9ad6403e46657bd97c9e1070fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4cf43ac5dc7c2cb3e11b661a4219b65cd1740c9ad6403e46657bd97c9e1070fe->leave($__internal_4cf43ac5dc7c2cb3e11b661a4219b65cd1740c9ad6403e46657bd97c9e1070fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
