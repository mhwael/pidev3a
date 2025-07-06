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

/* emails/appointment_confirmation.html.twig */
class __TwigTemplate_04da064839e99bdc42c79a40a1e10d0f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/appointment_confirmation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Appointment Confirmation - Salutem Medical Center</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 1rem 0;
        }
        .contact-info {
            background: #e3f2fd;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🏥 Appointment Confirmation</h1>
            <p>Salutem Medical Center</p>
        </div>
        
        <div class=\"content\">
            <h2>Dear ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 104, $this->source); })()), "patientName", [], "any", false, false, false, 104), "html", null, true);
        yield ",</h2>
            
            <p>Thank you for booking an appointment with us! Your appointment request has been received and is currently being processed.</p>
            
            <div class=\"appointment-details\">
                <h3>📋 Appointment Details</h3>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Service:</span>
                    <span>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 113, $this->source); })()), "service", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Speciality:</span>
                    <span>";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 118, $this->source); })()), "service", [], "any", false, false, false, 118), "speciality", [], "any", false, false, false, 118), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Patient:</span>
                    <span>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 123, $this->source); })()), "patientName", [], "any", false, false, false, 123), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Email:</span>
                    <span>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Phone:</span>
                    <span>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 133, $this->source); })()), "phone", [], "any", false, false, false, 133), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Date:</span>
                    <span><strong>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 138, $this->source); })()), "formattedDate", [], "any", false, false, false, 138), "html", null, true);
        yield "</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Time:</span>
                    <span><strong>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 143, $this->source); })()), "formattedTime", [], "any", false, false, false, 143), "html", null, true);
        yield "</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Status:</span>
                    <span class=\"status-badge\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 148, $this->source); })()), "status", [], "any", false, false, false, 148)), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Reference:</span>
                    <span class=\"reference-code\">#APT";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153), 0, "", ""), "html", null, true);
        yield "</span>
                </div>
            </div>
            
            ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 157, $this->source); })()), "medicalHistory", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "            <div class=\"contact-info\">
                <h4>🏥 Medical History:</h4>
                <p>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 160, $this->source); })()), "medicalHistory", [], "any", false, false, false, 160), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 163
        yield "            
            ";
        // line 164
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 164, $this->source); })()), "message", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "            <div class=\"contact-info\">
                <h4>💬 Additional Message:</h4>
                <p>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 167, $this->source); })()), "message", [], "any", false, false, false, 167), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 170
        yield "            
            <h3>📞 What's Next?</h3>
            <ul>
                <li><strong>Confirmation Call:</strong> Our team will contact you within 24 hours at ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 173, $this->source); })()), "phone", [], "any", false, false, false, 173), "html", null, true);
        yield " to confirm your appointment.</li>
                <li><strong>Preparation:</strong> Please bring a valid ID and your insurance card.</li>
                <li><strong>Arrival:</strong> Please arrive 15 minutes before your scheduled time.</li>
            </ul>
            
            <div class=\"contact-info\">
                <h4>📍 Location Information</h4>
                <p><strong>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 180, $this->source); })()), "service", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true);
        yield "</strong><br>
                ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 181, $this->source); })()), "service", [], "any", false, false, false, 181), "location", [], "any", false, false, false, 181), "html", null, true);
        yield "</p>
                
                ";
        // line 183
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 183, $this->source); })()), "service", [], "any", false, false, false, 183), "phone", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "                <p><strong>Direct Phone:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 184, $this->source); })()), "service", [], "any", false, false, false, 184), "phone", [], "any", false, false, false, 184), "html", null, true);
            yield "</p>
                ";
        }
        // line 186
        yield "            </div>
            
            <div style=\"text-align: center; margin: 2rem 0;\">
                <a href=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_appointment_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189)]), "html", null, true);
        yield "\" class=\"btn\">View Full Details</a>
            </div>
        </div>
        
        <div class=\"footer\">
            <h4>Salutem Medical Center</h4>
            <p>📞 (555) 123-4567 | 📧 appointments@salutem-medical.com</p>
            <p><small>© ";
        // line 196
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
        return "emails/appointment_confirmation.html.twig";
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
        return array (  307 => 196,  297 => 189,  292 => 186,  286 => 184,  284 => 183,  279 => 181,  275 => 180,  265 => 173,  260 => 170,  254 => 167,  250 => 165,  248 => 164,  245 => 163,  239 => 160,  235 => 158,  233 => 157,  226 => 153,  218 => 148,  210 => 143,  202 => 138,  194 => 133,  186 => 128,  178 => 123,  170 => 118,  162 => 113,  150 => 104,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Appointment Confirmation - Salutem Medical Center</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 1rem 0;
        }
        .contact-info {
            background: #e3f2fd;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>🏥 Appointment Confirmation</h1>
            <p>Salutem Medical Center</p>
        </div>
        
        <div class=\"content\">
            <h2>Dear {{ appointment.patientName }},</h2>
            
            <p>Thank you for booking an appointment with us! Your appointment request has been received and is currently being processed.</p>
            
            <div class=\"appointment-details\">
                <h3>📋 Appointment Details</h3>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Service:</span>
                    <span>{{ appointment.service.name }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Speciality:</span>
                    <span>{{ appointment.service.speciality }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Patient:</span>
                    <span>{{ appointment.patientName }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Email:</span>
                    <span>{{ appointment.email }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Phone:</span>
                    <span>{{ appointment.phone }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Date:</span>
                    <span><strong>{{ appointment.formattedDate }}</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Preferred Time:</span>
                    <span><strong>{{ appointment.formattedTime }}</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Status:</span>
                    <span class=\"status-badge\">{{ appointment.status|capitalize }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Reference:</span>
                    <span class=\"reference-code\">#APT{{ appointment.id|number_format(0, '', '') }}</span>
                </div>
            </div>
            
            {% if appointment.medicalHistory %}
            <div class=\"contact-info\">
                <h4>🏥 Medical History:</h4>
                <p>{{ appointment.medicalHistory }}</p>
            </div>
            {% endif %}
            
            {% if appointment.message %}
            <div class=\"contact-info\">
                <h4>💬 Additional Message:</h4>
                <p>{{ appointment.message }}</p>
            </div>
            {% endif %}
            
            <h3>📞 What's Next?</h3>
            <ul>
                <li><strong>Confirmation Call:</strong> Our team will contact you within 24 hours at {{ appointment.phone }} to confirm your appointment.</li>
                <li><strong>Preparation:</strong> Please bring a valid ID and your insurance card.</li>
                <li><strong>Arrival:</strong> Please arrive 15 minutes before your scheduled time.</li>
            </ul>
            
            <div class=\"contact-info\">
                <h4>📍 Location Information</h4>
                <p><strong>{{ appointment.service.name }}</strong><br>
                {{ appointment.service.location }}</p>
                
                {% if appointment.service.phone %}
                <p><strong>Direct Phone:</strong> {{ appointment.service.phone }}</p>
                {% endif %}
            </div>
            
            <div style=\"text-align: center; margin: 2rem 0;\">
                <a href=\"{{ url('app_appointment_view', {'id': appointment.id}) }}\" class=\"btn\">View Full Details</a>
            </div>
        </div>
        
        <div class=\"footer\">
            <h4>Salutem Medical Center</h4>
            <p>📞 (555) 123-4567 | 📧 appointments@salutem-medical.com</p>
            <p><small>© {{ \"now\"|date(\"Y\") }} Salutem Medical Center. All rights reserved.</small></p>
        </div>
    </div>
</body>
</html>
", "emails/appointment_confirmation.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\emails\\appointment_confirmation.html.twig");
    }
}
