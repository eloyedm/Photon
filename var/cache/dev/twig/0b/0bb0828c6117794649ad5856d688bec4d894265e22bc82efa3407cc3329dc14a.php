<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_177cd0e8c7de1591771a78043b4d0fc43c172a1e2f65964a890ab5d534e4cc93 extends Twig_Template
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
        $__internal_6a020362010c74d5323b79f3021d6bf072d3cacc74390974716e8f6116f8c317 = $this->env->getExtension("native_profiler");
        $__internal_6a020362010c74d5323b79f3021d6bf072d3cacc74390974716e8f6116f8c317->enter($__internal_6a020362010c74d5323b79f3021d6bf072d3cacc74390974716e8f6116f8c317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6a020362010c74d5323b79f3021d6bf072d3cacc74390974716e8f6116f8c317->leave($__internal_6a020362010c74d5323b79f3021d6bf072d3cacc74390974716e8f6116f8c317_prof);

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
