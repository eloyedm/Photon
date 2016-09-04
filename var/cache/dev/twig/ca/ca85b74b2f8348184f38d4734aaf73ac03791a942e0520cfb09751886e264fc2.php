<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ce94dd8817172bf3d56f2dc38f31232fef2ceaf88bb13269942003c0962a3302 extends Twig_Template
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
        $__internal_8ce864471fdba63e5c7bd3d32ddbd948149e6839e5d069b27e62f5e429ec970d = $this->env->getExtension("native_profiler");
        $__internal_8ce864471fdba63e5c7bd3d32ddbd948149e6839e5d069b27e62f5e429ec970d->enter($__internal_8ce864471fdba63e5c7bd3d32ddbd948149e6839e5d069b27e62f5e429ec970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8ce864471fdba63e5c7bd3d32ddbd948149e6839e5d069b27e62f5e429ec970d->leave($__internal_8ce864471fdba63e5c7bd3d32ddbd948149e6839e5d069b27e62f5e429ec970d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
