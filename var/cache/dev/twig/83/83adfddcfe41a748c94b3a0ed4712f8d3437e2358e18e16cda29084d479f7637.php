<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_41f46eea769b7786d164400afc99fb97e957cd691a3dda9927ebfbe89ee5bb62 extends Twig_Template
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
        $__internal_cff56be305e57f9855c07b4561fc5657ca29c75a47d918836939248d4318bbf6 = $this->env->getExtension("native_profiler");
        $__internal_cff56be305e57f9855c07b4561fc5657ca29c75a47d918836939248d4318bbf6->enter($__internal_cff56be305e57f9855c07b4561fc5657ca29c75a47d918836939248d4318bbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cff56be305e57f9855c07b4561fc5657ca29c75a47d918836939248d4318bbf6->leave($__internal_cff56be305e57f9855c07b4561fc5657ca29c75a47d918836939248d4318bbf6_prof);

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
