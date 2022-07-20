<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/b5subtheme/templates/page--front.html.twig */
class __TwigTemplate_36ba93b08605948a34a4da5dab542171e3d31e9c048daaaf3b5b1ce47a685a08 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 50
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 50, $this->source))) : (" "))) . (((        // line 51
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 52
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 52, $this->source))) : (" ")));
        // line 54
        echo "
";
        // line 56
        $context["footer_classes"] = (((" " . (((        // line 57
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 57, $this->source))) : (" "))) . (((        // line 58
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 59
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 59, $this->source))) : (" ")));
        // line 61
        echo "
<header>
  ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "

  ";
        // line 65
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 65) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 65)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 65))) {
            // line 66
            echo "  <nav class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 66, $this->source), "html", null, true);
            echo "\">
    <div class=\"";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 67, $this->source), "html", null, true);
            echo " d-flex\">
      ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "

      <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse justify-content-md-end flex-wrap\" id=\"navbarSupportedContent\">
        ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
        ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </nav>
  ";
        }
        // line 83
        echo "
</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 88
        echo "
  ";
        // line 90
        $context["sidebar_first_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 90) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 92
        echo "
  ";
        // line 94
        $context["sidebar_second_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 94) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 94))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 96
        echo "
  ";
        // line 98
        $context["content_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 98) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 98))) ? ("col-12 col-lg-6") : ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 98) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 98))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 100
        echo "

  <div class=\"";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 102, $this->source), "html", null, true);
        echo "\">
    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 103)) {
            // line 104
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 106
        echo "    <div class=\"row g-0\">
      ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 107)) {
            // line 108
            echo "        <div class=\"order-2 order-lg-1 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 108, $this->source), "html", null, true);
            echo "\">
          ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 112
        echo "      <div class=\"order-1 order-lg-2 cn-homepage ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 112, $this->source), "html", null, true);
        echo "\">
        ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 115)) {
            // line 116
            echo "        <div class=\"order-3 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 116, $this->source), "html", null, true);
            echo "\">
          ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 120
        echo "    </div>
  </div>

</main>

";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 125)) {
            // line 126
            echo "<footer class=\"mt-auto ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 126, $this->source), "html", null, true);
            echo "\">
  <div class=\"";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 127, $this->source), "html", null, true);
            echo "\">
    ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
  </div>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/b5subtheme/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 128,  186 => 127,  181 => 126,  179 => 125,  172 => 120,  166 => 117,  161 => 116,  159 => 115,  154 => 113,  149 => 112,  143 => 109,  138 => 108,  136 => 107,  133 => 106,  127 => 104,  125 => 103,  121 => 102,  117 => 100,  115 => 98,  112 => 96,  110 => 94,  107 => 92,  105 => 90,  102 => 88,  96 => 83,  88 => 78,  84 => 77,  72 => 68,  68 => 67,  63 => 66,  61 => 65,  56 => 63,  52 => 61,  50 => 59,  49 => 58,  48 => 57,  47 => 56,  44 => 54,  42 => 52,  41 => 51,  40 => 50,  39 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/b5subtheme/templates/page--front.html.twig", "/home/nwhite/www/www.cuckoosnestmarsden.org.uk/themes/custom/b5subtheme/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 65);
        static $filters = array("escape" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
