<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_931145a189bbc23cac27fca23fbd04077fd3fb095d24ed3e12fa718c38c833cb extends Twig_Template
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
        $__internal_5ac4d8a0e61c9c50e58b84b2d929eed88c5855864844582a871f8ffa864f8f9f = $this->env->getExtension("native_profiler");
        $__internal_5ac4d8a0e61c9c50e58b84b2d929eed88c5855864844582a871f8ffa864f8f9f->enter($__internal_5ac4d8a0e61c9c50e58b84b2d929eed88c5855864844582a871f8ffa864f8f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5ac4d8a0e61c9c50e58b84b2d929eed88c5855864844582a871f8ffa864f8f9f->leave($__internal_5ac4d8a0e61c9c50e58b84b2d929eed88c5855864844582a871f8ffa864f8f9f_prof);

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
