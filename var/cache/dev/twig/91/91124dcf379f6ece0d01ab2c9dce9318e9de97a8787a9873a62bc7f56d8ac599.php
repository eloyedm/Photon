<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3d6e2791fedcebf3dffa3fa29d15fe10c6d6eca3ddd904f7f777b3cfaa49e36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4bae4ddc60136e345461367bbc4fed3dc24399ec6c9105aa453059d81e8ac27a = $this->env->getExtension("native_profiler");
        $__internal_4bae4ddc60136e345461367bbc4fed3dc24399ec6c9105aa453059d81e8ac27a->enter($__internal_4bae4ddc60136e345461367bbc4fed3dc24399ec6c9105aa453059d81e8ac27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bae4ddc60136e345461367bbc4fed3dc24399ec6c9105aa453059d81e8ac27a->leave($__internal_4bae4ddc60136e345461367bbc4fed3dc24399ec6c9105aa453059d81e8ac27a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_709a9aa6607f9203755a7ce1b5ad02793936cce7e9a6a9859818c8a9fddb2a30 = $this->env->getExtension("native_profiler");
        $__internal_709a9aa6607f9203755a7ce1b5ad02793936cce7e9a6a9859818c8a9fddb2a30->enter($__internal_709a9aa6607f9203755a7ce1b5ad02793936cce7e9a6a9859818c8a9fddb2a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_709a9aa6607f9203755a7ce1b5ad02793936cce7e9a6a9859818c8a9fddb2a30->leave($__internal_709a9aa6607f9203755a7ce1b5ad02793936cce7e9a6a9859818c8a9fddb2a30_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_08f3b693e97e983ab4a1cb024b89bb9f5c045b37f295f17217365e12928824fe = $this->env->getExtension("native_profiler");
        $__internal_08f3b693e97e983ab4a1cb024b89bb9f5c045b37f295f17217365e12928824fe->enter($__internal_08f3b693e97e983ab4a1cb024b89bb9f5c045b37f295f17217365e12928824fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_08f3b693e97e983ab4a1cb024b89bb9f5c045b37f295f17217365e12928824fe->leave($__internal_08f3b693e97e983ab4a1cb024b89bb9f5c045b37f295f17217365e12928824fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
