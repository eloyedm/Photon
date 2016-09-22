<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c651ba141b8324a71c4fb81d4740d43affd365204566ad8305828f7ecd1a57e5 extends Twig_Template
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
        $__internal_d6fe4eb7d017d5b9d36dd126d83b44118a183c21729512d6eea920b105489b9c = $this->env->getExtension("native_profiler");
        $__internal_d6fe4eb7d017d5b9d36dd126d83b44118a183c21729512d6eea920b105489b9c->enter($__internal_d6fe4eb7d017d5b9d36dd126d83b44118a183c21729512d6eea920b105489b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d6fe4eb7d017d5b9d36dd126d83b44118a183c21729512d6eea920b105489b9c->leave($__internal_d6fe4eb7d017d5b9d36dd126d83b44118a183c21729512d6eea920b105489b9c_prof);

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
