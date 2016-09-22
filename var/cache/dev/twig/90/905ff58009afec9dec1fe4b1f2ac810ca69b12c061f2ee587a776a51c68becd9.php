<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_80c34f94356c9a1ccf08333499376b625920e3c3f05efc83851486f9970d4a0a extends Twig_Template
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
        $__internal_a51ffcff334d102bec948ac2f7c22ada88c2ff1cee04d585e0fe87365f16b2dd = $this->env->getExtension("native_profiler");
        $__internal_a51ffcff334d102bec948ac2f7c22ada88c2ff1cee04d585e0fe87365f16b2dd->enter($__internal_a51ffcff334d102bec948ac2f7c22ada88c2ff1cee04d585e0fe87365f16b2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a51ffcff334d102bec948ac2f7c22ada88c2ff1cee04d585e0fe87365f16b2dd->leave($__internal_a51ffcff334d102bec948ac2f7c22ada88c2ff1cee04d585e0fe87365f16b2dd_prof);

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
