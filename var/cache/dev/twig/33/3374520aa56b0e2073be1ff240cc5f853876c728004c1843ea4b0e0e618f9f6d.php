<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2c86b653ca58e0ec3cf0b34692efcc407367edf4fa06f78df3b91c5dc8c60379 extends Twig_Template
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
        $__internal_c80cf51c7c4a14ee3eaf97320124ecac3bf17ca778113fe8afc75fdbe993f6bd = $this->env->getExtension("native_profiler");
        $__internal_c80cf51c7c4a14ee3eaf97320124ecac3bf17ca778113fe8afc75fdbe993f6bd->enter($__internal_c80cf51c7c4a14ee3eaf97320124ecac3bf17ca778113fe8afc75fdbe993f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c80cf51c7c4a14ee3eaf97320124ecac3bf17ca778113fe8afc75fdbe993f6bd->leave($__internal_c80cf51c7c4a14ee3eaf97320124ecac3bf17ca778113fe8afc75fdbe993f6bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
