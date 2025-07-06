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

/* admin/categorie/index.html.twig */
class __TwigTemplate_567218b024616ac92b1e1d54dd533c5d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/index.html.twig"));

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

        yield "Category Management - Admin Dashboard";
        
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
        yield "<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1><i class=\"icon-list\"></i> Category Management</h1>
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_new");
        yield "\" class=\"btn btn-success btn-lg\">
                    <i class=\"icon-plus\"></i> Add New Category
                </a>
            </div>

            <!-- Flash Messages -->
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "                <div class=\"alert alert-success\">
                    <i class=\"icon-check-circle\"></i> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "                <div class=\"alert alert-danger\">
                    <i class=\"icon-exclamation-triangle\"></i> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
            <!-- Categories Table -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-list\"></i> All Categories (";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })())), "html", null, true);
        yield ")</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 36
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 36, $this->source); })())) > 0)) {
            // line 37
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th><i class=\"icon-hash\"></i> ID</th>
                                        <th><i class=\"icon-tag\"></i> Type</th>
                                        <th><i class=\"icon-align-left\"></i> Description</th>
                                        <th><i class=\"icon-stethoscope\"></i> Services</th>
                                        <th><i class=\"icon-calendar\"></i> Created</th>
                                        <th><i class=\"icon-cogs\"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 51
                yield "                                        <tr>
                                            <td>
                                                <span class=\"badge bg-light\">#";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 53), "html", null, true);
                yield "</span>
                                            </td>
                                            <td>
                                                <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                                                    ";
                // line 57
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "type", [], "any", false, false, false, 57) == "Home Visit")) {
                    // line 58
                    yield "                                                        <i class=\"icon-home\" style=\"color: #28a745; font-size: 1.2rem;\" title=\"Home Visit\"></i>
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 59
$context["categorie"], "type", [], "any", false, false, false, 59) == "In Cabinet")) {
                    // line 60
                    yield "                                                        <i class=\"icon-building\" style=\"color: #17a2b8; font-size: 1.2rem;\" title=\"In Cabinet\"></i>
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["categorie"], "type", [], "any", false, false, false, 61) == "Online")) {
                    // line 62
                    yield "                                                        <i class=\"icon-laptop\" style=\"color: #6f42c1; font-size: 1.2rem;\" title=\"Online\"></i>
                                                    ";
                }
                // line 64
                yield "                                                    <div>
                                                        <strong style=\"color: #495057; font-size: 1.1rem;\">";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "type", [], "any", false, false, false, 65), "html", null, true);
                yield "</strong>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div style=\"max-width: 300px;\">
                                                    ";
                // line 71
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 72
                    yield "                                                        <span style=\"color: #6c757d;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 72), 0, 120), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 72)) > 120)) {
                        yield "...";
                    }
                    yield "</span>
                                                    ";
                } else {
                    // line 74
                    yield "                                                        <em style=\"color: #adb5bd;\">No description provided</em>
                                                    ";
                }
                // line 76
                yield "                                                </div>
                                            </td>
                                            <td>
                                                <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                                                    <span class=\"stats-badge\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "servicesCount", [], "any", false, false, false, 80), "html", null, true);
                yield "</span>
                                                    ";
                // line 81
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "servicesCount", [], "any", false, false, false, 81) > 0)) {
                    // line 82
                    yield "                                                        <i class=\"icon-check\" style=\"color: #28a745;\" title=\"Has services\"></i>
                                                    ";
                } else {
                    // line 84
                    yield "                                                        <i class=\"icon-minus\" style=\"color: #dc3545;\" title=\"No services\"></i>
                                                    ";
                }
                // line 86
                yield "                                                </div>
                                            </td>
                                            <td style=\"color: #6c757d;\">
                                                <div>
                                                    <i class=\"icon-calendar\"></i> ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "createdAt", [], "any", false, false, false, 90), "M j, Y"), "html", null, true);
                yield "
                                                </div>
                                                <small style=\"color: #adb5bd;\">";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "createdAt", [], "any", false, false, false, 92), "g:i A"), "html", null, true);
                yield "</small>
                                            </td>
                                            <td>
                                                <div class=\"btn-group\" style=\"gap: 0.25rem;\">
                                                    <a href=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" 
                                                       class=\"btn btn-info btn-sm\" 
                                                       title=\"View Details\">
                                                        <i class=\"icon-eye\"></i>
                                                    </a>
                                                    <a href=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" 
                                                       class=\"btn btn-warning btn-sm\" 
                                                       title=\"Edit Category\">
                                                        <i class=\"icon-edit\"></i>
                                                    </a>
                                                    ";
                // line 106
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "servicesCount", [], "any", false, false, false, 106) == 0)) {
                    // line 107
                    yield "                                                        <form method=\"post\" 
                                                              action=\"";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                    yield "\" 
                                                              style=\"display: inline-block;\" 
                                                              onsubmit=\"return confirm('⚠️ Are you sure you want to delete this category?\\n\\nThis action cannot be undone.')\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 111))), "html", null, true);
                    yield "\">
                                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Delete Category\">
                                                                <i class=\"icon-trash\"></i>
                                                            </button>
                                                        </form>
                                                    ";
                } else {
                    // line 117
                    yield "                                                        <button class=\"btn btn-danger btn-sm\" 
                                                                disabled 
                                                                title=\"Cannot delete category with services\"
                                                                style=\"opacity: 0.5; cursor: not-allowed;\">
                                                            <i class=\"icon-trash\"></i>
                                                        </button>
                                                    ";
                }
                // line 124
                yield "                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 132
            yield "                        <div style=\"text-align: center; padding: 4rem 0;\">
                            <i class=\"icon-list\" style=\"font-size: 4rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                            <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">No categories found</h3>
                            <p style=\"color: #6c757d; margin-bottom: 2rem;\">Get started by creating your first medical category.</p>
                            <a href=\"";
            // line 136
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_new");
            yield "\" class=\"btn btn-success btn-lg\">
                                <i class=\"icon-plus\"></i> Create First Category
                            </a>
                        </div>
                    ";
        }
        // line 141
        yield "                </div>
            </div>

            <!-- Statistics Cards -->
            <div class=\"grid_12\" style=\"margin-top: 2rem;\">
                <div class=\"grid_4 alpha\">
                    <div class=\"stats-card\">
                        <div class=\"stats-icon\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                            <i class=\"icon-list\"></i>
                        </div>
                        <div class=\"stats-content\">
                            <h4>Total Categories</h4>
                            <div class=\"number\" style=\"color: #667eea;\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 153, $this->source); })())), "html", null, true);
        yield "</div>
                            <small style=\"color: #6c757d;\">All category types</small>
                        </div>
                    </div>
                </div>
                <div class=\"grid_4\">
                    <div class=\"stats-card\">
                        <div class=\"stats-icon\" style=\"background: linear-gradient(135deg, #28a745 0%, #20c997 100%);\">
                            <i class=\"icon-stethoscope\"></i>
                        </div>
                        <div class=\"stats-content\">
                            <h4>Total Services</h4>
                            <div class=\"number\" style=\"color: #28a745;\">
                                ";
        // line 166
        $context["totalServices"] = 0;
        // line 167
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 168
            yield "                                    ";
            $context["totalServices"] = ((isset($context["totalServices"]) || array_key_exists("totalServices", $context) ? $context["totalServices"] : (function () { throw new RuntimeError('Variable "totalServices" does not exist.', 168, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "servicesCount", [], "any", false, false, false, 168));
            // line 169
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalServices"]) || array_key_exists("totalServices", $context) ? $context["totalServices"] : (function () { throw new RuntimeError('Variable "totalServices" does not exist.', 170, $this->source); })()), "html", null, true);
        yield "
                            </div>
                            <small style=\"color: #6c757d;\">Across all categories</small>
                        </div>
                    </div>
                </div>
                <div class=\"grid_4 omega\">
                    <div class=\"stats-card\">
                        <div class=\"stats-icon\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                            <i class=\"icon-chart-bar\"></i>
                        </div>
                        <div class=\"stats-content\">
                            <h4>Avg Services</h4>
                            <div class=\"number\" style=\"color: #17a2b8;\">
                                ";
        // line 184
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 184, $this->source); })())) > 0)) {
            // line 185
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["totalServices"]) || array_key_exists("totalServices", $context) ? $context["totalServices"] : (function () { throw new RuntimeError('Variable "totalServices" does not exist.', 185, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 185, $this->source); })()))), 1), "html", null, true);
            yield "
                                ";
        } else {
            // line 187
            yield "                                    0
                                ";
        }
        // line 189
        yield "                            </div>
                            <small style=\"color: #6c757d;\">Per category</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    
    .stats-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border: none;
        height: 100%;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: transform 0.3s ease;
    }
    
    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .stats-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        flex-shrink: 0;
    }
    
    .stats-content {
        flex: 1;
    }
    
    .stats-content h4 {
        margin: 0 0 0.5rem 0;
        color: #495057;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .stats-content .number {
        font-size: 2rem;
        font-weight: 700;
        margin: 0.25rem 0;
        line-height: 1;
    }
    
    .stats-content small {
        font-size: 0.8rem;
        margin: 0;
    }
    
    .table-responsive {
        overflow-x: auto;
        border-radius: 8px;
    }
    
    .btn-group {
        display: flex;
        flex-wrap: wrap;
    }
    
    .alert {
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: none;
    }
    
    .alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        color: #155724;
        border-left: 4px solid #28a745;
    }
    
    .alert-danger {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        color: #721c24;
        border-left: 4px solid #dc3545;
    }
    
    .bg-light {
        background-color: #f8f9fa !important;
        color: #6c757d !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/categorie/index.html.twig";
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
        return array (  412 => 189,  408 => 187,  402 => 185,  400 => 184,  382 => 170,  376 => 169,  373 => 168,  368 => 167,  366 => 166,  350 => 153,  336 => 141,  328 => 136,  322 => 132,  316 => 128,  307 => 124,  298 => 117,  289 => 111,  283 => 108,  280 => 107,  278 => 106,  270 => 101,  262 => 96,  255 => 92,  250 => 90,  244 => 86,  240 => 84,  236 => 82,  234 => 81,  230 => 80,  224 => 76,  220 => 74,  211 => 72,  209 => 71,  200 => 65,  197 => 64,  193 => 62,  191 => 61,  188 => 60,  186 => 59,  183 => 58,  181 => 57,  174 => 53,  170 => 51,  166 => 50,  151 => 37,  149 => 36,  143 => 33,  137 => 29,  128 => 26,  125 => 25,  121 => 24,  118 => 23,  109 => 20,  106 => 19,  102 => 18,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Category Management - Admin Dashboard{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1><i class=\"icon-list\"></i> Category Management</h1>
                <a href=\"{{ path('admin_categorie_new') }}\" class=\"btn btn-success btn-lg\">
                    <i class=\"icon-plus\"></i> Add New Category
                </a>
            </div>

            <!-- Flash Messages -->
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    <i class=\"icon-check-circle\"></i> {{ message }}
                </div>
            {% endfor %}

            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">
                    <i class=\"icon-exclamation-triangle\"></i> {{ message }}
                </div>
            {% endfor %}

            <!-- Categories Table -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-list\"></i> All Categories ({{ categories|length }})</h2>
                </div>
                <div class=\"card-body\">
                    {% if categories|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th><i class=\"icon-hash\"></i> ID</th>
                                        <th><i class=\"icon-tag\"></i> Type</th>
                                        <th><i class=\"icon-align-left\"></i> Description</th>
                                        <th><i class=\"icon-stethoscope\"></i> Services</th>
                                        <th><i class=\"icon-calendar\"></i> Created</th>
                                        <th><i class=\"icon-cogs\"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for categorie in categories %}
                                        <tr>
                                            <td>
                                                <span class=\"badge bg-light\">#{{ categorie.id }}</span>
                                            </td>
                                            <td>
                                                <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                                                    {% if categorie.type == 'Home Visit' %}
                                                        <i class=\"icon-home\" style=\"color: #28a745; font-size: 1.2rem;\" title=\"Home Visit\"></i>
                                                    {% elseif categorie.type == 'In Cabinet' %}
                                                        <i class=\"icon-building\" style=\"color: #17a2b8; font-size: 1.2rem;\" title=\"In Cabinet\"></i>
                                                    {% elseif categorie.type == 'Online' %}
                                                        <i class=\"icon-laptop\" style=\"color: #6f42c1; font-size: 1.2rem;\" title=\"Online\"></i>
                                                    {% endif %}
                                                    <div>
                                                        <strong style=\"color: #495057; font-size: 1.1rem;\">{{ categorie.type }}</strong>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div style=\"max-width: 300px;\">
                                                    {% if categorie.description %}
                                                        <span style=\"color: #6c757d;\">{{ categorie.description|slice(0, 120) }}{% if categorie.description|length > 120 %}...{% endif %}</span>
                                                    {% else %}
                                                        <em style=\"color: #adb5bd;\">No description provided</em>
                                                    {% endif %}
                                                </div>
                                            </td>
                                            <td>
                                                <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                                                    <span class=\"stats-badge\">{{ categorie.servicesCount }}</span>
                                                    {% if categorie.servicesCount > 0 %}
                                                        <i class=\"icon-check\" style=\"color: #28a745;\" title=\"Has services\"></i>
                                                    {% else %}
                                                        <i class=\"icon-minus\" style=\"color: #dc3545;\" title=\"No services\"></i>
                                                    {% endif %}
                                                </div>
                                            </td>
                                            <td style=\"color: #6c757d;\">
                                                <div>
                                                    <i class=\"icon-calendar\"></i> {{ categorie.createdAt|date('M j, Y') }}
                                                </div>
                                                <small style=\"color: #adb5bd;\">{{ categorie.createdAt|date('g:i A') }}</small>
                                            </td>
                                            <td>
                                                <div class=\"btn-group\" style=\"gap: 0.25rem;\">
                                                    <a href=\"{{ path('admin_categorie_show', {'id': categorie.id}) }}\" 
                                                       class=\"btn btn-info btn-sm\" 
                                                       title=\"View Details\">
                                                        <i class=\"icon-eye\"></i>
                                                    </a>
                                                    <a href=\"{{ path('admin_categorie_edit', {'id': categorie.id}) }}\" 
                                                       class=\"btn btn-warning btn-sm\" 
                                                       title=\"Edit Category\">
                                                        <i class=\"icon-edit\"></i>
                                                    </a>
                                                    {% if categorie.servicesCount == 0 %}
                                                        <form method=\"post\" 
                                                              action=\"{{ path('admin_categorie_delete', {'id': categorie.id}) }}\" 
                                                              style=\"display: inline-block;\" 
                                                              onsubmit=\"return confirm('⚠️ Are you sure you want to delete this category?\\n\\nThis action cannot be undone.')\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
                                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Delete Category\">
                                                                <i class=\"icon-trash\"></i>
                                                            </button>
                                                        </form>
                                                    {% else %}
                                                        <button class=\"btn btn-danger btn-sm\" 
                                                                disabled 
                                                                title=\"Cannot delete category with services\"
                                                                style=\"opacity: 0.5; cursor: not-allowed;\">
                                                            <i class=\"icon-trash\"></i>
                                                        </button>
                                                    {% endif %}
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div style=\"text-align: center; padding: 4rem 0;\">
                            <i class=\"icon-list\" style=\"font-size: 4rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                            <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">No categories found</h3>
                            <p style=\"color: #6c757d; margin-bottom: 2rem;\">Get started by creating your first medical category.</p>
                            <a href=\"{{ path('admin_categorie_new') }}\" class=\"btn btn-success btn-lg\">
                                <i class=\"icon-plus\"></i> Create First Category
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class=\"grid_12\" style=\"margin-top: 2rem;\">
                <div class=\"grid_4 alpha\">
                    <div class=\"stats-card\">
                        <div class=\"stats-icon\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                            <i class=\"icon-list\"></i>
                        </div>
                        <div class=\"stats-content\">
                            <h4>Total Categories</h4>
                            <div class=\"number\" style=\"color: #667eea;\">{{ categories|length }}</div>
                            <small style=\"color: #6c757d;\">All category types</small>
                        </div>
                    </div>
                </div>
                <div class=\"grid_4\">
                    <div class=\"stats-card\">
                        <div class=\"stats-icon\" style=\"background: linear-gradient(135deg, #28a745 0%, #20c997 100%);\">
                            <i class=\"icon-stethoscope\"></i>
                        </div>
                        <div class=\"stats-content\">
                            <h4>Total Services</h4>
                            <div class=\"number\" style=\"color: #28a745;\">
                                {% set totalServices = 0 %}
                                {% for categorie in categories %}
                                    {% set totalServices = totalServices + categorie.servicesCount %}
                                {% endfor %}
                                {{ totalServices }}
                            </div>
                            <small style=\"color: #6c757d;\">Across all categories</small>
                        </div>
                    </div>
                </div>
                <div class=\"grid_4 omega\">
                    <div class=\"stats-card\">
                        <div class=\"stats-icon\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                            <i class=\"icon-chart-bar\"></i>
                        </div>
                        <div class=\"stats-content\">
                            <h4>Avg Services</h4>
                            <div class=\"number\" style=\"color: #17a2b8;\">
                                {% if categories|length > 0 %}
                                    {{ (totalServices / categories|length)|round(1) }}
                                {% else %}
                                    0
                                {% endif %}
                            </div>
                            <small style=\"color: #6c757d;\">Per category</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    
    .stats-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border: none;
        height: 100%;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: transform 0.3s ease;
    }
    
    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .stats-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        flex-shrink: 0;
    }
    
    .stats-content {
        flex: 1;
    }
    
    .stats-content h4 {
        margin: 0 0 0.5rem 0;
        color: #495057;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .stats-content .number {
        font-size: 2rem;
        font-weight: 700;
        margin: 0.25rem 0;
        line-height: 1;
    }
    
    .stats-content small {
        font-size: 0.8rem;
        margin: 0;
    }
    
    .table-responsive {
        overflow-x: auto;
        border-radius: 8px;
    }
    
    .btn-group {
        display: flex;
        flex-wrap: wrap;
    }
    
    .alert {
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: none;
    }
    
    .alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        color: #155724;
        border-left: 4px solid #28a745;
    }
    
    .alert-danger {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        color: #721c24;
        border-left: 4px solid #dc3545;
    }
    
    .bg-light {
        background-color: #f8f9fa !important;
        color: #6c757d !important;
    }
</style>
{% endblock %}
", "admin/categorie/index.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\categorie\\index.html.twig");
    }
}
