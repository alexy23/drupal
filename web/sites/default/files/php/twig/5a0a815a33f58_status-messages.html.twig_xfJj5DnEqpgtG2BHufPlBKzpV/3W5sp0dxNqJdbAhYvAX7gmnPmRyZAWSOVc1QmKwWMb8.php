<?php

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_3c6bc863c95ccfb9739f52e689f228b0c543128a6821b79dd8314842ab507428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/misc/status-messages.html.twig", "core/themes/bartik/templates/status-messages.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/misc/status-messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7baa194cba33d546dddb07b119790f45f1882acbe15f1b2df6fbc00b07435647 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baa194cba33d546dddb07b119790f45f1882acbe15f1b2df6fbc00b07435647->enter($__internal_7baa194cba33d546dddb07b119790f45f1882acbe15f1b2df6fbc00b07435647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/status-messages.html.twig"));

        $tags = array("if" => 24);
        $filters = array();
        $functions = array("attach_library" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7baa194cba33d546dddb07b119790f45f1882acbe15f1b2df6fbc00b07435647->leave($__internal_7baa194cba33d546dddb07b119790f45f1882acbe15f1b2df6fbc00b07435647_prof);

    }

    // line 23
    public function block_messages($context, array $blocks = array())
    {
        $__internal_83660ac452638df15bdb5ef56c187ab054254996d3ae7bb1ff8ae39cf6a00366 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_83660ac452638df15bdb5ef56c187ab054254996d3ae7bb1ff8ae39cf6a00366->enter($__internal_83660ac452638df15bdb5ef56c187ab054254996d3ae7bb1ff8ae39cf6a00366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 24
        echo "  ";
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bartik/messages"), "html", null, true));
            echo "
    <div class=\"messages__wrapper layout-container\">
      ";
            // line 27
            $this->displayParentBlock("messages", $context, $blocks);
            echo "
    </div>
  ";
        }
        
        $__internal_83660ac452638df15bdb5ef56c187ab054254996d3ae7bb1ff8ae39cf6a00366->leave($__internal_83660ac452638df15bdb5ef56c187ab054254996d3ae7bb1ff8ae39cf6a00366_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  64 => 24,  58 => 23,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/status-messages.html.twig", "/var/www/drupalvm/drupal/web/core/themes/bartik/templates/status-messages.html.twig");
    }
}
