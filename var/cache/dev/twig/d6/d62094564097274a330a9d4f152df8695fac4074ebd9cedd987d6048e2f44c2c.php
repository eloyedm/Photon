<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9831d0c5f82fc1841208f29f9dfab188a0e4971430d3f6478a28bc79c69b3640 extends Twig_Template
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
        $__internal_d4be160d03318cf71833c5937f539ace36b088c70b4ac7b441f734253ad8083c = $this->env->getExtension("native_profiler");
        $__internal_d4be160d03318cf71833c5937f539ace36b088c70b4ac7b441f734253ad8083c->enter($__internal_d4be160d03318cf71833c5937f539ace36b088c70b4ac7b441f734253ad8083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d4be160d03318cf71833c5937f539ace36b088c70b4ac7b441f734253ad8083c->leave($__internal_d4be160d03318cf71833c5937f539ace36b088c70b4ac7b441f734253ad8083c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
