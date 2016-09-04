<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_df2952e4f8b7948d80feaba7ca8ce5f02fe2bed80efd0bc5a155d3f72215ac2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_399e5c2e554d04fe20e5977b79d112bdf7270623ebb02832ad8f7e3120f31439 = $this->env->getExtension("native_profiler");
        $__internal_399e5c2e554d04fe20e5977b79d112bdf7270623ebb02832ad8f7e3120f31439->enter($__internal_399e5c2e554d04fe20e5977b79d112bdf7270623ebb02832ad8f7e3120f31439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_399e5c2e554d04fe20e5977b79d112bdf7270623ebb02832ad8f7e3120f31439->leave($__internal_399e5c2e554d04fe20e5977b79d112bdf7270623ebb02832ad8f7e3120f31439_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_340aade9e1efc1d635189c1724b46de4c21448cc848984101224a1b8e05c9b6d = $this->env->getExtension("native_profiler");
        $__internal_340aade9e1efc1d635189c1724b46de4c21448cc848984101224a1b8e05c9b6d->enter($__internal_340aade9e1efc1d635189c1724b46de4c21448cc848984101224a1b8e05c9b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_340aade9e1efc1d635189c1724b46de4c21448cc848984101224a1b8e05c9b6d->leave($__internal_340aade9e1efc1d635189c1724b46de4c21448cc848984101224a1b8e05c9b6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
