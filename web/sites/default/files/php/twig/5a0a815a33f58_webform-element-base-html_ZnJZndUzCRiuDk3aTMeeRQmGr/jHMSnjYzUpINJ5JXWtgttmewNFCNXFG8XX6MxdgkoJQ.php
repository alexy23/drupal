<?php

/* modules/contrib/webform/templates/webform-element-base-html.html.twig */
class __TwigTemplate_09f6660b3970a427dc40d6c3fc13efbaed788d9092c685b28f21d5cb31f91d29 extends Twig_Template
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
        $__internal_26b1b458cfc5432c536a885d0f45f899414a2a0e634618195209e69731fa7cfb = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b1b458cfc5432c536a885d0f45f899414a2a0e634618195209e69731fa7cfb->enter($__internal_26b1b458cfc5432c536a885d0f45f899414a2a0e634618195209e69731fa7cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-element-base-html.html.twig"));

        $tags = array("if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 16
        if ($this->getAttribute(($context["options"] ?? null), "email", array())) {
            // line 17
            echo "  ";
            if (($context["title"] ?? null)) {
                echo "<b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "</b><br />";
            }
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true));
            echo "<br /><br />
";
        } else {
            // line 19
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["item"] ?? null), "html", null, true));
            echo "
";
        }
        // line 21
        echo "
";
        
        $__internal_26b1b458cfc5432c536a885d0f45f899414a2a0e634618195209e69731fa7cfb->leave($__internal_26b1b458cfc5432c536a885d0f45f899414a2a0e634618195209e69731fa7cfb_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-element-base-html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  59 => 19,  48 => 17,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-element-base-html.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/webform/templates/webform-element-base-html.html.twig");
    }
}
