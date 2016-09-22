<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ff5d2190cbb1a6573a3132c6508fdb173e3f0910d3622169da68a7bd840648af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ff5a000cb600573cd6a954c5880c992f0d6f21bf77cb2f80898428e88df0883 = $this->env->getExtension("native_profiler");
        $__internal_3ff5a000cb600573cd6a954c5880c992f0d6f21bf77cb2f80898428e88df0883->enter($__internal_3ff5a000cb600573cd6a954c5880c992f0d6f21bf77cb2f80898428e88df0883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3ff5a000cb600573cd6a954c5880c992f0d6f21bf77cb2f80898428e88df0883->leave($__internal_3ff5a000cb600573cd6a954c5880c992f0d6f21bf77cb2f80898428e88df0883_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
