<?php

/* modules/contrib/webform/templates/webform-element-help.html.twig */
class __TwigTemplate_7d9c14302c827daf6550cf34632f8fd6a3e3069c69c6ec8cb818cd0805ac8083 extends Twig_Template
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
        $__internal_a42f20a6d8de225006e822d1c11637e1de16deaef679abfd162cb8ee1ceeec58 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42f20a6d8de225006e822d1c11637e1de16deaef679abfd162cb8ee1ceeec58->enter($__internal_a42f20a6d8de225006e822d1c11637e1de16deaef679abfd162cb8ee1ceeec58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-element-help.html.twig"));

        $tags = array("spaceless" => 16);
        $filters = array();
        $functions = array("attach_library" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless'),
                array(),
                array('attach_library')
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

        // line 16
        ob_start();
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.element.help"), "html", null, true));
        echo "
";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["help_icon"] ?? null), "html", null, true));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 20
        echo "
";
        
        $__internal_a42f20a6d8de225006e822d1c11637e1de16deaef679abfd162cb8ee1ceeec58->leave($__internal_a42f20a6d8de225006e822d1c11637e1de16deaef679abfd162cb8ee1ceeec58_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-element-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  52 => 18,  48 => 17,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-element-help.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/webform/templates/webform-element-help.html.twig");
    }
}
