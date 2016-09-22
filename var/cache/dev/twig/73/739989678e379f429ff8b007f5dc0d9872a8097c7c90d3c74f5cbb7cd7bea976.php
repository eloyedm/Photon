<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_941644229dc6737b8544503a9253c33971bd03fbc22cb799dc77baa339ec920f extends Twig_Template
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
        $__internal_d305e5523f404c3298df6b6b566304da4fe191878f12b8e32ec36009d77ddc44 = $this->env->getExtension("native_profiler");
        $__internal_d305e5523f404c3298df6b6b566304da4fe191878f12b8e32ec36009d77ddc44->enter($__internal_d305e5523f404c3298df6b6b566304da4fe191878f12b8e32ec36009d77ddc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d305e5523f404c3298df6b6b566304da4fe191878f12b8e32ec36009d77ddc44->leave($__internal_d305e5523f404c3298df6b6b566304da4fe191878f12b8e32ec36009d77ddc44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
