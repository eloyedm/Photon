<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_322b2ce56f3d7d25d511ec6d12c16eebcf90ef1b16380b005bd5e9e1fc62446a extends Twig_Template
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
        $__internal_8590648934adf66e87a130f1a8791dcd6e92d2e84558fbb3ddb319f7ea5af1f5 = $this->env->getExtension("native_profiler");
        $__internal_8590648934adf66e87a130f1a8791dcd6e92d2e84558fbb3ddb319f7ea5af1f5->enter($__internal_8590648934adf66e87a130f1a8791dcd6e92d2e84558fbb3ddb319f7ea5af1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8590648934adf66e87a130f1a8791dcd6e92d2e84558fbb3ddb319f7ea5af1f5->leave($__internal_8590648934adf66e87a130f1a8791dcd6e92d2e84558fbb3ddb319f7ea5af1f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
