<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_86e33208b4ff0e1e55f3c058e26ce2730e2962ae1a27ceeee8dd9e869d307c0d extends Twig_Template
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
        $__internal_b2901bc627ca72cb590dd8515eb194cc2989fbb9e08baf9d8bc7901a4dd3f968 = $this->env->getExtension("native_profiler");
        $__internal_b2901bc627ca72cb590dd8515eb194cc2989fbb9e08baf9d8bc7901a4dd3f968->enter($__internal_b2901bc627ca72cb590dd8515eb194cc2989fbb9e08baf9d8bc7901a4dd3f968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b2901bc627ca72cb590dd8515eb194cc2989fbb9e08baf9d8bc7901a4dd3f968->leave($__internal_b2901bc627ca72cb590dd8515eb194cc2989fbb9e08baf9d8bc7901a4dd3f968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
