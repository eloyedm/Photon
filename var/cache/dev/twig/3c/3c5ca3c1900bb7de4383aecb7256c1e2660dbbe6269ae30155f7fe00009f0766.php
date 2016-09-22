<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8f94cbe32b19591c4b1e2420a6047797bea471589e835d9a7478b3118570819e extends Twig_Template
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
        $__internal_c17fb5d1b34fc0c345a1535ee4110da5226f0d721b679beb846563f5b2a20d6a = $this->env->getExtension("native_profiler");
        $__internal_c17fb5d1b34fc0c345a1535ee4110da5226f0d721b679beb846563f5b2a20d6a->enter($__internal_c17fb5d1b34fc0c345a1535ee4110da5226f0d721b679beb846563f5b2a20d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c17fb5d1b34fc0c345a1535ee4110da5226f0d721b679beb846563f5b2a20d6a->leave($__internal_c17fb5d1b34fc0c345a1535ee4110da5226f0d721b679beb846563f5b2a20d6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
