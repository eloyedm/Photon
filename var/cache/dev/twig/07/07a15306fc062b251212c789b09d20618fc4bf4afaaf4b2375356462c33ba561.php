<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_df224de01eb215ac67a728b0297bfdfad4767906900536b7a892ec9b943e760b extends Twig_Template
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
        $__internal_2762e77fe05ab4c8d38f268bd864e0579a6eaff655bd219b580a92e33526158a = $this->env->getExtension("native_profiler");
        $__internal_2762e77fe05ab4c8d38f268bd864e0579a6eaff655bd219b580a92e33526158a->enter($__internal_2762e77fe05ab4c8d38f268bd864e0579a6eaff655bd219b580a92e33526158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2762e77fe05ab4c8d38f268bd864e0579a6eaff655bd219b580a92e33526158a->leave($__internal_2762e77fe05ab4c8d38f268bd864e0579a6eaff655bd219b580a92e33526158a_prof);

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
