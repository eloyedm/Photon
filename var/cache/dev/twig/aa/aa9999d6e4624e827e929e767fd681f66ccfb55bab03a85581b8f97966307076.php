<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6aa188ce99a244bf8d2c900d1f7be7c5f648c24edb24964a02f5f249d47831ee extends Twig_Template
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
        $__internal_82f80a06b4f7eb11ce3a5f6c47e9569bcce3faa473a943600961b881e485aa91 = $this->env->getExtension("native_profiler");
        $__internal_82f80a06b4f7eb11ce3a5f6c47e9569bcce3faa473a943600961b881e485aa91->enter($__internal_82f80a06b4f7eb11ce3a5f6c47e9569bcce3faa473a943600961b881e485aa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_82f80a06b4f7eb11ce3a5f6c47e9569bcce3faa473a943600961b881e485aa91->leave($__internal_82f80a06b4f7eb11ce3a5f6c47e9569bcce3faa473a943600961b881e485aa91_prof);

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
