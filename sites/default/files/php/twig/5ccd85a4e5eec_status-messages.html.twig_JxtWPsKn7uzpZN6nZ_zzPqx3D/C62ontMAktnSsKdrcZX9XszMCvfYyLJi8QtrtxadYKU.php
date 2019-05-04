<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/material_base/templates/misc/status-messages.html.twig */
class __TwigTemplate_7191b8be3d1032b20f012fdaecb25f2e037c890788ef4dd9461ebb1b1603ef53 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 24, "for" => 26, "set" => 28];
        $filters = ["without" => 33, "length" => 40, "first" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['without', 'length', 'first'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 25
            echo "  <div class=\"messages-wrapper\">
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 27
                echo "      ";
                // line 28
                $context["classes"] = [0 => "messages", 1 => ("messages-" . $this->sandbox->ensureToStringAllowed(                // line 30
$context["type"]))];
                // line 33
                echo "      <div role=\"contentinfo\" aria-label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
                echo ">
        ";
                // line 34
                if (($context["type"] == "error")) {
                    // line 35
                    echo "          <div role=\"alert\">
        ";
                }
                // line 37
                echo "          ";
                if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                    // line 38
                    echo "            <h2 class=\"visually-hidden\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                    echo "</h2>
          ";
                }
                // line 40
                echo "          ";
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 41
                    echo "            <ul class=\"messages-list\">
              ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 43
                        echo "                <li class=\"messages-item\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                        echo "</li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "            </ul>
          ";
                } else {
                    // line 47
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                    echo "
          ";
                }
                // line 49
                echo "        ";
                if (($context["type"] == "error")) {
                    // line 50
                    echo "          </div>
        ";
                }
                // line 52
                echo "      </div>
      ";
                // line 54
                echo "      ";
                $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
                // line 55
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/material_base/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  133 => 55,  130 => 54,  127 => 52,  123 => 50,  120 => 49,  114 => 47,  110 => 45,  101 => 43,  97 => 42,  94 => 41,  91 => 40,  85 => 38,  82 => 37,  78 => 35,  76 => 34,  69 => 33,  67 => 30,  66 => 28,  64 => 27,  60 => 26,  57 => 25,  55 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/templates/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\drupal-fin\\drupal\\themes\\material_base\\templates\\misc\\status-messages.html.twig");
    }
}
