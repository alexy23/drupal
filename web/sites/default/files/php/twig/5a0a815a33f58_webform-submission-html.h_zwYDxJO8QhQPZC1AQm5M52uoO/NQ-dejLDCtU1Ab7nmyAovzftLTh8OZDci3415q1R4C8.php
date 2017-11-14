<?php

/* modules/contrib/webform/templates/webform-submission-html.html.twig */
class __TwigTemplate_f9065680431fe7148242d3f403a7ffdbe0c18480d247f94f3030f55682ac0fa8 extends Twig_Template
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
        $__internal_e6121dda3f539f4e5f6b5ebdec177400f4f7961641e6e20b1afe31d2c953afc4 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6121dda3f539f4e5f6b5ebdec177400f4f7961641e6e20b1afe31d2c953afc4->enter($__internal_e6121dda3f539f4e5f6b5ebdec177400f4f7961641e6e20b1afe31d2c953afc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-submission-html.html.twig"));

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

        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_e6121dda3f539f4e5f6b5ebdec177400f4f7961641e6e20b1afe31d2c953afc4->leave($__internal_e6121dda3f539f4e5f6b5ebdec177400f4f7961641e6e20b1afe31d2c953afc4_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-submission-html.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/webform/templates/webform-submission-html.html.twig");
    }
}
