<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d753ccb0cda782b3fba8bec34730827185743a7f817f4ec65628271134ef1d10 extends Twig_Template
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
        $__internal_9a7227b604b7fcfcc2c4496b0d6ffa1792db025a0b7ca5baf8efe29977c7ec4e = $this->env->getExtension("native_profiler");
        $__internal_9a7227b604b7fcfcc2c4496b0d6ffa1792db025a0b7ca5baf8efe29977c7ec4e->enter($__internal_9a7227b604b7fcfcc2c4496b0d6ffa1792db025a0b7ca5baf8efe29977c7ec4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9a7227b604b7fcfcc2c4496b0d6ffa1792db025a0b7ca5baf8efe29977c7ec4e->leave($__internal_9a7227b604b7fcfcc2c4496b0d6ffa1792db025a0b7ca5baf8efe29977c7ec4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
