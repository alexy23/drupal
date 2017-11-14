<?php

/* modules/contrib/views_slideshow/templates/views-slideshow-slide-counter.html.twig */
class __TwigTemplate_6c586909dcf17d799f2846171ca2380314371928122de635a8cfe3b49f015062 extends Twig_Template
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
        $__internal_1668b151e450a3be090c47ed255c02ad580e739f383a3ffe61a20025d808e4d2 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1668b151e450a3be090c47ed255c02ad580e739f383a3ffe61a20025d808e4d2->enter($__internal_1668b151e450a3be090c47ed255c02ad580e739f383a3ffe61a20025d808e4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-slideshow-slide-counter.html.twig"));

        $tags = array();
        $filters = array("t" => 17);
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

        // line 16
        echo "<div id=\"views_slideshow_slide_counter_";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["vss_id"] ?? null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <span class=\"num\">1</span> ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("of")));
        echo " <span class=\"total\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slide_count"] ?? null), "html", null, true));
        echo "</span>
</div>
";
        
        $__internal_1668b151e450a3be090c47ed255c02ad580e739f383a3ffe61a20025d808e4d2->leave($__internal_1668b151e450a3be090c47ed255c02ad580e739f383a3ffe61a20025d808e4d2_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-slideshow-slide-counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/views_slideshow/templates/views-slideshow-slide-counter.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/views_slideshow/templates/views-slideshow-slide-counter.html.twig");
    }
}
