<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_abedef8eada2fb852e7acd8db040b3380faefa50d1a4ae53eea11904baa7d660 extends Twig_Template
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
        $__internal_ef8a58392da71f68ea7287eefd46b291d24366ddaaa2d52ac90e9be2e2c22656 = $this->env->getExtension("native_profiler");
        $__internal_ef8a58392da71f68ea7287eefd46b291d24366ddaaa2d52ac90e9be2e2c22656->enter($__internal_ef8a58392da71f68ea7287eefd46b291d24366ddaaa2d52ac90e9be2e2c22656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ef8a58392da71f68ea7287eefd46b291d24366ddaaa2d52ac90e9be2e2c22656->leave($__internal_ef8a58392da71f68ea7287eefd46b291d24366ddaaa2d52ac90e9be2e2c22656_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
