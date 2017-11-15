<?php

/* core/themes/stable/templates/admin/color-scheme-form.html.twig */
class __TwigTemplate_e415d60a285ef04c1fae93a3cb3f7a6c89e43f39b87f3864855baf00ae1b858c extends Twig_Template
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
        $__internal_f105d017055455a112c89cee484a837b843b268a773d140ee83db48b80ee1ce6 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f105d017055455a112c89cee484a837b843b268a773d140ee83db48b80ee1ce6->enter($__internal_f105d017055455a112c89cee484a837b843b268a773d140ee83db48b80ee1ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/color-scheme-form.html.twig"));

        $tags = array();
        $filters = array("without" => 21, "t" => 22);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('without', 't'),
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
        echo "<div class=\"color-form clearfix\">
  ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "scheme", array()), "html", null, true));
        echo "
  <div class=\"clearfix color-palette js-color-palette\">
    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "palette", array()), "html", null, true));
        echo "
  </div>
  ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "scheme", "palette"), "html", null, true));
        echo "
  <h2>";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Preview")));
        echo "</h2>
  ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_preview"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_f105d017055455a112c89cee484a837b843b268a773d140ee83db48b80ee1ce6->leave($__internal_f105d017055455a112c89cee484a837b843b268a773d140ee83db48b80ee1ce6_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/color-scheme-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  63 => 22,  59 => 21,  54 => 19,  49 => 17,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/color-scheme-form.html.twig", "/var/www/drupalvm/drupal/web/core/themes/stable/templates/admin/color-scheme-form.html.twig");
    }
}
