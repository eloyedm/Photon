<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52af7319551b1eb47e5feb5f5ed8fac47c7353efff115ec770bc787f2ef62b42 extends Twig_Template
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
        $__internal_bd010e1a3828edc2b0acdab87acfead2266b7f2c73790a17cf1aee0af10e6658 = $this->env->getExtension("native_profiler");
        $__internal_bd010e1a3828edc2b0acdab87acfead2266b7f2c73790a17cf1aee0af10e6658->enter($__internal_bd010e1a3828edc2b0acdab87acfead2266b7f2c73790a17cf1aee0af10e6658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd010e1a3828edc2b0acdab87acfead2266b7f2c73790a17cf1aee0af10e6658->leave($__internal_bd010e1a3828edc2b0acdab87acfead2266b7f2c73790a17cf1aee0af10e6658_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa665c9aeec11242090b5718d4bd64098754b01daeea02e10495e66a9a93a17f = $this->env->getExtension("native_profiler");
        $__internal_aa665c9aeec11242090b5718d4bd64098754b01daeea02e10495e66a9a93a17f->enter($__internal_aa665c9aeec11242090b5718d4bd64098754b01daeea02e10495e66a9a93a17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa665c9aeec11242090b5718d4bd64098754b01daeea02e10495e66a9a93a17f->leave($__internal_aa665c9aeec11242090b5718d4bd64098754b01daeea02e10495e66a9a93a17f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dcfb0c6909a73379f392340ad22b8953265e94d5bc8a444a22f1cbf1be1acad = $this->env->getExtension("native_profiler");
        $__internal_7dcfb0c6909a73379f392340ad22b8953265e94d5bc8a444a22f1cbf1be1acad->enter($__internal_7dcfb0c6909a73379f392340ad22b8953265e94d5bc8a444a22f1cbf1be1acad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7dcfb0c6909a73379f392340ad22b8953265e94d5bc8a444a22f1cbf1be1acad->leave($__internal_7dcfb0c6909a73379f392340ad22b8953265e94d5bc8a444a22f1cbf1be1acad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f67bf268e28dcf1bb89d9773779a67fcb33e4b9868472e461aaf3ef7169dfeb9 = $this->env->getExtension("native_profiler");
        $__internal_f67bf268e28dcf1bb89d9773779a67fcb33e4b9868472e461aaf3ef7169dfeb9->enter($__internal_f67bf268e28dcf1bb89d9773779a67fcb33e4b9868472e461aaf3ef7169dfeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f67bf268e28dcf1bb89d9773779a67fcb33e4b9868472e461aaf3ef7169dfeb9->leave($__internal_f67bf268e28dcf1bb89d9773779a67fcb33e4b9868472e461aaf3ef7169dfeb9_prof);

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
