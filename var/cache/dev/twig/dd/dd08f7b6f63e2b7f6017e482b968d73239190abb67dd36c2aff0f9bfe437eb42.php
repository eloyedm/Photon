<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_27e4dd3610added22932a12a776afbb779a7e34870d171b3292779b9bb1f1a35 extends Twig_Template
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
        $__internal_390911ceaa68c79499b7c2e79dbc8030c8cadc5af18656fd5d335f0b75b44710 = $this->env->getExtension("native_profiler");
        $__internal_390911ceaa68c79499b7c2e79dbc8030c8cadc5af18656fd5d335f0b75b44710->enter($__internal_390911ceaa68c79499b7c2e79dbc8030c8cadc5af18656fd5d335f0b75b44710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_390911ceaa68c79499b7c2e79dbc8030c8cadc5af18656fd5d335f0b75b44710->leave($__internal_390911ceaa68c79499b7c2e79dbc8030c8cadc5af18656fd5d335f0b75b44710_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33c389357dc2f34c5978cb1cc4fb48a961e9c9db2fd5d93f76a4015300872f2d = $this->env->getExtension("native_profiler");
        $__internal_33c389357dc2f34c5978cb1cc4fb48a961e9c9db2fd5d93f76a4015300872f2d->enter($__internal_33c389357dc2f34c5978cb1cc4fb48a961e9c9db2fd5d93f76a4015300872f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33c389357dc2f34c5978cb1cc4fb48a961e9c9db2fd5d93f76a4015300872f2d->leave($__internal_33c389357dc2f34c5978cb1cc4fb48a961e9c9db2fd5d93f76a4015300872f2d_prof);

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
