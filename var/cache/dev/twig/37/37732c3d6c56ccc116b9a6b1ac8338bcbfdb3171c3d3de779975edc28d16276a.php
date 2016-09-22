<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e5586e1c0c27a8654c5f110f0dd2f1bd8f569d95d8ed02edaa14a86db8eec301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93066b7acfde112e3aafea076a7d372f488d1ce42512a2812974a901f8725eda = $this->env->getExtension("native_profiler");
        $__internal_93066b7acfde112e3aafea076a7d372f488d1ce42512a2812974a901f8725eda->enter($__internal_93066b7acfde112e3aafea076a7d372f488d1ce42512a2812974a901f8725eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93066b7acfde112e3aafea076a7d372f488d1ce42512a2812974a901f8725eda->leave($__internal_93066b7acfde112e3aafea076a7d372f488d1ce42512a2812974a901f8725eda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3653c28f36f1fd36d6b5da963627675208d331a4e414ccb2721223d687a1a02 = $this->env->getExtension("native_profiler");
        $__internal_d3653c28f36f1fd36d6b5da963627675208d331a4e414ccb2721223d687a1a02->enter($__internal_d3653c28f36f1fd36d6b5da963627675208d331a4e414ccb2721223d687a1a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3653c28f36f1fd36d6b5da963627675208d331a4e414ccb2721223d687a1a02->leave($__internal_d3653c28f36f1fd36d6b5da963627675208d331a4e414ccb2721223d687a1a02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e904e61bbc8718630f6f710ece71504998b02e66cc5330420f32e996e4363b3 = $this->env->getExtension("native_profiler");
        $__internal_2e904e61bbc8718630f6f710ece71504998b02e66cc5330420f32e996e4363b3->enter($__internal_2e904e61bbc8718630f6f710ece71504998b02e66cc5330420f32e996e4363b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e904e61bbc8718630f6f710ece71504998b02e66cc5330420f32e996e4363b3->leave($__internal_2e904e61bbc8718630f6f710ece71504998b02e66cc5330420f32e996e4363b3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b76a21c669422571ee7fc924a2f920ea36e17111d4405abe066ae29e4603ec4 = $this->env->getExtension("native_profiler");
        $__internal_0b76a21c669422571ee7fc924a2f920ea36e17111d4405abe066ae29e4603ec4->enter($__internal_0b76a21c669422571ee7fc924a2f920ea36e17111d4405abe066ae29e4603ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b76a21c669422571ee7fc924a2f920ea36e17111d4405abe066ae29e4603ec4->leave($__internal_0b76a21c669422571ee7fc924a2f920ea36e17111d4405abe066ae29e4603ec4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
