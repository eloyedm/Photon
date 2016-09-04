<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3939c82fb7a0cfbfe80baa1adb668d3719702b8ed435c1fce3a7ce56dd9908a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f7baf0a9b5d50b7d763daa07c97f3617c4488f351519a546ca5002047d05003e = $this->env->getExtension("native_profiler");
        $__internal_f7baf0a9b5d50b7d763daa07c97f3617c4488f351519a546ca5002047d05003e->enter($__internal_f7baf0a9b5d50b7d763daa07c97f3617c4488f351519a546ca5002047d05003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7baf0a9b5d50b7d763daa07c97f3617c4488f351519a546ca5002047d05003e->leave($__internal_f7baf0a9b5d50b7d763daa07c97f3617c4488f351519a546ca5002047d05003e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1770dd281cb56bc916a866e7c345f7ec731b513fb724d622a13919eb048fa525 = $this->env->getExtension("native_profiler");
        $__internal_1770dd281cb56bc916a866e7c345f7ec731b513fb724d622a13919eb048fa525->enter($__internal_1770dd281cb56bc916a866e7c345f7ec731b513fb724d622a13919eb048fa525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1770dd281cb56bc916a866e7c345f7ec731b513fb724d622a13919eb048fa525->leave($__internal_1770dd281cb56bc916a866e7c345f7ec731b513fb724d622a13919eb048fa525_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64c0b4ae97af4d11f80d79cdd169775717556f76a0ded65321bdeeaa2983c7e4 = $this->env->getExtension("native_profiler");
        $__internal_64c0b4ae97af4d11f80d79cdd169775717556f76a0ded65321bdeeaa2983c7e4->enter($__internal_64c0b4ae97af4d11f80d79cdd169775717556f76a0ded65321bdeeaa2983c7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_64c0b4ae97af4d11f80d79cdd169775717556f76a0ded65321bdeeaa2983c7e4->leave($__internal_64c0b4ae97af4d11f80d79cdd169775717556f76a0ded65321bdeeaa2983c7e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e17be57eced5e92f2b1fb4b74d4955454ea47186c2e2384b260686823d598e1 = $this->env->getExtension("native_profiler");
        $__internal_6e17be57eced5e92f2b1fb4b74d4955454ea47186c2e2384b260686823d598e1->enter($__internal_6e17be57eced5e92f2b1fb4b74d4955454ea47186c2e2384b260686823d598e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6e17be57eced5e92f2b1fb4b74d4955454ea47186c2e2384b260686823d598e1->leave($__internal_6e17be57eced5e92f2b1fb4b74d4955454ea47186c2e2384b260686823d598e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
