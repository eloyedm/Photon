<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2c59a4668018cbd9400836fc001a03afe123a0abf10e3b9c6bc91c933501a938 extends Twig_Template
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
        $__internal_9498b8131f494a2585b4eb4cc59dd661ffdf013d1550ed1bcf4893593ec42752 = $this->env->getExtension("native_profiler");
        $__internal_9498b8131f494a2585b4eb4cc59dd661ffdf013d1550ed1bcf4893593ec42752->enter($__internal_9498b8131f494a2585b4eb4cc59dd661ffdf013d1550ed1bcf4893593ec42752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9498b8131f494a2585b4eb4cc59dd661ffdf013d1550ed1bcf4893593ec42752->leave($__internal_9498b8131f494a2585b4eb4cc59dd661ffdf013d1550ed1bcf4893593ec42752_prof);

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
