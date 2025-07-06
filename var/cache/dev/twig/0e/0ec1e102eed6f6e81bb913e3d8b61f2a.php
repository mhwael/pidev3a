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

/* admin/appointment/index.html.twig */
class __TwigTemplate_72e5ed15fbada5a81d8f9e1ce5eb2a0a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/appointment/index.html.twig"));

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

        yield "Appointments Management";
        
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
                <h1><i class=\"icon-calendar\"></i> Appointments Management</h1>
                <div style=\"display: flex; gap: 1rem; align-items: center;\">
                    <div class=\"stats-card\">
                        <h4>Pending: ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 13, $this->source); })()), "pending", [], "any", false, false, false, 13), "html", null, true);
        yield "</h4>
                    </div>
                    <div class=\"stats-card\">
                        <h4>Confirmed: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "confirmed", [], "any", false, false, false, 16), "html", null, true);
        yield "</h4>
                    </div>
                </div>
            </div>

            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "                <div class=\"alert alert-success\">
                    <i class=\"icon-check-circle\"></i> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["error"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "                <div class=\"alert alert-danger\">
                    <i class=\"icon-exclamation-triangle\"></i> ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
            <!-- Filters -->
            <div class=\"card\" style=\"margin-bottom: 2rem;\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-filter\"></i> Filter Appointments</h2>
                </div>
                <div class=\"card-body\">
                    <form method=\"GET\" style=\"display: flex; gap: 1rem; align-items: end;\">
                        <div class=\"form-group\" style=\"margin-bottom: 0;\">
                            <label>Status</label>
                            <select name=\"status\" class=\"form-control\" onchange=\"this.form.submit()\">
                                <option value=\"\">All Statuses</option>
                                <option value=\"pending\" ";
        // line 44
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 44, $this->source); })()) == "pending")) {
            yield "selected";
        }
        yield ">Pending</option>
                                <option value=\"confirmed\" ";
        // line 45
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 45, $this->source); })()) == "confirmed")) {
            yield "selected";
        }
        yield ">Confirmed</option>
                                <option value=\"completed\" ";
        // line 46
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 46, $this->source); })()) == "completed")) {
            yield "selected";
        }
        yield ">Completed</option>
                                <option value=\"cancelled\" ";
        // line 47
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 47, $this->source); })()) == "cancelled")) {
            yield "selected";
        }
        yield ">Cancelled</option>
                            </select>
                        </div>
                        
                        <div class=\"form-group\" style=\"margin-bottom: 0; flex: 1;\">
                            <label>Search</label>
                            <input type=\"text\" name=\"search\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "\" 
                                   placeholder=\"Patient name, email, or service...\" 
                                   class=\"form-control\">
                        </div>
                        
                        <div style=\"display: flex; gap: 0.5rem;\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"icon-search\"></i> Filter
                            </button>
                            ";
        // line 62
        if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 62, $this->source); })()) || (isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 62, $this->source); })()))) {
            // line 63
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_index");
            yield "\" class=\"btn btn-secondary\">
                                    <i class=\"icon-remove\"></i> Clear
                                </a>
                            ";
        }
        // line 67
        yield "                        </div>
                    </form>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-list\"></i> All Appointments (";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 74, $this->source); })())), "html", null, true);
        yield ")</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 77
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 77, $this->source); })()))) {
            // line 78
            yield "                        <div style=\"text-align: center; padding: 4rem 0;\">
                            <i class=\"icon-calendar\" style=\"font-size: 4rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                            <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">No appointments found</h3>
                            <p style=\"color: #6c757d; margin-bottom: 2rem;\">
                                ";
            // line 82
            if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 82, $this->source); })()) || (isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 82, $this->source); })()))) {
                // line 83
                yield "                                    Try adjusting your filters to see more results.
                                ";
            } else {
                // line 85
                yield "                                    No appointments have been submitted yet.
                                ";
            }
            // line 87
            yield "                            </p>
                            ";
            // line 88
            if (((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 88, $this->source); })()) || (isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 88, $this->source); })()))) {
                // line 89
                yield "                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_index");
                yield "\" class=\"btn btn-primary\">
                                    <i class=\"icon-refresh\"></i> Show All Appointments
                                </a>
                            ";
            }
            // line 93
            yield "                        </div>
                    ";
        } else {
            // line 95
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th><i class=\"icon-user\"></i> Patient</th>
                                        <th><i class=\"icon-user-md\"></i> Service</th>
                                        <th><i class=\"icon-calendar\"></i> Date & Time</th>
                                        <th><i class=\"icon-info-circle\"></i> Status</th>
                                        <th><i class=\"icon-clock-o\"></i> Created</th>
                                        <th><i class=\"icon-cogs\"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
                // line 109
                yield "                                    <tr>
                                        <td>
                                            <strong>";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "patientName", [], "any", false, false, false, 111), "html", null, true);
                yield "</strong><br>
                                            <small style=\"color: #6c757d;\">
                                                <i class=\"icon-envelope\"></i> ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "email", [], "any", false, false, false, 113), "html", null, true);
                yield "
                                                ";
                // line 114
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "phone", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><i class=\"icon-phone\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "phone", [], "any", false, false, false, 114), "html", null, true);
                }
                // line 115
                yield "                                            </small>
                                        </td>
                                        <td>
                                            <strong>";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "service", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
                yield "</strong><br>
                                            <small style=\"color: #6c757d;\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "service", [], "any", false, false, false, 119), "speciality", [], "any", false, false, false, 119), "html", null, true);
                yield "</small>
                                        </td>
                                        <td>
                                            <strong>";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "formattedDate", [], "any", false, false, false, 122), "html", null, true);
                yield "</strong><br>
                                            <small style=\"color: #6c757d;\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "formattedTime", [], "any", false, false, false, 123), "html", null, true);
                yield "</small>
                                        </td>
                                        <td>
                                            ";
                // line 126
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 126) == "pending")) {
                    // line 127
                    yield "                                                <span class=\"badge bg-warning\"><i class=\"icon-clock-o\"></i> Pending</span>
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 128
$context["appointment"], "status", [], "any", false, false, false, 128) == "confirmed")) {
                    // line 129
                    yield "                                                <span class=\"badge bg-info\"><i class=\"icon-check\"></i> Confirmed</span>
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 130
$context["appointment"], "status", [], "any", false, false, false, 130) == "completed")) {
                    // line 131
                    yield "                                                <span class=\"badge bg-success\"><i class=\"icon-check-circle\"></i> Completed</span>
                                            ";
                } else {
                    // line 133
                    yield "                                                <span class=\"badge bg-danger\"><i class=\"icon-times\"></i> Cancelled</span>
                                            ";
                }
                // line 135
                yield "                                        </td>
                                        <td>
                                            <strong>";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "createdAt", [], "any", false, false, false, 137), "M d, Y"), "html", null, true);
                yield "</strong><br>
                                            <small style=\"color: #6c757d;\">";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "createdAt", [], "any", false, false, false, 138), "H:i"), "html", null, true);
                yield "</small>
                                        </td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                yield "\" 
                                                   class=\"btn btn-sm btn-info\" title=\"View Details\">
                                                    <i class=\"icon-eye\"></i>
                                                </a>
                                                ";
                // line 146
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 146) == "pending")) {
                    // line 147
                    yield "                                                    <form method=\"POST\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 147)]), "html", null, true);
                    yield "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Confirm\" 
                                                                onclick=\"return confirm('Confirm this appointment?')\">
                                                            <i class=\"icon-check\"></i>
                                                        </button>
                                                    </form>
                                                    <form method=\"POST\" action=\"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 153)]), "html", null, true);
                    yield "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Cancel\" 
                                                                onclick=\"return confirm('Cancel this appointment?')\">
                                                            <i class=\"icon-times\"></i>
                                                        </button>
                                                    </form>
                                                ";
                }
                // line 160
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 160) == "confirmed")) {
                    // line 161
                    yield "                                                    <form method=\"POST\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_complete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 161)]), "html", null, true);
                    yield "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" title=\"Mark Complete\" 
                                                                onclick=\"return confirm('Mark this appointment as completed?')\">
                                                            <i class=\"icon-check-circle\"></i>
                                                        </button>
                                                    </form>
                                                ";
                }
                // line 168
                yield "                                            </div>
                                        </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['appointment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 176
        yield "                </div>
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
        return "admin/appointment/index.html.twig";
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
        return array (  413 => 176,  407 => 172,  398 => 168,  387 => 161,  384 => 160,  374 => 153,  364 => 147,  362 => 146,  355 => 142,  348 => 138,  344 => 137,  340 => 135,  336 => 133,  332 => 131,  330 => 130,  327 => 129,  325 => 128,  322 => 127,  320 => 126,  314 => 123,  310 => 122,  304 => 119,  300 => 118,  295 => 115,  290 => 114,  286 => 113,  281 => 111,  277 => 109,  273 => 108,  258 => 95,  254 => 93,  246 => 89,  244 => 88,  241 => 87,  237 => 85,  233 => 83,  231 => 82,  225 => 78,  223 => 77,  217 => 74,  208 => 67,  200 => 63,  198 => 62,  186 => 53,  175 => 47,  169 => 46,  163 => 45,  157 => 44,  143 => 32,  134 => 29,  131 => 28,  127 => 27,  124 => 26,  115 => 23,  112 => 22,  108 => 21,  100 => 16,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Appointments Management{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"page-header\">
                <h1><i class=\"icon-calendar\"></i> Appointments Management</h1>
                <div style=\"display: flex; gap: 1rem; align-items: center;\">
                    <div class=\"stats-card\">
                        <h4>Pending: {{ stats.pending }}</h4>
                    </div>
                    <div class=\"stats-card\">
                        <h4>Confirmed: {{ stats.confirmed }}</h4>
                    </div>
                </div>
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

            <!-- Filters -->
            <div class=\"card\" style=\"margin-bottom: 2rem;\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-filter\"></i> Filter Appointments</h2>
                </div>
                <div class=\"card-body\">
                    <form method=\"GET\" style=\"display: flex; gap: 1rem; align-items: end;\">
                        <div class=\"form-group\" style=\"margin-bottom: 0;\">
                            <label>Status</label>
                            <select name=\"status\" class=\"form-control\" onchange=\"this.form.submit()\">
                                <option value=\"\">All Statuses</option>
                                <option value=\"pending\" {% if currentStatus == 'pending' %}selected{% endif %}>Pending</option>
                                <option value=\"confirmed\" {% if currentStatus == 'confirmed' %}selected{% endif %}>Confirmed</option>
                                <option value=\"completed\" {% if currentStatus == 'completed' %}selected{% endif %}>Completed</option>
                                <option value=\"cancelled\" {% if currentStatus == 'cancelled' %}selected{% endif %}>Cancelled</option>
                            </select>
                        </div>
                        
                        <div class=\"form-group\" style=\"margin-bottom: 0; flex: 1;\">
                            <label>Search</label>
                            <input type=\"text\" name=\"search\" value=\"{{ currentSearch }}\" 
                                   placeholder=\"Patient name, email, or service...\" 
                                   class=\"form-control\">
                        </div>
                        
                        <div style=\"display: flex; gap: 0.5rem;\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"icon-search\"></i> Filter
                            </button>
                            {% if currentStatus or currentSearch %}
                                <a href=\"{{ path('admin_appointment_index') }}\" class=\"btn btn-secondary\">
                                    <i class=\"icon-remove\"></i> Clear
                                </a>
                            {% endif %}
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-list\"></i> All Appointments ({{ appointments|length }})</h2>
                </div>
                <div class=\"card-body\">
                    {% if appointments is empty %}
                        <div style=\"text-align: center; padding: 4rem 0;\">
                            <i class=\"icon-calendar\" style=\"font-size: 4rem; color: #dee2e6; margin-bottom: 1rem;\"></i>
                            <h3 style=\"color: #6c757d; margin-bottom: 1rem;\">No appointments found</h3>
                            <p style=\"color: #6c757d; margin-bottom: 2rem;\">
                                {% if currentStatus or currentSearch %}
                                    Try adjusting your filters to see more results.
                                {% else %}
                                    No appointments have been submitted yet.
                                {% endif %}
                            </p>
                            {% if currentStatus or currentSearch %}
                                <a href=\"{{ path('admin_appointment_index') }}\" class=\"btn btn-primary\">
                                    <i class=\"icon-refresh\"></i> Show All Appointments
                                </a>
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th><i class=\"icon-user\"></i> Patient</th>
                                        <th><i class=\"icon-user-md\"></i> Service</th>
                                        <th><i class=\"icon-calendar\"></i> Date & Time</th>
                                        <th><i class=\"icon-info-circle\"></i> Status</th>
                                        <th><i class=\"icon-clock-o\"></i> Created</th>
                                        <th><i class=\"icon-cogs\"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for appointment in appointments %}
                                    <tr>
                                        <td>
                                            <strong>{{ appointment.patientName }}</strong><br>
                                            <small style=\"color: #6c757d;\">
                                                <i class=\"icon-envelope\"></i> {{ appointment.email }}
                                                {% if appointment.phone %}<br><i class=\"icon-phone\"></i> {{ appointment.phone }}{% endif %}
                                            </small>
                                        </td>
                                        <td>
                                            <strong>{{ appointment.service.name }}</strong><br>
                                            <small style=\"color: #6c757d;\">{{ appointment.service.speciality }}</small>
                                        </td>
                                        <td>
                                            <strong>{{ appointment.formattedDate }}</strong><br>
                                            <small style=\"color: #6c757d;\">{{ appointment.formattedTime }}</small>
                                        </td>
                                        <td>
                                            {% if appointment.status == 'pending' %}
                                                <span class=\"badge bg-warning\"><i class=\"icon-clock-o\"></i> Pending</span>
                                            {% elseif appointment.status == 'confirmed' %}
                                                <span class=\"badge bg-info\"><i class=\"icon-check\"></i> Confirmed</span>
                                            {% elseif appointment.status == 'completed' %}
                                                <span class=\"badge bg-success\"><i class=\"icon-check-circle\"></i> Completed</span>
                                            {% else %}
                                                <span class=\"badge bg-danger\"><i class=\"icon-times\"></i> Cancelled</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <strong>{{ appointment.createdAt|date('M d, Y') }}</strong><br>
                                            <small style=\"color: #6c757d;\">{{ appointment.createdAt|date('H:i') }}</small>
                                        </td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a href=\"{{ path('admin_appointment_show', {'id': appointment.id}) }}\" 
                                                   class=\"btn btn-sm btn-info\" title=\"View Details\">
                                                    <i class=\"icon-eye\"></i>
                                                </a>
                                                {% if appointment.status == 'pending' %}
                                                    <form method=\"POST\" action=\"{{ path('admin_appointment_confirm', {'id': appointment.id}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Confirm\" 
                                                                onclick=\"return confirm('Confirm this appointment?')\">
                                                            <i class=\"icon-check\"></i>
                                                        </button>
                                                    </form>
                                                    <form method=\"POST\" action=\"{{ path('admin_appointment_cancel', {'id': appointment.id}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Cancel\" 
                                                                onclick=\"return confirm('Cancel this appointment?')\">
                                                            <i class=\"icon-times\"></i>
                                                        </button>
                                                    </form>
                                                {% endif %}
                                                {% if appointment.status == 'confirmed' %}
                                                    <form method=\"POST\" action=\"{{ path('admin_appointment_complete', {'id': appointment.id}) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" title=\"Mark Complete\" 
                                                                onclick=\"return confirm('Mark this appointment as completed?')\">
                                                            <i class=\"icon-check-circle\"></i>
                                                        </button>
                                                    </form>
                                                {% endif %}
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
        </div>
    </div>
</div>
{% endblock %}
", "admin/appointment/index.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\appointment\\index.html.twig");
    }
}
