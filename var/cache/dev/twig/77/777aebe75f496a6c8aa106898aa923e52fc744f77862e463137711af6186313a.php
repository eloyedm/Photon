<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b778cd0e5dd461b4797f92b792caee878f9b71b22c64b4b65dccd12b5a5ab6cc extends Twig_Template
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
        $__internal_ae2bbfc3edfd18a48fdbe6d8d1157db7d244868882cb3529aaf67800ee948555 = $this->env->getExtension("native_profiler");
        $__internal_ae2bbfc3edfd18a48fdbe6d8d1157db7d244868882cb3529aaf67800ee948555->enter($__internal_ae2bbfc3edfd18a48fdbe6d8d1157db7d244868882cb3529aaf67800ee948555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ae2bbfc3edfd18a48fdbe6d8d1157db7d244868882cb3529aaf67800ee948555->leave($__internal_ae2bbfc3edfd18a48fdbe6d8d1157db7d244868882cb3529aaf67800ee948555_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
