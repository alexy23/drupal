<?php

/* {# inline_template_start #} */
class __TwigTemplate_5058c30ffe338681045ec27a2f5e9e6b314310cd4087c898b61b3869f4a3127d extends Twig_Template
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
        $__internal_6d1db088837a5b93627a3164eda973c654ffb8cf204e2f69d6fd0353e2da1089 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1db088837a5b93627a3164eda973c654ffb8cf204e2f69d6fd0353e2da1089->enter($__internal_6d1db088837a5b93627a3164eda973c654ffb8cf204e2f69d6fd0353e2da1089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        
        $__internal_6d1db088837a5b93627a3164eda973c654ffb8cf204e2f69d6fd0353e2da1089->leave($__internal_6d1db088837a5b93627a3164eda973c654ffb8cf204e2f69d6fd0353e2da1089_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}", "");
    }
}