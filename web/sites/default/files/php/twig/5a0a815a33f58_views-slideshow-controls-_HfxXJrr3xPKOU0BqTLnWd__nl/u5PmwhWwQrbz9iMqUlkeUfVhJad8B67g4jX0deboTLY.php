<?php

/* modules/contrib/views_slideshow/templates/views-slideshow-controls-text.html.twig */
class __TwigTemplate_28c3a3a8dde3b66561fa79dfdba35688e7c62300f275df6d179e00524becd18d extends Twig_Template
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
        $__internal_5ea7a0530e2edf70cb6b86b1b9796d1a5dbf310601cbab9fb4a45c348af22427 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea7a0530e2edf70cb6b86b1b9796d1a5dbf310601cbab9fb4a45c348af22427->enter($__internal_5ea7a0530e2edf70cb6b86b1b9796d1a5dbf310601cbab9fb4a45c348af22427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-slideshow-controls-text.html.twig"));

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

        // line 18
        echo "<div id=\"views_slideshow_controls_text_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["vss_id"] ?? null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rendered_control_previous"] ?? null), "html", null, true));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rendered_control_pause"] ?? null), "html", null, true));
        echo "
  ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rendered_control_next"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_5ea7a0530e2edf70cb6b86b1b9796d1a5dbf310601cbab9fb4a45c348af22427->leave($__internal_5ea7a0530e2edf70cb6b86b1b9796d1a5dbf310601cbab9fb4a45c348af22427_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-slideshow-controls-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  57 => 20,  53 => 19,  46 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/views_slideshow/templates/views-slideshow-controls-text.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/views_slideshow/templates/views-slideshow-controls-text.html.twig");
    }
}
