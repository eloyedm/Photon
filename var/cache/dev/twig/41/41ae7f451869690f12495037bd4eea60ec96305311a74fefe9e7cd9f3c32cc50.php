<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3e096277e31bb9b7949e214abbf34c38e891fe28e1a5bb81310fff6ed62d7f5c extends Twig_Template
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
        $__internal_e5512ae27f896d2b241bc8ebb0bb29b6ddeb68e0aeb5a177d0e81b4c02c61519 = $this->env->getExtension("native_profiler");
        $__internal_e5512ae27f896d2b241bc8ebb0bb29b6ddeb68e0aeb5a177d0e81b4c02c61519->enter($__internal_e5512ae27f896d2b241bc8ebb0bb29b6ddeb68e0aeb5a177d0e81b4c02c61519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e5512ae27f896d2b241bc8ebb0bb29b6ddeb68e0aeb5a177d0e81b4c02c61519->leave($__internal_e5512ae27f896d2b241bc8ebb0bb29b6ddeb68e0aeb5a177d0e81b4c02c61519_prof);

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
