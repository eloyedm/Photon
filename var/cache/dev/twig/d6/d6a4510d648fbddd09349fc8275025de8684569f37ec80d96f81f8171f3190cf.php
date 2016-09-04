<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_31019f6175a81cc9305878a8594237173decfe52b455b6b71c7542a6f664a713 extends Twig_Template
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
        $__internal_50c4c750125e27018debf0672249e68aaa694a368e6ee32c6ead8206ae83a0c9 = $this->env->getExtension("native_profiler");
        $__internal_50c4c750125e27018debf0672249e68aaa694a368e6ee32c6ead8206ae83a0c9->enter($__internal_50c4c750125e27018debf0672249e68aaa694a368e6ee32c6ead8206ae83a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_50c4c750125e27018debf0672249e68aaa694a368e6ee32c6ead8206ae83a0c9->leave($__internal_50c4c750125e27018debf0672249e68aaa694a368e6ee32c6ead8206ae83a0c9_prof);

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
