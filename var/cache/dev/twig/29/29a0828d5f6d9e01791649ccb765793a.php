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

/* appointment/view.html.twig */
class __TwigTemplate_d147518d73aa9bf0e2df8ba9d060b492 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/view.html.twig"));

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
            <h1><i class=\"icon-calendar\"></i> Appointment Details</h1>
            <p>Reference: #APT";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), 0, "", ""), "html", null, true);
        yield "</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"appointment-details-container\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-user\"></i> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 20, $this->source); })()), "patientName", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
                    <span class=\"status-badge ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 21, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
                        ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22)), "html", null, true);
        yield "
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"appointment-info\">
                        <h3><i class=\"icon-calendar\"></i> Appointment Information</h3>
                        
                        <div class=\"info-grid\">
                            <div class=\"info-item\">
                                <strong>Service:</strong>
                                <div class=\"service-info\">
                                    <span class=\"service-name\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 33, $this->source); })()), "service", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "</span>
                                    <span class=\"speciality-badge\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 34, $this->source); })()), "service", [], "any", false, false, false, 34), "speciality", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Date & Time:</strong>
                                <div class=\"datetime-info\">
                                    <span class=\"date-highlight\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 41, $this->source); })()), "formattedDate", [], "any", false, false, false, 41), "html", null, true);
        yield "</span>
                                    <span class=\"time-highlight\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 42, $this->source); })()), "formattedTime", [], "any", false, false, false, 42), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Location:</strong>
                                <span>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 48, $this->source); })()), "service", [], "any", false, false, false, 48), "location", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Patient Name:</strong>
                                <span>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 53, $this->source); })()), "patientName", [], "any", false, false, false, 53), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Email:</strong>
                                <span>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Phone:</strong>
                                <span>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 63, $this->source); })()), "phone", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
                            </div>
                            
                            ";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 66, $this->source); })()), "patientAge", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                            <div class=\"info-item\">
                                <strong>Age:</strong>
                                <span>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 69, $this->source); })()), "patientAge", [], "any", false, false, false, 69), "html", null, true);
            yield "</span>
                            </div>
                            ";
        }
        // line 72
        yield "                            
                            ";
        // line 73
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 73, $this->source); })()), "gender", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "                            <div class=\"info-item\">
                                <strong>Gender:</strong>
                                <span>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 76, $this->source); })()), "gender", [], "any", false, false, false, 76)), "html", null, true);
            yield "</span>
                            </div>
                            ";
        }
        // line 79
        yield "                            
                            <div class=\"info-item\">
                                <strong>Booking Date:</strong>
                                <span>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 82, $this->source); })()), "createdAt", [], "any", false, false, false, 82), "format", ["M d, Y \\a\\t H:i"], "method", false, false, false, 82), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>

                    ";
        // line 87
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 87, $this->source); })()), "medicalHistory", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                    <div class=\"additional-section\">
                        <h3><i class=\"icon-file-medical\"></i> Medical History</h3>
                        <div class=\"content-box\">
                            <p>";
            // line 91
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 91, $this->source); })()), "medicalHistory", [], "any", false, false, false, 91), "html", null, true));
            yield "</p>
                        </div>
                    </div>
                    ";
        }
        // line 95
        yield "
                    ";
        // line 96
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 96, $this->source); })()), "message", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "                    <div class=\"additional-section\">
                        <h3><i class=\"icon-comment\"></i> Additional Message</h3>
                        <div class=\"content-box\">
                            <p>";
            // line 100
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 100, $this->source); })()), "message", [], "any", false, false, false, 100), "html", null, true));
            yield "</p>
                        </div>
                    </div>
                    ";
        }
        // line 104
        yield "                </div>
            </div>

            <div class=\"status-section\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-info-circle\"></i> Status Information</h3>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 113, $this->source); })()), "status", [], "any", false, false, false, 113) == "pending")) {
            // line 114
            yield "                            <div class=\"status-message pending\">
                                <i class=\"icon-clock-o\"></i>
                                <div>
                                    <h4>Awaiting Confirmation</h4>
                                    <p>Your appointment is currently pending confirmation. Our team will contact you within 24 hours at ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 118, $this->source); })()), "phone", [], "any", false, false, false, 118), "html", null, true);
            yield " to confirm the details.</p>
                                </div>
                            </div>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 121
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 121, $this->source); })()), "status", [], "any", false, false, false, 121) == "confirmed")) {
            // line 122
            yield "                            <div class=\"status-message confirmed\">
                                <i class=\"icon-check-circle\"></i>
                                <div>
                                    <h4>Confirmed</h4>
                                    <p>Your appointment has been confirmed! Please arrive 15 minutes before your scheduled time and bring a valid ID and insurance card.</p>
                                </div>
                            </div>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 129
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 129, $this->source); })()), "status", [], "any", false, false, false, 129) == "cancelled")) {
            // line 130
            yield "                            <div class=\"status-message cancelled\">
                                <i class=\"icon-times-circle\"></i>
                                <div>
                                    <h4>Cancelled</h4>
                                    <p>This appointment has been cancelled. If you need to reschedule, please contact us or book a new appointment.</p>
                                </div>
                            </div>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 137
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 137, $this->source); })()), "status", [], "any", false, false, false, 137) == "completed")) {
            // line 138
            yield "                            <div class=\"status-message completed\">
                                <i class=\"icon-check\"></i>
                                <div>
                                    <h4>Completed</h4>
                                    <p>This appointment has been completed. We hope you had a positive experience with our services.</p>
                                </div>
                            </div>
                        ";
        }
        // line 146
        yield "                    </div>
                </div>
            </div>

            <div class=\"action-buttons\">
                <a href=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_appointments", ["email" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 151, $this->source); })()), "email", [], "any", false, false, false, 151)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"icon-arrow-left\"></i> Back to My Appointments
                </a>
                <a href=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154)]), "html", null, true);
        yield "\" class=\"btn btn-info\" target=\"_blank\">
                    <i class=\"icon-download\"></i> Download PDF
                </a>
                <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointments");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"icon-calendar\"></i> Book New Appointment
                </a>
            </div>
        </div>
    </div>

    <div class=\"grid_4\">
        <div class=\"sidebar-info\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-user-md\"></i> Doctor Information</h3>
                </div>
                <div class=\"card-body\">
                    <h4>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 171, $this->source); })()), "service", [], "any", false, false, false, 171), "name", [], "any", false, false, false, 171), "html", null, true);
        yield "</h4>
                    <p><strong>Speciality:</strong> ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 172, $this->source); })()), "service", [], "any", false, false, false, 172), "speciality", [], "any", false, false, false, 172), "html", null, true);
        yield "</p>
                    <p><strong>Location:</strong> ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 173, $this->source); })()), "service", [], "any", false, false, false, 173), "location", [], "any", false, false, false, 173), "html", null, true);
        yield "</p>
                    
                    ";
        // line 175
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 175, $this->source); })()), "service", [], "any", false, false, false, 175), "description", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 176
            yield "                    <div class=\"doctor-description\">
                        <p>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 177, $this->source); })()), "service", [], "any", false, false, false, 177), "description", [], "any", false, false, false, 177), 0, 200), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 177, $this->source); })()), "service", [], "any", false, false, false, 177), "description", [], "any", false, false, false, 177)) > 200)) {
                yield "...";
            }
            yield "</p>
                        <a href=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 178, $this->source); })()), "service", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                            <i class=\"icon-info-circle\"></i> Full Profile
                        </a>
                    </div>
                    ";
        }
        // line 183
        yield "                    
                    ";
        // line 184
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 184, $this->source); })()), "service", [], "any", false, false, false, 184), "phone", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "                    <div class=\"contact-info\">
                        <p><i class=\"icon-phone\"></i> <strong>Direct Phone:</strong><br>";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 186, $this->source); })()), "service", [], "any", false, false, false, 186), "phone", [], "any", false, false, false, 186), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 189
        yield "                    
                    ";
        // line 190
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 190, $this->source); })()), "service", [], "any", false, false, false, 190), "email", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 191
            yield "                    <div class=\"contact-info\">
                        <p><i class=\"icon-envelope\"></i> <strong>Direct Email:</strong><br>";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 192, $this->source); })()), "service", [], "any", false, false, false, 192), "email", [], "any", false, false, false, 192), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 195
        yield "                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-question-circle\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <p>If you have questions about your appointment:</p>
                    
                    <div class=\"help-options\">
                        <div class=\"help-option\">
                            <i class=\"icon-phone\"></i>
                            <div>
                                <strong>Call Us</strong><br>
                                <a href=\"tel:+15551234567\">(555) 123-4567</a>
                            </div>
                        </div>
                        
                        <div class=\"help-option\">
                            <i class=\"icon-envelope\"></i>
                            <div>
                                <strong>Email Support</strong><br>
                                <a href=\"mailto:appointments@salutem-medical.com\">appointments@salutem-medical.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contacts");
        yield "\" class=\"btn btn-info btn-sm\">
                        <i class=\"icon-envelope\"></i> Contact Form
                    </a>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-info-circle\"></i> Important Notes</h3>
                </div>
                <div class=\"card-body\">
                    <ul class=\"notes-list\">
                        <li><i class=\"icon-clock-o\"></i> Arrive 15 minutes early</li>
                        <li><i class=\"icon-id-card\"></i> Bring valid ID and insurance card</li>
                        <li><i class=\"icon-phone\"></i> Call if you need to reschedule</li>
                        <li><i class=\"icon-calendar\"></i> Cancel at least 24 hours in advance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.appointment-details-container {
    margin: 2rem 0;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.status-badge {
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
}

.appointment-info {
    margin-bottom: 2rem;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.info-item {
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 4px solid #667eea;
}

.info-item strong {
    display: block;
    color: #2c3e50;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.service-info {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.service-name {
    font-weight: 600;
    color: #2c3e50;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    align-self: flex-start;
}

.datetime-info {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.date-highlight {
    color: #667eea;
    font-weight: 600;
    font-size: 1.1rem;
}

.time-highlight {
    color: #28a745;
    font-weight: 600;
    font-size: 1.1rem;
}

.additional-section {
    margin: 2rem 0;
}

.additional-section h3 {
    color: #2c3e50;
    margin-bottom: 1rem;
}

.content-box {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #17a2b8;
}

.status-section {
    margin: 2rem 0;
}

.status-message {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.5rem;
    border-radius: 8px;
}

.status-message.pending {
    background: linear-gradient(135deg, rgba(255,193,7,0.1) 0%, rgba(253,126,20,0.1) 100%);
    border-left: 4px solid #ffc107;
}

.status-message.confirmed {
    background: linear-gradient(135deg, rgba(40,167,69,0.1) 0%, rgba(32,201,151,0.1) 100%);
    border-left: 4px solid #28a745;
}

.status-message.cancelled {
    background: linear-gradient(135deg, rgba(220,53,69,0.1) 0%, rgba(253,126,20,0.1) 100%);
    border-left: 4px solid #dc3545;
}

.status-message.completed {
    background: linear-gradient(135deg, rgba(23,162,184,0.1) 0%, rgba(111,66,193,0.1) 100%);
    border-left: 4px solid #17a2b8;
}

.status-message i {
    font-size: 2rem;
    margin-top: 0.5rem;
}

.status-message.pending i { color: #ffc107; }
.status-message.confirmed i { color: #28a745; }
.status-message.cancelled i { color: #dc3545; }
.status-message.completed i { color: #17a2b8; }

.status-message h4 {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
}

.status-message p {
    margin: 0;
    color: #666;
    line-height: 1.6;
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

.doctor-description {
    margin: 1rem 0;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.contact-info {
    margin: 1rem 0;
}

.contact-info i {
    color: #667eea;
    margin-right: 0.5rem;
}

.help-options {
    margin: 1rem 0;
}

.help-option {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.help-option i {
    color: #667eea;
    font-size: 1.2rem;
}

.notes-list {
    list-style: none;
    padding: 0;
}

.notes-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f1f3f4;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.notes-list li:last-child {
    border-bottom: none;
}

.notes-list i {
    color: #667eea;
    width: 16px;
}

@media (max-width: 768px) {
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .card-header {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .help-option {
        flex-direction: column;
        text-align: center;
    }
    
    .status-message {
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
        return "appointment/view.html.twig";
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
        return array (  440 => 223,  410 => 195,  404 => 192,  401 => 191,  399 => 190,  396 => 189,  390 => 186,  387 => 185,  385 => 184,  382 => 183,  374 => 178,  367 => 177,  364 => 176,  362 => 175,  357 => 173,  353 => 172,  349 => 171,  332 => 157,  326 => 154,  320 => 151,  313 => 146,  303 => 138,  301 => 137,  292 => 130,  290 => 129,  281 => 122,  279 => 121,  273 => 118,  267 => 114,  265 => 113,  254 => 104,  247 => 100,  242 => 97,  240 => 96,  237 => 95,  230 => 91,  225 => 88,  223 => 87,  215 => 82,  210 => 79,  204 => 76,  200 => 74,  198 => 73,  195 => 72,  189 => 69,  185 => 67,  183 => 66,  177 => 63,  169 => 58,  161 => 53,  153 => 48,  144 => 42,  140 => 41,  130 => 34,  126 => 33,  112 => 22,  108 => 21,  104 => 20,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-calendar\"></i> Appointment Details</h1>
            <p>Reference: #APT{{ appointment.id|number_format(0, '', '') }}</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"appointment-details-container\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-user\"></i> {{ appointment.patientName }}</h2>
                    <span class=\"status-badge {{ appointment.statusBadgeClass }}\">
                        {{ appointment.status|capitalize }}
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"appointment-info\">
                        <h3><i class=\"icon-calendar\"></i> Appointment Information</h3>
                        
                        <div class=\"info-grid\">
                            <div class=\"info-item\">
                                <strong>Service:</strong>
                                <div class=\"service-info\">
                                    <span class=\"service-name\">{{ appointment.service.name }}</span>
                                    <span class=\"speciality-badge\">{{ appointment.service.speciality }}</span>
                                </div>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Date & Time:</strong>
                                <div class=\"datetime-info\">
                                    <span class=\"date-highlight\">{{ appointment.formattedDate }}</span>
                                    <span class=\"time-highlight\">{{ appointment.formattedTime }}</span>
                                </div>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Location:</strong>
                                <span>{{ appointment.service.location }}</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Patient Name:</strong>
                                <span>{{ appointment.patientName }}</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Email:</strong>
                                <span>{{ appointment.email }}</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <strong>Phone:</strong>
                                <span>{{ appointment.phone }}</span>
                            </div>
                            
                            {% if appointment.patientAge %}
                            <div class=\"info-item\">
                                <strong>Age:</strong>
                                <span>{{ appointment.patientAge }}</span>
                            </div>
                            {% endif %}
                            
                            {% if appointment.gender %}
                            <div class=\"info-item\">
                                <strong>Gender:</strong>
                                <span>{{ appointment.gender|capitalize }}</span>
                            </div>
                            {% endif %}
                            
                            <div class=\"info-item\">
                                <strong>Booking Date:</strong>
                                <span>{{ appointment.createdAt.format('M d, Y \\\\a\\\\t H:i') }}</span>
                            </div>
                        </div>
                    </div>

                    {% if appointment.medicalHistory %}
                    <div class=\"additional-section\">
                        <h3><i class=\"icon-file-medical\"></i> Medical History</h3>
                        <div class=\"content-box\">
                            <p>{{ appointment.medicalHistory|nl2br }}</p>
                        </div>
                    </div>
                    {% endif %}

                    {% if appointment.message %}
                    <div class=\"additional-section\">
                        <h3><i class=\"icon-comment\"></i> Additional Message</h3>
                        <div class=\"content-box\">
                            <p>{{ appointment.message|nl2br }}</p>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"status-section\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-info-circle\"></i> Status Information</h3>
                    </div>
                    <div class=\"card-body\">
                        {% if appointment.status == 'pending' %}
                            <div class=\"status-message pending\">
                                <i class=\"icon-clock-o\"></i>
                                <div>
                                    <h4>Awaiting Confirmation</h4>
                                    <p>Your appointment is currently pending confirmation. Our team will contact you within 24 hours at {{ appointment.phone }} to confirm the details.</p>
                                </div>
                            </div>
                        {% elseif appointment.status == 'confirmed' %}
                            <div class=\"status-message confirmed\">
                                <i class=\"icon-check-circle\"></i>
                                <div>
                                    <h4>Confirmed</h4>
                                    <p>Your appointment has been confirmed! Please arrive 15 minutes before your scheduled time and bring a valid ID and insurance card.</p>
                                </div>
                            </div>
                        {% elseif appointment.status == 'cancelled' %}
                            <div class=\"status-message cancelled\">
                                <i class=\"icon-times-circle\"></i>
                                <div>
                                    <h4>Cancelled</h4>
                                    <p>This appointment has been cancelled. If you need to reschedule, please contact us or book a new appointment.</p>
                                </div>
                            </div>
                        {% elseif appointment.status == 'completed' %}
                            <div class=\"status-message completed\">
                                <i class=\"icon-check\"></i>
                                <div>
                                    <h4>Completed</h4>
                                    <p>This appointment has been completed. We hope you had a positive experience with our services.</p>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <div class=\"action-buttons\">
                <a href=\"{{ path('app_my_appointments', {'email': appointment.email}) }}\" class=\"btn btn-secondary\">
                    <i class=\"icon-arrow-left\"></i> Back to My Appointments
                </a>
                <a href=\"{{ path('app_appointment_pdf', {'id': appointment.id}) }}\" class=\"btn btn-info\" target=\"_blank\">
                    <i class=\"icon-download\"></i> Download PDF
                </a>
                <a href=\"{{ path('app_appointments') }}\" class=\"btn btn-primary\">
                    <i class=\"icon-calendar\"></i> Book New Appointment
                </a>
            </div>
        </div>
    </div>

    <div class=\"grid_4\">
        <div class=\"sidebar-info\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-user-md\"></i> Doctor Information</h3>
                </div>
                <div class=\"card-body\">
                    <h4>{{ appointment.service.name }}</h4>
                    <p><strong>Speciality:</strong> {{ appointment.service.speciality }}</p>
                    <p><strong>Location:</strong> {{ appointment.service.location }}</p>
                    
                    {% if appointment.service.description %}
                    <div class=\"doctor-description\">
                        <p>{{ appointment.service.description|slice(0, 200) }}{% if appointment.service.description|length > 200 %}...{% endif %}</p>
                        <a href=\"{{ path('app_service_show', {'id': appointment.service.id}) }}\" class=\"btn btn-info btn-sm\">
                            <i class=\"icon-info-circle\"></i> Full Profile
                        </a>
                    </div>
                    {% endif %}
                    
                    {% if appointment.service.phone %}
                    <div class=\"contact-info\">
                        <p><i class=\"icon-phone\"></i> <strong>Direct Phone:</strong><br>{{ appointment.service.phone }}</p>
                    </div>
                    {% endif %}
                    
                    {% if appointment.service.email %}
                    <div class=\"contact-info\">
                        <p><i class=\"icon-envelope\"></i> <strong>Direct Email:</strong><br>{{ appointment.service.email }}</p>
                    </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-question-circle\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <p>If you have questions about your appointment:</p>
                    
                    <div class=\"help-options\">
                        <div class=\"help-option\">
                            <i class=\"icon-phone\"></i>
                            <div>
                                <strong>Call Us</strong><br>
                                <a href=\"tel:+15551234567\">(555) 123-4567</a>
                            </div>
                        </div>
                        
                        <div class=\"help-option\">
                            <i class=\"icon-envelope\"></i>
                            <div>
                                <strong>Email Support</strong><br>
                                <a href=\"mailto:appointments@salutem-medical.com\">appointments@salutem-medical.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <a href=\"{{ path('app_contacts') }}\" class=\"btn btn-info btn-sm\">
                        <i class=\"icon-envelope\"></i> Contact Form
                    </a>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-info-circle\"></i> Important Notes</h3>
                </div>
                <div class=\"card-body\">
                    <ul class=\"notes-list\">
                        <li><i class=\"icon-clock-o\"></i> Arrive 15 minutes early</li>
                        <li><i class=\"icon-id-card\"></i> Bring valid ID and insurance card</li>
                        <li><i class=\"icon-phone\"></i> Call if you need to reschedule</li>
                        <li><i class=\"icon-calendar\"></i> Cancel at least 24 hours in advance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.appointment-details-container {
    margin: 2rem 0;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.status-badge {
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
}

.appointment-info {
    margin-bottom: 2rem;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.info-item {
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 4px solid #667eea;
}

.info-item strong {
    display: block;
    color: #2c3e50;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.service-info {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.service-name {
    font-weight: 600;
    color: #2c3e50;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    align-self: flex-start;
}

.datetime-info {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.date-highlight {
    color: #667eea;
    font-weight: 600;
    font-size: 1.1rem;
}

.time-highlight {
    color: #28a745;
    font-weight: 600;
    font-size: 1.1rem;
}

.additional-section {
    margin: 2rem 0;
}

.additional-section h3 {
    color: #2c3e50;
    margin-bottom: 1rem;
}

.content-box {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #17a2b8;
}

.status-section {
    margin: 2rem 0;
}

.status-message {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.5rem;
    border-radius: 8px;
}

.status-message.pending {
    background: linear-gradient(135deg, rgba(255,193,7,0.1) 0%, rgba(253,126,20,0.1) 100%);
    border-left: 4px solid #ffc107;
}

.status-message.confirmed {
    background: linear-gradient(135deg, rgba(40,167,69,0.1) 0%, rgba(32,201,151,0.1) 100%);
    border-left: 4px solid #28a745;
}

.status-message.cancelled {
    background: linear-gradient(135deg, rgba(220,53,69,0.1) 0%, rgba(253,126,20,0.1) 100%);
    border-left: 4px solid #dc3545;
}

.status-message.completed {
    background: linear-gradient(135deg, rgba(23,162,184,0.1) 0%, rgba(111,66,193,0.1) 100%);
    border-left: 4px solid #17a2b8;
}

.status-message i {
    font-size: 2rem;
    margin-top: 0.5rem;
}

.status-message.pending i { color: #ffc107; }
.status-message.confirmed i { color: #28a745; }
.status-message.cancelled i { color: #dc3545; }
.status-message.completed i { color: #17a2b8; }

.status-message h4 {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
}

.status-message p {
    margin: 0;
    color: #666;
    line-height: 1.6;
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

.doctor-description {
    margin: 1rem 0;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.contact-info {
    margin: 1rem 0;
}

.contact-info i {
    color: #667eea;
    margin-right: 0.5rem;
}

.help-options {
    margin: 1rem 0;
}

.help-option {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.help-option i {
    color: #667eea;
    font-size: 1.2rem;
}

.notes-list {
    list-style: none;
    padding: 0;
}

.notes-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f1f3f4;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.notes-list li:last-child {
    border-bottom: none;
}

.notes-list i {
    color: #667eea;
    width: 16px;
}

@media (max-width: 768px) {
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .card-header {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .help-option {
        flex-direction: column;
        text-align: center;
    }
    
    .status-message {
        flex-direction: column;
        text-align: center;
    }
}
</style>
{% endblock %}
", "appointment/view.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\appointment\\view.html.twig");
    }
}
