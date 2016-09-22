<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_68275bc9a0212f51da07cabec7da2600da09b376b801b90f2852c673d24f6684 extends Twig_Template
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
        $__internal_683039c4b6faedbf3175fea49f3f799fb6dda2c8aa307771365a158d827f6f09 = $this->env->getExtension("native_profiler");
        $__internal_683039c4b6faedbf3175fea49f3f799fb6dda2c8aa307771365a158d827f6f09->enter($__internal_683039c4b6faedbf3175fea49f3f799fb6dda2c8aa307771365a158d827f6f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_683039c4b6faedbf3175fea49f3f799fb6dda2c8aa307771365a158d827f6f09->leave($__internal_683039c4b6faedbf3175fea49f3f799fb6dda2c8aa307771365a158d827f6f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
