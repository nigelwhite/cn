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

/* themes/custom/b5subtheme/templates/patterns/modal/pattern-modal.html.twig */
class __TwigTemplate_b684de1a7daa1290766204e16933122eac58fe4c74d98646f4f20664171c3324 extends \Twig\Template
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
        // line 1
        echo "<!-- Button trigger modal --><button type=\"button\" class=\"btn btn-primary cn_modal_button\" data-bs-toggle=\"modal\" data-bs-target=\"#";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["modal_name"] ?? null), 1, $this->source))), [" " => ""]), "html", null, true);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_name"] ?? null), 1, $this->source), "html", null, true);
        echo "</button>

<!-- Modal -->

<div class=\"modal fade\" id=\"";
        // line 5
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["modal_name"] ?? null), 5, $this->source))), [" " => ""]), "html", null, true);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_name"] ?? null), 9, $this->source), "html", null, true);
        echo "</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_description"] ?? null), 13, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/b5subtheme/templates/patterns/modal/pattern-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  60 => 9,  51 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/b5subtheme/templates/patterns/modal/pattern-modal.html.twig", "/home/nwhite/www/www.cuckoosnestmarsden.org.uk/themes/custom/b5subtheme/templates/patterns/modal/pattern-modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 1);
        static $filters = array("escape" => 1, "replace" => 1, "striptags" => 1, "render" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless'],
                ['escape', 'replace', 'striptags', 'render'],
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
