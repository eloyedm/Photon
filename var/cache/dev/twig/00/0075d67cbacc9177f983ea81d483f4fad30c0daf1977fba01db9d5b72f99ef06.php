<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c53933893143913ca46f47fefdd24d77088191cc4c3873c334827f7eb5906676 extends Twig_Template
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
        $__internal_2536b2b07e21257b76739af105ce085ef6d4ad46d6b8e6a95db13b8f3fedc830 = $this->env->getExtension("native_profiler");
        $__internal_2536b2b07e21257b76739af105ce085ef6d4ad46d6b8e6a95db13b8f3fedc830->enter($__internal_2536b2b07e21257b76739af105ce085ef6d4ad46d6b8e6a95db13b8f3fedc830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2536b2b07e21257b76739af105ce085ef6d4ad46d6b8e6a95db13b8f3fedc830->leave($__internal_2536b2b07e21257b76739af105ce085ef6d4ad46d6b8e6a95db13b8f3fedc830_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
