<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_edc3c64583f1803e0ea41df05160f86970d1778d6bcce5bd1fbdab31d036200a extends Twig_Template
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
        $__internal_146e3866cd887c43a3eb215b10fd22c1417ffef0faaa367ecda3c95ced3ffe02 = $this->env->getExtension("native_profiler");
        $__internal_146e3866cd887c43a3eb215b10fd22c1417ffef0faaa367ecda3c95ced3ffe02->enter($__internal_146e3866cd887c43a3eb215b10fd22c1417ffef0faaa367ecda3c95ced3ffe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_146e3866cd887c43a3eb215b10fd22c1417ffef0faaa367ecda3c95ced3ffe02->leave($__internal_146e3866cd887c43a3eb215b10fd22c1417ffef0faaa367ecda3c95ced3ffe02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
