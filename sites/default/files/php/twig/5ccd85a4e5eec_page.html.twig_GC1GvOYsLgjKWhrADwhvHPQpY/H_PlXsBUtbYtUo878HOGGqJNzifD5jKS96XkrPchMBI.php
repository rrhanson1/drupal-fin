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

/* themes/material_base/templates/layout/page.html.twig */
class __TwigTemplate_15c06b57832a05435713ac64f18511175e6f387ec50b72bc8235d6880ca0390c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 70];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
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
        // line 46
        echo "<div id=\"page\" class=\"layout-container\">

  <div id=\"navbar\">
    ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar", [])), "html", null, true);
        echo "
    <!--
    ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
    ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
    -->
  </div>

  <div id=\"drawer-overlay\"></div>
  <div id=\"drawer\">
    ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "drawer", [])), "html", null, true);
        echo "
  </div>

  <header id=\"header\" role=\"banner\">
    <div id=\"header-content\">
      ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    </div>
    <div id=\"header-bg\">
      ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_bg", [])), "html", null, true);
        echo "
    </div>
  </header>

  ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "actions", [])) {
            // line 71
            echo "    <div id=\"actions\">
      ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "actions", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  <div id=\"content\">
    ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "before_main", [])) {
            // line 78
            echo "      <div id=\"before-main\">
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 82
        echo "
    <main role=\"main\" id=\"main\" class=\"container\">
      <div id=\"main-content\" tabindex=\"-1\">";
        // line 85
        echo "
        <div class=\"card-holder\">
          ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
          ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

          <div class=\"layout-content\">
            ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>";
        // line 94
        echo "
        </div>";
        // line 96
        echo "
        ";
        // line 97
        if ($this->getAttribute(($context["page"] ?? null), "content_secondary", [])) {
            // line 98
            echo "          <div id=\"content-secondary\">
            ";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_secondary", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 102
        echo "      </div>";
        // line 103
        echo "
      ";
        // line 104
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 105
            echo "        <aside id=\"sidebar-first\" class=\"sidebar layout-sidebar-first\" role=\"complementary\">
          ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 109
        echo "
      ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 111
            echo "        <aside id=\"sidebar-second\" class=\"sidebar layout-sidebar-second\" role=\"complementary\">
          ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 115
        echo "
    </main>";
        // line 117
        echo "
    ";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "after_main", [])) {
            // line 119
            echo "      <div id=\"after-main\">
        ";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 123
        echo "
  </div>";
        // line 125
        echo "
  <footer id=\"footer\" role=\"contentinfo\">
    ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    <div id=\"footer-content\">
      ";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_content", [])), "html", null, true);
        echo "
    </div>
  </footer>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/material_base/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 129,  222 => 127,  218 => 125,  215 => 123,  209 => 120,  206 => 119,  204 => 118,  201 => 117,  198 => 115,  192 => 112,  189 => 111,  187 => 110,  184 => 109,  178 => 106,  175 => 105,  173 => 104,  170 => 103,  168 => 102,  162 => 99,  159 => 98,  157 => 97,  154 => 96,  151 => 94,  147 => 92,  141 => 89,  137 => 88,  133 => 87,  129 => 85,  125 => 82,  119 => 79,  116 => 78,  114 => 77,  110 => 75,  104 => 72,  101 => 71,  99 => 70,  92 => 66,  86 => 63,  78 => 58,  69 => 52,  65 => 51,  60 => 49,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_base/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal-fin\\drupal\\themes\\material_base\\templates\\layout\\page.html.twig");
    }
}
