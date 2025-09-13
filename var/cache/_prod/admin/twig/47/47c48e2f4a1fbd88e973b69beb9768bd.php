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

/* @PrestaShop/Admin/Improve/Design/positions.html.twig */
class __TwigTemplate_d75cfb5750f6851ee47e8b1aa9fc6a60 extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/positions.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        if (($context["isSingleShopContext"] ?? null)) {
            // line 30
            yield "      <div class=\"row\">
        <div class=\"col-md-3 order-first order-md-last\">
          <div class=\"card\" id=\"modules-position-selection-panel\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">check</i>
              ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selection", [], "Admin.Global"), "html", null, true);
            yield "</h3>
            <div class=\"card-body\">
              <p>
                <span id=\"modules-position-single-selection\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1 module selected", [], "Admin.Design.Feature"), "html", null, true);
            yield "</span>
                <span id=\"modules-position-multiple-selection\">
                  <span id=\"modules-position-selection-count\"></span>
                  ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modules selected", [], "Admin.Design.Feature"), "html", null, true);
            yield "
                </span>
              </p>
              <div>
                <button class=\"btn btn-primary\">
                  <i class=\"icon-remove\"></i>
                  ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unhook the selection", [], "Admin.Design.Feature"), "html", null, true);
            yield "</button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-9 order-md-first\">
          <div class=\"card card-body\">
            <div class=\"card bg-light p-3\">
              <form id=\"position-filters\">
                <div class=\"row\">
                  <div class=\"col-lg-6 mb-2\">
                    <div class=\"row align-items-center\">
                      <label class=\"form-control-label col-md-4 text-left text-lg-center\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show", [], "Admin.Actions"), "html", null, true);
            yield "</label>
                      <div class=\"col-md-8\">
                        <select id=\"show-modules\" class=\"filter\">
                          <option value=\"all\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All modules", [], "Admin.Design.Feature"), "html", null, true);
            yield "&nbsp;</option>
                          ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 64
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 64), "html", null, true);
                yield "\" ";
                if ((($context["selectedModule"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 64))) {
                    yield " selected=\"selected\" ";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "displayName", [], "any", false, false, false, 64), "html", null, true);
                yield "</option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                        </select>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-lg-6 mb-2\">
                    <div class=\"row align-items-center\">
                      <label class=\"form-control-label col-md-4 text-left text-lg-center\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a hook", [], "Admin.Design.Feature"), "html", null, true);
            yield "</label>
                      <div class=\"input-group col-md-8\">
                        <div class=\"input-group-prepend\">
                          <div class=\"input-group-text\">
                            <i class=\"material-icons\">search</i>
                          </div>
                        </div>
                        <input type=\"text\" class=\"form-control\" id=\"hook-search\" name=\"hook-search\" placeholder=\"\">
                      </div>
                    </div>
                  </div>
                </div>

                <p class=\"checkbox mt-3 mb-0\">
                  <label class=\"form-control-label\" for=\"hook-position\">
                    <input type=\"checkbox\" id=\"hook-position\"/>
                    <label class=\"selectbox\" for=\"hook-position\">
                      <i class=\"material-icons done\">done</i>
                    </label>
                    ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Display non-positionable hooks", [], "Admin.Design.Feature"), "html", null, true);
            yield "
                  </label>
                </p>
              </form>
            </div>

            <form id=\"module-positions-form\" method=\"post\"
                  action=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modules_positions_unhook");
            yield "\"
                  data-update-url=\"";
            // line 100
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_improve_design_positions_update");
            yield "\"
                  data-togglestatus-url=\"";
            // line 101
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modules_positions_toggle_status");
            yield "\">
              ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
                // line 103
                yield "                <section
                  class=\"hook-panel";
                // line 104
                if ( !(($_v0 = $context["hook"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["position"] ?? null) : null)) {
                    yield " hook-position";
                } else {
                    yield " hook-visible";
                }
                yield "\" ";
                if ( !(($_v1 = $context["hook"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["position"] ?? null) : null)) {
                    yield " style=\"display:none;\" ";
                }
                // line 105
                yield "                  data-hook-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["hook"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), "html", null, true);
                yield "\">
                  <a name=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["hook"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
                yield "\"></a>
                  <header class=\"hook-panel-header\">
                    <span class=\"hook-status\">
                      <input class=\"switch-input-md hook-switch-action\"
                             data-toggle=\"switch\"
                             data-hook-id=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["hook"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["id_hook"] ?? null) : null), "html", null, true);
                yield "\"
                             type=\"checkbox\"
                             value=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["hook"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["active"] ?? null) : null), "html", null, true);
                yield "\"
                             ";
                // line 114
                yield (((($_v6 = $context["hook"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["active"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
                yield "
                      />
                    </span>
                    <span class=\"hook-name\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = $context["hook"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["name"] ?? null) : null), "html", null, true);
                yield "</span>
                    ";
                // line 118
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "title", [], "array", true, true, false, 118)) {
                    // line 119
                    yield "                      <span class=\"help-box\" data-toggle=\"popover\" data-trigger=\"hover\" data-html=\"true\" data-content=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["hook"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["title"] ?? null) : null), "html", null, true);
                    yield "\" data-placement=\"top\">
 </span>
                    ";
                }
                // line 122
                yield "                    <label class=\"badge badge-pill float-right\">
                      ";
                // line 123
                if (((($_v9 = $context["hook"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["modules_count"] ?? null) : null) && ($context["isSingleShopContext"] ?? null))) {
                    // line 124
                    yield "                        <input type=\"checkbox\" class=\"hook-checker\"
                               id=\"Ghook";
                    // line 125
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = $context["hook"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["id_hook"] ?? null) : null), "html", null, true);
                    yield "\"
                               data-hook-id=\"";
                    // line 126
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = $context["hook"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["id_hook"] ?? null) : null), "html", null, true);
                    yield "\"
                        />
                        <label class=\"selectbox\" for=\"Ghook";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = $context["hook"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["id_hook"] ?? null) : null), "html", null, true);
                    yield "\">
                          <i class=\"material-icons done\">done</i>
                        </label>
                      ";
                }
                // line 132
                yield "
                      ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v13 = $context["hook"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["modules_count"] ?? null) : null), "html", null, true);
                yield "
                      ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((((($_v14 = $context["hook"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["modules_count"] ?? null) : null) > 1)) ? ("Modules") : ("Module")), [], "Admin.Global"), "html", null, true);
                yield "
                    </label>

                    ";
                // line 137
                if (CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "description", [], "array", true, true, false, 137)) {
                    // line 138
                    yield "                      <div class=\"hook_description\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = $context["hook"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["description"] ?? null) : null), "html", null, true);
                    yield "</div>
                    ";
                }
                // line 140
                yield "                  </header>

                  ";
                // line 142
                if ((($_v16 = $context["hook"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["modules_count"] ?? null) : null)) {
                    // line 143
                    yield "                    <section class=\"module-list";
                    if ( !(($_v17 = $context["hook"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["active"] ?? null) : null)) {
                        yield "-disabled";
                    }
                    yield "\">
                      <ul class=\"list-unstyled";
                    // line 144
                    if (((($_v18 = $context["hook"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["modules_count"] ?? null) : null) > 1)) {
                        yield " sortable";
                    }
                    yield "\">
                        ";
                    // line 145
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (($_v19 = $context["hook"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["modules"] ?? null) : null), function ($__module__) use ($context, $macros) { $context["module"] = $__module__; return CoreExtension::getAttribute($this->env, $this->source, ($context["modules"] ?? null), (($_v20 = $context["module"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["id_module"] ?? null) : null), [], "array", true, true, false, 145); }));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        // line 146
                        yield "                          ";
                        $context["moduleInstance"] = (($_v21 = ($context["modules"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[(($_v22 = $context["module"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["id_module"] ?? null) : null)] ?? null) : null);
                        // line 147
                        yield "                          <li id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($_v23 = $context["hook"]) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["id_hook"] ?? null) : null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 147)), "html", null, true);
                        yield "\"
                              class=\"module-position-";
                        // line 148
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 148), "html", null, true);
                        yield " module-item";
                        if (((($_v24 = $context["hook"]) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["modules_count"] ?? null) : null) >= 2)) {
                            yield " draggable";
                        }
                        yield "\">

                            <div class=\"module-column-select\">
                              <i class=\"material-icons drag_indicator\">drag_indicator</i>
                              <input type=\"checkbox\"
                                     id=\"selecterbox";
                        // line 153
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($_v25 = $context["hook"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["id_hook"] ?? null) : null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 153)), "html", null, true);
                        yield "\"
                                     data-hook-id=\"";
                        // line 154
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v26 = $context["hook"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["id_hook"] ?? null) : null), "html", null, true);
                        yield "\"
                                     data-hook-module=\"";
                        // line 155
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "name", [], "any", false, false, false, 155), "html", null, true);
                        yield "\"
                                     class=\"modules-position-checkbox hook";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v27 = $context["hook"]) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["id_hook"] ?? null) : null), "html", null, true);
                        yield "\"
                                     name=\"unhooks[]\"
                                     value=\"";
                        // line 158
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($_v28 = $context["hook"]) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["id_hook"] ?? null) : null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 158)), "html", null, true);
                        yield "\"
                              />
                              <label class=\"selectbox\" for=\"selecterbox";
                        // line 160
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($_v29 = $context["hook"]) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["id_hook"] ?? null) : null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 160)), "html", null, true);
                        yield "\">
                                <i class=\"material-icons done\">done</i>
                              </label>
                            </div>

                            <div class=\"module-column-icon\">
                              <img src=\"";
                        // line 166
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("../modules/" . CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "name", [], "any", false, false, false, 166)) . "/logo.png")), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "displayName", [], "any", false, false, false, 166));
                        yield "\"/>
                            </div>

                            <div class=\"module-column-infos\">
                              <span class=\"module-name\">
                                ";
                        // line 171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "displayName", [], "any", false, false, false, 171));
                        yield "
                                ";
                        // line 172
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "version", [], "any", false, false, false, 172)) {
                            // line 173
                            yield "                                  <small class=\"text-muted\">&nbsp;-&nbsp;";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("v%s", CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "version", [], "any", false, false, false, 173)), "html", null, true);
                            yield "</small>
                                ";
                        }
                        // line 175
                        yield "                              </span>
                            </div>

                            <div class=\"module-column-description";
                        // line 178
                        if (( !($context["selectedModule"] ?? null) && ((($_v30 = $context["hook"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["modules_count"] ?? null) : null) > 1))) {
                            yield " hasColumnPosition";
                        }
                        yield " d-none d-md-table-cell\">
                              <span class=\"module-description\">";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "description", [], "any", false, false, false, 179));
                        yield "</span>
                            </div>

                            ";
                        // line 182
                        if (( !($context["selectedModule"] ?? null) && ((($_v31 = $context["hook"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["modules_count"] ?? null) : null) > 1))) {
                            // line 183
                            yield "                              <div class=\"btn-toolbar text-center module-column-position";
                            if (((($_v32 = $context["hook"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["modules_count"] ?? null) : null) >= 2)) {
                                yield " dragHandle";
                            }
                            yield "\"
                                   id=\"td_";
                            // line 184
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($_v33 = $context["hook"]) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["id_hook"] ?? null) : null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 184)), "html", null, true);
                            yield "\">
                                <div class=\"btn-group\">
                                  <span class=\"index-position\">";
                            // line 186
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 186), "html", null, true);
                            yield "</span>
                                </div>
                              </div>
                            ";
                        }
                        // line 190
                        yield "
                            <div class=\"module-column-actions\">
                              <div class=\"btn-group\">
                                ";
                        // line 193
                        $context["linkParams"] = ["id_module" => CoreExtension::getAttribute($this->env, $this->source,                         // line 194
($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 194), "id_hook" => (($_v34 =                         // line 195
$context["hook"]) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["id_hook"] ?? null) : null), "editGraft" => 1];
                        // line 198
                        yield "                                ";
                        if (($context["selectedModule"] ?? null)) {
                            // line 199
                            yield "                                  ";
                            $context["linkParams"] = Twig\Extension\CoreExtension::merge(($context["linkParams"] ?? null), ["show_modules" => ($context["selectedModule"] ?? null)]);
                            // line 200
                            yield "                                ";
                        }
                        // line 201
                        yield "
                                <a class=\"btn tooltip-link\" href=\"";
                        // line 202
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminModulesPositions", true, ($context["linkParams"] ?? null)), "html", null, true);
                        yield "\"
                                   aria-label=\"";
                        // line 203
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
                        yield "\">
                                  <i class=\"material-icons\">edit</i>
                                </a>

                                <a class=\"btn tooltip-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
                                   data-toggle=\"dropdown\"
                                   aria-haspopup=\"true\"
                                   aria-expanded=\"false\"
                                   data-reference=\"parent\">
                                </a>
                                <div class=\"dropdown-menu\">
                                  <a class=\"dropdown-item\" href=\"";
                        // line 214
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modules_positions_unhook", ["moduleId" => CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "id", [], "any", false, false, false, 214), "hookId" => (($_v35 = $context["hook"]) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["id_hook"] ?? null) : null)]), "html", null, true);
                        yield "\">
                                    <i class=\"material-icons\">indeterminate_check_box</i>
                                    ";
                        // line 216
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unhook", [], "Admin.Design.Feature"), "html", null, true);
                        yield "
                                  </a>
                                </div>
                              </div>
                            </div>

                            <div class=\"module-column-description d-block d-md-none w-100\">
                              <span class=\"module-description\">";
                        // line 223
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["moduleInstance"] ?? null), "description", [], "any", false, false, false, 223));
                        yield "</span>
                            </div>
                          </li>
                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    yield "                      </ul>
                    </section>
                  ";
                }
                // line 230
                yield "                </section>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hook'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            yield "
              <div id=\"unhook-button-position-bottom\">
                <button type=\"submit\" class=\"btn btn-default\" name=\"unhookform\">
                  <i class=\"material-icons\">indeterminate_check_box</i>
                  ";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unhook the selection", [], "Admin.Design.Feature"), "html", null, true);
            yield "
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    ";
        } else {
            // line 244
            yield "      <p class=\"alert alert-info alert-can-move\">
        ";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that this page is available in a single shop context only. Switch context to work on it.", [], "Admin.Notifications.Info"), "html", null, true);
            yield "
      </p>
    ";
        }
        yield from [];
    }

    // line 250
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 251
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/improve_design_positions.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/positions.html.twig";
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
        return array (  564 => 252,  559 => 251,  552 => 250,  543 => 245,  540 => 244,  529 => 236,  523 => 232,  516 => 230,  511 => 227,  493 => 223,  483 => 216,  478 => 214,  462 => 203,  458 => 202,  455 => 201,  452 => 200,  449 => 199,  446 => 198,  444 => 195,  443 => 194,  442 => 193,  437 => 190,  430 => 186,  425 => 184,  418 => 183,  416 => 182,  410 => 179,  404 => 178,  399 => 175,  393 => 173,  391 => 172,  387 => 171,  377 => 166,  368 => 160,  363 => 158,  358 => 156,  354 => 155,  350 => 154,  346 => 153,  334 => 148,  329 => 147,  326 => 146,  309 => 145,  303 => 144,  296 => 143,  294 => 142,  290 => 140,  284 => 138,  282 => 137,  276 => 134,  272 => 133,  269 => 132,  262 => 128,  257 => 126,  253 => 125,  250 => 124,  248 => 123,  245 => 122,  238 => 119,  236 => 118,  232 => 117,  226 => 114,  222 => 113,  217 => 111,  209 => 106,  204 => 105,  194 => 104,  191 => 103,  187 => 102,  183 => 101,  179 => 100,  175 => 99,  165 => 92,  143 => 73,  134 => 66,  119 => 64,  115 => 63,  111 => 62,  105 => 59,  90 => 47,  81 => 41,  75 => 38,  69 => 35,  62 => 30,  59 => 29,  52 => 28,  41 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/positions.html.twig", "/home/playfunc/tcg/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/positions.html.twig");
    }
}
