<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1514ae6a45f266d292fc8602f8c0a4bb3f2e3e01afa8956fcb43a17301041cf1 extends Twig_Template
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
        $__internal_044663f5c74721aa2b582f68b7c48aee2cf02fe86becb4e28bdc1b05ccc6e75a = $this->env->getExtension("native_profiler");
        $__internal_044663f5c74721aa2b582f68b7c48aee2cf02fe86becb4e28bdc1b05ccc6e75a->enter($__internal_044663f5c74721aa2b582f68b7c48aee2cf02fe86becb4e28bdc1b05ccc6e75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_044663f5c74721aa2b582f68b7c48aee2cf02fe86becb4e28bdc1b05ccc6e75a->leave($__internal_044663f5c74721aa2b582f68b7c48aee2cf02fe86becb4e28bdc1b05ccc6e75a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
