<?php

/* ::base.html.twig */
class __TwigTemplate_7633ec7e86826b4c0b6bc5473754de78223530597f6cc579fa8a6e49cb7b668e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4b15c143743485a1f1f335fca9b8f4c37940216bb7e819f7fd60c59d381f6d9 = $this->env->getExtension("native_profiler");
        $__internal_e4b15c143743485a1f1f335fca9b8f4c37940216bb7e819f7fd60c59d381f6d9->enter($__internal_e4b15c143743485a1f1f335fca9b8f4c37940216bb7e819f7fd60c59d381f6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e4b15c143743485a1f1f335fca9b8f4c37940216bb7e819f7fd60c59d381f6d9->leave($__internal_e4b15c143743485a1f1f335fca9b8f4c37940216bb7e819f7fd60c59d381f6d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e907629f46302afcb17292cdfba412d3e31095e730823c52f32799510366de65 = $this->env->getExtension("native_profiler");
        $__internal_e907629f46302afcb17292cdfba412d3e31095e730823c52f32799510366de65->enter($__internal_e907629f46302afcb17292cdfba412d3e31095e730823c52f32799510366de65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e907629f46302afcb17292cdfba412d3e31095e730823c52f32799510366de65->leave($__internal_e907629f46302afcb17292cdfba412d3e31095e730823c52f32799510366de65_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ae20c20e595cd5a7dba46bb5c0f2a80b363b81082276016a63014f25e20c836 = $this->env->getExtension("native_profiler");
        $__internal_4ae20c20e595cd5a7dba46bb5c0f2a80b363b81082276016a63014f25e20c836->enter($__internal_4ae20c20e595cd5a7dba46bb5c0f2a80b363b81082276016a63014f25e20c836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ae20c20e595cd5a7dba46bb5c0f2a80b363b81082276016a63014f25e20c836->leave($__internal_4ae20c20e595cd5a7dba46bb5c0f2a80b363b81082276016a63014f25e20c836_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f11c37470449f230b1c458ec06c9279768375590966012ae906866f92a146661 = $this->env->getExtension("native_profiler");
        $__internal_f11c37470449f230b1c458ec06c9279768375590966012ae906866f92a146661->enter($__internal_f11c37470449f230b1c458ec06c9279768375590966012ae906866f92a146661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f11c37470449f230b1c458ec06c9279768375590966012ae906866f92a146661->leave($__internal_f11c37470449f230b1c458ec06c9279768375590966012ae906866f92a146661_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_242ddedc8c421e81589db4cce1cf2464fd36c0d825223b0b816845fab589a1dd = $this->env->getExtension("native_profiler");
        $__internal_242ddedc8c421e81589db4cce1cf2464fd36c0d825223b0b816845fab589a1dd->enter($__internal_242ddedc8c421e81589db4cce1cf2464fd36c0d825223b0b816845fab589a1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_242ddedc8c421e81589db4cce1cf2464fd36c0d825223b0b816845fab589a1dd->leave($__internal_242ddedc8c421e81589db4cce1cf2464fd36c0d825223b0b816845fab589a1dd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
