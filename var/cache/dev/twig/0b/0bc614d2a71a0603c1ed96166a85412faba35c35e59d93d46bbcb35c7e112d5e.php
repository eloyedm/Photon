<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8468b50504aac1b8feb46d0d3f1250b222f3d55db21f4929ff4bdda7740b3b4f extends Twig_Template
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
        $__internal_0ceaf21a8b03aaf57e79ae4d30b1bcd090ee08849dbfc9fb2b4ca64eee1d8de8 = $this->env->getExtension("native_profiler");
        $__internal_0ceaf21a8b03aaf57e79ae4d30b1bcd090ee08849dbfc9fb2b4ca64eee1d8de8->enter($__internal_0ceaf21a8b03aaf57e79ae4d30b1bcd090ee08849dbfc9fb2b4ca64eee1d8de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0ceaf21a8b03aaf57e79ae4d30b1bcd090ee08849dbfc9fb2b4ca64eee1d8de8->leave($__internal_0ceaf21a8b03aaf57e79ae4d30b1bcd090ee08849dbfc9fb2b4ca64eee1d8de8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
