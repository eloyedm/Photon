<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fbee80c2d2b2a54fc7f611e7508152c7e5f15a9beb431d3ec8dad4b27b1a7022 extends Twig_Template
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
        $__internal_b5bd3b2b4bee7d1a66c07dfb6c4cf71def01c69fbafd20e240a882530c91b1a8 = $this->env->getExtension("native_profiler");
        $__internal_b5bd3b2b4bee7d1a66c07dfb6c4cf71def01c69fbafd20e240a882530c91b1a8->enter($__internal_b5bd3b2b4bee7d1a66c07dfb6c4cf71def01c69fbafd20e240a882530c91b1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5bd3b2b4bee7d1a66c07dfb6c4cf71def01c69fbafd20e240a882530c91b1a8->leave($__internal_b5bd3b2b4bee7d1a66c07dfb6c4cf71def01c69fbafd20e240a882530c91b1a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
