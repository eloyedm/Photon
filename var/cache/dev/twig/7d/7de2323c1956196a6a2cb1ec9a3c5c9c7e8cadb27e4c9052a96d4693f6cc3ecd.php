<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2325907f046580cec5f8d7116df4e5f6b52fbbe6c76d4b166d6463fbb4feea22 extends Twig_Template
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
        $__internal_25218cb395caa68ba03a7c6e03f3c0574e65d7287895e440da1f0cd2c5b3107e = $this->env->getExtension("native_profiler");
        $__internal_25218cb395caa68ba03a7c6e03f3c0574e65d7287895e440da1f0cd2c5b3107e->enter($__internal_25218cb395caa68ba03a7c6e03f3c0574e65d7287895e440da1f0cd2c5b3107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_25218cb395caa68ba03a7c6e03f3c0574e65d7287895e440da1f0cd2c5b3107e->leave($__internal_25218cb395caa68ba03a7c6e03f3c0574e65d7287895e440da1f0cd2c5b3107e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
