<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3e259689fe857c71826d462f498dbce214794f6a3e371d357d087ae5bfdf9805 extends Twig_Template
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
        $__internal_7ced0f39ab8f1a3d7d1a982e79c59afb6c028a14a53428febefc163e4ec509e2 = $this->env->getExtension("native_profiler");
        $__internal_7ced0f39ab8f1a3d7d1a982e79c59afb6c028a14a53428febefc163e4ec509e2->enter($__internal_7ced0f39ab8f1a3d7d1a982e79c59afb6c028a14a53428febefc163e4ec509e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ced0f39ab8f1a3d7d1a982e79c59afb6c028a14a53428febefc163e4ec509e2->leave($__internal_7ced0f39ab8f1a3d7d1a982e79c59afb6c028a14a53428febefc163e4ec509e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff91cfb2b8a6ee5acd3c03e8e847ee782678adc33fccc23749856911596947a1 = $this->env->getExtension("native_profiler");
        $__internal_ff91cfb2b8a6ee5acd3c03e8e847ee782678adc33fccc23749856911596947a1->enter($__internal_ff91cfb2b8a6ee5acd3c03e8e847ee782678adc33fccc23749856911596947a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff91cfb2b8a6ee5acd3c03e8e847ee782678adc33fccc23749856911596947a1->leave($__internal_ff91cfb2b8a6ee5acd3c03e8e847ee782678adc33fccc23749856911596947a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08af9af85130dc5ce7551008e1e0046bfd61661928e978cacfa49b5f18c67265 = $this->env->getExtension("native_profiler");
        $__internal_08af9af85130dc5ce7551008e1e0046bfd61661928e978cacfa49b5f18c67265->enter($__internal_08af9af85130dc5ce7551008e1e0046bfd61661928e978cacfa49b5f18c67265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08af9af85130dc5ce7551008e1e0046bfd61661928e978cacfa49b5f18c67265->leave($__internal_08af9af85130dc5ce7551008e1e0046bfd61661928e978cacfa49b5f18c67265_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bd4b09287f3c018946c6c97e698bcb02fa5fbc137b94b374ff9ef096d98b3ec = $this->env->getExtension("native_profiler");
        $__internal_3bd4b09287f3c018946c6c97e698bcb02fa5fbc137b94b374ff9ef096d98b3ec->enter($__internal_3bd4b09287f3c018946c6c97e698bcb02fa5fbc137b94b374ff9ef096d98b3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3bd4b09287f3c018946c6c97e698bcb02fa5fbc137b94b374ff9ef096d98b3ec->leave($__internal_3bd4b09287f3c018946c6c97e698bcb02fa5fbc137b94b374ff9ef096d98b3ec_prof);

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
