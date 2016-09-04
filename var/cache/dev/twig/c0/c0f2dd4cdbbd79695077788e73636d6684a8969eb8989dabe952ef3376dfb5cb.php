<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3345d52114a88dba0c06acddee47bb93a0767eddb0eac1f7d0fe5f8b0627463a extends Twig_Template
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
        $__internal_d36df25de9be77a7b57e5fe20a10bdc718c5fca2a078c634d48f06bb5f43dca5 = $this->env->getExtension("native_profiler");
        $__internal_d36df25de9be77a7b57e5fe20a10bdc718c5fca2a078c634d48f06bb5f43dca5->enter($__internal_d36df25de9be77a7b57e5fe20a10bdc718c5fca2a078c634d48f06bb5f43dca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d36df25de9be77a7b57e5fe20a10bdc718c5fca2a078c634d48f06bb5f43dca5->leave($__internal_d36df25de9be77a7b57e5fe20a10bdc718c5fca2a078c634d48f06bb5f43dca5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
