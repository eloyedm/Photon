<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f772e32de63d542bf8ad7679d39d8100bbef85fd6e513478bd9f47d1a0bf4aab extends Twig_Template
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
        $__internal_1e7b9e616c4610c2c33dde3bacabe53ef03470a3323abab3030584ed25e5efae = $this->env->getExtension("native_profiler");
        $__internal_1e7b9e616c4610c2c33dde3bacabe53ef03470a3323abab3030584ed25e5efae->enter($__internal_1e7b9e616c4610c2c33dde3bacabe53ef03470a3323abab3030584ed25e5efae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1e7b9e616c4610c2c33dde3bacabe53ef03470a3323abab3030584ed25e5efae->leave($__internal_1e7b9e616c4610c2c33dde3bacabe53ef03470a3323abab3030584ed25e5efae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
