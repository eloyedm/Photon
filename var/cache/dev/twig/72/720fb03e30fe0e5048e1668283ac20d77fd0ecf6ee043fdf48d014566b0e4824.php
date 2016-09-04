<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5d3b2b571441a9bf916c6ece73134b102f61dc15f18a6f6b2ba0c299a92c9760 extends Twig_Template
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
        $__internal_9b550c6ee8863ad0ed1d1e9bb767f68a1800db9559bc29c3d2470581c6cf0234 = $this->env->getExtension("native_profiler");
        $__internal_9b550c6ee8863ad0ed1d1e9bb767f68a1800db9559bc29c3d2470581c6cf0234->enter($__internal_9b550c6ee8863ad0ed1d1e9bb767f68a1800db9559bc29c3d2470581c6cf0234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9b550c6ee8863ad0ed1d1e9bb767f68a1800db9559bc29c3d2470581c6cf0234->leave($__internal_9b550c6ee8863ad0ed1d1e9bb767f68a1800db9559bc29c3d2470581c6cf0234_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
