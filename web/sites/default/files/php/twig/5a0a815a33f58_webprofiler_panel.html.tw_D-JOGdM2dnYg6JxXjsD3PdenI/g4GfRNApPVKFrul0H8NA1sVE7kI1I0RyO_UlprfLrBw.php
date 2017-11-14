<?php

/* modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig */
class __TwigTemplate_07fd5be13cf0ea76f5b69a2ef4c2f17ca1f4f1c8c9792569f7d16394a430b83e extends Twig_Template
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
        $__internal_d6876c07ec45c04368aaa5f0b63a111c3a6eebea056d2ea084163c0a0378f013 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6876c07ec45c04368aaa5f0b63a111c3a6eebea056d2ea084163c0a0378f013->enter($__internal_d6876c07ec45c04368aaa5f0b63a111c3a6eebea056d2ea084163c0a0378f013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig"));

        $tags = array();
        $filters = array("raw" => 1);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('raw'),
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

        // line 1
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["panel"] ?? null)));
        echo "
";
        
        $__internal_d6876c07ec45c04368aaa5f0b63a111c3a6eebea056d2ea084163c0a0378f013->leave($__internal_d6876c07ec45c04368aaa5f0b63a111c3a6eebea056d2ea084163c0a0378f013_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig");
    }
}
