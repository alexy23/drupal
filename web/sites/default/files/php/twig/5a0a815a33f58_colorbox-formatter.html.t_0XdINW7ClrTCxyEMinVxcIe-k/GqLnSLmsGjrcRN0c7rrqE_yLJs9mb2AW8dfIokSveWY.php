<?php

/* modules/contrib/colorbox/templates/colorbox-formatter.html.twig */
class __TwigTemplate_bf461e37f3b535dfef220d978ab86a0f8e645a927d55dfdef77e087561de1517 extends Twig_Template
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
        $__internal_ff61f0596148c3e6580d9d30b6f17950f930f5774687fd9cd90b57d684ee68c5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff61f0596148c3e6580d9d30b6f17950f930f5774687fd9cd90b57d684ee68c5->enter($__internal_ff61f0596148c3e6580d9d30b6f17950f930f5774687fd9cd90b57d684ee68c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/colorbox/templates/colorbox-formatter.html.twig"));

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

        // line 16
        echo "<a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
        echo "</a>
";
        
        $__internal_ff61f0596148c3e6580d9d30b6f17950f930f5774687fd9cd90b57d684ee68c5->leave($__internal_ff61f0596148c3e6580d9d30b6f17950f930f5774687fd9cd90b57d684ee68c5_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/colorbox/templates/colorbox-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/colorbox/templates/colorbox-formatter.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/colorbox/templates/colorbox-formatter.html.twig");
    }
}
