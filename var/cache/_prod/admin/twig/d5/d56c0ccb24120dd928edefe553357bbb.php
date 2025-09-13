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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_40b90695066d4077355a82be5b35bce4 extends Template
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

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 19
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 19);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script type=\"application/javascript\" src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cdc_error_templating_url"] ?? null), "html", null, true);
        yield "\"></script>

    ";
        // line 25
        if ((array_key_exists("cdc_script_not_found", $context) && (($context["cdc_script_not_found"] ?? null) === true))) {
            // line 26
            yield "      <script type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cdc_error_url"] ?? null), "html", null, true);
            yield "\"></script>
    ";
        } else {
            // line 28
            yield "      <script type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cdc_url"] ?? null), "html", null, true);
            yield "\"></script>
    ";
        }
        // line 30
        yield "
    <script>
      var psAccountLoaded = false;
    </script>
    ";
        // line 34
        if ((array_key_exists("urlAccountsCdn", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["urlAccountsCdn"] ?? null)))) {
            // line 35
            yield "      ";
            // line 36
            yield "      <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["urlAccountsCdn"] ?? null), "html", null, true);
            yield "\" rel=preload></script>
      <script>
        if (window?.psaccountsVue) {
          window?.psaccountsVue?.init();
          psAccountLoaded = true;
        }
      </script>
    ";
        }
        // line 44
        yield "
    <script>
      if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
        if (typeof renderCdcError === 'function') {
          window.\$(document).ready(function() {
            renderCdcError(\$('#cdc-container'));
          });
        }
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = ";
        // line 55
        yield json_encode(($context["shop_context"] ?? null));
        yield ";

        if (psAccountLoaded) {
          context.accounts_component_loaded = true;
        }

        renderModules(context, '#cdc-container')
      }
    </script>
";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cdc_error_templating_css"] ?? null), "html", null, true);
        yield "\" type=\"text/css\" media=\"all\">
";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "  <prestashop-accounts style=\"display: none;\"></prestashop-accounts>

  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        yield "\"></div>

    ";
        // line 76
        yield from $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 76)->unwrap()->yield(CoreExtension::merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
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
        return array (  169 => 76,  164 => 74,  160 => 72,  153 => 71,  146 => 68,  141 => 67,  134 => 66,  119 => 55,  106 => 44,  94 => 36,  92 => 35,  90 => 34,  84 => 30,  78 => 28,  72 => 26,  70 => 25,  65 => 23,  60 => 22,  53 => 21,  42 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "/home/playfunc/tcg/modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig");
    }
}
