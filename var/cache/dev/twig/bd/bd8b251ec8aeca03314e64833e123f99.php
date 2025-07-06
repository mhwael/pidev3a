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

/* appointment/my_appointments.html.twig */
class __TwigTemplate_8838012310c13331b9cf3c9d36aaf695 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/my_appointments.html.twig"));

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
            <h1><i class=\"icon-search\"></i> My Appointments</h1>
            <p>Search and view your appointment history</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_12\">
        <div class=\"search-section\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-search\"></i> Find Your Appointments</h3>
                </div>
                <div class=\"card-body\">
                    <form method=\"GET\" action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_appointments");
        yield "\">
                        <div class=\"form-group\">
                            <label for=\"email\">Enter your email address to view your appointments:</label>
                            <div class=\"search-input-group\">
                                <input 
                                    type=\"email\" 
                                    id=\"email\" 
                                    name=\"email\" 
                                    value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\" 
                                    class=\"form-control\" 
                                    placeholder=\"your.email@example.com\" 
                                    required
                                >
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"icon-search\"></i> Search Appointments
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 46
        if ((($tmp = (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "            <div class=\"appointments-section\">
                ";
            // line 48
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 48, $this->source); })())) > 0)) {
                // line 49
                yield "                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3><i class=\"icon-calendar\"></i> Your Appointments (";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 51, $this->source); })())), "html", null, true);
                yield ")</h3>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"appointments-grid\">
                                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 55, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
                    // line 56
                    yield "                                    <div class=\"appointment-card\">
                                        <div class=\"appointment-header\">
                                            <div class=\"appointment-service\">
                                                <h4>";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "service", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
                    yield "</h4>
                                                <span class=\"speciality-badge\">";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "service", [], "any", false, false, false, 60), "speciality", [], "any", false, false, false, 60), "html", null, true);
                    yield "</span>
                                            </div>
                                            <span class=\"status-badge ";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statusBadgeClass", [], "any", false, false, false, 62), "html", null, true);
                    yield "\">
                                                ";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 63)), "html", null, true);
                    yield "
                                            </span>
                                        </div>
                                        
                                        <div class=\"appointment-details\">
                                            <div class=\"detail-item\">
                                                <i class=\"icon-calendar\"></i>
                                                <span>";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "formattedDate", [], "any", false, false, false, 70), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div class=\"detail-item\">
                                                <i class=\"icon-clock-o\"></i>
                                                <span>";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "formattedTime", [], "any", false, false, false, 74), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div class=\"detail-item\">
                                                <i class=\"icon-map-marker\"></i>
                                                <span>";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "service", [], "any", false, false, false, 78), "location", [], "any", false, false, false, 78), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div class=\"detail-item\">
                                                <i class=\"icon-hashtag\"></i>
                                                <span>#APT";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 82), 0, "", ""), "html", null, true);
                    yield "</span>
                                            </div>
                                        </div>
                                        
                                        <div class=\"appointment-actions\">
                                            <a href=\"";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                    yield "\" class=\"btn btn-info btn-sm\">
                                                <i class=\"icon-eye\"></i> View Details
                                            </a>
                                            <a href=\"";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                    yield "\" class=\"btn btn-secondary btn-sm\" target=\"_blank\">
                                                <i class=\"icon-download\"></i> Download PDF
                                            </a>
                                            ";
                    // line 93
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 93) == "pending")) {
                        // line 94
                        yield "                                                <span class=\"text-muted\">
                                                    <i class=\"icon-clock-o\"></i> Awaiting confirmation
                                                </span>
                                            ";
                    }
                    // line 98
                    yield "                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['appointment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                yield "                            </div>
                        </div>
                    </div>
                ";
            } else {
                // line 105
                yield "                    <div class=\"card\">
                        <div class=\"card-body text-center\">
                            <div class=\"no-appointments\">
                                <i class=\"icon-calendar-o\"></i>
                                <h3>No Appointments Found</h3>
                                <p>We couldn't find any appointments for <strong>";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 110, $this->source); })()), "html", null, true);
                yield "</strong>.</p>
                                <p>Make sure you entered the correct email address, or book your first appointment with us!</p>
                                <a href=\"";
                // line 112
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointments");
                yield "\" class=\"btn btn-primary\">
                                    <i class=\"icon-calendar\"></i> Book Your First Appointment
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 119
            yield "            </div>
        ";
        }
        // line 121
        yield "
        <div class=\"help-section\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-question-circle\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"help-grid\">
                        <div class=\"help-item\">
                            <i class=\"icon-phone\"></i>
                            <div>
                                <h4>Call Us</h4>
                                <p>Contact us at <strong>(555) 123-4567</strong> for appointment assistance.</p>
                            </div>
                        </div>
                        <div class=\"help-item\">
                            <i class=\"icon-envelope\"></i>
                            <div>
                                <h4>Email Support</h4>
                                <p>Send us an email at <strong>appointments@salutem-medical.com</strong></p>
                            </div>
                        </div>
                        <div class=\"help-item\">
                            <i class=\"icon-calendar\"></i>
                            <div>
                                <h4>Book New Appointment</h4>
                                <p><a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointments");
        yield "\" class=\"btn btn-primary btn-sm\">Book Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.search-section {
    margin: 2rem 0;
}

.search-input-group {
    display: flex;
    gap: 1rem;
    align-items: flex-end;
}

.search-input-group .form-control {
    flex: 1;
}

.appointments-section {
    margin: 2rem 0;
}

.appointments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 1.5rem;
}

.appointment-card {
    background: white;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.appointment-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.appointment-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #f1f3f4;
}

.appointment-service h4 {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
}

.appointment-details {
    margin: 1rem 0;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: #666;
}

.detail-item i {
    color: #667eea;
    width: 16px;
}

.appointment-actions {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #f1f3f4;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.text-muted {
    color: #666;
    font-size: 0.9rem;
}

.no-appointments {
    padding: 3rem 2rem;
}

.no-appointments i {
    font-size: 4rem;
    color: #ccc;
    margin-bottom: 1rem;
}

.help-section {
    margin: 3rem 0;
}

.help-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.help-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.help-item i {
    font-size: 2rem;
    color: #667eea;
}

.help-item h4 {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
}

.help-item p {
    margin: 0;
    color: #666;
}

@media (max-width: 768px) {
    .search-input-group {
        flex-direction: column;
        gap: 1rem;
    }
    
    .appointments-grid {
        grid-template-columns: 1fr;
    }
    
    .appointment-header {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .appointment-actions {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .help-grid {
        grid-template-columns: 1fr;
    }
    
    .help-item {
        flex-direction: column;
        text-align: center;
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
        return "appointment/my_appointments.html.twig";
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
        return array (  300 => 147,  272 => 121,  268 => 119,  258 => 112,  253 => 110,  246 => 105,  240 => 101,  232 => 98,  226 => 94,  224 => 93,  218 => 90,  212 => 87,  204 => 82,  197 => 78,  190 => 74,  183 => 70,  173 => 63,  169 => 62,  164 => 60,  160 => 59,  155 => 56,  151 => 55,  144 => 51,  140 => 49,  138 => 48,  135 => 47,  133 => 46,  115 => 31,  104 => 23,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-search\"></i> My Appointments</h1>
            <p>Search and view your appointment history</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_12\">
        <div class=\"search-section\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-search\"></i> Find Your Appointments</h3>
                </div>
                <div class=\"card-body\">
                    <form method=\"GET\" action=\"{{ path('app_my_appointments') }}\">
                        <div class=\"form-group\">
                            <label for=\"email\">Enter your email address to view your appointments:</label>
                            <div class=\"search-input-group\">
                                <input 
                                    type=\"email\" 
                                    id=\"email\" 
                                    name=\"email\" 
                                    value=\"{{ email }}\" 
                                    class=\"form-control\" 
                                    placeholder=\"your.email@example.com\" 
                                    required
                                >
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"icon-search\"></i> Search Appointments
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {% if email %}
            <div class=\"appointments-section\">
                {% if appointments|length > 0 %}
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3><i class=\"icon-calendar\"></i> Your Appointments ({{ appointments|length }})</h3>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"appointments-grid\">
                                {% for appointment in appointments %}
                                    <div class=\"appointment-card\">
                                        <div class=\"appointment-header\">
                                            <div class=\"appointment-service\">
                                                <h4>{{ appointment.service.name }}</h4>
                                                <span class=\"speciality-badge\">{{ appointment.service.speciality }}</span>
                                            </div>
                                            <span class=\"status-badge {{ appointment.statusBadgeClass }}\">
                                                {{ appointment.status|capitalize }}
                                            </span>
                                        </div>
                                        
                                        <div class=\"appointment-details\">
                                            <div class=\"detail-item\">
                                                <i class=\"icon-calendar\"></i>
                                                <span>{{ appointment.formattedDate }}</span>
                                            </div>
                                            <div class=\"detail-item\">
                                                <i class=\"icon-clock-o\"></i>
                                                <span>{{ appointment.formattedTime }}</span>
                                            </div>
                                            <div class=\"detail-item\">
                                                <i class=\"icon-map-marker\"></i>
                                                <span>{{ appointment.service.location }}</span>
                                            </div>
                                            <div class=\"detail-item\">
                                                <i class=\"icon-hashtag\"></i>
                                                <span>#APT{{ appointment.id|number_format(0, '', '') }}</span>
                                            </div>
                                        </div>
                                        
                                        <div class=\"appointment-actions\">
                                            <a href=\"{{ path('app_appointment_view', {'id': appointment.id}) }}\" class=\"btn btn-info btn-sm\">
                                                <i class=\"icon-eye\"></i> View Details
                                            </a>
                                            <a href=\"{{ path('app_appointment_pdf', {'id': appointment.id}) }}\" class=\"btn btn-secondary btn-sm\" target=\"_blank\">
                                                <i class=\"icon-download\"></i> Download PDF
                                            </a>
                                            {% if appointment.status == 'pending' %}
                                                <span class=\"text-muted\">
                                                    <i class=\"icon-clock-o\"></i> Awaiting confirmation
                                                </span>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"card\">
                        <div class=\"card-body text-center\">
                            <div class=\"no-appointments\">
                                <i class=\"icon-calendar-o\"></i>
                                <h3>No Appointments Found</h3>
                                <p>We couldn't find any appointments for <strong>{{ email }}</strong>.</p>
                                <p>Make sure you entered the correct email address, or book your first appointment with us!</p>
                                <a href=\"{{ path('app_appointments') }}\" class=\"btn btn-primary\">
                                    <i class=\"icon-calendar\"></i> Book Your First Appointment
                                </a>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"help-section\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-question-circle\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"help-grid\">
                        <div class=\"help-item\">
                            <i class=\"icon-phone\"></i>
                            <div>
                                <h4>Call Us</h4>
                                <p>Contact us at <strong>(555) 123-4567</strong> for appointment assistance.</p>
                            </div>
                        </div>
                        <div class=\"help-item\">
                            <i class=\"icon-envelope\"></i>
                            <div>
                                <h4>Email Support</h4>
                                <p>Send us an email at <strong>appointments@salutem-medical.com</strong></p>
                            </div>
                        </div>
                        <div class=\"help-item\">
                            <i class=\"icon-calendar\"></i>
                            <div>
                                <h4>Book New Appointment</h4>
                                <p><a href=\"{{ path('app_appointments') }}\" class=\"btn btn-primary btn-sm\">Book Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.search-section {
    margin: 2rem 0;
}

.search-input-group {
    display: flex;
    gap: 1rem;
    align-items: flex-end;
}

.search-input-group .form-control {
    flex: 1;
}

.appointments-section {
    margin: 2rem 0;
}

.appointments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 1.5rem;
}

.appointment-card {
    background: white;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.appointment-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.appointment-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #f1f3f4;
}

.appointment-service h4 {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
}

.appointment-details {
    margin: 1rem 0;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: #666;
}

.detail-item i {
    color: #667eea;
    width: 16px;
}

.appointment-actions {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #f1f3f4;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.text-muted {
    color: #666;
    font-size: 0.9rem;
}

.no-appointments {
    padding: 3rem 2rem;
}

.no-appointments i {
    font-size: 4rem;
    color: #ccc;
    margin-bottom: 1rem;
}

.help-section {
    margin: 3rem 0;
}

.help-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.help-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.help-item i {
    font-size: 2rem;
    color: #667eea;
}

.help-item h4 {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
}

.help-item p {
    margin: 0;
    color: #666;
}

@media (max-width: 768px) {
    .search-input-group {
        flex-direction: column;
        gap: 1rem;
    }
    
    .appointments-grid {
        grid-template-columns: 1fr;
    }
    
    .appointment-header {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .appointment-actions {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .help-grid {
        grid-template-columns: 1fr;
    }
    
    .help-item {
        flex-direction: column;
        text-align: center;
    }
}
</style>
{% endblock %}
", "appointment/my_appointments.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\appointment\\my_appointments.html.twig");
    }
}
