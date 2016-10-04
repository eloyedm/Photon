<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_20a55ed6786a0a02a8a8b621d74f5b115c66c899d02f16636d8531fbc009ea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1116c0d3fa91437dd86430e5754563ff62f724bae4dca49784f2f07d12fbe5c = $this->env->getExtension("native_profiler");
        $__internal_b1116c0d3fa91437dd86430e5754563ff62f724bae4dca49784f2f07d12fbe5c->enter($__internal_b1116c0d3fa91437dd86430e5754563ff62f724bae4dca49784f2f07d12fbe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1116c0d3fa91437dd86430e5754563ff62f724bae4dca49784f2f07d12fbe5c->leave($__internal_b1116c0d3fa91437dd86430e5754563ff62f724bae4dca49784f2f07d12fbe5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8db63a3a93ff91f5cc54355af054f0b1c50cc37b69c8e9e11287f33db0267d0 = $this->env->getExtension("native_profiler");
        $__internal_f8db63a3a93ff91f5cc54355af054f0b1c50cc37b69c8e9e11287f33db0267d0->enter($__internal_f8db63a3a93ff91f5cc54355af054f0b1c50cc37b69c8e9e11287f33db0267d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_f8db63a3a93ff91f5cc54355af054f0b1c50cc37b69c8e9e11287f33db0267d0->leave($__internal_f8db63a3a93ff91f5cc54355af054f0b1c50cc37b69c8e9e11287f33db0267d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
