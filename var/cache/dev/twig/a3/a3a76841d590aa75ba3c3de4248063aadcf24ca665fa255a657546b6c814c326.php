<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_11a027a68168bfd75234d0e047511175a6985147ba29d2e754d9a0214393803e extends Twig_Template
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
        $__internal_b556594602632308e8141d7acea7084cb27532f5b1d2e59f6bccae29870d9527 = $this->env->getExtension("native_profiler");
        $__internal_b556594602632308e8141d7acea7084cb27532f5b1d2e59f6bccae29870d9527->enter($__internal_b556594602632308e8141d7acea7084cb27532f5b1d2e59f6bccae29870d9527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b556594602632308e8141d7acea7084cb27532f5b1d2e59f6bccae29870d9527->leave($__internal_b556594602632308e8141d7acea7084cb27532f5b1d2e59f6bccae29870d9527_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c8e886742ef0c5b67257aa0115c523263c78b5f50993e8bd97bd587a635562a = $this->env->getExtension("native_profiler");
        $__internal_8c8e886742ef0c5b67257aa0115c523263c78b5f50993e8bd97bd587a635562a->enter($__internal_8c8e886742ef0c5b67257aa0115c523263c78b5f50993e8bd97bd587a635562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c8e886742ef0c5b67257aa0115c523263c78b5f50993e8bd97bd587a635562a->leave($__internal_8c8e886742ef0c5b67257aa0115c523263c78b5f50993e8bd97bd587a635562a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abb3e2654e02bfed4173400ac6fdae5f5ccae53a5c355b8bc32801672ba3780e = $this->env->getExtension("native_profiler");
        $__internal_abb3e2654e02bfed4173400ac6fdae5f5ccae53a5c355b8bc32801672ba3780e->enter($__internal_abb3e2654e02bfed4173400ac6fdae5f5ccae53a5c355b8bc32801672ba3780e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_abb3e2654e02bfed4173400ac6fdae5f5ccae53a5c355b8bc32801672ba3780e->leave($__internal_abb3e2654e02bfed4173400ac6fdae5f5ccae53a5c355b8bc32801672ba3780e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92b2d3c1cbf7165c3d488522067441aeb8d64e58b21e871fdd70b46265487b23 = $this->env->getExtension("native_profiler");
        $__internal_92b2d3c1cbf7165c3d488522067441aeb8d64e58b21e871fdd70b46265487b23->enter($__internal_92b2d3c1cbf7165c3d488522067441aeb8d64e58b21e871fdd70b46265487b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92b2d3c1cbf7165c3d488522067441aeb8d64e58b21e871fdd70b46265487b23->leave($__internal_92b2d3c1cbf7165c3d488522067441aeb8d64e58b21e871fdd70b46265487b23_prof);

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
