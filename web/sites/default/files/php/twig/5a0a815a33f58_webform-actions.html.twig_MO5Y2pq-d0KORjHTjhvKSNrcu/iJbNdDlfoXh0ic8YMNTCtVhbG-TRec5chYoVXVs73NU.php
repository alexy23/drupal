<?php

/* modules/contrib/webform/templates/webform-actions.html.twig */
class __TwigTemplate_56cabfa082bacf36584194a8c198f3a9f751f11130ef86bba89d6b62baaf2c0b extends Twig_Template
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
        $__internal_59660dd294dc17ced26c675679f17c8646203302352762f7497b921cae63cc4c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_59660dd294dc17ced26c675679f17c8646203302352762f7497b921cae63cc4c->enter($__internal_59660dd294dc17ced26c675679f17c8646203302352762f7497b921cae63cc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-actions.html.twig"));

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

        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_59660dd294dc17ced26c675679f17c8646203302352762f7497b921cae63cc4c->leave($__internal_59660dd294dc17ced26c675679f17c8646203302352762f7497b921cae63cc4c_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-actions.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/webform/templates/webform-actions.html.twig");
    }
}
