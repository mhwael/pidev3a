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

/* appointment/index.html.twig */
class __TwigTemplate_fc55295229aaddd589044f0a18ad10a0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-calendar\"></i> Book an Appointment</h1>
            <p>Choose a service and schedule your appointment with our medical experts</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_12\">
        <div class=\"content-section\">
            <div class=\"page-header\">
                <h2>Select a Service</h2>
                <p>Choose from our available medical services to book your appointment</p>
            </div>

            <div class=\"services-grid\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 25
            yield "                    <div class=\"service-card\">
                        <div class=\"service-header\">
                            <h3>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</h3>
                            <span class=\"speciality-badge\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "speciality", [], "any", false, false, false, 28), "html", null, true);
            yield "</span>
                        </div>
                        
                        <div class=\"service-info\">
                            <p><i class=\"icon-location-arrow\"></i> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "location", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                            ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                                <p><i class=\"icon-money\"></i> \$";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 34), "html", null, true);
                yield "</p>
                            ";
            }
            // line 36
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "                                <p class=\"service-description\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 37), 0, 100), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 37)) > 100)) {
                    yield "...";
                }
                yield "</p>
                            ";
            }
            // line 39
            yield "                        </div>

                        <div class=\"service-actions\">
                            <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-sm\">
                                <i class=\"icon-info-circle\"></i> Details
                            </a>
                            <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_book_service", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                <i class=\"icon-calendar\"></i> Book Appointment
                            </a>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 50
        if (!$context['_iterated']) {
            // line 51
            yield "                    <div class=\"alert alert-info\">
                        <h4><i class=\"icon-info-circle\"></i> No Services Available</h4>
                        <p>Currently, there are no active services available for booking. Please contact us directly for assistance.</p>
                        <a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contacts");
            yield "\" class=\"btn btn-primary\">Contact Us</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "            </div>

            <div class=\"appointment-options\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-search\"></i> Other Options</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"option-buttons\">
                            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_book");
        yield "\" class=\"btn btn-info\">
                                <i class=\"icon-edit\"></i> Book General Appointment
                            </a>
                            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_appointments");
        yield "\" class=\"btn btn-warning\">
                                <i class=\"icon-list\"></i> View My Appointments
                            </a>
                            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"icon-hospital\"></i> Browse All Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.service-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 1.5rem;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.service-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.service-header h3 {
    color: #2c3e50;
    margin: 0;
    font-size: 1.3rem;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.service-info {
    margin-bottom: 1.5rem;
}

.service-info p {
    margin: 0.5rem 0;
    color: #666;
}

.service-info i {
    color: #667eea;
    margin-right: 0.5rem;
    width: 16px;
}

.service-description {
    font-style: italic;
    color: #777;
}

.service-actions {
    display: flex;
    gap: 0.5rem;
}

.appointment-options {
    margin-top: 3rem;
}

.option-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.option-buttons .btn {
    flex: 1;
    min-width: 200px;
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .service-actions {
        flex-direction: column;
    }
    
    .option-buttons {
        flex-direction: column;
    }
    
    .option-buttons .btn {
        width: 100%;
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
        return "appointment/index.html.twig";
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
        return array (  209 => 72,  203 => 69,  197 => 66,  186 => 57,  177 => 54,  172 => 51,  170 => 50,  160 => 45,  154 => 42,  149 => 39,  140 => 37,  137 => 36,  131 => 34,  129 => 33,  125 => 32,  118 => 28,  114 => 27,  110 => 25,  105 => 24,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-calendar\"></i> Book an Appointment</h1>
            <p>Choose a service and schedule your appointment with our medical experts</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_12\">
        <div class=\"content-section\">
            <div class=\"page-header\">
                <h2>Select a Service</h2>
                <p>Choose from our available medical services to book your appointment</p>
            </div>

            <div class=\"services-grid\">
                {% for service in services %}
                    <div class=\"service-card\">
                        <div class=\"service-header\">
                            <h3>{{ service.name }}</h3>
                            <span class=\"speciality-badge\">{{ service.speciality }}</span>
                        </div>
                        
                        <div class=\"service-info\">
                            <p><i class=\"icon-location-arrow\"></i> {{ service.location }}</p>
                            {% if service.price %}
                                <p><i class=\"icon-money\"></i> \${{ service.price }}</p>
                            {% endif %}
                            {% if service.description %}
                                <p class=\"service-description\">{{ service.description|slice(0, 100) }}{% if service.description|length > 100 %}...{% endif %}</p>
                            {% endif %}
                        </div>

                        <div class=\"service-actions\">
                            <a href=\"{{ path('app_service_show', {'id': service.id}) }}\" class=\"btn btn-secondary btn-sm\">
                                <i class=\"icon-info-circle\"></i> Details
                            </a>
                            <a href=\"{{ path('app_appointment_book_service', {'id': service.id}) }}\" class=\"btn btn-primary\">
                                <i class=\"icon-calendar\"></i> Book Appointment
                            </a>
                        </div>
                    </div>
                {% else %}
                    <div class=\"alert alert-info\">
                        <h4><i class=\"icon-info-circle\"></i> No Services Available</h4>
                        <p>Currently, there are no active services available for booking. Please contact us directly for assistance.</p>
                        <a href=\"{{ path('app_contacts') }}\" class=\"btn btn-primary\">Contact Us</a>
                    </div>
                {% endfor %}
            </div>

            <div class=\"appointment-options\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-search\"></i> Other Options</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"option-buttons\">
                            <a href=\"{{ path('app_appointment_book') }}\" class=\"btn btn-info\">
                                <i class=\"icon-edit\"></i> Book General Appointment
                            </a>
                            <a href=\"{{ path('app_my_appointments') }}\" class=\"btn btn-warning\">
                                <i class=\"icon-list\"></i> View My Appointments
                            </a>
                            <a href=\"{{ path('app_services') }}\" class=\"btn btn-secondary\">
                                <i class=\"icon-hospital\"></i> Browse All Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.service-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 1.5rem;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.service-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.service-header h3 {
    color: #2c3e50;
    margin: 0;
    font-size: 1.3rem;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.service-info {
    margin-bottom: 1.5rem;
}

.service-info p {
    margin: 0.5rem 0;
    color: #666;
}

.service-info i {
    color: #667eea;
    margin-right: 0.5rem;
    width: 16px;
}

.service-description {
    font-style: italic;
    color: #777;
}

.service-actions {
    display: flex;
    gap: 0.5rem;
}

.appointment-options {
    margin-top: 3rem;
}

.option-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.option-buttons .btn {
    flex: 1;
    min-width: 200px;
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .service-actions {
        flex-direction: column;
    }
    
    .option-buttons {
        flex-direction: column;
    }
    
    .option-buttons .btn {
        width: 100%;
    }
}
</style>
{% endblock %}
", "appointment/index.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\appointment\\index.html.twig");
    }
}
