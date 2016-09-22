<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7ff6d23e7c2b1f1a26ce4505bda10ba8c32c4c320b528d3edbd19d9e6d320a01 extends Twig_Template
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
        $__internal_bf952d6578947b0b9d1bcfe7b19098582405c6767302c555473264fd8488fe18 = $this->env->getExtension("native_profiler");
        $__internal_bf952d6578947b0b9d1bcfe7b19098582405c6767302c555473264fd8488fe18->enter($__internal_bf952d6578947b0b9d1bcfe7b19098582405c6767302c555473264fd8488fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bf952d6578947b0b9d1bcfe7b19098582405c6767302c555473264fd8488fe18->leave($__internal_bf952d6578947b0b9d1bcfe7b19098582405c6767302c555473264fd8488fe18_prof);

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
