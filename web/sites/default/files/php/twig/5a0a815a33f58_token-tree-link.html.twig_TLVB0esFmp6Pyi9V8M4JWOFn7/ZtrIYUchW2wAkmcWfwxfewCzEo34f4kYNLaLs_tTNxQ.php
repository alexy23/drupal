<?php

/* modules/contrib/token/templates/token-tree-link.html.twig */
class __TwigTemplate_6d39a708af3be3de51c2bca3dcec20bb7da7937815cb6b22d0d7e8f7210eafb6 extends Twig_Template
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
        $__internal_3b96d36b59b0c032b7bf9a6044fbdf9117db5f6e4bd3e660188b4fc01618ddd0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b96d36b59b0c032b7bf9a6044fbdf9117db5f6e4bd3e660188b4fc01618ddd0->enter($__internal_3b96d36b59b0c032b7bf9a6044fbdf9117db5f6e4bd3e660188b4fc01618ddd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/token/templates/token-tree-link.html.twig"));

        $tags = array("if" => 17);
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

        // line 17
        if (($context["link"] ?? null)) {
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
        }
        
        $__internal_3b96d36b59b0c032b7bf9a6044fbdf9117db5f6e4bd3e660188b4fc01618ddd0->leave($__internal_3b96d36b59b0c032b7bf9a6044fbdf9117db5f6e4bd3e660188b4fc01618ddd0_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/token/templates/token-tree-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  46 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/token/templates/token-tree-link.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/token/templates/token-tree-link.html.twig");
    }
}
