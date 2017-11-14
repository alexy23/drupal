<?php

/* {# inline_template_start #}<a class="colorbox-node" href="http://drupalvm.test/node/18?width=600&height=600">Contact us</a> */
class __TwigTemplate_0005b50589642e0fdfdaa61f578c72ed1bbc68f89c258b69974d66a096888cf8 extends Twig_Template
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
        $__internal_238f2ea201638b1155271f8647c25a706c3a540f0c1224ebeac59e07faa327b2 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_238f2ea201638b1155271f8647c25a706c3a540f0c1224ebeac59e07faa327b2->enter($__internal_238f2ea201638b1155271f8647c25a706c3a540f0c1224ebeac59e07faa327b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<a class=\"colorbox-node\" href=\"http://drupalvm.test/node/18?width=600&height=600\">Contact us</a>"));

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

        // line 1
        echo "<a class=\"colorbox-node\" href=\"http://drupalvm.test/node/18?width=600&height=600\">Contact us</a>";
        
        $__internal_238f2ea201638b1155271f8647c25a706c3a540f0c1224ebeac59e07faa327b2->leave($__internal_238f2ea201638b1155271f8647c25a706c3a540f0c1224ebeac59e07faa327b2_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a class=\"colorbox-node\" href=\"http://drupalvm.test/node/18?width=600&height=600\">Contact us</a>";
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
        return new Twig_Source("", "{# inline_template_start #}<a class=\"colorbox-node\" href=\"http://drupalvm.test/node/18?width=600&height=600\">Contact us</a>", "");
    }
}
