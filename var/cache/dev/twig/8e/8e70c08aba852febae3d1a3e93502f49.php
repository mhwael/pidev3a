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

/* appointment/success.html.twig */
class __TwigTemplate_a02bc29a662c0d5b42006e00088ee85d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/success.html.twig"));

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
            <h1><i class=\"icon-check-circle\"></i> Appointment Confirmed!</h1>
            <p>Your appointment has been successfully booked</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"success-container\">
            <div class=\"card success-card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-calendar\"></i> Appointment Details</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"success-message\">
                        <div class=\"success-icon\">
                            <i class=\"icon-check-circle\"></i>
                        </div>
                        <h3>Thank you, ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 27, $this->source); })()), "patientName", [], "any", false, false, false, 27), "html", null, true);
        yield "!</h3>
                        <p>Your appointment has been successfully booked. We will contact you at ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 28, $this->source); })()), "phone", [], "any", false, false, false, 28), "html", null, true);
        yield " to confirm the details.</p>
                    </div>

                    <div class=\"appointment-summary\">
                        <h4>Appointment Summary</h4>
                        
                        <div class=\"summary-grid\">
                            <div class=\"summary-item\">
                                <strong>Service:</strong>
                                <span>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 37, $this->source); })()), "service", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Speciality:</strong>
                                <span class=\"speciality-badge\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 42, $this->source); })()), "service", [], "any", false, false, false, 42), "speciality", [], "any", false, false, false, 42), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Patient:</strong>
                                <span>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 47, $this->source); })()), "patientName", [], "any", false, false, false, 47), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Email:</strong>
                                <span>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Phone:</strong>
                                <span>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 57, $this->source); })()), "phone", [], "any", false, false, false, 57), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Preferred Date:</strong>
                                <span class=\"date-highlight\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 62, $this->source); })()), "formattedDate", [], "any", false, false, false, 62), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Preferred Time:</strong>
                                <span class=\"time-highlight\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 67, $this->source); })()), "formattedTime", [], "any", false, false, false, 67), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Status:</strong>
                                <span class=\"status-badge ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 72, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 72), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 72, $this->source); })()), "status", [], "any", false, false, false, 72)), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Booking Reference:</strong>
                                <span class=\"reference-code\">#APT";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), 0, "", ""), "html", null, true);
        yield "</span>
                            </div>
                            
                            ";
        // line 80
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 80, $this->source); })()), "patientAge", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "                            <div class=\"summary-item\">
                                <strong>Patient Age:</strong>
                                <span>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 83, $this->source); })()), "patientAge", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
                            </div>
                            ";
        }
        // line 86
        yield "                            
                            ";
        // line 87
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 87, $this->source); })()), "gender", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                            <div class=\"summary-item\">
                                <strong>Gender:</strong>
                                <span>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 90, $this->source); })()), "gender", [], "any", false, false, false, 90)), "html", null, true);
            yield "</span>
                            </div>
                            ";
        }
        // line 93
        yield "                        </div>

                        ";
        // line 95
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 95, $this->source); })()), "medicalHistory", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                        <div class=\"additional-info\">
                            <h5>Medical History:</h5>
                            <p>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 98, $this->source); })()), "medicalHistory", [], "any", false, false, false, 98), "html", null, true);
            yield "</p>
                        </div>
                        ";
        }
        // line 101
        yield "
                        ";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 102, $this->source); })()), "message", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                        <div class=\"additional-info\">
                            <h5>Additional Message:</h5>
                            <p>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 105, $this->source); })()), "message", [], "any", false, false, false, 105), "html", null, true);
            yield "</p>
                        </div>
                        ";
        }
        // line 108
        yield "                    </div>
                </div>
            </div>

            <div class=\"next-steps\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-list-ol\"></i> What's Next?</h3>
                    </div>
                    <div class=\"card-body\">
                        <ol class=\"steps-list\">
                            <li>
                                <strong>Confirmation Call:</strong> 
                                Our team will contact you within 24 hours to confirm your appointment.
                            </li>
                            <li>
                                <strong>Email Confirmation:</strong> 
                                You will receive an email confirmation with all the details.
                            </li>
                            <li>
                                <strong>Preparation:</strong> 
                                Please bring a valid ID and your insurance card to the appointment.
                            </li>
                            <li>
                                <strong>Arrival:</strong> 
                                Please arrive 15 minutes before your scheduled time.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class=\"action-buttons\">
                <a href=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"icon-eye\"></i> View Full Details
                </a>
                <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointments");
        yield "\" class=\"btn btn-success\">
                    <i class=\"icon-calendar\"></i> Book Another Appointment
                </a>
                <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"icon-home\"></i> Back to Home
                </a>
            </div>
        </div>
    </div>

    <div class=\"grid_4\">
        <div class=\"sidebar-info\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-phone\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <p>If you have any questions about your appointment:</p>
                    
                    <div class=\"contact-methods\">
                        <div class=\"contact-item\">
                            <i class=\"icon-phone\"></i>
                            <div>
                                <strong>Call Us:</strong>
                                <br>(555) 123-4567
                            </div>
                        </div>
                        
                        <div class=\"contact-item\">
                            <i class=\"icon-envelope\"></i>
                            <div>
                                <strong>Email:</strong>
                                <br>appointments@salutem-medical.com
                            </div>
                        </div>
                    </div>
                    
                    <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contacts");
        yield "\" class=\"btn btn-info btn-sm\">Contact Form</a>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-user-md\"></i> Doctor Information</h3>
                </div>
                <div class=\"card-body\">
                    <h4>";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 190, $this->source); })()), "service", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
        yield "</h4>
                    <p><strong>Speciality:</strong> ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 191, $this->source); })()), "service", [], "any", false, false, false, 191), "speciality", [], "any", false, false, false, 191), "html", null, true);
        yield "</p>
                    <p><strong>Location:</strong> ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 192, $this->source); })()), "service", [], "any", false, false, false, 192), "location", [], "any", false, false, false, 192), "html", null, true);
        yield "</p>
                    
                    ";
        // line 194
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 194, $this->source); })()), "service", [], "any", false, false, false, 194), "phone", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "                    <p><strong>Direct Phone:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 195, $this->source); })()), "service", [], "any", false, false, false, 195), "phone", [], "any", false, false, false, 195), "html", null, true);
            yield "</p>
                    ";
        }
        // line 197
        yield "                    
                    ";
        // line 198
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 198, $this->source); })()), "service", [], "any", false, false, false, 198), "email", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 199
            yield "                    <p><strong>Direct Email:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 199, $this->source); })()), "service", [], "any", false, false, false, 199), "email", [], "any", false, false, false, 199), "html", null, true);
            yield "</p>
                    ";
        }
        // line 201
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<style>
.success-container {
    margin: 2rem 0;
}

.success-card {
    border-left: 5px solid #28a745;
}

.success-message {
    text-align: center;
    margin-bottom: 2rem;
    padding: 2rem;
    background: linear-gradient(135deg, rgba(40,167,69,0.1) 0%, rgba(32,201,151,0.1) 100%);
    border-radius: 10px;
}

.success-icon {
    font-size: 4rem;
    color: #28a745;
    margin-bottom: 1rem;
}

.success-message h3 {
    color: #155724;
    margin-bottom: 1rem;
}

.appointment-summary {
    margin-top: 2rem;
}

.summary-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 1.5rem 0;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

.summary-item strong {
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

.date-highlight {
    color: #667eea;
    font-weight: 600;
}

.time-highlight {
    color: #28a745;
    font-weight: 600;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.reference-code {
    font-family: monospace;
    background: #e9ecef;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-weight: 600;
}

.additional-info {
    margin-top: 1.5rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 3px solid #17a2b8;
}

.additional-info h5 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.next-steps {
    margin: 2rem 0;
}

.steps-list {
    counter-reset: step-counter;
}

.steps-list li {
    counter-increment: step-counter;
    margin-bottom: 1rem;
    padding-left: 2rem;
    position: relative;
}

.steps-list li::before {
    content: counter(step-counter);
    position: absolute;
    left: 0;
    top: 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: 600;
}

.action-buttons {
    margin: 2rem 0;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.sidebar-info {
    margin: 2rem 0;
}

.contact-methods {
    margin: 1rem 0;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.contact-item i {
    color: #667eea;
    font-size: 1.2rem;
}

@media (max-width: 768px) {
    .summary-grid {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .action-buttons .btn {
        width: 100%;
    }
    
    .summary-item {
        flex-direction: column;
        gap: 0.5rem;
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
        return "appointment/success.html.twig";
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
        return array (  382 => 201,  376 => 199,  374 => 198,  371 => 197,  365 => 195,  363 => 194,  358 => 192,  354 => 191,  350 => 190,  338 => 181,  301 => 147,  295 => 144,  289 => 141,  254 => 108,  248 => 105,  244 => 103,  242 => 102,  239 => 101,  233 => 98,  229 => 96,  227 => 95,  223 => 93,  217 => 90,  213 => 88,  211 => 87,  208 => 86,  202 => 83,  198 => 81,  196 => 80,  190 => 77,  180 => 72,  172 => 67,  164 => 62,  156 => 57,  148 => 52,  140 => 47,  132 => 42,  124 => 37,  112 => 28,  108 => 27,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-check-circle\"></i> Appointment Confirmed!</h1>
            <p>Your appointment has been successfully booked</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"success-container\">
            <div class=\"card success-card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-calendar\"></i> Appointment Details</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"success-message\">
                        <div class=\"success-icon\">
                            <i class=\"icon-check-circle\"></i>
                        </div>
                        <h3>Thank you, {{ appointment.patientName }}!</h3>
                        <p>Your appointment has been successfully booked. We will contact you at {{ appointment.phone }} to confirm the details.</p>
                    </div>

                    <div class=\"appointment-summary\">
                        <h4>Appointment Summary</h4>
                        
                        <div class=\"summary-grid\">
                            <div class=\"summary-item\">
                                <strong>Service:</strong>
                                <span>{{ appointment.service.name }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Speciality:</strong>
                                <span class=\"speciality-badge\">{{ appointment.service.speciality }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Patient:</strong>
                                <span>{{ appointment.patientName }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Email:</strong>
                                <span>{{ appointment.email }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Phone:</strong>
                                <span>{{ appointment.phone }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Preferred Date:</strong>
                                <span class=\"date-highlight\">{{ appointment.formattedDate }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Preferred Time:</strong>
                                <span class=\"time-highlight\">{{ appointment.formattedTime }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Status:</strong>
                                <span class=\"status-badge {{ appointment.statusBadgeClass }}\">{{ appointment.status|capitalize }}</span>
                            </div>
                            
                            <div class=\"summary-item\">
                                <strong>Booking Reference:</strong>
                                <span class=\"reference-code\">#APT{{ appointment.id|number_format(0, '', '') }}</span>
                            </div>
                            
                            {% if appointment.patientAge %}
                            <div class=\"summary-item\">
                                <strong>Patient Age:</strong>
                                <span>{{ appointment.patientAge }}</span>
                            </div>
                            {% endif %}
                            
                            {% if appointment.gender %}
                            <div class=\"summary-item\">
                                <strong>Gender:</strong>
                                <span>{{ appointment.gender|capitalize }}</span>
                            </div>
                            {% endif %}
                        </div>

                        {% if appointment.medicalHistory %}
                        <div class=\"additional-info\">
                            <h5>Medical History:</h5>
                            <p>{{ appointment.medicalHistory }}</p>
                        </div>
                        {% endif %}

                        {% if appointment.message %}
                        <div class=\"additional-info\">
                            <h5>Additional Message:</h5>
                            <p>{{ appointment.message }}</p>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <div class=\"next-steps\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-list-ol\"></i> What's Next?</h3>
                    </div>
                    <div class=\"card-body\">
                        <ol class=\"steps-list\">
                            <li>
                                <strong>Confirmation Call:</strong> 
                                Our team will contact you within 24 hours to confirm your appointment.
                            </li>
                            <li>
                                <strong>Email Confirmation:</strong> 
                                You will receive an email confirmation with all the details.
                            </li>
                            <li>
                                <strong>Preparation:</strong> 
                                Please bring a valid ID and your insurance card to the appointment.
                            </li>
                            <li>
                                <strong>Arrival:</strong> 
                                Please arrive 15 minutes before your scheduled time.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class=\"action-buttons\">
                <a href=\"{{ path('app_appointment_view', {'id': appointment.id}) }}\" class=\"btn btn-primary\">
                    <i class=\"icon-eye\"></i> View Full Details
                </a>
                <a href=\"{{ path('app_appointments') }}\" class=\"btn btn-success\">
                    <i class=\"icon-calendar\"></i> Book Another Appointment
                </a>
                <a href=\"{{ path('app_home') }}\" class=\"btn btn-secondary\">
                    <i class=\"icon-home\"></i> Back to Home
                </a>
            </div>
        </div>
    </div>

    <div class=\"grid_4\">
        <div class=\"sidebar-info\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-phone\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <p>If you have any questions about your appointment:</p>
                    
                    <div class=\"contact-methods\">
                        <div class=\"contact-item\">
                            <i class=\"icon-phone\"></i>
                            <div>
                                <strong>Call Us:</strong>
                                <br>(555) 123-4567
                            </div>
                        </div>
                        
                        <div class=\"contact-item\">
                            <i class=\"icon-envelope\"></i>
                            <div>
                                <strong>Email:</strong>
                                <br>appointments@salutem-medical.com
                            </div>
                        </div>
                    </div>
                    
                    <a href=\"{{ path('app_contacts') }}\" class=\"btn btn-info btn-sm\">Contact Form</a>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-user-md\"></i> Doctor Information</h3>
                </div>
                <div class=\"card-body\">
                    <h4>{{ appointment.service.name }}</h4>
                    <p><strong>Speciality:</strong> {{ appointment.service.speciality }}</p>
                    <p><strong>Location:</strong> {{ appointment.service.location }}</p>
                    
                    {% if appointment.service.phone %}
                    <p><strong>Direct Phone:</strong> {{ appointment.service.phone }}</p>
                    {% endif %}
                    
                    {% if appointment.service.email %}
                    <p><strong>Direct Email:</strong> {{ appointment.service.email }}</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.success-container {
    margin: 2rem 0;
}

.success-card {
    border-left: 5px solid #28a745;
}

.success-message {
    text-align: center;
    margin-bottom: 2rem;
    padding: 2rem;
    background: linear-gradient(135deg, rgba(40,167,69,0.1) 0%, rgba(32,201,151,0.1) 100%);
    border-radius: 10px;
}

.success-icon {
    font-size: 4rem;
    color: #28a745;
    margin-bottom: 1rem;
}

.success-message h3 {
    color: #155724;
    margin-bottom: 1rem;
}

.appointment-summary {
    margin-top: 2rem;
}

.summary-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 1.5rem 0;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

.summary-item strong {
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

.date-highlight {
    color: #667eea;
    font-weight: 600;
}

.time-highlight {
    color: #28a745;
    font-weight: 600;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.reference-code {
    font-family: monospace;
    background: #e9ecef;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-weight: 600;
}

.additional-info {
    margin-top: 1.5rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 3px solid #17a2b8;
}

.additional-info h5 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.next-steps {
    margin: 2rem 0;
}

.steps-list {
    counter-reset: step-counter;
}

.steps-list li {
    counter-increment: step-counter;
    margin-bottom: 1rem;
    padding-left: 2rem;
    position: relative;
}

.steps-list li::before {
    content: counter(step-counter);
    position: absolute;
    left: 0;
    top: 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: 600;
}

.action-buttons {
    margin: 2rem 0;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.sidebar-info {
    margin: 2rem 0;
}

.contact-methods {
    margin: 1rem 0;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.contact-item i {
    color: #667eea;
    font-size: 1.2rem;
}

@media (max-width: 768px) {
    .summary-grid {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .action-buttons .btn {
        width: 100%;
    }
    
    .summary-item {
        flex-direction: column;
        gap: 0.5rem;
    }
}
</style>
{% endblock %}
", "appointment/success.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\appointment\\success.html.twig");
    }
}
