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

/* emails/appointment_admin_notification.html.twig */
class __TwigTemplate_f6e43a53d7c4038069602f94ac175b35 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/appointment_admin_notification.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>New Appointment Booking - Admin Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 1.8rem;
        }
        .content {
            padding: 2rem;
        }
        .appointment-details {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            border-left: 4px solid #dc3545;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e9ecef;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: bold;
            color: #2c3e50;
        }
        .urgent {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }
        .urgent h4 {
            color: #856404;
            margin: 0 0 0.5rem 0;
        }
        .status-badge {
            background: #ffc107;
            color: #212529;
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
        .footer {
            background: #2c3e50;
            color: white;
            padding: 1.5rem;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 0.5rem;
        }
        .action-buttons {
            text-align: center;
            margin: 2rem 0;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🚨 New Appointment Booking</h1>
            <p>Admin Notification - Salutem Medical Center</p>
        </div>
        
        <div class=\"content\">
            <div class=\"urgent\">
                <h4>⚡ Action Required</h4>
                <p>A new appointment has been booked and requires your attention for confirmation.</p>
            </div>
            
            <h2>📋 Appointment Details</h2>
            
            <div class=\"appointment-details\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Reference ID:</span>
                    <span class=\"reference-code\">#APT";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124), 0, "", ""), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Patient Name:</span>
                    <span><strong>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 129, $this->source); })()), "patientName", [], "any", false, false, false, 129), "html", null, true);
        yield "</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Email:</span>
                    <span>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 134, $this->source); })()), "email", [], "any", false, false, false, 134), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Phone:</span>
                    <span><strong>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 139, $this->source); })()), "phone", [], "any", false, false, false, 139), "html", null, true);
        yield "</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Service Requested:</span>
                    <span><strong>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 144, $this->source); })()), "service", [], "any", false, false, false, 144), "name", [], "any", false, false, false, 144), "html", null, true);
        yield "</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Speciality:</span>
                    <span>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 149, $this->source); })()), "service", [], "any", false, false, false, 149), "speciality", [], "any", false, false, false, 149), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Location:</span>
                    <span>";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 154, $this->source); })()), "service", [], "any", false, false, false, 154), "location", [], "any", false, false, false, 154), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Date:</span>
                    <span><strong style=\"color: #dc3545;\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 159, $this->source); })()), "formattedDate", [], "any", false, false, false, 159), "html", null, true);
        yield "</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Time:</span>
                    <span><strong style=\"color: #dc3545;\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 164, $this->source); })()), "formattedTime", [], "any", false, false, false, 164), "html", null, true);
        yield "</strong></span>
                </div>
                
                ";
        // line 167
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 167, $this->source); })()), "patientAge", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Patient Age:</span>
                    <span>";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 170, $this->source); })()), "patientAge", [], "any", false, false, false, 170), "html", null, true);
            yield "</span>
                </div>
                ";
        }
        // line 173
        yield "                
                ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 174, $this->source); })()), "gender", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                <div class=\"detail-row\">
                    <span class=\"detail-label\">Gender:</span>
                    <span>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 177, $this->source); })()), "gender", [], "any", false, false, false, 177)), "html", null, true);
            yield "</span>
                </div>
                ";
        }
        // line 180
        yield "                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Status:</span>
                    <span class=\"status-badge\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 183, $this->source); })()), "status", [], "any", false, false, false, 183)), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Booked On:</span>
                    <span>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 188, $this->source); })()), "createdAt", [], "any", false, false, false, 188), "format", ["M d, Y \\a\\t H:i"], "method", false, false, false, 188), "html", null, true);
        yield "</span>
                </div>
            </div>
            
            ";
        // line 192
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 192, $this->source); })()), "medicalHistory", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "            <div class=\"appointment-details\">
                <h4>🏥 Medical History</h4>
                <p>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 195, $this->source); })()), "medicalHistory", [], "any", false, false, false, 195), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 198
        yield "            
            ";
        // line 199
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 199, $this->source); })()), "message", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 200
            yield "            <div class=\"appointment-details\">
                <h4>💬 Additional Message</h4>
                <p>";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 202, $this->source); })()), "message", [], "any", false, false, false, 202), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 205
        yield "            
            <h3>📞 Next Steps</h3>
            <ol>
                <li><strong>Contact the patient</strong> at ";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 208, $this->source); })()), "phone", [], "any", false, false, false, 208), "html", null, true);
        yield " within 24 hours</li>
                <li><strong>Confirm availability</strong> for the requested date and time</li>
                <li><strong>Update appointment status</strong> in the admin panel</li>
                <li><strong>Send confirmation</strong> to the patient</li>
            </ol>
            
            <div class=\"action-buttons\">
                <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_service_index");
        yield "\" class=\"btn\">View in Admin Panel</a>
                <a href=\"tel:";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 216, $this->source); })()), "phone", [], "any", false, false, false, 216), "html", null, true);
        yield "\" class=\"btn\">Call Patient</a>
                <a href=\"mailto:";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 217, $this->source); })()), "email", [], "any", false, false, false, 217), "html", null, true);
        yield "\" class=\"btn\">Email Patient</a>
            </div>
            
            <div class=\"urgent\">
                <h4>⏰ Important</h4>
                <p>Please contact the patient as soon as possible to confirm this appointment. The patient is expecting a confirmation call within 24 hours.</p>
            </div>
        </div>
        
        <div class=\"footer\">
            <h4>Salutem Medical Center - Admin Panel</h4>
            <p>This is an automated notification for appointment bookings.</p>
            <p><small>© ";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Salutem Medical Center. All rights reserved.</small></p>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/appointment_admin_notification.html.twig";
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
        return array (  352 => 229,  337 => 217,  333 => 216,  329 => 215,  319 => 208,  314 => 205,  308 => 202,  304 => 200,  302 => 199,  299 => 198,  293 => 195,  289 => 193,  287 => 192,  280 => 188,  272 => 183,  267 => 180,  261 => 177,  257 => 175,  255 => 174,  252 => 173,  246 => 170,  242 => 168,  240 => 167,  234 => 164,  226 => 159,  218 => 154,  210 => 149,  202 => 144,  194 => 139,  186 => 134,  178 => 129,  170 => 124,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>New Appointment Booking - Admin Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 1.8rem;
        }
        .content {
            padding: 2rem;
        }
        .appointment-details {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            border-left: 4px solid #dc3545;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e9ecef;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: bold;
            color: #2c3e50;
        }
        .urgent {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }
        .urgent h4 {
            color: #856404;
            margin: 0 0 0.5rem 0;
        }
        .status-badge {
            background: #ffc107;
            color: #212529;
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
        .footer {
            background: #2c3e50;
            color: white;
            padding: 1.5rem;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 0.5rem;
        }
        .action-buttons {
            text-align: center;
            margin: 2rem 0;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🚨 New Appointment Booking</h1>
            <p>Admin Notification - Salutem Medical Center</p>
        </div>
        
        <div class=\"content\">
            <div class=\"urgent\">
                <h4>⚡ Action Required</h4>
                <p>A new appointment has been booked and requires your attention for confirmation.</p>
            </div>
            
            <h2>📋 Appointment Details</h2>
            
            <div class=\"appointment-details\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Reference ID:</span>
                    <span class=\"reference-code\">#APT{{ appointment.id|number_format(0, '', '') }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Patient Name:</span>
                    <span><strong>{{ appointment.patientName }}</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Email:</span>
                    <span>{{ appointment.email }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Phone:</span>
                    <span><strong>{{ appointment.phone }}</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Service Requested:</span>
                    <span><strong>{{ appointment.service.name }}</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Speciality:</span>
                    <span>{{ appointment.service.speciality }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Location:</span>
                    <span>{{ appointment.service.location }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Date:</span>
                    <span><strong style=\"color: #dc3545;\">{{ appointment.formattedDate }}</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Time:</span>
                    <span><strong style=\"color: #dc3545;\">{{ appointment.formattedTime }}</strong></span>
                </div>
                
                {% if appointment.patientAge %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Patient Age:</span>
                    <span>{{ appointment.patientAge }}</span>
                </div>
                {% endif %}
                
                {% if appointment.gender %}
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Gender:</span>
                    <span>{{ appointment.gender|capitalize }}</span>
                </div>
                {% endif %}
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Status:</span>
                    <span class=\"status-badge\">{{ appointment.status|capitalize }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Booked On:</span>
                    <span>{{ appointment.createdAt.format('M d, Y \\\\a\\\\t H:i') }}</span>
                </div>
            </div>
            
            {% if appointment.medicalHistory %}
            <div class=\"appointment-details\">
                <h4>🏥 Medical History</h4>
                <p>{{ appointment.medicalHistory }}</p>
            </div>
            {% endif %}
            
            {% if appointment.message %}
            <div class=\"appointment-details\">
                <h4>💬 Additional Message</h4>
                <p>{{ appointment.message }}</p>
            </div>
            {% endif %}
            
            <h3>📞 Next Steps</h3>
            <ol>
                <li><strong>Contact the patient</strong> at {{ appointment.phone }} within 24 hours</li>
                <li><strong>Confirm availability</strong> for the requested date and time</li>
                <li><strong>Update appointment status</strong> in the admin panel</li>
                <li><strong>Send confirmation</strong> to the patient</li>
            </ol>
            
            <div class=\"action-buttons\">
                <a href=\"{{ url('admin_service_index') }}\" class=\"btn\">View in Admin Panel</a>
                <a href=\"tel:{{ appointment.phone }}\" class=\"btn\">Call Patient</a>
                <a href=\"mailto:{{ appointment.email }}\" class=\"btn\">Email Patient</a>
            </div>
            
            <div class=\"urgent\">
                <h4>⏰ Important</h4>
                <p>Please contact the patient as soon as possible to confirm this appointment. The patient is expecting a confirmation call within 24 hours.</p>
            </div>
        </div>
        
        <div class=\"footer\">
            <h4>Salutem Medical Center - Admin Panel</h4>
            <p>This is an automated notification for appointment bookings.</p>
            <p><small>© {{ \"now\"|date(\"Y\") }} Salutem Medical Center. All rights reserved.</small></p>
        </div>
    </div>
</body>
</html>
", "emails/appointment_admin_notification.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\emails\\appointment_admin_notification.html.twig");
    }
}
