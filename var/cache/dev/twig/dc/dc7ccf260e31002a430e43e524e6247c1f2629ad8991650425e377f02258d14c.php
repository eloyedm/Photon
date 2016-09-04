<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_aa6eb334a20d1a71bf2588dfde8c0939547063893e82129bdb1c7129d34f132f extends Twig_Template
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
        $__internal_905db8017d9144cd090efa5635d34104c705ada2323b20a30c78d72a499f37a2 = $this->env->getExtension("native_profiler");
        $__internal_905db8017d9144cd090efa5635d34104c705ada2323b20a30c78d72a499f37a2->enter($__internal_905db8017d9144cd090efa5635d34104c705ada2323b20a30c78d72a499f37a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_905db8017d9144cd090efa5635d34104c705ada2323b20a30c78d72a499f37a2->leave($__internal_905db8017d9144cd090efa5635d34104c705ada2323b20a30c78d72a499f37a2_prof);

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
