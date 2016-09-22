<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_39bd31154a1897f2bbb3e7b10ea18fc62259f0dcfbbb8e9c435885cc2bf87cbd extends Twig_Template
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
        $__internal_6c9eb4d1a694591893ebf08f8f53bbb1ff1c553d1fa9609ed5417eb1437bc71f = $this->env->getExtension("native_profiler");
        $__internal_6c9eb4d1a694591893ebf08f8f53bbb1ff1c553d1fa9609ed5417eb1437bc71f->enter($__internal_6c9eb4d1a694591893ebf08f8f53bbb1ff1c553d1fa9609ed5417eb1437bc71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6c9eb4d1a694591893ebf08f8f53bbb1ff1c553d1fa9609ed5417eb1437bc71f->leave($__internal_6c9eb4d1a694591893ebf08f8f53bbb1ff1c553d1fa9609ed5417eb1437bc71f_prof);

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
