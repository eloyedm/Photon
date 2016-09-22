<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_06196745854e80202924c7eba8319ed18f7d43940c46748e4a0ce14a245f374c extends Twig_Template
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
        $__internal_7a3dabc23b47a1b4ff31d685a2953b43eb0a53483d8cdcff9852b731c195ad53 = $this->env->getExtension("native_profiler");
        $__internal_7a3dabc23b47a1b4ff31d685a2953b43eb0a53483d8cdcff9852b731c195ad53->enter($__internal_7a3dabc23b47a1b4ff31d685a2953b43eb0a53483d8cdcff9852b731c195ad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3dabc23b47a1b4ff31d685a2953b43eb0a53483d8cdcff9852b731c195ad53->leave($__internal_7a3dabc23b47a1b4ff31d685a2953b43eb0a53483d8cdcff9852b731c195ad53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb3076299b37cc0b0dad6d73c1d57ec706b4f92e9cfc593c9a13fe0ba07d52ea = $this->env->getExtension("native_profiler");
        $__internal_fb3076299b37cc0b0dad6d73c1d57ec706b4f92e9cfc593c9a13fe0ba07d52ea->enter($__internal_fb3076299b37cc0b0dad6d73c1d57ec706b4f92e9cfc593c9a13fe0ba07d52ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb3076299b37cc0b0dad6d73c1d57ec706b4f92e9cfc593c9a13fe0ba07d52ea->leave($__internal_fb3076299b37cc0b0dad6d73c1d57ec706b4f92e9cfc593c9a13fe0ba07d52ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c84cf8cb3af3fb711ca79f85fa2275922c0ed84e70b5de8759e4c597399bb40 = $this->env->getExtension("native_profiler");
        $__internal_9c84cf8cb3af3fb711ca79f85fa2275922c0ed84e70b5de8759e4c597399bb40->enter($__internal_9c84cf8cb3af3fb711ca79f85fa2275922c0ed84e70b5de8759e4c597399bb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c84cf8cb3af3fb711ca79f85fa2275922c0ed84e70b5de8759e4c597399bb40->leave($__internal_9c84cf8cb3af3fb711ca79f85fa2275922c0ed84e70b5de8759e4c597399bb40_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_04fc410ba3c47249b31578eac9b7cf60d3aab0a798fd5045d31f44f03a66efbd = $this->env->getExtension("native_profiler");
        $__internal_04fc410ba3c47249b31578eac9b7cf60d3aab0a798fd5045d31f44f03a66efbd->enter($__internal_04fc410ba3c47249b31578eac9b7cf60d3aab0a798fd5045d31f44f03a66efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_04fc410ba3c47249b31578eac9b7cf60d3aab0a798fd5045d31f44f03a66efbd->leave($__internal_04fc410ba3c47249b31578eac9b7cf60d3aab0a798fd5045d31f44f03a66efbd_prof);

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
