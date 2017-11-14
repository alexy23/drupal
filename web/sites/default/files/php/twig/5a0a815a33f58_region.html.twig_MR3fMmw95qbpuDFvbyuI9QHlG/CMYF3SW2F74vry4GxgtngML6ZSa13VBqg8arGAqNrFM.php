<?php

/* core/themes/classy/templates/layout/region.html.twig */
class __TwigTemplate_a3ec482b72170cf0e4eac5b38376f1d0d1ca3289bf1a14e3f7979726189b8cab extends Twig_Template
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
        $__internal_fca3ba0a8b8891009a54ffa250110ee15a361c76d7531f41e05bd20f36eb5a05 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca3ba0a8b8891009a54ffa250110ee15a361c76d7531f41e05bd20f36eb5a05->enter($__internal_fca3ba0a8b8891009a54ffa250110ee15a361c76d7531f41e05bd20f36eb5a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/layout/region.html.twig"));

        $tags = array("set" => 16, "if" => 21);
        $filters = array("clean_class" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 18
($context["region"] ?? null))));
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
  </div>
";
        }
        
        $__internal_fca3ba0a8b8891009a54ffa250110ee15a361c76d7531f41e05bd20f36eb5a05->leave($__internal_fca3ba0a8b8891009a54ffa250110ee15a361c76d7531f41e05bd20f36eb5a05_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  51 => 22,  49 => 21,  47 => 18,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/layout/region.html.twig", "/var/www/drupalvm/drupal/web/core/themes/classy/templates/layout/region.html.twig");
    }
}
