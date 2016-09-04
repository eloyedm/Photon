<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_13953323baf32c5e294f87de59b36ce570d44b427593d282bb3d0358990ba698 extends Twig_Template
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
        $__internal_8c8183c5f7f9aa4d816ddcf47ababd2642a81e09334bb3e664121fdd749d2996 = $this->env->getExtension("native_profiler");
        $__internal_8c8183c5f7f9aa4d816ddcf47ababd2642a81e09334bb3e664121fdd749d2996->enter($__internal_8c8183c5f7f9aa4d816ddcf47ababd2642a81e09334bb3e664121fdd749d2996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8c8183c5f7f9aa4d816ddcf47ababd2642a81e09334bb3e664121fdd749d2996->leave($__internal_8c8183c5f7f9aa4d816ddcf47ababd2642a81e09334bb3e664121fdd749d2996_prof);

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
