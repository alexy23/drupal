<?php

/* core/themes/classy/templates/form/radios.html.twig */
class __TwigTemplate_484566c3762b04839b782d5b39e5141bf96771809dc92c0c072c9b35a9cdb89f extends Twig_Template
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
        $__internal_a854af8ef506168ef2e25199f47602ffa1ba594c38a396d96351ce1903ee1d29 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a854af8ef506168ef2e25199f47602ffa1ba594c38a396d96351ce1903ee1d29->enter($__internal_a854af8ef506168ef2e25199f47602ffa1ba594c38a396d96351ce1903ee1d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/radios.html.twig"));

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
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "form-radios"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "</div>
";
        
        $__internal_a854af8ef506168ef2e25199f47602ffa1ba594c38a396d96351ce1903ee1d29->leave($__internal_a854af8ef506168ef2e25199f47602ffa1ba594c38a396d96351ce1903ee1d29_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/radios.html.twig";
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
        return new Twig_Source("", "core/themes/classy/templates/form/radios.html.twig", "/var/www/drupalvm/drupal/web/core/themes/classy/templates/form/radios.html.twig");
    }
}