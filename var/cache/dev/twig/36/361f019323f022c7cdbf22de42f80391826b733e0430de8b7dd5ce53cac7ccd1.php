<?php

/* PhotomBundle:Default:index.html.twig */
class __TwigTemplate_1beaf92673947b7a931fa8c864951b1a6557087f96cd35aafc28b937bd0f4ed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PhotomBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa36328b4a0d03be363589876fef4e27b9ff606f93ca5d77553f271dab080ca = $this->env->getExtension("native_profiler");
        $__internal_cfa36328b4a0d03be363589876fef4e27b9ff606f93ca5d77553f271dab080ca->enter($__internal_cfa36328b4a0d03be363589876fef4e27b9ff606f93ca5d77553f271dab080ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PhotomBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa36328b4a0d03be363589876fef4e27b9ff606f93ca5d77553f271dab080ca->leave($__internal_cfa36328b4a0d03be363589876fef4e27b9ff606f93ca5d77553f271dab080ca_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_500dba728b0ab5bff75b5c15f6e920d16580c3d60956ce49d44d4e012c15ab72 = $this->env->getExtension("native_profiler");
        $__internal_500dba728b0ab5bff75b5c15f6e920d16580c3d60956ce49d44d4e012c15ab72->enter($__internal_500dba728b0ab5bff75b5c15f6e920d16580c3d60956ce49d44d4e012c15ab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"\">
  Photon is alives
  <div> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["photon"]) ? $context["photon"] : $this->getContext($context, "photon")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_500dba728b0ab5bff75b5c15f6e920d16580c3d60956ce49d44d4e012c15ab72->leave($__internal_500dba728b0ab5bff75b5c15f6e920d16580c3d60956ce49d44d4e012c15ab72_prof);

    }

    public function getTemplateName()
    {
        return "PhotomBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="">*/
/*   Photon is alives*/
/*   <div> {{ photon }}</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
