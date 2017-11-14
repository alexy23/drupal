<?php

/* modules/contrib/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_28ae2fd83187d27011f86427aa8c0371037484e05c6483e6640f0c0f8d13fdaa extends Twig_Template
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
        $__internal_4e5e90d3f8ede2cf47c1748a638668b81f3cf4e6e0bdf2d9d7991ef1fc78ee2c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5e90d3f8ede2cf47c1748a638668b81f3cf4e6e0bdf2d9d7991ef1fc78ee2c->enter($__internal_4e5e90d3f8ede2cf47c1748a638668b81f3cf4e6e0bdf2d9d7991ef1fc78ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-submission-information.html.twig"));

        $tags = array("if" => 14);
        $filters = array("t" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 14
        echo "<details data-webform-element-id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["webform_id"] ?? null), "html", null, true));
        echo "--submission_information\"";
        if (($context["open"] ?? null)) {
            echo " open=\"open\"";
        }
        echo ">
  <summary role=\"button\"";
        // line 15
        if (($context["open"] ?? null)) {
            echo " aria-expanded=\"true\" aria-pressed=\"true\"";
        }
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission information")));
        echo "</summary>
  <div class=\"details-wrapper\">
    ";
        // line 17
        if (($context["submissions_view"] ?? null)) {
            // line 18
            echo "      <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["serial"] ?? null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission ID")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sid"] ?? null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission UUID")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uuid"] ?? null), "html", null, true));
            echo "</div>
      ";
            // line 21
            if (($context["uri"] ?? null)) {
                // line 22
                echo "        <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission URI")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uri"] ?? null), "html", null, true));
                echo "</div>
      ";
            }
            // line 24
            echo "      ";
            if (($context["token_update"] ?? null)) {
                // line 25
                echo "        <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Update")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token_update"] ?? null), "html", null, true));
                echo "</div>
      ";
            }
            // line 27
            echo "      <br />
      <div><b>";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Completed")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["completed"] ?? null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Changed")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["changed"] ?? null), "html", null, true));
            echo "</div>
      <br />
      <div><b>";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Remote IP address")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["remote_addr"] ?? null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted by")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_by"] ?? null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Language")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["language"] ?? null), "html", null, true));
            echo "</div>
      <br />
      <div><b>";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Is draft")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["is_draft"] ?? null), "html", null, true));
            echo "</div>
      ";
            // line 37
            if (($context["current_page"] ?? null)) {
                // line 38
                echo "        <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Current page")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["current_page"] ?? null), "html", null, true));
                echo "</div>
      ";
            }
            // line 40
            echo "      <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Webform")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["webform"] ?? null), "html", null, true));
            echo "</div>
      ";
            // line 41
            if (($context["submitted_to"] ?? null)) {
                // line 42
                echo "        <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted to")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_to"] ?? null), "html", null, true));
                echo "</div>
      ";
            }
            // line 44
            echo "      ";
            if ((($context["sticky"] ?? null) || ($context["notes"] ?? null))) {
                // line 45
                echo "        <br />
        ";
                // line 46
                if (($context["sticky"] ?? null)) {
                    // line 47
                    echo "          <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Flagged")));
                    echo ":</b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sticky"] ?? null), "html", null, true));
                    echo "</div>
        ";
                }
                // line 49
                echo "        ";
                if (($context["notes"] ?? null)) {
                    // line 50
                    echo "          <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Notes")));
                    echo ":</b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["notes"] ?? null), "html", null, true));
                    echo "</div>
        ";
                }
                // line 52
                echo "      ";
            }
            // line 53
            echo "
    ";
        } else {
            // line 55
            echo "      <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["serial"] ?? null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
            echo "</div>
    ";
        }
        // line 58
        echo "
  </div>
</details>
";
        
        $__internal_4e5e90d3f8ede2cf47c1748a638668b81f3cf4e6e0bdf2d9d7991ef1fc78ee2c->leave($__internal_4e5e90d3f8ede2cf47c1748a638668b81f3cf4e6e0bdf2d9d7991ef1fc78ee2c_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 58,  221 => 56,  214 => 55,  210 => 53,  207 => 52,  199 => 50,  196 => 49,  188 => 47,  186 => 46,  183 => 45,  180 => 44,  172 => 42,  170 => 41,  163 => 40,  155 => 38,  153 => 37,  147 => 36,  140 => 34,  134 => 33,  128 => 32,  121 => 30,  115 => 29,  109 => 28,  106 => 27,  98 => 25,  95 => 24,  87 => 22,  85 => 21,  79 => 20,  73 => 19,  66 => 18,  64 => 17,  55 => 15,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-submission-information.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/webform/templates/webform-submission-information.html.twig");
    }
}
