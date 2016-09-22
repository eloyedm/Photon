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
        $__internal_6147b080489e634f406a6edb07469503d79836145ea9ee20ffd57fe791cbeaa0 = $this->env->getExtension("native_profiler");
        $__internal_6147b080489e634f406a6edb07469503d79836145ea9ee20ffd57fe791cbeaa0->enter($__internal_6147b080489e634f406a6edb07469503d79836145ea9ee20ffd57fe791cbeaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6147b080489e634f406a6edb07469503d79836145ea9ee20ffd57fe791cbeaa0->leave($__internal_6147b080489e634f406a6edb07469503d79836145ea9ee20ffd57fe791cbeaa0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31e13083053cee8e129141b01d767444aa48ba32d198d9545e4d215af8d17420 = $this->env->getExtension("native_profiler");
        $__internal_31e13083053cee8e129141b01d767444aa48ba32d198d9545e4d215af8d17420->enter($__internal_31e13083053cee8e129141b01d767444aa48ba32d198d9545e4d215af8d17420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31e13083053cee8e129141b01d767444aa48ba32d198d9545e4d215af8d17420->leave($__internal_31e13083053cee8e129141b01d767444aa48ba32d198d9545e4d215af8d17420_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba48c75e66cf460b6c19a2cc0eab385bc41dc017525e9280762af1d7f73dad44 = $this->env->getExtension("native_profiler");
        $__internal_ba48c75e66cf460b6c19a2cc0eab385bc41dc017525e9280762af1d7f73dad44->enter($__internal_ba48c75e66cf460b6c19a2cc0eab385bc41dc017525e9280762af1d7f73dad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba48c75e66cf460b6c19a2cc0eab385bc41dc017525e9280762af1d7f73dad44->leave($__internal_ba48c75e66cf460b6c19a2cc0eab385bc41dc017525e9280762af1d7f73dad44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_887af261b9cfd6a0af80ab717e8d2a1a1476fb4e65f090098dd015212e50085d = $this->env->getExtension("native_profiler");
        $__internal_887af261b9cfd6a0af80ab717e8d2a1a1476fb4e65f090098dd015212e50085d->enter($__internal_887af261b9cfd6a0af80ab717e8d2a1a1476fb4e65f090098dd015212e50085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_887af261b9cfd6a0af80ab717e8d2a1a1476fb4e65f090098dd015212e50085d->leave($__internal_887af261b9cfd6a0af80ab717e8d2a1a1476fb4e65f090098dd015212e50085d_prof);

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
