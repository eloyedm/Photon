<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1d5f4c1f33f983c337ab187ed81989c3c3e98c93cf152a3d294449aa495336b6 extends Twig_Template
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
        $__internal_a8149ccd85a7a62d0fac7bad34f5fe546b46ff83201e228c024e02b8e01ba4c8 = $this->env->getExtension("native_profiler");
        $__internal_a8149ccd85a7a62d0fac7bad34f5fe546b46ff83201e228c024e02b8e01ba4c8->enter($__internal_a8149ccd85a7a62d0fac7bad34f5fe546b46ff83201e228c024e02b8e01ba4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a8149ccd85a7a62d0fac7bad34f5fe546b46ff83201e228c024e02b8e01ba4c8->leave($__internal_a8149ccd85a7a62d0fac7bad34f5fe546b46ff83201e228c024e02b8e01ba4c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
