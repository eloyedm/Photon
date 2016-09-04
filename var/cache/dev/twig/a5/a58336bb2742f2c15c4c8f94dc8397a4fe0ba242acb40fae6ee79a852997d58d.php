<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a83e1e579b5bcab53040f2d79f129ebb324ab517a8d7723c5b1865acbb88ae86 extends Twig_Template
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
        $__internal_2ef0a826620a9a09201a5343040dfbda28b769074441f593c347f923e9b8f1b7 = $this->env->getExtension("native_profiler");
        $__internal_2ef0a826620a9a09201a5343040dfbda28b769074441f593c347f923e9b8f1b7->enter($__internal_2ef0a826620a9a09201a5343040dfbda28b769074441f593c347f923e9b8f1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2ef0a826620a9a09201a5343040dfbda28b769074441f593c347f923e9b8f1b7->leave($__internal_2ef0a826620a9a09201a5343040dfbda28b769074441f593c347f923e9b8f1b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
