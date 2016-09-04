<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8bd6694d59d0f696e0a3f8125019868d033d9daca70459f8109cca363b8808b6 extends Twig_Template
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
        $__internal_5b94fb2d9b8d53ca50db37885e11b986b8115acd06570cd1fffba2256f9b26e1 = $this->env->getExtension("native_profiler");
        $__internal_5b94fb2d9b8d53ca50db37885e11b986b8115acd06570cd1fffba2256f9b26e1->enter($__internal_5b94fb2d9b8d53ca50db37885e11b986b8115acd06570cd1fffba2256f9b26e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5b94fb2d9b8d53ca50db37885e11b986b8115acd06570cd1fffba2256f9b26e1->leave($__internal_5b94fb2d9b8d53ca50db37885e11b986b8115acd06570cd1fffba2256f9b26e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
