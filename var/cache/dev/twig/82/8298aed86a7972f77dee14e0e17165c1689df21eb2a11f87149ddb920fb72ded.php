<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_40e2a259ab5ea7256a33ac03bee59e23db55e325048dbfb095d150eae563d3a0 extends Twig_Template
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
        $__internal_f419c3b129bcfcf5fccc3f37bc5f6ca0fc28f0d0cf2d8198acb589519dcd7cb8 = $this->env->getExtension("native_profiler");
        $__internal_f419c3b129bcfcf5fccc3f37bc5f6ca0fc28f0d0cf2d8198acb589519dcd7cb8->enter($__internal_f419c3b129bcfcf5fccc3f37bc5f6ca0fc28f0d0cf2d8198acb589519dcd7cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f419c3b129bcfcf5fccc3f37bc5f6ca0fc28f0d0cf2d8198acb589519dcd7cb8->leave($__internal_f419c3b129bcfcf5fccc3f37bc5f6ca0fc28f0d0cf2d8198acb589519dcd7cb8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21c5df9d9085a967ea05924d32e25bf63aca9a772565aaa1560a4ca28b3d6290 = $this->env->getExtension("native_profiler");
        $__internal_21c5df9d9085a967ea05924d32e25bf63aca9a772565aaa1560a4ca28b3d6290->enter($__internal_21c5df9d9085a967ea05924d32e25bf63aca9a772565aaa1560a4ca28b3d6290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_21c5df9d9085a967ea05924d32e25bf63aca9a772565aaa1560a4ca28b3d6290->leave($__internal_21c5df9d9085a967ea05924d32e25bf63aca9a772565aaa1560a4ca28b3d6290_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4b977478369fab749f38a98321b17e4ed9b4fc7d7e2be501e6d4b4b6e1f4d44 = $this->env->getExtension("native_profiler");
        $__internal_c4b977478369fab749f38a98321b17e4ed9b4fc7d7e2be501e6d4b4b6e1f4d44->enter($__internal_c4b977478369fab749f38a98321b17e4ed9b4fc7d7e2be501e6d4b4b6e1f4d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4b977478369fab749f38a98321b17e4ed9b4fc7d7e2be501e6d4b4b6e1f4d44->leave($__internal_c4b977478369fab749f38a98321b17e4ed9b4fc7d7e2be501e6d4b4b6e1f4d44_prof);

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
