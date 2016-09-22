<?php

/* AppBundle::index.html.twig */
class __TwigTemplate_b09c30b6480a8095ce6c7b5838f7040c7ef57027f871bca5aaac0ecbfeba35b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle::index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_775910586aae69dd8ab48069c9a4c99ac55ae08c497a7571670bf9d806f972b1 = $this->env->getExtension("native_profiler");
        $__internal_775910586aae69dd8ab48069c9a4c99ac55ae08c497a7571670bf9d806f972b1->enter($__internal_775910586aae69dd8ab48069c9a4c99ac55ae08c497a7571670bf9d806f972b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_775910586aae69dd8ab48069c9a4c99ac55ae08c497a7571670bf9d806f972b1->leave($__internal_775910586aae69dd8ab48069c9a4c99ac55ae08c497a7571670bf9d806f972b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_184a7d479d232d41af155caca80b392f9667b935fa1e6cb3a2a245a9204473b9 = $this->env->getExtension("native_profiler");
        $__internal_184a7d479d232d41af155caca80b392f9667b935fa1e6cb3a2a245a9204473b9->enter($__internal_184a7d479d232d41af155caca80b392f9667b935fa1e6cb3a2a245a9204473b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"\">
  Photon is alives
  <div> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["photom"]) ? $context["photom"] : $this->getContext($context, "photom")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_184a7d479d232d41af155caca80b392f9667b935fa1e6cb3a2a245a9204473b9->leave($__internal_184a7d479d232d41af155caca80b392f9667b935fa1e6cb3a2a245a9204473b9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="">*/
/*   Photon is alives*/
/*   <div> {{ photom }}</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
