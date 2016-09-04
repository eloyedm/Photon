<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bb3718fd8dc58395231a5e16625d1607ec157b848fac810fbe8ec6219fab2ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_28f4985e61c7944e0e220a560d2bfda7919b7e210ca5987c89733f9b17398a48 = $this->env->getExtension("native_profiler");
        $__internal_28f4985e61c7944e0e220a560d2bfda7919b7e210ca5987c89733f9b17398a48->enter($__internal_28f4985e61c7944e0e220a560d2bfda7919b7e210ca5987c89733f9b17398a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f4985e61c7944e0e220a560d2bfda7919b7e210ca5987c89733f9b17398a48->leave($__internal_28f4985e61c7944e0e220a560d2bfda7919b7e210ca5987c89733f9b17398a48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e79030a4966935c6690d080ad3c0635f7406ba61a592ac76c98c8ff7e34e0c72 = $this->env->getExtension("native_profiler");
        $__internal_e79030a4966935c6690d080ad3c0635f7406ba61a592ac76c98c8ff7e34e0c72->enter($__internal_e79030a4966935c6690d080ad3c0635f7406ba61a592ac76c98c8ff7e34e0c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e79030a4966935c6690d080ad3c0635f7406ba61a592ac76c98c8ff7e34e0c72->leave($__internal_e79030a4966935c6690d080ad3c0635f7406ba61a592ac76c98c8ff7e34e0c72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d4b881d65c4c47500f66774806e03399f5597324e99af4d02d75ada06370b14 = $this->env->getExtension("native_profiler");
        $__internal_9d4b881d65c4c47500f66774806e03399f5597324e99af4d02d75ada06370b14->enter($__internal_9d4b881d65c4c47500f66774806e03399f5597324e99af4d02d75ada06370b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d4b881d65c4c47500f66774806e03399f5597324e99af4d02d75ada06370b14->leave($__internal_9d4b881d65c4c47500f66774806e03399f5597324e99af4d02d75ada06370b14_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99263ab7ab2a66b46c12fefad0b8ca2a3a98c0741dbe3c3e95dcc5b8cd1091e5 = $this->env->getExtension("native_profiler");
        $__internal_99263ab7ab2a66b46c12fefad0b8ca2a3a98c0741dbe3c3e95dcc5b8cd1091e5->enter($__internal_99263ab7ab2a66b46c12fefad0b8ca2a3a98c0741dbe3c3e95dcc5b8cd1091e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_99263ab7ab2a66b46c12fefad0b8ca2a3a98c0741dbe3c3e95dcc5b8cd1091e5->leave($__internal_99263ab7ab2a66b46c12fefad0b8ca2a3a98c0741dbe3c3e95dcc5b8cd1091e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
