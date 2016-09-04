<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_84d017e09fb57c4bd5e565b071aa649de802790d0c2d413256edf1297c7cacdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef08e0c05bfc3ff3e642a8eeaa2fc77b885126644cbf84c5c731527d637396a6 = $this->env->getExtension("native_profiler");
        $__internal_ef08e0c05bfc3ff3e642a8eeaa2fc77b885126644cbf84c5c731527d637396a6->enter($__internal_ef08e0c05bfc3ff3e642a8eeaa2fc77b885126644cbf84c5c731527d637396a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef08e0c05bfc3ff3e642a8eeaa2fc77b885126644cbf84c5c731527d637396a6->leave($__internal_ef08e0c05bfc3ff3e642a8eeaa2fc77b885126644cbf84c5c731527d637396a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51763fa5372ec4fe1499f11a8f6a362a3f6ff20a8e20a9eadbf5f3067e77f12e = $this->env->getExtension("native_profiler");
        $__internal_51763fa5372ec4fe1499f11a8f6a362a3f6ff20a8e20a9eadbf5f3067e77f12e->enter($__internal_51763fa5372ec4fe1499f11a8f6a362a3f6ff20a8e20a9eadbf5f3067e77f12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_51763fa5372ec4fe1499f11a8f6a362a3f6ff20a8e20a9eadbf5f3067e77f12e->leave($__internal_51763fa5372ec4fe1499f11a8f6a362a3f6ff20a8e20a9eadbf5f3067e77f12e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37f36031b7152acbd36b9e366b6cb0da6181b96ebe68282bba0e79a804f1d50f = $this->env->getExtension("native_profiler");
        $__internal_37f36031b7152acbd36b9e366b6cb0da6181b96ebe68282bba0e79a804f1d50f->enter($__internal_37f36031b7152acbd36b9e366b6cb0da6181b96ebe68282bba0e79a804f1d50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37f36031b7152acbd36b9e366b6cb0da6181b96ebe68282bba0e79a804f1d50f->leave($__internal_37f36031b7152acbd36b9e366b6cb0da6181b96ebe68282bba0e79a804f1d50f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b81f1a6aa5f5800def4f5d388a464de1ef4545e20339c5431b036cbf9b7a1556 = $this->env->getExtension("native_profiler");
        $__internal_b81f1a6aa5f5800def4f5d388a464de1ef4545e20339c5431b036cbf9b7a1556->enter($__internal_b81f1a6aa5f5800def4f5d388a464de1ef4545e20339c5431b036cbf9b7a1556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b81f1a6aa5f5800def4f5d388a464de1ef4545e20339c5431b036cbf9b7a1556->leave($__internal_b81f1a6aa5f5800def4f5d388a464de1ef4545e20339c5431b036cbf9b7a1556_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
