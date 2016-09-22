<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_92b588d3d6c8aba65fa54f9bb9a54378f10d3d847029007dbe36b8c05cddea31 extends Twig_Template
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
        $__internal_fb90ea5858aa08901c7d36873987f3628f6e830a5c80166d0527251eae4235c3 = $this->env->getExtension("native_profiler");
        $__internal_fb90ea5858aa08901c7d36873987f3628f6e830a5c80166d0527251eae4235c3->enter($__internal_fb90ea5858aa08901c7d36873987f3628f6e830a5c80166d0527251eae4235c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fb90ea5858aa08901c7d36873987f3628f6e830a5c80166d0527251eae4235c3->leave($__internal_fb90ea5858aa08901c7d36873987f3628f6e830a5c80166d0527251eae4235c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
