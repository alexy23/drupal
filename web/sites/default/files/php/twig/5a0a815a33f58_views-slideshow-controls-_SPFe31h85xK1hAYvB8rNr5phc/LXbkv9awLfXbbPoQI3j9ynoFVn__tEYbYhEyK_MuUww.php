<?php

/* modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig */
class __TwigTemplate_813cf084543903ce5051df6336ed25389b7306336577a119a3837c88348f36e8 extends Twig_Template
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
        $__internal_5767f5966ddbcad0322b521e6830d01c5324cad130b4c94a24e1c31fc042ec3c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5767f5966ddbcad0322b521e6830d01c5324cad130b4c94a24e1c31fc042ec3c->enter($__internal_5767f5966ddbcad0322b521e6830d01c5324cad130b4c94a24e1c31fc042ec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig"));

        $tags = array();
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
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

        // line 15
        echo "<span id=\"views_slideshow_controls_text_next_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["vss_id"] ?? null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <a href=\"#\">";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next")));
        echo "</a>
</span>
";
        
        $__internal_5767f5966ddbcad0322b521e6830d01c5324cad130b4c94a24e1c31fc042ec3c->leave($__internal_5767f5966ddbcad0322b521e6830d01c5324cad130b4c94a24e1c31fc042ec3c_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  46 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/views_slideshow/templates/views-slideshow-controls-text-next.html.twig");
    }
}
