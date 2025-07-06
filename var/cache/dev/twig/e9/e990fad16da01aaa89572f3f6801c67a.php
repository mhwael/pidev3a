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

/* admin/categorie/show.html.twig */
class __TwigTemplate_8142c3d4708446ef6b924230cabcbcf8 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/show.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Category: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "html", null, true);
        yield " - Admin Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid #e9ecef;
    }
    
    .page-header h1 {
        margin: 0;
        color: #495057;
        font-size: 1.8rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }
    
    .info-item {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .info-item.full-width {
        grid-column: 1 / -1;
    }
    
    .info-item label {
        font-weight: 600;
        color: #495057;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .info-value {
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #667eea;
    }
    
    .category-type {
        display: flex;
        align-items: center;
    }
    
    .description-box {
        background: white;
        padding: 1rem;
        border-radius: 4px;
        border: 1px solid #dee2e6;
        line-height: 1.6;
    }
    
    .stats-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        min-width: 2rem;
        text-align: center;
        display: inline-block;
    }
    
    .timestamp-item {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .timestamp-item:last-child {
        margin-bottom: 0;
    }
    
    .timestamp-item label {
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .timestamp-value {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #28a745;
    }
    
    .timestamp-value i {
        color: #28a745;
        font-size: 1.1rem;
    }
    
    .action-buttons {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    
    .btn-block {
        width: 100%;
        text-align: center;
    }
    
    .danger-zone {
        border: 2px solid #dc3545;
    }
    
    .danger-zone .card-header {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        color: #721c24;
        border-bottom-color: #dc3545;
    }
    
    .bg-light {
        background-color: #f8f9fa !important;
        color: #6c757d !important;
    }
    
    .bg-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
    }
    
    .bg-warning {
        background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%) !important;
        color: #212529 !important;
    }
    
    .btn-group {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .info-grid {
            grid-template-columns: 1fr;
        }
        
        .page-header {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }
        
        .btn-group {
            justify-content: center;
        }
    }
</style>

<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1>
                    ";
        // line 181
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 181, $this->source); })()), "type", [], "any", false, false, false, 181) == "Home Visit")) {
            // line 182
            yield "                        <i class=\"icon-home\" style=\"color: #28a745;\"></i>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 183
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 183, $this->source); })()), "type", [], "any", false, false, false, 183) == "In Cabinet")) {
            // line 184
            yield "                        <i class=\"icon-building\" style=\"color: #17a2b8;\"></i>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 185
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 185, $this->source); })()), "type", [], "any", false, false, false, 185) == "Online")) {
            // line 186
            yield "                        <i class=\"icon-laptop\" style=\"color: #6f42c1;\"></i>
                    ";
        }
        // line 188
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 188, $this->source); })()), "type", [], "any", false, false, false, 188), "html", null, true);
        yield " Category
                </h1>
                <div class=\"btn-group\">
                    <a href=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                        <i class=\"icon-edit\"></i> Edit Category
                    </a>
                    <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"icon-arrow-left\"></i> Back to Categories
                    </a>
                </div>
            </div>

            <!-- Category Details -->
            <div class=\"grid_8 alpha\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-info-circle\"></i> Category Information</h2>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"info-grid\">
                            <div class=\"info-item\">
                                <label>Category ID</label>
                                <div class=\"info-value\">
                                    <span class=\"badge bg-light\">#";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 211, $this->source); })()), "id", [], "any", false, false, false, 211), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                            
                            <div class=\"info-item\">
                                <label>Category Type</label>
                                <div class=\"info-value\">
                                    <div class=\"category-type\">
                                        ";
        // line 219
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 219, $this->source); })()), "type", [], "any", false, false, false, 219) == "Home Visit")) {
            // line 220
            yield "                                            <i class=\"icon-home\" style=\"color: #28a745; font-size: 1.5rem;\"></i>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 221
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 221, $this->source); })()), "type", [], "any", false, false, false, 221) == "In Cabinet")) {
            // line 222
            yield "                                            <i class=\"icon-building\" style=\"color: #17a2b8; font-size: 1.5rem;\"></i>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 223
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 223, $this->source); })()), "type", [], "any", false, false, false, 223) == "Online")) {
            // line 224
            yield "                                            <i class=\"icon-laptop\" style=\"color: #6f42c1; font-size: 1.5rem;\"></i>
                                        ";
        }
        // line 226
        yield "                                        <strong style=\"font-size: 1.2rem; margin-left: 0.5rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 226, $this->source); })()), "type", [], "any", false, false, false, 226), "html", null, true);
        yield "</strong>
                                    </div>
                                </div>
                            </div>

                            <div class=\"info-item full-width\">
                                <label>Description</label>
                                <div class=\"info-value\">
                                    ";
        // line 234
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 234, $this->source); })()), "description", [], "any", false, false, false, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "                                        <div class=\"description-box\">
                                            ";
            // line 236
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 236, $this->source); })()), "description", [], "any", false, false, false, 236), "html", null, true));
            yield "
                                        </div>
                                    ";
        } else {
            // line 239
            yield "                                        <em style=\"color: #6c757d;\">No description provided</em>
                                    ";
        }
        // line 241
        yield "                                </div>
                            </div>

                            <div class=\"info-item\">
                                <label>Services Count</label>
                                <div class=\"info-value\">
                                    <span class=\"stats-badge\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 247, $this->source); })()), "servicesCount", [], "any", false, false, false, 247), "html", null, true);
        yield "</span>
                                    <span style=\"margin-left: 0.5rem; color: #6c757d;\">
                                        service";
        // line 249
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 249, $this->source); })()), "servicesCount", [], "any", false, false, false, 249) != 1)) {
            yield "s";
        }
        // line 250
        yield "                                    </span>
                                </div>
                            </div>

                            <div class=\"info-item\">
                                <label>Status</label>
                                <div class=\"info-value\">
                                    ";
        // line 257
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 257, $this->source); })()), "servicesCount", [], "any", false, false, false, 257) > 0)) {
            // line 258
            yield "                                        <span class=\"badge bg-success\">
                                            <i class=\"icon-check\"></i> Active (Has Services)
                                        </span>
                                    ";
        } else {
            // line 262
            yield "                                        <span class=\"badge bg-warning\">
                                            <i class=\"icon-minus\"></i> Inactive (No Services)
                                        </span>
                                    ";
        }
        // line 266
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class=\"grid_4 omega\">
                <!-- Timestamps Card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-clock\"></i> Timestamps</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"timestamp-item\">
                            <label>Created</label>
                            <div class=\"timestamp-value\">
                                <i class=\"icon-calendar\"></i>
                                <div>
                                    <div style=\"font-weight: 600;\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 286, $this->source); })()), "createdAt", [], "any", false, false, false, 286), "M j, Y"), "html", null, true);
        yield "</div>
                                    <small style=\"color: #6c757d;\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 287, $this->source); })()), "createdAt", [], "any", false, false, false, 287), "g:i A"), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 292
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 292, $this->source); })()), "updatedAt", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 293
            yield "                            <div class=\"timestamp-item\">
                                <label>Last Updated</label>
                                <div class=\"timestamp-value\">
                                    <i class=\"icon-edit\"></i>
                                    <div>
                                        <div style=\"font-weight: 600;\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 298, $this->source); })()), "updatedAt", [], "any", false, false, false, 298), "M j, Y"), "html", null, true);
            yield "</div>
                                        <small style=\"color: #6c757d;\">";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 299, $this->source); })()), "updatedAt", [], "any", false, false, false, 299), "g:i A"), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 304
        yield "                    </div>
                </div>

                <!-- Actions Card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-cogs\"></i> Quick Actions</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"action-buttons\">
                            <a href=\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 314, $this->source); })()), "id", [], "any", false, false, false, 314)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-block\">
                                <i class=\"icon-edit\"></i> Edit Category
                            </a>
                            
                            <a href=\"";
        // line 318
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_new");
        yield "?category=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 318, $this->source); })()), "id", [], "any", false, false, false, 318), "html", null, true);
        yield "\" class=\"btn btn-success btn-block\">
                                <i class=\"icon-plus\"></i> Add Service
                            </a>

                            ";
        // line 322
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 322, $this->source); })()), "servicesCount", [], "any", false, false, false, 322) > 0)) {
            // line 323
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 323, $this->source); })()), "id", [], "any", false, false, false, 323), "html", null, true);
            yield "\" class=\"btn btn-info btn-block\">
                                    <i class=\"icon-list\"></i> View Services
                                </a>
                            ";
        }
        // line 327
        yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            ";
        // line 333
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 333, $this->source); })()), "servicesCount", [], "any", false, false, false, 333) > 0)) {
            // line 334
            yield "                <div class=\"grid_12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2><i class=\"icon-stethoscope\"></i> Associated Services (";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 337, $this->source); })()), "servicesCount", [], "any", false, false, false, 337), "html", null, true);
            yield ")</h2>
                        </div>
                        <div class=\"card-body\">
                            <p style=\"color: #6c757d; margin-bottom: 1.5rem;\">
                                This category currently has <strong>";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 341, $this->source); })()), "servicesCount", [], "any", false, false, false, 341), "html", null, true);
            yield "</strong> 
                                service";
            // line 342
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 342, $this->source); })()), "servicesCount", [], "any", false, false, false, 342) != 1)) {
                yield "s";
            }
            yield " assigned to it.
                            </p>
                            <div style=\"display: flex; gap: 1rem; flex-wrap: wrap;\">
                                <a href=\"";
            // line 345
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 345, $this->source); })()), "id", [], "any", false, false, false, 345), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                    <i class=\"icon-list\"></i> View All Services
                                </a>
                                <a href=\"";
            // line 348
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 348, $this->source); })()), "id", [], "any", false, false, false, 348), "html", null, true);
            yield "\" class=\"btn btn-success\">
                                    <i class=\"icon-plus\"></i> Add New Service
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 356
            yield "                <div class=\"grid_12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2><i class=\"icon-info-circle\"></i> No Services Yet</h2>
                        </div>
                        <div class=\"card-body\">
                            <div style=\"text-align: center; padding: 2rem 0;\">
                                <i class=\"icon-stethoscope\" style=\"font-size: 3rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                                <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">This category is empty</h3>
                                <p style=\"color: #6c757d; margin-bottom: 2rem;\">
                                    Start building your medical services by adding the first service to this category.
                                </p>
                                <a href=\"";
            // line 368
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_new");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 368, $this->source); })()), "id", [], "any", false, false, false, 368), "html", null, true);
            yield "\" class=\"btn btn-success btn-lg\">
                                    <i class=\"icon-plus\"></i> Add First Service
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 376
        yield "
            <!-- Danger Zone -->
            <div class=\"grid_12\">
                <div class=\"card danger-zone\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-warning-sign\"></i> Danger Zone</h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 384
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 384, $this->source); })()), "servicesCount", [], "any", false, false, false, 384) == 0)) {
            // line 385
            yield "                            <p style=\"margin-bottom: 1rem;\">
                                <strong>Delete this category:</strong> Once you delete a category, there is no going back. Please be certain.
                            </p>
                            <form method=\"post\" 
                                  action=\"";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 389, $this->source); })()), "id", [], "any", false, false, false, 389)]), "html", null, true);
            yield "\" 
                                  style=\"display: inline-block;\" 
                                  onsubmit=\"return confirm('⚠️ Are you sure you want to delete this category?\\n\\nCategory: ";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 391, $this->source); })()), "type", [], "any", false, false, false, 391), "html", null, true);
            yield "\\n\\nThis action cannot be undone.')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 392, $this->source); })()), "id", [], "any", false, false, false, 392))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"icon-trash\"></i> Delete Category
                                </button>
                            </form>
                        ";
        } else {
            // line 398
            yield "                            <p style=\"margin-bottom: 1rem;\">
                                <strong>Cannot delete category:</strong> This category has ";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 399, $this->source); })()), "servicesCount", [], "any", false, false, false, 399), "html", null, true);
            yield " 
                                service";
            // line 400
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 400, $this->source); })()), "servicesCount", [], "any", false, false, false, 400) != 1)) {
                yield "s";
            }
            yield " assigned to it.
                            </p>
                            <p style=\"color: #6c757d; margin-bottom: 1rem; font-size: 0.9rem;\">
                                <i class=\"icon-info-circle\"></i> You must remove or reassign all services before deleting this category.
                            </p>
                            <button class=\"btn btn-danger\" disabled style=\"opacity: 0.6; cursor: not-allowed;\">
                                <i class=\"icon-trash\"></i> Delete Category (";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 406, $this->source); })()), "servicesCount", [], "any", false, false, false, 406), "html", null, true);
            yield " services)
                            </button>
                        ";
        }
        // line 409
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/categorie/show.html.twig";
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
        return array (  644 => 409,  638 => 406,  627 => 400,  623 => 399,  620 => 398,  611 => 392,  607 => 391,  602 => 389,  596 => 385,  594 => 384,  584 => 376,  571 => 368,  557 => 356,  544 => 348,  536 => 345,  528 => 342,  524 => 341,  517 => 337,  512 => 334,  510 => 333,  502 => 327,  492 => 323,  490 => 322,  481 => 318,  474 => 314,  462 => 304,  454 => 299,  450 => 298,  443 => 293,  441 => 292,  433 => 287,  429 => 286,  407 => 266,  401 => 262,  395 => 258,  393 => 257,  384 => 250,  380 => 249,  375 => 247,  367 => 241,  363 => 239,  357 => 236,  354 => 235,  352 => 234,  340 => 226,  336 => 224,  334 => 223,  331 => 222,  329 => 221,  326 => 220,  324 => 219,  313 => 211,  293 => 194,  287 => 191,  280 => 188,  276 => 186,  274 => 185,  271 => 184,  269 => 183,  266 => 182,  264 => 181,  87 => 6,  77 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Category: {{ categorie.type }} - Admin Dashboard{% endblock %}

{% block body %}
<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid #e9ecef;
    }
    
    .page-header h1 {
        margin: 0;
        color: #495057;
        font-size: 1.8rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }
    
    .info-item {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .info-item.full-width {
        grid-column: 1 / -1;
    }
    
    .info-item label {
        font-weight: 600;
        color: #495057;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .info-value {
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #667eea;
    }
    
    .category-type {
        display: flex;
        align-items: center;
    }
    
    .description-box {
        background: white;
        padding: 1rem;
        border-radius: 4px;
        border: 1px solid #dee2e6;
        line-height: 1.6;
    }
    
    .stats-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        min-width: 2rem;
        text-align: center;
        display: inline-block;
    }
    
    .timestamp-item {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .timestamp-item:last-child {
        margin-bottom: 0;
    }
    
    .timestamp-item label {
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .timestamp-value {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #28a745;
    }
    
    .timestamp-value i {
        color: #28a745;
        font-size: 1.1rem;
    }
    
    .action-buttons {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    
    .btn-block {
        width: 100%;
        text-align: center;
    }
    
    .danger-zone {
        border: 2px solid #dc3545;
    }
    
    .danger-zone .card-header {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        color: #721c24;
        border-bottom-color: #dc3545;
    }
    
    .bg-light {
        background-color: #f8f9fa !important;
        color: #6c757d !important;
    }
    
    .bg-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
    }
    
    .bg-warning {
        background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%) !important;
        color: #212529 !important;
    }
    
    .btn-group {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .info-grid {
            grid-template-columns: 1fr;
        }
        
        .page-header {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }
        
        .btn-group {
            justify-content: center;
        }
    }
</style>

<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1>
                    {% if categorie.type == 'Home Visit' %}
                        <i class=\"icon-home\" style=\"color: #28a745;\"></i>
                    {% elseif categorie.type == 'In Cabinet' %}
                        <i class=\"icon-building\" style=\"color: #17a2b8;\"></i>
                    {% elseif categorie.type == 'Online' %}
                        <i class=\"icon-laptop\" style=\"color: #6f42c1;\"></i>
                    {% endif %}
                    {{ categorie.type }} Category
                </h1>
                <div class=\"btn-group\">
                    <a href=\"{{ path('admin_categorie_edit', {'id': categorie.id}) }}\" class=\"btn btn-warning\">
                        <i class=\"icon-edit\"></i> Edit Category
                    </a>
                    <a href=\"{{ path('admin_categorie_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"icon-arrow-left\"></i> Back to Categories
                    </a>
                </div>
            </div>

            <!-- Category Details -->
            <div class=\"grid_8 alpha\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-info-circle\"></i> Category Information</h2>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"info-grid\">
                            <div class=\"info-item\">
                                <label>Category ID</label>
                                <div class=\"info-value\">
                                    <span class=\"badge bg-light\">#{{ categorie.id }}</span>
                                </div>
                            </div>
                            
                            <div class=\"info-item\">
                                <label>Category Type</label>
                                <div class=\"info-value\">
                                    <div class=\"category-type\">
                                        {% if categorie.type == 'Home Visit' %}
                                            <i class=\"icon-home\" style=\"color: #28a745; font-size: 1.5rem;\"></i>
                                        {% elseif categorie.type == 'In Cabinet' %}
                                            <i class=\"icon-building\" style=\"color: #17a2b8; font-size: 1.5rem;\"></i>
                                        {% elseif categorie.type == 'Online' %}
                                            <i class=\"icon-laptop\" style=\"color: #6f42c1; font-size: 1.5rem;\"></i>
                                        {% endif %}
                                        <strong style=\"font-size: 1.2rem; margin-left: 0.5rem;\">{{ categorie.type }}</strong>
                                    </div>
                                </div>
                            </div>

                            <div class=\"info-item full-width\">
                                <label>Description</label>
                                <div class=\"info-value\">
                                    {% if categorie.description %}
                                        <div class=\"description-box\">
                                            {{ categorie.description|nl2br }}
                                        </div>
                                    {% else %}
                                        <em style=\"color: #6c757d;\">No description provided</em>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"info-item\">
                                <label>Services Count</label>
                                <div class=\"info-value\">
                                    <span class=\"stats-badge\">{{ categorie.servicesCount }}</span>
                                    <span style=\"margin-left: 0.5rem; color: #6c757d;\">
                                        service{% if categorie.servicesCount != 1 %}s{% endif %}
                                    </span>
                                </div>
                            </div>

                            <div class=\"info-item\">
                                <label>Status</label>
                                <div class=\"info-value\">
                                    {% if categorie.servicesCount > 0 %}
                                        <span class=\"badge bg-success\">
                                            <i class=\"icon-check\"></i> Active (Has Services)
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-warning\">
                                            <i class=\"icon-minus\"></i> Inactive (No Services)
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class=\"grid_4 omega\">
                <!-- Timestamps Card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-clock\"></i> Timestamps</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"timestamp-item\">
                            <label>Created</label>
                            <div class=\"timestamp-value\">
                                <i class=\"icon-calendar\"></i>
                                <div>
                                    <div style=\"font-weight: 600;\">{{ categorie.createdAt|date('M j, Y') }}</div>
                                    <small style=\"color: #6c757d;\">{{ categorie.createdAt|date('g:i A') }}</small>
                                </div>
                            </div>
                        </div>
                        
                        {% if categorie.updatedAt %}
                            <div class=\"timestamp-item\">
                                <label>Last Updated</label>
                                <div class=\"timestamp-value\">
                                    <i class=\"icon-edit\"></i>
                                    <div>
                                        <div style=\"font-weight: 600;\">{{ categorie.updatedAt|date('M j, Y') }}</div>
                                        <small style=\"color: #6c757d;\">{{ categorie.updatedAt|date('g:i A') }}</small>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>

                <!-- Actions Card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-cogs\"></i> Quick Actions</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"action-buttons\">
                            <a href=\"{{ path('admin_categorie_edit', {'id': categorie.id}) }}\" class=\"btn btn-warning btn-block\">
                                <i class=\"icon-edit\"></i> Edit Category
                            </a>
                            
                            <a href=\"{{ path('admin_service_new') }}?category={{ categorie.id }}\" class=\"btn btn-success btn-block\">
                                <i class=\"icon-plus\"></i> Add Service
                            </a>

                            {% if categorie.servicesCount > 0 %}
                                <a href=\"{{ path('admin_service_index') }}?category={{ categorie.id }}\" class=\"btn btn-info btn-block\">
                                    <i class=\"icon-list\"></i> View Services
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            {% if categorie.servicesCount > 0 %}
                <div class=\"grid_12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2><i class=\"icon-stethoscope\"></i> Associated Services ({{ categorie.servicesCount }})</h2>
                        </div>
                        <div class=\"card-body\">
                            <p style=\"color: #6c757d; margin-bottom: 1.5rem;\">
                                This category currently has <strong>{{ categorie.servicesCount }}</strong> 
                                service{% if categorie.servicesCount != 1 %}s{% endif %} assigned to it.
                            </p>
                            <div style=\"display: flex; gap: 1rem; flex-wrap: wrap;\">
                                <a href=\"{{ path('admin_service_index') }}?category={{ categorie.id }}\" class=\"btn btn-primary\">
                                    <i class=\"icon-list\"></i> View All Services
                                </a>
                                <a href=\"{{ path('admin_service_new') }}?category={{ categorie.id }}\" class=\"btn btn-success\">
                                    <i class=\"icon-plus\"></i> Add New Service
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"grid_12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h2><i class=\"icon-info-circle\"></i> No Services Yet</h2>
                        </div>
                        <div class=\"card-body\">
                            <div style=\"text-align: center; padding: 2rem 0;\">
                                <i class=\"icon-stethoscope\" style=\"font-size: 3rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                                <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">This category is empty</h3>
                                <p style=\"color: #6c757d; margin-bottom: 2rem;\">
                                    Start building your medical services by adding the first service to this category.
                                </p>
                                <a href=\"{{ path('admin_service_new') }}?category={{ categorie.id }}\" class=\"btn btn-success btn-lg\">
                                    <i class=\"icon-plus\"></i> Add First Service
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}

            <!-- Danger Zone -->
            <div class=\"grid_12\">
                <div class=\"card danger-zone\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-warning-sign\"></i> Danger Zone</h2>
                    </div>
                    <div class=\"card-body\">
                        {% if categorie.servicesCount == 0 %}
                            <p style=\"margin-bottom: 1rem;\">
                                <strong>Delete this category:</strong> Once you delete a category, there is no going back. Please be certain.
                            </p>
                            <form method=\"post\" 
                                  action=\"{{ path('admin_categorie_delete', {'id': categorie.id}) }}\" 
                                  style=\"display: inline-block;\" 
                                  onsubmit=\"return confirm('⚠️ Are you sure you want to delete this category?\\n\\nCategory: {{ categorie.type }}\\n\\nThis action cannot be undone.')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"icon-trash\"></i> Delete Category
                                </button>
                            </form>
                        {% else %}
                            <p style=\"margin-bottom: 1rem;\">
                                <strong>Cannot delete category:</strong> This category has {{ categorie.servicesCount }} 
                                service{% if categorie.servicesCount != 1 %}s{% endif %} assigned to it.
                            </p>
                            <p style=\"color: #6c757d; margin-bottom: 1rem; font-size: 0.9rem;\">
                                <i class=\"icon-info-circle\"></i> You must remove or reassign all services before deleting this category.
                            </p>
                            <button class=\"btn btn-danger\" disabled style=\"opacity: 0.6; cursor: not-allowed;\">
                                <i class=\"icon-trash\"></i> Delete Category ({{ categorie.servicesCount }} services)
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/categorie/show.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\categorie\\show.html.twig");
    }
}
