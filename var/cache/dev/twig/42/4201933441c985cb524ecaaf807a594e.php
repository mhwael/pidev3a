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

/* emails/appointment_confirmed.html.twig */
class __TwigTemplate_c056b1e25807321bcc40257a4e420c14 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/appointment_confirmed.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Appointment Confirmed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .appointment-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #27ae60;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            color: #333;
        }
        .success-badge {
            background: #27ae60;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Appointment Confirmed</h1>
        <span class=\"success-badge\">✓ Confirmed</span>
    </div>
    
    <div class=\"content\">
        <h2>Dear ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 75, $this->source); })()), "patientName", [], "any", false, false, false, 75), "html", null, true);
        yield ",</h2>
        
        <p>Great news! Your appointment at <strong>Salutem Medical Center</strong> has been confirmed.</p>
        
        <div class=\"appointment-details\">
            <h3>Appointment Details:</h3>
            
            <div class=\"detail-row\">
                <span class=\"label\">Service:</span>
                <span class=\"value\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 84, $this->source); })()), "service", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Speciality:</span>
                <span class=\"value\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 89, $this->source); })()), "service", [], "any", false, false, false, 89), "speciality", [], "any", false, false, false, 89), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Date:</span>
                <span class=\"value\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 94, $this->source); })()), "formattedDate", [], "any", false, false, false, 94), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Time:</span>
                <span class=\"value\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 99, $this->source); })()), "formattedTime", [], "any", false, false, false, 99), "html", null, true);
        yield "</span>
            </div>
            
            ";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 102, $this->source); })()), "service", [], "any", false, false, false, 102), "price", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "            <div class=\"detail-row\">
                <span class=\"label\">Price:</span>
                <span class=\"value\">\$";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 105, $this->source); })()), "service", [], "any", false, false, false, 105), "price", [], "any", false, false, false, 105), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 108
        yield "        </div>
        
        <h3>Important Information:</h3>
        <ul>
            <li>Please arrive 15 minutes before your scheduled appointment time</li>
            <li>Bring a valid ID and insurance card (if applicable)</li>
            <li>If you need to reschedule or cancel, please contact us at least 24 hours in advance</li>
            ";
        // line 115
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 115, $this->source); })()), "service", [], "any", false, false, false, 115), "phone", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "            <li>For questions, call us at: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 116, $this->source); })()), "service", [], "any", false, false, false, 116), "phone", [], "any", false, false, false, 116), "html", null, true);
            yield "</li>
            ";
        }
        // line 118
        yield "        </ul>
        
        ";
        // line 120
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 120, $this->source); })()), "message", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "        <h3>Your Message:</h3>
        <div style=\"background: white; padding: 15px; border-radius: 8px; border-left: 4px solid #3498db;\">
            ";
            // line 123
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 123, $this->source); })()), "message", [], "any", false, false, false, 123), "html", null, true));
            yield "
        </div>
        ";
        }
        // line 126
        yield "        
        <p>We look forward to seeing you at your appointment!</p>
        
        <p><strong>Best regards,</strong><br>
        The Salutem Medical Center Team</p>
    </div>
    
    <div class=\"footer\">
        <p>This is an automated message. Please do not reply to this email.</p>
        <p>© ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Salutem Medical Center. All rights reserved.</p>
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
        return "emails/appointment_confirmed.html.twig";
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
        return array (  219 => 135,  208 => 126,  202 => 123,  198 => 121,  196 => 120,  192 => 118,  186 => 116,  184 => 115,  175 => 108,  169 => 105,  165 => 103,  163 => 102,  157 => 99,  149 => 94,  141 => 89,  133 => 84,  121 => 75,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Appointment Confirmed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .appointment-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #27ae60;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            color: #333;
        }
        .success-badge {
            background: #27ae60;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Appointment Confirmed</h1>
        <span class=\"success-badge\">✓ Confirmed</span>
    </div>
    
    <div class=\"content\">
        <h2>Dear {{ appointment.patientName }},</h2>
        
        <p>Great news! Your appointment at <strong>Salutem Medical Center</strong> has been confirmed.</p>
        
        <div class=\"appointment-details\">
            <h3>Appointment Details:</h3>
            
            <div class=\"detail-row\">
                <span class=\"label\">Service:</span>
                <span class=\"value\">{{ appointment.service.name }}</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Speciality:</span>
                <span class=\"value\">{{ appointment.service.speciality }}</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Date:</span>
                <span class=\"value\">{{ appointment.formattedDate }}</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Time:</span>
                <span class=\"value\">{{ appointment.formattedTime }}</span>
            </div>
            
            {% if appointment.service.price %}
            <div class=\"detail-row\">
                <span class=\"label\">Price:</span>
                <span class=\"value\">\${{ appointment.service.price }}</span>
            </div>
            {% endif %}
        </div>
        
        <h3>Important Information:</h3>
        <ul>
            <li>Please arrive 15 minutes before your scheduled appointment time</li>
            <li>Bring a valid ID and insurance card (if applicable)</li>
            <li>If you need to reschedule or cancel, please contact us at least 24 hours in advance</li>
            {% if appointment.service.phone %}
            <li>For questions, call us at: {{ appointment.service.phone }}</li>
            {% endif %}
        </ul>
        
        {% if appointment.message %}
        <h3>Your Message:</h3>
        <div style=\"background: white; padding: 15px; border-radius: 8px; border-left: 4px solid #3498db;\">
            {{ appointment.message|nl2br }}
        </div>
        {% endif %}
        
        <p>We look forward to seeing you at your appointment!</p>
        
        <p><strong>Best regards,</strong><br>
        The Salutem Medical Center Team</p>
    </div>
    
    <div class=\"footer\">
        <p>This is an automated message. Please do not reply to this email.</p>
        <p>© {{ \"now\"|date(\"Y\") }} Salutem Medical Center. All rights reserved.</p>
    </div>
</body>
</html>
", "emails/appointment_confirmed.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\emails\\appointment_confirmed.html.twig");
    }
}
