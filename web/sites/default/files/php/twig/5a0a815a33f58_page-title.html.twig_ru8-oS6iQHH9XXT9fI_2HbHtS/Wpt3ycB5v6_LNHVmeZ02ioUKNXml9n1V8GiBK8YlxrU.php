<?php

/* core/themes/bartik/templates/page-title.html.twig */
class __TwigTemplate_d701b07b7c6712c3117591dfc8890f11d38e801982120471ec12895e08897f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/content/page-title.html.twig", "core/themes/bartik/templates/page-title.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/content/page-title.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_641b2227dd7de073f92ad4bde37d4d5d7d09e05fbe0ac6d035582a84eb33048f = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_641b2227dd7de073f92ad4bde37d4d5d7d09e05fbe0ac6d035582a84eb33048f->enter($__internal_641b2227dd7de073f92ad4bde37d4d5d7d09e05fbe0ac6d035582a84eb33048f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/page-title.html.twig"));

        $tags = array("set" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "title"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641b2227dd7de073f92ad4bde37d4d5d7d09e05fbe0ac6d035582a84eb33048f->leave($__internal_641b2227dd7de073f92ad4bde37d4d5d7d09e05fbe0ac6d035582a84eb33048f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 16,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/page-title.html.twig", "/var/www/drupalvm/drupal/web/core/themes/bartik/templates/page-title.html.twig");
    }
}