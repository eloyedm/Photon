<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6e600d8979678aeeb7b3bbac3edc053ec5e4c954096847bc6e71b70907881bbf extends Twig_Template
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
        $__internal_900d169aaa21044b7aed70e4d30b8d73f9166ffbc27a054679972c81aca7b865 = $this->env->getExtension("native_profiler");
        $__internal_900d169aaa21044b7aed70e4d30b8d73f9166ffbc27a054679972c81aca7b865->enter($__internal_900d169aaa21044b7aed70e4d30b8d73f9166ffbc27a054679972c81aca7b865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_900d169aaa21044b7aed70e4d30b8d73f9166ffbc27a054679972c81aca7b865->leave($__internal_900d169aaa21044b7aed70e4d30b8d73f9166ffbc27a054679972c81aca7b865_prof);

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
