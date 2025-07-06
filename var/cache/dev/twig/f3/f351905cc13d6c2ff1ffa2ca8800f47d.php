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

/* admin/service/show.html.twig */
class __TwigTemplate_5e49aab54c5441adb6b3bf85b811a2d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service/show.html.twig"));

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

        yield "Service Details - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"container-fluid mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"h3 mb-0 text-gray-800\">Service Details</h1>
                <div>
                    <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\">
                        <i class=\"fas fa-edit\"></i> Edit
                    </a>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Back to Services
                    </a>
                </div>
            </div>

            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        yield "</h6>
                            ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 33, $this->source); })()), "isActive", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                                <span class=\"badge bg-success\">Active</span>
                            ";
        } else {
            // line 36
            yield "                                <span class=\"badge bg-secondary\">Inactive</span>
                            ";
        }
        // line 38
        yield "                        </div>
                        <div class=\"card-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Doctor Name:</strong></div>
                                <div class=\"col-sm-8\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        yield "</div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Speciality:</strong></div>
                                <div class=\"col-sm-8\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 47, $this->source); })()), "speciality", [], "any", false, false, false, 47), "html", null, true);
        yield "</div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Category:</strong></div>
                                <div class=\"col-sm-8\">
                                    <span class=\"badge bg-info\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 53, $this->source); })()), "categorie", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                            
                            ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 57, $this->source); })()), "price", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Price:</strong></div>
                                <div class=\"col-sm-8\">\$";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>
                            </div>
                            ";
        }
        // line 63
        yield "                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Location:</strong></div>
                                <div class=\"col-sm-8\">";
        // line 66
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 66, $this->source); })()), "location", [], "any", false, false, false, 66), "html", null, true));
        yield "</div>
                            </div>
                            
                            ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Description:</strong></div>
                                <div class=\"col-sm-8\">";
            // line 72
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true));
            yield "</div>
                            </div>
                            ";
        }
        // line 75
        yield "                            
                            ";
        // line 76
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 76, $this->source); })()), "phone", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Phone:</strong></div>
                                <div class=\"col-sm-8\">
                                    <a href=\"tel:";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), "html", null, true);
            yield "</a>
                                </div>
                            </div>
                            ";
        }
        // line 84
        yield "                            
                            ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Email:</strong></div>
                                <div class=\"col-sm-8\">
                                    <a href=\"mailto:";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), "html", null, true);
            yield "</a>
                                </div>
                            </div>
                            ";
        }
        // line 93
        yield "                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Available Times:</strong></div>
                                <div class=\"col-sm-8\">
                                    ";
        // line 97
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 97, $this->source); })()), "availableTimes", [], "any", false, false, false, 97))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 98, $this->source); })()), "availableTimes", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                // line 99
                yield "                                            <span class=\"badge bg-light text-dark me-1 mb-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                yield "</span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['time'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                                    ";
        } else {
            // line 102
            yield "                                        <span class=\"text-muted\">No times specified</span>
                                    ";
        }
        // line 104
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Service Information</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <strong>Status:</strong><br>
                                ";
        // line 118
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 118, $this->source); })()), "isActive", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                                    <span class=\"badge bg-success\">Active</span>
                                    <small class=\"d-block text-muted\">Visible to public</small>
                                ";
        } else {
            // line 122
            yield "                                    <span class=\"badge bg-secondary\">Inactive</span>
                                    <small class=\"d-block text-muted\">Hidden from public</small>
                                ";
        }
        // line 125
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <strong>Created:</strong><br>
                                ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 129, $this->source); })()), "createdAt", [], "any", false, false, false, 129), "F j, Y"), "html", null, true);
        yield "<br>
                                <small class=\"text-muted\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 130, $this->source); })()), "createdAt", [], "any", false, false, false, 130), "g:i A"), "html", null, true);
        yield "</small>
                            </div>
                            
                            ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 133, $this->source); })()), "updatedAt", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                            <div class=\"mb-3\">
                                <strong>Last Updated:</strong><br>
                                ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 136, $this->source); })()), "updatedAt", [], "any", false, false, false, 136), "F j, Y"), "html", null, true);
            yield "<br>
                                <small class=\"text-muted\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 137, $this->source); })()), "updatedAt", [], "any", false, false, false, 137), "g:i A"), "html", null, true);
            yield "</small>
                            </div>
                            ";
        }
        // line 140
        yield "                        </div>
                    </div>
                    
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Quick Actions</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-grid gap-2\">
                                <a href=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-edit\"></i> Edit Service
                                </a>
                                
                                <form method=\"post\" action=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153)]), "html", null, true);
        yield "\" 
                                      onsubmit=\"return confirm('Are you sure you want to ";
        // line 154
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 154, $this->source); })()), "isActive", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("deactivate") : ("activate"));
        yield " this service?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_status" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155))), "html", null, true);
        yield "\">
                                    <button class=\"btn btn-";
        // line 156
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 156, $this->source); })()), "isActive", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
        yield " w-100\" type=\"submit\">
                                        <i class=\"fas fa-";
        // line 157
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 157, $this->source); })()), "isActive", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pause") : ("play"));
        yield "\"></i> 
                                        ";
        // line 158
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 158, $this->source); })()), "isActive", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Deactivate") : ("Activate"));
        yield "
                                    </button>
                                </form>
                                
                                <form method=\"post\" action=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162)]), "html", null, true);
        yield "\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this service? This action cannot be undone.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164))), "html", null, true);
        yield "\">
                                    <button class=\"btn btn-danger w-100\" type=\"submit\">
                                        <i class=\"fas fa-trash\"></i> Delete Service
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
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
        return "admin/service/show.html.twig";
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
        return array (  389 => 164,  384 => 162,  377 => 158,  373 => 157,  369 => 156,  365 => 155,  361 => 154,  357 => 153,  350 => 149,  339 => 140,  333 => 137,  329 => 136,  325 => 134,  323 => 133,  317 => 130,  313 => 129,  307 => 125,  302 => 122,  297 => 119,  295 => 118,  279 => 104,  275 => 102,  272 => 101,  263 => 99,  258 => 98,  256 => 97,  250 => 93,  241 => 89,  236 => 86,  234 => 85,  231 => 84,  222 => 80,  217 => 77,  215 => 76,  212 => 75,  206 => 72,  202 => 70,  200 => 69,  194 => 66,  189 => 63,  183 => 60,  179 => 58,  177 => 57,  170 => 53,  161 => 47,  153 => 42,  147 => 38,  143 => 36,  139 => 34,  137 => 33,  133 => 32,  126 => 27,  116 => 23,  113 => 22,  109 => 21,  100 => 15,  94 => 12,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Service Details - {{ service.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"h3 mb-0 text-gray-800\">Service Details</h1>
                <div>
                    <a href=\"{{ path('admin_service_edit', {'id': service.id}) }}\" class=\"btn btn-primary me-2\">
                        <i class=\"fas fa-edit\"></i> Edit
                    </a>
                    <a href=\"{{ path('admin_service_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Back to Services
                    </a>
                </div>
            </div>

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}

            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">{{ service.name }}</h6>
                            {% if service.isActive %}
                                <span class=\"badge bg-success\">Active</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">Inactive</span>
                            {% endif %}
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Doctor Name:</strong></div>
                                <div class=\"col-sm-8\">{{ service.name }}</div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Speciality:</strong></div>
                                <div class=\"col-sm-8\">{{ service.speciality }}</div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Category:</strong></div>
                                <div class=\"col-sm-8\">
                                    <span class=\"badge bg-info\">{{ service.categorie.name }}</span>
                                </div>
                            </div>
                            
                            {% if service.price %}
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Price:</strong></div>
                                <div class=\"col-sm-8\">\${{ service.price }}</div>
                            </div>
                            {% endif %}
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Location:</strong></div>
                                <div class=\"col-sm-8\">{{ service.location|nl2br }}</div>
                            </div>
                            
                            {% if service.description %}
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Description:</strong></div>
                                <div class=\"col-sm-8\">{{ service.description|nl2br }}</div>
                            </div>
                            {% endif %}
                            
                            {% if service.phone %}
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Phone:</strong></div>
                                <div class=\"col-sm-8\">
                                    <a href=\"tel:{{ service.phone }}\">{{ service.phone }}</a>
                                </div>
                            </div>
                            {% endif %}
                            
                            {% if service.email %}
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Email:</strong></div>
                                <div class=\"col-sm-8\">
                                    <a href=\"mailto:{{ service.email }}\">{{ service.email }}</a>
                                </div>
                            </div>
                            {% endif %}
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-4\"><strong>Available Times:</strong></div>
                                <div class=\"col-sm-8\">
                                    {% if service.availableTimes is not empty %}
                                        {% for time in service.availableTimes %}
                                            <span class=\"badge bg-light text-dark me-1 mb-1\">{{ time }}</span>
                                        {% endfor %}
                                    {% else %}
                                        <span class=\"text-muted\">No times specified</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Service Information</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <strong>Status:</strong><br>
                                {% if service.isActive %}
                                    <span class=\"badge bg-success\">Active</span>
                                    <small class=\"d-block text-muted\">Visible to public</small>
                                {% else %}
                                    <span class=\"badge bg-secondary\">Inactive</span>
                                    <small class=\"d-block text-muted\">Hidden from public</small>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <strong>Created:</strong><br>
                                {{ service.createdAt|date('F j, Y') }}<br>
                                <small class=\"text-muted\">{{ service.createdAt|date('g:i A') }}</small>
                            </div>
                            
                            {% if service.updatedAt %}
                            <div class=\"mb-3\">
                                <strong>Last Updated:</strong><br>
                                {{ service.updatedAt|date('F j, Y') }}<br>
                                <small class=\"text-muted\">{{ service.updatedAt|date('g:i A') }}</small>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                    
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Quick Actions</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-grid gap-2\">
                                <a href=\"{{ path('admin_service_edit', {'id': service.id}) }}\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-edit\"></i> Edit Service
                                </a>
                                
                                <form method=\"post\" action=\"{{ path('admin_service_toggle_status', {'id': service.id}) }}\" 
                                      onsubmit=\"return confirm('Are you sure you want to {{ service.isActive ? 'deactivate' : 'activate' }} this service?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_status' ~ service.id) }}\">
                                    <button class=\"btn btn-{{ service.isActive ? 'warning' : 'success' }} w-100\" type=\"submit\">
                                        <i class=\"fas fa-{{ service.isActive ? 'pause' : 'play' }}\"></i> 
                                        {{ service.isActive ? 'Deactivate' : 'Activate' }}
                                    </button>
                                </form>
                                
                                <form method=\"post\" action=\"{{ path('admin_service_delete', {'id': service.id}) }}\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this service? This action cannot be undone.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ service.id) }}\">
                                    <button class=\"btn btn-danger w-100\" type=\"submit\">
                                        <i class=\"fas fa-trash\"></i> Delete Service
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/service/show.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\service\\show.html.twig");
    }
}
