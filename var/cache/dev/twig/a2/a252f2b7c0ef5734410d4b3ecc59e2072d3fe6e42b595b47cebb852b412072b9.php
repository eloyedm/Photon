<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3c9037107cf5feb17171e9a0059cebe26608d84b4ab44368351c915e142eb74a extends Twig_Template
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
        $__internal_5be8c094868c333819e19c85fc8977a07eace6dc7cda0d75c3e91e15c283e405 = $this->env->getExtension("native_profiler");
        $__internal_5be8c094868c333819e19c85fc8977a07eace6dc7cda0d75c3e91e15c283e405->enter($__internal_5be8c094868c333819e19c85fc8977a07eace6dc7cda0d75c3e91e15c283e405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5be8c094868c333819e19c85fc8977a07eace6dc7cda0d75c3e91e15c283e405->leave($__internal_5be8c094868c333819e19c85fc8977a07eace6dc7cda0d75c3e91e15c283e405_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
