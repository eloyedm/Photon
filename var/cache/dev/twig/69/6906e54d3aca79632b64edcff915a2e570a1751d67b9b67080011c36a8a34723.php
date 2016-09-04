<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5c5a79b89fa90bcb963bb3a7a21a6fc63a63515d61283a89cec87d74787cab7c extends Twig_Template
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
        $__internal_cad2e592e0088a6d9d4aca75580c31dd610983bbdb55d161c20d634ef7f4486a = $this->env->getExtension("native_profiler");
        $__internal_cad2e592e0088a6d9d4aca75580c31dd610983bbdb55d161c20d634ef7f4486a->enter($__internal_cad2e592e0088a6d9d4aca75580c31dd610983bbdb55d161c20d634ef7f4486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cad2e592e0088a6d9d4aca75580c31dd610983bbdb55d161c20d634ef7f4486a->leave($__internal_cad2e592e0088a6d9d4aca75580c31dd610983bbdb55d161c20d634ef7f4486a_prof);

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
