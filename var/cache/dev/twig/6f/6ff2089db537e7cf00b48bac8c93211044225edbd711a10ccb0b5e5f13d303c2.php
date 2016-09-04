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
        $__internal_8e9a748ddc8da7b65243ed4c379ecf1c079be1b63a971d4a3ce0603083ccb95d = $this->env->getExtension("native_profiler");
        $__internal_8e9a748ddc8da7b65243ed4c379ecf1c079be1b63a971d4a3ce0603083ccb95d->enter($__internal_8e9a748ddc8da7b65243ed4c379ecf1c079be1b63a971d4a3ce0603083ccb95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8e9a748ddc8da7b65243ed4c379ecf1c079be1b63a971d4a3ce0603083ccb95d->leave($__internal_8e9a748ddc8da7b65243ed4c379ecf1c079be1b63a971d4a3ce0603083ccb95d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eec6e2a705e7eb5d1664fccf5624491850e7f2110cd64afd79aab99d31da01b4 = $this->env->getExtension("native_profiler");
        $__internal_eec6e2a705e7eb5d1664fccf5624491850e7f2110cd64afd79aab99d31da01b4->enter($__internal_eec6e2a705e7eb5d1664fccf5624491850e7f2110cd64afd79aab99d31da01b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eec6e2a705e7eb5d1664fccf5624491850e7f2110cd64afd79aab99d31da01b4->leave($__internal_eec6e2a705e7eb5d1664fccf5624491850e7f2110cd64afd79aab99d31da01b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebf312be7a9d51a9f76b38044fb1136b9430940ab82666b2279ed64716d107f4 = $this->env->getExtension("native_profiler");
        $__internal_ebf312be7a9d51a9f76b38044fb1136b9430940ab82666b2279ed64716d107f4->enter($__internal_ebf312be7a9d51a9f76b38044fb1136b9430940ab82666b2279ed64716d107f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ebf312be7a9d51a9f76b38044fb1136b9430940ab82666b2279ed64716d107f4->leave($__internal_ebf312be7a9d51a9f76b38044fb1136b9430940ab82666b2279ed64716d107f4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb8a5465e36f70dc3584fa2f9b8457dc28f50c17ac54ea00aaf8fd8ae44a65b = $this->env->getExtension("native_profiler");
        $__internal_3eb8a5465e36f70dc3584fa2f9b8457dc28f50c17ac54ea00aaf8fd8ae44a65b->enter($__internal_3eb8a5465e36f70dc3584fa2f9b8457dc28f50c17ac54ea00aaf8fd8ae44a65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3eb8a5465e36f70dc3584fa2f9b8457dc28f50c17ac54ea00aaf8fd8ae44a65b->leave($__internal_3eb8a5465e36f70dc3584fa2f9b8457dc28f50c17ac54ea00aaf8fd8ae44a65b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f20b0d3322b4753025445ea44e5da984ce80d5342df0c83cf954063b4d2fdc6a = $this->env->getExtension("native_profiler");
        $__internal_f20b0d3322b4753025445ea44e5da984ce80d5342df0c83cf954063b4d2fdc6a->enter($__internal_f20b0d3322b4753025445ea44e5da984ce80d5342df0c83cf954063b4d2fdc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f20b0d3322b4753025445ea44e5da984ce80d5342df0c83cf954063b4d2fdc6a->leave($__internal_f20b0d3322b4753025445ea44e5da984ce80d5342df0c83cf954063b4d2fdc6a_prof);

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
