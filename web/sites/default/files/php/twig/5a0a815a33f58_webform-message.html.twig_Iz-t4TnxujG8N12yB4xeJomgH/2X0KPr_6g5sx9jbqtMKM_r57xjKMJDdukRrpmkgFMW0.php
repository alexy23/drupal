<?php

/* modules/contrib/webform/templates/webform-message.html.twig */
class __TwigTemplate_42b61e111037a0991d3ce0a424712289e22c158a2d52b8e7d2fcd9ae1f715f5c extends Twig_Template
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
        $__internal_f969958b238f8b5eafd331db64b87b3fcad5b085f3d87d7116dcaac0a9ff9f4a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f969958b238f8b5eafd331db64b87b3fcad5b085f3d87d7116dcaac0a9ff9f4a->enter($__internal_f969958b238f8b5eafd331db64b87b3fcad5b085f3d87d7116dcaac0a9ff9f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-message.html.twig"));

        $tags = array("set" => 20, "if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 20
        $context["classes"] = array(0 => ((        // line 21
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 22
($context["has_parent"] ?? null)) ? ("form-wrapper") : ("")));
        // line 25
        if ( !($context["closed"] ?? null)) {
            // line 26
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["message"] ?? null), "html", null, true));
            echo "</div>
";
        }
        
        $__internal_f969958b238f8b5eafd331db64b87b3fcad5b085f3d87d7116dcaac0a9ff9f4a->leave($__internal_f969958b238f8b5eafd331db64b87b3fcad5b085f3d87d7116dcaac0a9ff9f4a_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 26,  50 => 25,  48 => 22,  47 => 21,  46 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-message.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/webform/templates/webform-message.html.twig");
    }
}
