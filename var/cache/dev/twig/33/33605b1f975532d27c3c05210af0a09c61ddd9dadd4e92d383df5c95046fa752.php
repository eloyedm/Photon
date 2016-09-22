<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_651104b99c85689747ab4559e5d96e4bd8cca664f66a601f29924920754f812d extends Twig_Template
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
        $__internal_a4ad8ed01ed6bbb31a77af155a1dd46d8e507b97495b701e99af4f9e97fbcc8b = $this->env->getExtension("native_profiler");
        $__internal_a4ad8ed01ed6bbb31a77af155a1dd46d8e507b97495b701e99af4f9e97fbcc8b->enter($__internal_a4ad8ed01ed6bbb31a77af155a1dd46d8e507b97495b701e99af4f9e97fbcc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a4ad8ed01ed6bbb31a77af155a1dd46d8e507b97495b701e99af4f9e97fbcc8b->leave($__internal_a4ad8ed01ed6bbb31a77af155a1dd46d8e507b97495b701e99af4f9e97fbcc8b_prof);

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
