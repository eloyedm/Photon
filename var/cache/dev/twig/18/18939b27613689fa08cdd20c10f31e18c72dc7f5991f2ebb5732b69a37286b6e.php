<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f7ac12a1bc1d70e5878cc36c1181cdd72490ded2286920f1d07b79c6397f7db1 extends Twig_Template
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
        $__internal_8e5a2bb9a8c8c666fb758e117161a37aeb49ca11f77b8e679456bc3a0ea491c2 = $this->env->getExtension("native_profiler");
        $__internal_8e5a2bb9a8c8c666fb758e117161a37aeb49ca11f77b8e679456bc3a0ea491c2->enter($__internal_8e5a2bb9a8c8c666fb758e117161a37aeb49ca11f77b8e679456bc3a0ea491c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8e5a2bb9a8c8c666fb758e117161a37aeb49ca11f77b8e679456bc3a0ea491c2->leave($__internal_8e5a2bb9a8c8c666fb758e117161a37aeb49ca11f77b8e679456bc3a0ea491c2_prof);

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
