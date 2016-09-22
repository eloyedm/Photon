<?php

/* base.html.twig */
class __TwigTemplate_69a0cc147be149e8a55b43dab44ce17b92bb914791eaad9bb9bc188c664a7136 extends Twig_Template
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
        $__internal_d4e7edff4d88084f6daa4ba86c33ec3471729bae2a624999197ee6b158c435f3 = $this->env->getExtension("native_profiler");
        $__internal_d4e7edff4d88084f6daa4ba86c33ec3471729bae2a624999197ee6b158c435f3->enter($__internal_d4e7edff4d88084f6daa4ba86c33ec3471729bae2a624999197ee6b158c435f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d4e7edff4d88084f6daa4ba86c33ec3471729bae2a624999197ee6b158c435f3->leave($__internal_d4e7edff4d88084f6daa4ba86c33ec3471729bae2a624999197ee6b158c435f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4af48acf3378f6fd33f1f1fc0234337e74c26ccd9b563ca41ddc33466ab90bf = $this->env->getExtension("native_profiler");
        $__internal_b4af48acf3378f6fd33f1f1fc0234337e74c26ccd9b563ca41ddc33466ab90bf->enter($__internal_b4af48acf3378f6fd33f1f1fc0234337e74c26ccd9b563ca41ddc33466ab90bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b4af48acf3378f6fd33f1f1fc0234337e74c26ccd9b563ca41ddc33466ab90bf->leave($__internal_b4af48acf3378f6fd33f1f1fc0234337e74c26ccd9b563ca41ddc33466ab90bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acbcb824735c8623a306c8c080126960fcc16bbd3641f8faf97ef3496f116252 = $this->env->getExtension("native_profiler");
        $__internal_acbcb824735c8623a306c8c080126960fcc16bbd3641f8faf97ef3496f116252->enter($__internal_acbcb824735c8623a306c8c080126960fcc16bbd3641f8faf97ef3496f116252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_acbcb824735c8623a306c8c080126960fcc16bbd3641f8faf97ef3496f116252->leave($__internal_acbcb824735c8623a306c8c080126960fcc16bbd3641f8faf97ef3496f116252_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca2f3e6d21d47bc35a4d0983f572b287b99d827b24c7f3cd23f3556fb89eff49 = $this->env->getExtension("native_profiler");
        $__internal_ca2f3e6d21d47bc35a4d0983f572b287b99d827b24c7f3cd23f3556fb89eff49->enter($__internal_ca2f3e6d21d47bc35a4d0983f572b287b99d827b24c7f3cd23f3556fb89eff49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca2f3e6d21d47bc35a4d0983f572b287b99d827b24c7f3cd23f3556fb89eff49->leave($__internal_ca2f3e6d21d47bc35a4d0983f572b287b99d827b24c7f3cd23f3556fb89eff49_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae170309e1398a9b404012aa35655c2c81f9701b2799adf74b0f8e10be8a33e0 = $this->env->getExtension("native_profiler");
        $__internal_ae170309e1398a9b404012aa35655c2c81f9701b2799adf74b0f8e10be8a33e0->enter($__internal_ae170309e1398a9b404012aa35655c2c81f9701b2799adf74b0f8e10be8a33e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ae170309e1398a9b404012aa35655c2c81f9701b2799adf74b0f8e10be8a33e0->leave($__internal_ae170309e1398a9b404012aa35655c2c81f9701b2799adf74b0f8e10be8a33e0_prof);

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
