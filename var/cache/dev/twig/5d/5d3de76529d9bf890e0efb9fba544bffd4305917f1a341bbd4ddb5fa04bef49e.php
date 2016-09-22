<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_72c453ebc4de8678c5d584bad3850642b13e065e8259f8992dfdaa6642fae22f extends Twig_Template
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
        $__internal_f172498ba836c59b77ce14b07d87c54f62d6aa26b3fade21b52770658a8e0657 = $this->env->getExtension("native_profiler");
        $__internal_f172498ba836c59b77ce14b07d87c54f62d6aa26b3fade21b52770658a8e0657->enter($__internal_f172498ba836c59b77ce14b07d87c54f62d6aa26b3fade21b52770658a8e0657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f172498ba836c59b77ce14b07d87c54f62d6aa26b3fade21b52770658a8e0657->leave($__internal_f172498ba836c59b77ce14b07d87c54f62d6aa26b3fade21b52770658a8e0657_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
