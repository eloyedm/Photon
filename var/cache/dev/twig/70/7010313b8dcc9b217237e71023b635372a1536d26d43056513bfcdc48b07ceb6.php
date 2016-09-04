<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e48b08922b3a022103adfed3d5ebea8481955de0f9fa93fc63eecae202f430d7 extends Twig_Template
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
        $__internal_015ae3a557e336ff3935c886b9d252c098bd7ab716bc34f9972e88d4e05fc4f9 = $this->env->getExtension("native_profiler");
        $__internal_015ae3a557e336ff3935c886b9d252c098bd7ab716bc34f9972e88d4e05fc4f9->enter($__internal_015ae3a557e336ff3935c886b9d252c098bd7ab716bc34f9972e88d4e05fc4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_015ae3a557e336ff3935c886b9d252c098bd7ab716bc34f9972e88d4e05fc4f9->leave($__internal_015ae3a557e336ff3935c886b9d252c098bd7ab716bc34f9972e88d4e05fc4f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
