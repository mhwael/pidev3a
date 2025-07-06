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

/* admin/service/index.html.twig */
class __TwigTemplate_f0e406bbcc577664b5f7dc76160b9836 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service/index.html.twig"));

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

        yield "Services Management";
        
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
            <div class=\"page-header\">
                <h1><i class=\"icon-stethoscope\"></i> Services Management</h1>
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_new");
        yield "\" class=\"btn btn-primary btn-lg\">
                    <i class=\"icon-plus\"></i> Add New Service
                </a>
            </div>

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "                <div class=\"alert alert-success\">
                    <i class=\"icon-check-circle\"></i> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["error"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "                <div class=\"alert alert-danger\">
                    <i class=\"icon-exclamation-triangle\"></i> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-list\"></i> All Services (";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 30, $this->source); })())), "html", null, true);
        yield ")</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 33
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "                        <div style=\"text-align: center; padding: 4rem 0;\">
                            <i class=\"icon-stethoscope\" style=\"font-size: 4rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                            <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">No services found</h3>
                            <p style=\"color: #6c757d; margin-bottom: 2rem;\">Get started by creating your first medical service.</p>
                            <a href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_new");
            yield "\" class=\"btn btn-primary btn-lg\">
                                <i class=\"icon-plus\"></i> Create First Service
                            </a>
                        </div>
                    ";
        } else {
            // line 43
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th><i class=\"icon-user-md\"></i> Doctor</th>
                                        <th><i class=\"icon-stethoscope\"></i> Speciality</th>
                                        <th><i class=\"icon-tag\"></i> Category</th>
                                        <th><i class=\"icon-map-marker\"></i> Location</th>
                                        <th><i class=\"icon-money\"></i> Price</th>
                                        <th><i class=\"icon-circle\"></i> Status</th>
                                        <th><i class=\"icon-calendar\"></i> Created</th>
                                        <th><i class=\"icon-cogs\"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 59
                yield "                                        <tr>
                                            <td>
                                                <div style=\"display: flex; flex-direction: column;\">
                                                    <strong style=\"color: #495057;\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 62), "html", null, true);
                yield "</strong>
                                                    ";
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "email", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "                                                        <small style=\"color: #6c757d;\"><i class=\"icon-envelope\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "email", [], "any", false, false, false, 64), "html", null, true);
                    yield "</small>
                                                    ";
                }
                // line 66
                yield "                                                </div>
                                            </td>
                                            <td>
                                                <span style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.5rem 0.75rem; border-radius: 15px; font-size: 0.8rem; font-weight: 600;\">
                                                    ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "speciality", [], "any", false, false, false, 70), "html", null, true);
                yield "
                                                </span>
                                            </td>
                                            <td>
                                                <span class=\"category-badge\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                                                    ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "categorie", [], "any", false, false, false, 75), "type", [], "any", false, false, false, 75), "html", null, true);
                yield "
                                                </span>
                                            </td>
                                            <td>
                                                <div style=\"max-width: 200px; overflow: hidden; text-overflow: ellipsis;\">
                                                    <i class=\"icon-map-marker\" style=\"color: #6c757d;\"></i>
                                                    ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "location", [], "any", false, false, false, 81), 0, 50), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "location", [], "any", false, false, false, 81)) > 50)) {
                    yield "...";
                }
                // line 82
                yield "                                                </div>
                                            </td>
                                            <td>
                                                ";
                // line 85
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 86
                    yield "                                                    <span style=\"color: #28a745; font-weight: 600; font-size: 1.1rem;\">
                                                        <i class=\"icon-money\"></i> \$";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 87), "html", null, true);
                    yield "
                                                    </span>
                                                ";
                } else {
                    // line 90
                    yield "                                                    <span style=\"color: #6c757d; font-style: italic;\">Contact for pricing</span>
                                                ";
                }
                // line 92
                yield "                                            </td>
                                            <td>
                                                ";
                // line 94
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "isActive", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "                                                    <span class=\"badge bg-success\">
                                                        <i class=\"icon-check\"></i> Active
                                                    </span>
                                                ";
                } else {
                    // line 99
                    yield "                                                    <span class=\"badge bg-secondary\">
                                                        <i class=\"icon-pause\"></i> Inactive
                                                    </span>
                                                ";
                }
                // line 103
                yield "                                            </td>
                                            <td style=\"color: #6c757d;\">
                                                <i class=\"icon-calendar\"></i> ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "createdAt", [], "any", false, false, false, 105), "M j, Y"), "html", null, true);
                yield "<br>
                                                <small>";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "createdAt", [], "any", false, false, false, 106), "g:i A"), "html", null, true);
                yield "</small>
                                            </td>
                                            <td>
                                                <div class=\"btn-group\">
                                                    <a href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" 
                                                       class=\"btn btn-info btn-sm\" title=\"View Details\">
                                                        <i class=\"icon-eye-open\"></i>
                                                    </a>
                                                    <a href=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                yield "\" 
                                                       class=\"btn btn-primary btn-sm\" title=\"Edit Service\">
                                                        <i class=\"icon-edit\"></i>
                                                    </a>
                                                    
                                                    <form method=\"post\" action=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\" 
                                                          style=\"display: inline-block;\" 
                                                          onsubmit=\"return confirm('Are you sure you want to ";
                // line 121
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "isActive", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("deactivate") : ("activate"));
                yield " this service?')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_status" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 122))), "html", null, true);
                yield "\">
                                                        <button class=\"btn btn-";
                // line 123
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "isActive", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
                yield " btn-sm\" 
                                                                type=\"submit\" 
                                                                title=\"";
                // line 125
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "isActive", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Deactivate Service") : ("Activate Service"));
                yield "\">
                                                            <i class=\"icon-";
                // line 126
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "isActive", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause") : ("play"));
                yield "\"></i>
                                                        </button>
                                                    </form>
                                                    
                                                    <form method=\"post\" action=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" 
                                                          style=\"display: inline-block;\" 
                                                          onsubmit=\"return confirm('⚠️ Are you sure you want to delete this service?\\n\\nThis action cannot be undone and will permanently remove:\\n• Service information\\n• Contact details\\n• All associated data')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 133))), "html", null, true);
                yield "\">
                                                        <button class=\"btn btn-danger btn-sm\" type=\"submit\" title=\"Delete Service\">
                                                            <i class=\"icon-trash\"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 146
        yield "                </div>
            </div>

            <!-- Statistics Cards -->
            <div class=\"grid_12\" style=\"margin-top: 2rem;\">
                <div class=\"grid_3 alpha\">
                    <div class=\"stats-card\">
                        <h4>Total Services</h4>
                        <div class=\"number\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 154, $this->source); })())), "html", null, true);
        yield "</div>
                        <small style=\"color: #6c757d;\">All registered services</small>
                    </div>
                </div>
                <div class=\"grid_3\">
                    <div class=\"stats-card\">
                        <h4>Active Services</h4>
                        <div class=\"number\" style=\"color: #28a745;\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 161, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 161, $this->source); })()), "isActive", [], "any", false, false, false, 161); })), "html", null, true);
        yield "</div>
                        <small style=\"color: #6c757d;\">Currently available</small>
                    </div>
                </div>
                <div class=\"grid_3\">
                    <div class=\"stats-card\">
                        <h4>Inactive Services</h4>
                        <div class=\"number\" style=\"color: #6c757d;\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 168, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 168, $this->source); })()), "isActive", [], "any", false, false, false, 168); })), "html", null, true);
        yield "</div>
                        <small style=\"color: #6c757d;\">Temporarily disabled</small>
                    </div>
                </div>
                <div class=\"grid_3 omega\">
                    <div class=\"stats-card\">
                        <h4>Success Rate</h4>
                        <div class=\"number\" style=\"color: #667eea;\">
                            ";
        // line 176
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 176, $this->source); })())) > 0)) {
            // line 177
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 177, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 177, $this->source); })()), "isActive", [], "any", false, false, false, 177); })) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 177, $this->source); })()))) * 100)), "html", null, true);
            yield "%
                            ";
        } else {
            // line 179
            yield "                                0%
                            ";
        }
        // line 181
        yield "                        </div>
                        <small style=\"color: #6c757d;\">Active vs Total</small>
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
    
    .table-responsive {
        overflow-x: auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    
    .category-badge {
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        text-align: center;
        display: inline-block;
        min-width: 80px;
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
    
    .stats-card h4 {
        margin: 0 0 0.5rem 0;
        color: #495057;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .stats-card .number {
        font-size: 2rem;
        font-weight: 700;
        margin: 0.25rem 0;
        line-height: 1;
    }
    
    .stats-card small {
        font-size: 0.8rem;
        margin: 0;
        color: #6c757d;
    }
    
    .btn-group {
        display: flex;
        gap: 0.25rem;
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

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }
        
        .btn-group {
            justify-content: center;
        }
        
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.875rem;
        }
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
        return "admin/service/index.html.twig";
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
        return array (  405 => 181,  401 => 179,  395 => 177,  393 => 176,  382 => 168,  372 => 161,  362 => 154,  352 => 146,  346 => 142,  331 => 133,  325 => 130,  318 => 126,  314 => 125,  309 => 123,  305 => 122,  301 => 121,  296 => 119,  288 => 114,  281 => 110,  274 => 106,  270 => 105,  266 => 103,  260 => 99,  254 => 95,  252 => 94,  248 => 92,  244 => 90,  238 => 87,  235 => 86,  233 => 85,  228 => 82,  223 => 81,  214 => 75,  206 => 70,  200 => 66,  194 => 64,  192 => 63,  188 => 62,  183 => 59,  179 => 58,  162 => 43,  154 => 38,  148 => 34,  146 => 33,  140 => 30,  135 => 27,  126 => 24,  123 => 23,  119 => 22,  116 => 21,  107 => 18,  104 => 17,  100 => 16,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Services Management{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"page-header\">
                <h1><i class=\"icon-stethoscope\"></i> Services Management</h1>
                <a href=\"{{ path('admin_service_new') }}\" class=\"btn btn-primary btn-lg\">
                    <i class=\"icon-plus\"></i> Add New Service
                </a>
            </div>

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

            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-list\"></i> All Services ({{ services|length }})</h2>
                </div>
                <div class=\"card-body\">
                    {% if services is empty %}
                        <div style=\"text-align: center; padding: 4rem 0;\">
                            <i class=\"icon-stethoscope\" style=\"font-size: 4rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                            <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">No services found</h3>
                            <p style=\"color: #6c757d; margin-bottom: 2rem;\">Get started by creating your first medical service.</p>
                            <a href=\"{{ path('admin_service_new') }}\" class=\"btn btn-primary btn-lg\">
                                <i class=\"icon-plus\"></i> Create First Service
                            </a>
                        </div>
                    {% else %}
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th><i class=\"icon-user-md\"></i> Doctor</th>
                                        <th><i class=\"icon-stethoscope\"></i> Speciality</th>
                                        <th><i class=\"icon-tag\"></i> Category</th>
                                        <th><i class=\"icon-map-marker\"></i> Location</th>
                                        <th><i class=\"icon-money\"></i> Price</th>
                                        <th><i class=\"icon-circle\"></i> Status</th>
                                        <th><i class=\"icon-calendar\"></i> Created</th>
                                        <th><i class=\"icon-cogs\"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for service in services %}
                                        <tr>
                                            <td>
                                                <div style=\"display: flex; flex-direction: column;\">
                                                    <strong style=\"color: #495057;\">{{ service.name }}</strong>
                                                    {% if service.email %}
                                                        <small style=\"color: #6c757d;\"><i class=\"icon-envelope\"></i> {{ service.email }}</small>
                                                    {% endif %}
                                                </div>
                                            </td>
                                            <td>
                                                <span style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.5rem 0.75rem; border-radius: 15px; font-size: 0.8rem; font-weight: 600;\">
                                                    {{ service.speciality }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class=\"category-badge\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                                                    {{ service.categorie.type }}
                                                </span>
                                            </td>
                                            <td>
                                                <div style=\"max-width: 200px; overflow: hidden; text-overflow: ellipsis;\">
                                                    <i class=\"icon-map-marker\" style=\"color: #6c757d;\"></i>
                                                    {{ service.location|slice(0, 50) }}{% if service.location|length > 50 %}...{% endif %}
                                                </div>
                                            </td>
                                            <td>
                                                {% if service.price %}
                                                    <span style=\"color: #28a745; font-weight: 600; font-size: 1.1rem;\">
                                                        <i class=\"icon-money\"></i> \${{ service.price }}
                                                    </span>
                                                {% else %}
                                                    <span style=\"color: #6c757d; font-style: italic;\">Contact for pricing</span>
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if service.isActive %}
                                                    <span class=\"badge bg-success\">
                                                        <i class=\"icon-check\"></i> Active
                                                    </span>
                                                {% else %}
                                                    <span class=\"badge bg-secondary\">
                                                        <i class=\"icon-pause\"></i> Inactive
                                                    </span>
                                                {% endif %}
                                            </td>
                                            <td style=\"color: #6c757d;\">
                                                <i class=\"icon-calendar\"></i> {{ service.createdAt|date('M j, Y') }}<br>
                                                <small>{{ service.createdAt|date('g:i A') }}</small>
                                            </td>
                                            <td>
                                                <div class=\"btn-group\">
                                                    <a href=\"{{ path('admin_service_show', {'id': service.id}) }}\" 
                                                       class=\"btn btn-info btn-sm\" title=\"View Details\">
                                                        <i class=\"icon-eye-open\"></i>
                                                    </a>
                                                    <a href=\"{{ path('admin_service_edit', {'id': service.id}) }}\" 
                                                       class=\"btn btn-primary btn-sm\" title=\"Edit Service\">
                                                        <i class=\"icon-edit\"></i>
                                                    </a>
                                                    
                                                    <form method=\"post\" action=\"{{ path('admin_service_toggle_status', {'id': service.id}) }}\" 
                                                          style=\"display: inline-block;\" 
                                                          onsubmit=\"return confirm('Are you sure you want to {{ service.isActive ? 'deactivate' : 'activate' }} this service?')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_status' ~ service.id) }}\">
                                                        <button class=\"btn btn-{{ service.isActive ? 'warning' : 'success' }} btn-sm\" 
                                                                type=\"submit\" 
                                                                title=\"{{ service.isActive ? 'Deactivate Service' : 'Activate Service' }}\">
                                                            <i class=\"icon-{{ service.isActive ? 'pause' : 'play' }}\"></i>
                                                        </button>
                                                    </form>
                                                    
                                                    <form method=\"post\" action=\"{{ path('admin_service_delete', {'id': service.id}) }}\" 
                                                          style=\"display: inline-block;\" 
                                                          onsubmit=\"return confirm('⚠️ Are you sure you want to delete this service?\\n\\nThis action cannot be undone and will permanently remove:\\n• Service information\\n• Contact details\\n• All associated data')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ service.id) }}\">
                                                        <button class=\"btn btn-danger btn-sm\" type=\"submit\" title=\"Delete Service\">
                                                            <i class=\"icon-trash\"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class=\"grid_12\" style=\"margin-top: 2rem;\">
                <div class=\"grid_3 alpha\">
                    <div class=\"stats-card\">
                        <h4>Total Services</h4>
                        <div class=\"number\">{{ services|length }}</div>
                        <small style=\"color: #6c757d;\">All registered services</small>
                    </div>
                </div>
                <div class=\"grid_3\">
                    <div class=\"stats-card\">
                        <h4>Active Services</h4>
                        <div class=\"number\" style=\"color: #28a745;\">{{ services|filter(s => s.isActive)|length }}</div>
                        <small style=\"color: #6c757d;\">Currently available</small>
                    </div>
                </div>
                <div class=\"grid_3\">
                    <div class=\"stats-card\">
                        <h4>Inactive Services</h4>
                        <div class=\"number\" style=\"color: #6c757d;\">{{ services|filter(s => not s.isActive)|length }}</div>
                        <small style=\"color: #6c757d;\">Temporarily disabled</small>
                    </div>
                </div>
                <div class=\"grid_3 omega\">
                    <div class=\"stats-card\">
                        <h4>Success Rate</h4>
                        <div class=\"number\" style=\"color: #667eea;\">
                            {% if services|length > 0 %}
                                {{ ((services|filter(s => s.isActive)|length / services|length) * 100)|round }}%
                            {% else %}
                                0%
                            {% endif %}
                        </div>
                        <small style=\"color: #6c757d;\">Active vs Total</small>
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
    
    .table-responsive {
        overflow-x: auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    
    .category-badge {
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        text-align: center;
        display: inline-block;
        min-width: 80px;
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
    
    .stats-card h4 {
        margin: 0 0 0.5rem 0;
        color: #495057;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .stats-card .number {
        font-size: 2rem;
        font-weight: 700;
        margin: 0.25rem 0;
        line-height: 1;
    }
    
    .stats-card small {
        font-size: 0.8rem;
        margin: 0;
        color: #6c757d;
    }
    
    .btn-group {
        display: flex;
        gap: 0.25rem;
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

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }
        
        .btn-group {
            justify-content: center;
        }
        
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.875rem;
        }
    }
</style>
{% endblock %}
", "admin/service/index.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\service\\index.html.twig");
    }
}
