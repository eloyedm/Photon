<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bc0edd91529c452ea5bf90428984f794fa6fade017edac8d8b39b391bc6b9f33 extends Twig_Template
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
        $__internal_c375c3f8df31f621f5ecadd0bbd632ddb6b19bf62170619321aca6b74a7cd354 = $this->env->getExtension("native_profiler");
        $__internal_c375c3f8df31f621f5ecadd0bbd632ddb6b19bf62170619321aca6b74a7cd354->enter($__internal_c375c3f8df31f621f5ecadd0bbd632ddb6b19bf62170619321aca6b74a7cd354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c375c3f8df31f621f5ecadd0bbd632ddb6b19bf62170619321aca6b74a7cd354->leave($__internal_c375c3f8df31f621f5ecadd0bbd632ddb6b19bf62170619321aca6b74a7cd354_prof);

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
