<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d83f0b8cc6657df8b5748f1310094114eb8d7a683e3180a3a4528ce147446682 extends Twig_Template
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
        $__internal_438c660dd2a68b5739ba3cffca714e9b3a2f660d40896457672fe24bd0e967df = $this->env->getExtension("native_profiler");
        $__internal_438c660dd2a68b5739ba3cffca714e9b3a2f660d40896457672fe24bd0e967df->enter($__internal_438c660dd2a68b5739ba3cffca714e9b3a2f660d40896457672fe24bd0e967df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_438c660dd2a68b5739ba3cffca714e9b3a2f660d40896457672fe24bd0e967df->leave($__internal_438c660dd2a68b5739ba3cffca714e9b3a2f660d40896457672fe24bd0e967df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
