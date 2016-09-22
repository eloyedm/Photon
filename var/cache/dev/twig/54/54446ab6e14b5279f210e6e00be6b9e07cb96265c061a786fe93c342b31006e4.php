<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_212eb82922fa0863569235fc9990e9d4b1414968e3a2b710bf66e39e3851229a extends Twig_Template
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
        $__internal_b06112f57a0afbc871aaaf828ed9f9e10ddc657c67d24cf61463c4db5599199c = $this->env->getExtension("native_profiler");
        $__internal_b06112f57a0afbc871aaaf828ed9f9e10ddc657c67d24cf61463c4db5599199c->enter($__internal_b06112f57a0afbc871aaaf828ed9f9e10ddc657c67d24cf61463c4db5599199c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b06112f57a0afbc871aaaf828ed9f9e10ddc657c67d24cf61463c4db5599199c->leave($__internal_b06112f57a0afbc871aaaf828ed9f9e10ddc657c67d24cf61463c4db5599199c_prof);

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
