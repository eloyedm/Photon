<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7e74099ae77541dbda28b968ff49d73f33bb67b9d910962f1400f9ef28d6da4c extends Twig_Template
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
        $__internal_e0bcbde9c369e5dc81e6eb804863596b0269247f968846dfedff2dccd67ee3e6 = $this->env->getExtension("native_profiler");
        $__internal_e0bcbde9c369e5dc81e6eb804863596b0269247f968846dfedff2dccd67ee3e6->enter($__internal_e0bcbde9c369e5dc81e6eb804863596b0269247f968846dfedff2dccd67ee3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e0bcbde9c369e5dc81e6eb804863596b0269247f968846dfedff2dccd67ee3e6->leave($__internal_e0bcbde9c369e5dc81e6eb804863596b0269247f968846dfedff2dccd67ee3e6_prof);

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
