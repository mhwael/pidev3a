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

/* emails/appointment_cancelled.html.twig */
class __TwigTemplate_c41afde172b6f998a00d9c01a0e3cd62 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/appointment_cancelled.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Appointment Cancelled</title>
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
            background: #e74c3c;
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
            border-left: 4px solid #e74c3c;
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
        .cancelled-badge {
            background: #e74c3c;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
        }
        .reason-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
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
        <h1>Appointment Cancelled</h1>
        <span class=\"cancelled-badge\">✗ Cancelled</span>
    </div>
    
    <div class=\"content\">
        <h2>Dear ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 82, $this->source); })()), "patientName", [], "any", false, false, false, 82), "html", null, true);
        yield ",</h2>
        
        <p>We regret to inform you that your appointment at <strong>Salutem Medical Center</strong> has been cancelled.</p>
        
        <div class=\"appointment-details\">
            <h3>Cancelled Appointment Details:</h3>
            
            <div class=\"detail-row\">
                <span class=\"label\">Service:</span>
                <span class=\"value\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 91, $this->source); })()), "service", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Speciality:</span>
                <span class=\"value\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 96, $this->source); })()), "service", [], "any", false, false, false, 96), "speciality", [], "any", false, false, false, 96), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Date:</span>
                <span class=\"value\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 101, $this->source); })()), "formattedDate", [], "any", false, false, false, 101), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"label\">Time:</span>
                <span class=\"value\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 106, $this->source); })()), "formattedTime", [], "any", false, false, false, 106), "html", null, true);
        yield "</span>
            </div>
        </div>
        
        ";
        // line 110
        if ((($tmp = (isset($context["reason"]) || array_key_exists("reason", $context) ? $context["reason"] : (function () { throw new RuntimeError('Variable "reason" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "        <div class=\"reason-box\">
            <h3>Reason for Cancellation:</h3>
            <p>";
            // line 113
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reason"]) || array_key_exists("reason", $context) ? $context["reason"] : (function () { throw new RuntimeError('Variable "reason" does not exist.', 113, $this->source); })()), "html", null, true));
            yield "</p>
        </div>
        ";
        }
        // line 116
        yield "        
        <h3>What's Next?</h3>
        <ul>
            <li>You can book a new appointment by visiting our website</li>
            <li>Contact us directly to schedule at your convenience</li>
            ";
        // line 121
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 121, $this->source); })()), "service", [], "any", false, false, false, 121), "phone", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "            <li>Call us at: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 122, $this->source); })()), "service", [], "any", false, false, false, 122), "phone", [], "any", false, false, false, 122), "html", null, true);
            yield "</li>
            ";
        }
        // line 124
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 124, $this->source); })()), "service", [], "any", false, false, false, 124), "email", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "            <li>Email us at: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 125, $this->source); })()), "service", [], "any", false, false, false, 125), "email", [], "any", false, false, false, 125), "html", null, true);
            yield "</li>
            ";
        }
        // line 127
        yield "        </ul>
        
        <p>We apologize for any inconvenience this may cause and look forward to serving you in the future.</p>
        
        <p><strong>Best regards,</strong><br>
        The Salutem Medical Center Team</p>
    </div>
    
    <div class=\"footer\">
        <p>This is an automated message. Please do not reply to this email.</p>
        <p>© ";
        // line 137
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
        return "emails/appointment_cancelled.html.twig";
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
        return array (  219 => 137,  207 => 127,  201 => 125,  198 => 124,  192 => 122,  190 => 121,  183 => 116,  177 => 113,  173 => 111,  171 => 110,  164 => 106,  156 => 101,  148 => 96,  140 => 91,  128 => 82,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Appointment Cancelled</title>
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
            background: #e74c3c;
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
            border-left: 4px solid #e74c3c;
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
        .cancelled-badge {
            background: #e74c3c;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
        }
        .reason-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
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
        <h1>Appointment Cancelled</h1>
        <span class=\"cancelled-badge\">✗ Cancelled</span>
    </div>
    
    <div class=\"content\">
        <h2>Dear {{ appointment.patientName }},</h2>
        
        <p>We regret to inform you that your appointment at <strong>Salutem Medical Center</strong> has been cancelled.</p>
        
        <div class=\"appointment-details\">
            <h3>Cancelled Appointment Details:</h3>
            
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
        </div>
        
        {% if reason %}
        <div class=\"reason-box\">
            <h3>Reason for Cancellation:</h3>
            <p>{{ reason|nl2br }}</p>
        </div>
        {% endif %}
        
        <h3>What's Next?</h3>
        <ul>
            <li>You can book a new appointment by visiting our website</li>
            <li>Contact us directly to schedule at your convenience</li>
            {% if appointment.service.phone %}
            <li>Call us at: {{ appointment.service.phone }}</li>
            {% endif %}
            {% if appointment.service.email %}
            <li>Email us at: {{ appointment.service.email }}</li>
            {% endif %}
        </ul>
        
        <p>We apologize for any inconvenience this may cause and look forward to serving you in the future.</p>
        
        <p><strong>Best regards,</strong><br>
        The Salutem Medical Center Team</p>
    </div>
    
    <div class=\"footer\">
        <p>This is an automated message. Please do not reply to this email.</p>
        <p>© {{ \"now\"|date(\"Y\") }} Salutem Medical Center. All rights reserved.</p>
    </div>
</body>
</html>
", "emails/appointment_cancelled.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\emails\\appointment_cancelled.html.twig");
    }
}
