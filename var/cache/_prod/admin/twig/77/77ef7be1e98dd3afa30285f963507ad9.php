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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig */
class __TwigTemplate_1d150466943684d8b72a30cc4b64a1b6 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title module-modal-title\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a module", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
        yield "</h4>
                <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 28
        if ((($context["level"] ?? null) <= Twig\Extension\CoreExtension::constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 29
            yield "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                <p class=\"alert-text\">
                                    ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errorMessage"] ?? null), "html", null, true);
            yield "
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 39
            yield "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
                                <div class=\"module-import-start\">
                                    <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
                                    <p class=module-import-start-main-text>
                                        ";
            // line 45
            yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop your module archive here or [1]select file[/1]", [], "Modules.Mbo.Modulescatalog"), ["[1]" => "<a href=\"#\" class=\"module-import-start-select-manual\">", "[/1]" => "</a>"]);
            yield "
                                    </p>
                                    <p class=module-import-start-footer-text>
                                        ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "
                                        ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your module will be installed right after that.", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "
                                    </p>
                                </div>
                                <div class='module-import-processing'>
                                    <!-- Loader -->
                                    <div class=\"spinner\"></div>
                                    <p class=module-import-processing-main-text>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installing module...", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</p>
                                    <p class=module-import-processing-footer-text>
                                        ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will close as soon as the module is installed. It won't be long!", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "
                                    </p>
                                </div>
                                <div class='module-import-success'>
                                    <i class=\"module-import-success-icon material-icons\">done</i><br/>
                                    <p class='module-import-success-msg'>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module installed!", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</p>
                                    <p class=\"module-import-success-details\"></p>
                                    <a class=\"module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button\" href='#'>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
            yield "</a>
                                </div>
                                <div class='module-import-failure'>
                                    <i class=\"module-import-failure-icon material-icons\">error</i><br/>
                                    <p class='module-import-failure-msg'>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... Upload failed.", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</p>
                                    <a href=\"#\" class=\"module-import-failure-details-action\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What happened?", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</a>
                                    <div class='module-import-failure-details'></div>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href='#'>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try again", [], "Admin.Actions"), "html", null, true);
            yield "</a>
                                </div>
                                <div class='module-import-confirm'>
                                </div>
                            </form>
                        </div>
                    </div>
                ";
        }
        // line 79
        yield "            </div>
            <div class=\"modal-footer\">
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig";
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
        return array (  145 => 79,  134 => 71,  129 => 69,  125 => 68,  118 => 64,  113 => 62,  105 => 57,  100 => 55,  91 => 49,  87 => 48,  81 => 45,  73 => 39,  64 => 33,  58 => 29,  56 => 28,  49 => 24,  42 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig", "/home/playfunc/tcg/modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig");
    }
}
