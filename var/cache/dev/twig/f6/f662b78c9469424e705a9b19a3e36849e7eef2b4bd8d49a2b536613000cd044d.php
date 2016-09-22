<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_87473eab2e4f2383f0c50d46683132fd86602d0650471a0219d17dc1ef8d061e extends Twig_Template
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
        $__internal_9202901fbbc24f1cde99c1a0ee60dc1659c944659d75b1b5774cb4d8aa81d11b = $this->env->getExtension("native_profiler");
        $__internal_9202901fbbc24f1cde99c1a0ee60dc1659c944659d75b1b5774cb4d8aa81d11b->enter($__internal_9202901fbbc24f1cde99c1a0ee60dc1659c944659d75b1b5774cb4d8aa81d11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9202901fbbc24f1cde99c1a0ee60dc1659c944659d75b1b5774cb4d8aa81d11b->leave($__internal_9202901fbbc24f1cde99c1a0ee60dc1659c944659d75b1b5774cb4d8aa81d11b_prof);

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
