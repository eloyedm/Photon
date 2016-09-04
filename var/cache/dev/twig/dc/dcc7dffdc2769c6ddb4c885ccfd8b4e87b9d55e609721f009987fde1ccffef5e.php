<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b10e797f621e07da6e5f51ad603435998022a8ff9998393173548d333e45e9bf extends Twig_Template
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
        $__internal_471fb6ecb1b1b0dd240aa1e4fc1df84fd2d1a03ed4f407898562a42d95ca6007 = $this->env->getExtension("native_profiler");
        $__internal_471fb6ecb1b1b0dd240aa1e4fc1df84fd2d1a03ed4f407898562a42d95ca6007->enter($__internal_471fb6ecb1b1b0dd240aa1e4fc1df84fd2d1a03ed4f407898562a42d95ca6007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_471fb6ecb1b1b0dd240aa1e4fc1df84fd2d1a03ed4f407898562a42d95ca6007->leave($__internal_471fb6ecb1b1b0dd240aa1e4fc1df84fd2d1a03ed4f407898562a42d95ca6007_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
