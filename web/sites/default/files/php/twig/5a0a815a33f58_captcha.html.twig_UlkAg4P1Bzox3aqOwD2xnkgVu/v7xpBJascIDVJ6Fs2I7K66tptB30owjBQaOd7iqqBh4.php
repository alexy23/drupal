<?php

/* modules/contrib/captcha/templates/captcha.html.twig */
class __TwigTemplate_d2d171f71bbe05fadd1114f523fc524e4047ff5eab5542ecc0052e1f65c872ad extends Twig_Template
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
        $__internal_2d5beb7b757a7585943ae03bd428440a6499294845e899ef49355fd320f3d106 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5beb7b757a7585943ae03bd428440a6499294845e899ef49355fd320f3d106->enter($__internal_2d5beb7b757a7585943ae03bd428440a6499294845e899ef49355fd320f3d106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/captcha/templates/captcha.html.twig"));

        $tags = array("if" => 1);
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

        // line 1
        if (($context["details"] ?? null)) {
            // line 2
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["details"] ?? null), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    <div class=\"captcha\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true));
            echo "</div>
";
        }
        
        $__internal_2d5beb7b757a7585943ae03bd428440a6499294845e899ef49355fd320f3d106->leave($__internal_2d5beb7b757a7585943ae03bd428440a6499294845e899ef49355fd320f3d106_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/captcha/templates/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/captcha/templates/captcha.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/captcha/templates/captcha.html.twig");
    }
}
