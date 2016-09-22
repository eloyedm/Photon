<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_043047e7066e99a50e73c01a1f9acf2130ce6bb6eaf1d3db300b51fc4fb29c4d extends Twig_Template
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
        $__internal_269c5888bdb296050573a30e5b730e7b2b238c969c8dc2cffc7e68d8848463e1 = $this->env->getExtension("native_profiler");
        $__internal_269c5888bdb296050573a30e5b730e7b2b238c969c8dc2cffc7e68d8848463e1->enter($__internal_269c5888bdb296050573a30e5b730e7b2b238c969c8dc2cffc7e68d8848463e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_269c5888bdb296050573a30e5b730e7b2b238c969c8dc2cffc7e68d8848463e1->leave($__internal_269c5888bdb296050573a30e5b730e7b2b238c969c8dc2cffc7e68d8848463e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
