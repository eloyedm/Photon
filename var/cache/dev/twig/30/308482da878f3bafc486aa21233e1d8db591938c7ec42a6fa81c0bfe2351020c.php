<?php

/* base.html.twig */
class __TwigTemplate_d00cda3a8f72601f3c29c162d7d944f2fcf45122b05b50a32ca8e07051f9a06e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_742719b46c1c009353b9bd373da9e4cac413e9479523c5f4b27eae0d841b13f1 = $this->env->getExtension("native_profiler");
        $__internal_742719b46c1c009353b9bd373da9e4cac413e9479523c5f4b27eae0d841b13f1->enter($__internal_742719b46c1c009353b9bd373da9e4cac413e9479523c5f4b27eae0d841b13f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_742719b46c1c009353b9bd373da9e4cac413e9479523c5f4b27eae0d841b13f1->leave($__internal_742719b46c1c009353b9bd373da9e4cac413e9479523c5f4b27eae0d841b13f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_617ade454201b2a56ab780c779de4897945f23f382c25cb0e9f95b3894b6cf69 = $this->env->getExtension("native_profiler");
        $__internal_617ade454201b2a56ab780c779de4897945f23f382c25cb0e9f95b3894b6cf69->enter($__internal_617ade454201b2a56ab780c779de4897945f23f382c25cb0e9f95b3894b6cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_617ade454201b2a56ab780c779de4897945f23f382c25cb0e9f95b3894b6cf69->leave($__internal_617ade454201b2a56ab780c779de4897945f23f382c25cb0e9f95b3894b6cf69_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c98fa6836fce1f6a73ad583095568a7e80a8e7cfda2b7dcb501d90d6bf31dde1 = $this->env->getExtension("native_profiler");
        $__internal_c98fa6836fce1f6a73ad583095568a7e80a8e7cfda2b7dcb501d90d6bf31dde1->enter($__internal_c98fa6836fce1f6a73ad583095568a7e80a8e7cfda2b7dcb501d90d6bf31dde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c98fa6836fce1f6a73ad583095568a7e80a8e7cfda2b7dcb501d90d6bf31dde1->leave($__internal_c98fa6836fce1f6a73ad583095568a7e80a8e7cfda2b7dcb501d90d6bf31dde1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df8e8b1a11baf23e32b597fc220377eb684db1bce1a7c182b2eeb060af77cf35 = $this->env->getExtension("native_profiler");
        $__internal_df8e8b1a11baf23e32b597fc220377eb684db1bce1a7c182b2eeb060af77cf35->enter($__internal_df8e8b1a11baf23e32b597fc220377eb684db1bce1a7c182b2eeb060af77cf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df8e8b1a11baf23e32b597fc220377eb684db1bce1a7c182b2eeb060af77cf35->leave($__internal_df8e8b1a11baf23e32b597fc220377eb684db1bce1a7c182b2eeb060af77cf35_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a280d4dc320cc9b7b3a1432f8f53938f2ccf3d54c97f9fee65a713c21dbb9c6c = $this->env->getExtension("native_profiler");
        $__internal_a280d4dc320cc9b7b3a1432f8f53938f2ccf3d54c97f9fee65a713c21dbb9c6c->enter($__internal_a280d4dc320cc9b7b3a1432f8f53938f2ccf3d54c97f9fee65a713c21dbb9c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a280d4dc320cc9b7b3a1432f8f53938f2ccf3d54c97f9fee65a713c21dbb9c6c->leave($__internal_a280d4dc320cc9b7b3a1432f8f53938f2ccf3d54c97f9fee65a713c21dbb9c6c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
