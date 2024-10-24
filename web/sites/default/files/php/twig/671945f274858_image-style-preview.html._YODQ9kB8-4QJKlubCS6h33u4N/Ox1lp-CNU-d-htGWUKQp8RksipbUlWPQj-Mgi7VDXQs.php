<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/modules/image/templates/image-style-preview.html.twig */
class __TwigTemplate_15a7246a0694859feaa26f15542ef9bb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "<div class=\"image-style-preview preview clearfix\">
  ";
        // line 35
        yield "  <div class=\"preview-image-wrapper\">
      ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("original"));
        yield " (<a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["original"] ?? null), "url", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("view actual size"));
        yield "</a>)
      <div class=\"preview-image original-image\" style=\"width: ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 37), "width", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        yield "px; height: ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 37), "height", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        yield "px;\">
        <a href=\"";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["original"] ?? null), "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        yield "\">
          ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["original"] ?? null), "rendered", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        yield "
        </a>
      <div class=\"height\" style=\"height: ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 41), "height", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        yield "px\"><span>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["original"] ?? null), "height", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        yield "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "original", [], "any", false, false, true, 42), "width", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        yield "px\"><span>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["original"] ?? null), "width", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        yield "px</span></div>
    </div>
  </div>

  ";
        // line 47
        yield "  <div class=\"preview-image-wrapper\">
    ";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["style_name"] ?? null), 48, $this->source), "html", null, true);
        yield " (<a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["derivative"] ?? null), "url", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        yield "?";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_bypass"] ?? null), 48, $this->source), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("view actual size"));
        yield "</a>)
    <div class=\"preview-image modified-image\" style=\"width: ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 49), "width", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        yield "px; height: ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 49), "height", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        yield "px;\">
      <a href=\"";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["derivative"] ?? null), "url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        yield "?";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_bypass"] ?? null), 50, $this->source), "html", null, true);
        yield "\">
        ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["derivative"] ?? null), "rendered", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        yield "
      </a>
      <div class=\"height\" style=\"height: ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 53), "height", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        yield "px\"><span>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["derivative"] ?? null), "height", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        yield "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "derivative", [], "any", false, false, true, 54), "width", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        yield "px\"><span>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["derivative"] ?? null), "width", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        yield "px</span></div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["original", "preview", "style_name", "derivative", "cache_bypass"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/image/templates/image-style-preview.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  124 => 54,  118 => 53,  113 => 51,  107 => 50,  101 => 49,  91 => 48,  88 => 47,  79 => 42,  73 => 41,  68 => 39,  64 => 38,  58 => 37,  50 => 36,  47 => 35,  44 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/image/templates/image-style-preview.html.twig", "/var/www/html/web/core/modules/image/templates/image-style-preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 36, "escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'escape'],
                [],
                $this->source
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
