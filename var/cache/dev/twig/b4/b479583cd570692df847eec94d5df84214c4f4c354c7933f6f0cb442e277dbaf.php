<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f3565929ba09f67aa3b30a3cc061275dd54565a2659aefd76a9030140cc4cd58 extends Twig_Template
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
        $__internal_9fbdfb63b6e2b5cf07b031f7ceb2a89f4dd0fde0c022a723690259fabeb3c0f3 = $this->env->getExtension("native_profiler");
        $__internal_9fbdfb63b6e2b5cf07b031f7ceb2a89f4dd0fde0c022a723690259fabeb3c0f3->enter($__internal_9fbdfb63b6e2b5cf07b031f7ceb2a89f4dd0fde0c022a723690259fabeb3c0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9fbdfb63b6e2b5cf07b031f7ceb2a89f4dd0fde0c022a723690259fabeb3c0f3->leave($__internal_9fbdfb63b6e2b5cf07b031f7ceb2a89f4dd0fde0c022a723690259fabeb3c0f3_prof);

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
