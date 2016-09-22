<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4d89e8729152f00dcc540f9a07805103a54ad62e4bca8e796ed9024f24566e8d extends Twig_Template
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
        $__internal_d48ec57aa62a26beba3227134ff42363081841a6562f9c00fd626bcb3795106d = $this->env->getExtension("native_profiler");
        $__internal_d48ec57aa62a26beba3227134ff42363081841a6562f9c00fd626bcb3795106d->enter($__internal_d48ec57aa62a26beba3227134ff42363081841a6562f9c00fd626bcb3795106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d48ec57aa62a26beba3227134ff42363081841a6562f9c00fd626bcb3795106d->leave($__internal_d48ec57aa62a26beba3227134ff42363081841a6562f9c00fd626bcb3795106d_prof);

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
