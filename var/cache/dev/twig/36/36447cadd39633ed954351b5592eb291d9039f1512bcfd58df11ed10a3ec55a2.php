<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a3c1a4183019d1709b425db6d0b9f99c089bf2babe5bb720c0c0ba1dac67c1aa extends Twig_Template
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
        $__internal_bd830f214ad0e9d96dc13455f28643d5aa9edd76cd39ca28e23e4536fd77703d = $this->env->getExtension("native_profiler");
        $__internal_bd830f214ad0e9d96dc13455f28643d5aa9edd76cd39ca28e23e4536fd77703d->enter($__internal_bd830f214ad0e9d96dc13455f28643d5aa9edd76cd39ca28e23e4536fd77703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bd830f214ad0e9d96dc13455f28643d5aa9edd76cd39ca28e23e4536fd77703d->leave($__internal_bd830f214ad0e9d96dc13455f28643d5aa9edd76cd39ca28e23e4536fd77703d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
