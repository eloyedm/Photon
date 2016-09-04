<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_85d571f547504f4dddb6c3ce4067fcd043595b69c604f46d1811dd79dd07943b extends Twig_Template
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
        $__internal_7ba165c254fca870d2587b9c30d8649588f5ce90b64417147044e3a21d915b0c = $this->env->getExtension("native_profiler");
        $__internal_7ba165c254fca870d2587b9c30d8649588f5ce90b64417147044e3a21d915b0c->enter($__internal_7ba165c254fca870d2587b9c30d8649588f5ce90b64417147044e3a21d915b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7ba165c254fca870d2587b9c30d8649588f5ce90b64417147044e3a21d915b0c->leave($__internal_7ba165c254fca870d2587b9c30d8649588f5ce90b64417147044e3a21d915b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
