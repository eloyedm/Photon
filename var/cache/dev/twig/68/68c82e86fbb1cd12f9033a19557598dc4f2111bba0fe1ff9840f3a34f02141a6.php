<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bf931f553db1d8bbc4debd73b74f473de28008efcd7918b9d7ea3c953b5ec634 extends Twig_Template
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
        $__internal_6542ee81b4404477b711c9d31f9078e8f5da71f8493d657a978139bc0fb5e672 = $this->env->getExtension("native_profiler");
        $__internal_6542ee81b4404477b711c9d31f9078e8f5da71f8493d657a978139bc0fb5e672->enter($__internal_6542ee81b4404477b711c9d31f9078e8f5da71f8493d657a978139bc0fb5e672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6542ee81b4404477b711c9d31f9078e8f5da71f8493d657a978139bc0fb5e672->leave($__internal_6542ee81b4404477b711c9d31f9078e8f5da71f8493d657a978139bc0fb5e672_prof);

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
