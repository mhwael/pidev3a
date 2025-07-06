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

/* appointment/pdf.html.twig */
class __TwigTemplate_13215e06363f92eee632d6740b233f71 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Appointment Details - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 5, $this->source); })()), "patientName", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #667eea;
            margin: 0;
            font-size: 28px;
            font-weight: 300;
        }
        
        .header .subtitle {
            color: #666;
            font-size: 16px;
            margin-top: 5px;
        }
        
        .reference {
            background: #f8f9fa;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: bold;
            color: #495057;
        }
        
        .appointment-card {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-header h2 {
            margin: 0;
            font-size: 20px;
        }
        
        .status-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        .status-badge.pending {
            background: #fff3cd;
            color: #856404;
        }
        
        .status-badge.confirmed {
            background: #d1edff;
            color: #0c5460;
        }
        
        .status-badge.completed {
            background: #d4edda;
            color: #155724;
        }
        
        .status-badge.cancelled {
            background: #f8d7da;
            color: #721c24;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px 30px;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .info-item strong {
            color: #495057;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .info-item span {
            font-size: 16px;
            color: #333;
        }
        
        .service-info {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }
        
        .service-name {
            font-weight: 600;
            color: #333;
        }
        
        .speciality-badge {
            background: #e9ecef;
            color: #495057;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            width: fit-content;
        }
        
        .datetime-info {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }
        
        .date-highlight {
            font-weight: 600;
            color: #333;
        }
        
        .time-highlight {
            color: #667eea;
            font-weight: 500;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section h3 {
            color: #495057;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        .content-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        
        .footer {
            margin-top: 40px;
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #e9ecef;
            color: #666;
            font-size: 14px;
        }
        
        .medical-center-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            text-align: center;
        }
        
        .medical-center-info h4 {
            color: #667eea;
            margin: 0 0 10px 0;
        }
        
        .contact-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 15px;
            text-align: center;
        }
        
        .contact-item {
            color: #495057;
        }
        
        .contact-item strong {
            display: block;
            color: #333;
            margin-bottom: 5px;
        }
        
        @media print {
            body {
                margin: 0;
                padding: 15px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            
            .contact-info {
                grid-template-columns: 1fr;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Salutem Medical Center</h1>
        <div class=\"subtitle\">Appointment Details</div>
    </div>
    
    <div class=\"reference\">
        Reference: #APT";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 243, $this->source); })()), "id", [], "any", false, false, false, 243), 0, "", ""), "html", null, true);
        yield "
    </div>
    
    <div class=\"appointment-card\">
        <div class=\"card-header\">
            <h2>";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 248, $this->source); })()), "patientName", [], "any", false, false, false, 248), "html", null, true);
        yield "</h2>
            <span class=\"status-badge ";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 249, $this->source); })()), "status", [], "any", false, false, false, 249), "html", null, true);
        yield "\">
                ";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 250, $this->source); })()), "status", [], "any", false, false, false, 250)), "html", null, true);
        yield "
            </span>
        </div>
        <div class=\"card-body\">
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <strong>Service</strong>
                    <div class=\"service-info\">
                        <span class=\"service-name\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 258, $this->source); })()), "service", [], "any", false, false, false, 258), "name", [], "any", false, false, false, 258), "html", null, true);
        yield "</span>
                        <span class=\"speciality-badge\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 259, $this->source); })()), "service", [], "any", false, false, false, 259), "speciality", [], "any", false, false, false, 259), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <strong>Date & Time</strong>
                    <div class=\"datetime-info\">
                        <span class=\"date-highlight\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 266, $this->source); })()), "formattedDate", [], "any", false, false, false, 266), "html", null, true);
        yield "</span>
                        <span class=\"time-highlight\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 267, $this->source); })()), "formattedTime", [], "any", false, false, false, 267), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <strong>Location</strong>
                    <span>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 273, $this->source); })()), "service", [], "any", false, false, false, 273), "location", [], "any", false, false, false, 273), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"info-item\">
                    <strong>Email</strong>
                    <span>";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 278, $this->source); })()), "email", [], "any", false, false, false, 278), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"info-item\">
                    <strong>Phone</strong>
                    <span>";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 283, $this->source); })()), "phone", [], "any", false, false, false, 283), "html", null, true);
        yield "</span>
                </div>
                
                ";
        // line 286
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 286, $this->source); })()), "patientAge", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 287
            yield "                <div class=\"info-item\">
                    <strong>Age</strong>
                    <span>";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 289, $this->source); })()), "patientAge", [], "any", false, false, false, 289), "html", null, true);
            yield "</span>
                </div>
                ";
        }
        // line 292
        yield "                
                ";
        // line 293
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 293, $this->source); })()), "gender", [], "any", false, false, false, 293)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 294
            yield "                <div class=\"info-item\">
                    <strong>Gender</strong>
                    <span>";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 296, $this->source); })()), "gender", [], "any", false, false, false, 296)), "html", null, true);
            yield "</span>
                </div>
                ";
        }
        // line 299
        yield "                
                <div class=\"info-item\">
                    <strong>Booking Date</strong>
                    <span>";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 302, $this->source); })()), "createdAt", [], "any", false, false, false, 302), "format", ["M d, Y \\a\\t H:i"], "method", false, false, false, 302), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 308
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 308, $this->source); })()), "medicalHistory", [], "any", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "    <div class=\"section\">
        <h3>Medical History</h3>
        <div class=\"content-box\">
            ";
            // line 312
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 312, $this->source); })()), "medicalHistory", [], "any", false, false, false, 312), "html", null, true));
            yield "
        </div>
    </div>
    ";
        }
        // line 316
        yield "    
    ";
        // line 317
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 317, $this->source); })()), "message", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 318
            yield "    <div class=\"section\">
        <h3>Additional Message</h3>
        <div class=\"content-box\">
            ";
            // line 321
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 321, $this->source); })()), "message", [], "any", false, false, false, 321), "html", null, true));
            yield "
        </div>
    </div>
    ";
        }
        // line 325
        yield "    
    <div class=\"medical-center-info\">
        <h4>Salutem Medical Center</h4>
        <p>Your trusted healthcare partner providing comprehensive medical services</p>
        
        <div class=\"contact-info\">
            <div class=\"contact-item\">
                <strong>Phone</strong>
                +1 (555) 123-4567
            </div>
            <div class=\"contact-item\">
                <strong>Email</strong>
                info@salutem-medical.com
            </div>
            <div class=\"contact-item\">
                <strong>Address</strong>
                123 Medical Center Dr<br>
                Healthcare City, HC 12345
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>Generated on ";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F j, Y \\a\\t g:i A"), "html", null, true);
        yield "</p>
        <p>Please arrive 15 minutes before your scheduled appointment time</p>
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
        return "appointment/pdf.html.twig";
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
        return array (  465 => 348,  440 => 325,  433 => 321,  428 => 318,  426 => 317,  423 => 316,  416 => 312,  411 => 309,  409 => 308,  400 => 302,  395 => 299,  389 => 296,  385 => 294,  383 => 293,  380 => 292,  374 => 289,  370 => 287,  368 => 286,  362 => 283,  354 => 278,  346 => 273,  337 => 267,  333 => 266,  323 => 259,  319 => 258,  308 => 250,  304 => 249,  300 => 248,  292 => 243,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Appointment Details - {{ appointment.patientName }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #667eea;
            margin: 0;
            font-size: 28px;
            font-weight: 300;
        }
        
        .header .subtitle {
            color: #666;
            font-size: 16px;
            margin-top: 5px;
        }
        
        .reference {
            background: #f8f9fa;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: bold;
            color: #495057;
        }
        
        .appointment-card {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-header h2 {
            margin: 0;
            font-size: 20px;
        }
        
        .status-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        .status-badge.pending {
            background: #fff3cd;
            color: #856404;
        }
        
        .status-badge.confirmed {
            background: #d1edff;
            color: #0c5460;
        }
        
        .status-badge.completed {
            background: #d4edda;
            color: #155724;
        }
        
        .status-badge.cancelled {
            background: #f8d7da;
            color: #721c24;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px 30px;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .info-item strong {
            color: #495057;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .info-item span {
            font-size: 16px;
            color: #333;
        }
        
        .service-info {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }
        
        .service-name {
            font-weight: 600;
            color: #333;
        }
        
        .speciality-badge {
            background: #e9ecef;
            color: #495057;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            width: fit-content;
        }
        
        .datetime-info {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }
        
        .date-highlight {
            font-weight: 600;
            color: #333;
        }
        
        .time-highlight {
            color: #667eea;
            font-weight: 500;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section h3 {
            color: #495057;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        .content-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        
        .footer {
            margin-top: 40px;
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #e9ecef;
            color: #666;
            font-size: 14px;
        }
        
        .medical-center-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            text-align: center;
        }
        
        .medical-center-info h4 {
            color: #667eea;
            margin: 0 0 10px 0;
        }
        
        .contact-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 15px;
            text-align: center;
        }
        
        .contact-item {
            color: #495057;
        }
        
        .contact-item strong {
            display: block;
            color: #333;
            margin-bottom: 5px;
        }
        
        @media print {
            body {
                margin: 0;
                padding: 15px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            
            .contact-info {
                grid-template-columns: 1fr;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Salutem Medical Center</h1>
        <div class=\"subtitle\">Appointment Details</div>
    </div>
    
    <div class=\"reference\">
        Reference: #APT{{ appointment.id|number_format(0, '', '') }}
    </div>
    
    <div class=\"appointment-card\">
        <div class=\"card-header\">
            <h2>{{ appointment.patientName }}</h2>
            <span class=\"status-badge {{ appointment.status }}\">
                {{ appointment.status|capitalize }}
            </span>
        </div>
        <div class=\"card-body\">
            <div class=\"info-grid\">
                <div class=\"info-item\">
                    <strong>Service</strong>
                    <div class=\"service-info\">
                        <span class=\"service-name\">{{ appointment.service.name }}</span>
                        <span class=\"speciality-badge\">{{ appointment.service.speciality }}</span>
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <strong>Date & Time</strong>
                    <div class=\"datetime-info\">
                        <span class=\"date-highlight\">{{ appointment.formattedDate }}</span>
                        <span class=\"time-highlight\">{{ appointment.formattedTime }}</span>
                    </div>
                </div>
                
                <div class=\"info-item\">
                    <strong>Location</strong>
                    <span>{{ appointment.service.location }}</span>
                </div>
                
                <div class=\"info-item\">
                    <strong>Email</strong>
                    <span>{{ appointment.email }}</span>
                </div>
                
                <div class=\"info-item\">
                    <strong>Phone</strong>
                    <span>{{ appointment.phone }}</span>
                </div>
                
                {% if appointment.patientAge %}
                <div class=\"info-item\">
                    <strong>Age</strong>
                    <span>{{ appointment.patientAge }}</span>
                </div>
                {% endif %}
                
                {% if appointment.gender %}
                <div class=\"info-item\">
                    <strong>Gender</strong>
                    <span>{{ appointment.gender|capitalize }}</span>
                </div>
                {% endif %}
                
                <div class=\"info-item\">
                    <strong>Booking Date</strong>
                    <span>{{ appointment.createdAt.format('M d, Y \\\\a\\\\t H:i') }}</span>
                </div>
            </div>
        </div>
    </div>
    
    {% if appointment.medicalHistory %}
    <div class=\"section\">
        <h3>Medical History</h3>
        <div class=\"content-box\">
            {{ appointment.medicalHistory|nl2br }}
        </div>
    </div>
    {% endif %}
    
    {% if appointment.message %}
    <div class=\"section\">
        <h3>Additional Message</h3>
        <div class=\"content-box\">
            {{ appointment.message|nl2br }}
        </div>
    </div>
    {% endif %}
    
    <div class=\"medical-center-info\">
        <h4>Salutem Medical Center</h4>
        <p>Your trusted healthcare partner providing comprehensive medical services</p>
        
        <div class=\"contact-info\">
            <div class=\"contact-item\">
                <strong>Phone</strong>
                +1 (555) 123-4567
            </div>
            <div class=\"contact-item\">
                <strong>Email</strong>
                info@salutem-medical.com
            </div>
            <div class=\"contact-item\">
                <strong>Address</strong>
                123 Medical Center Dr<br>
                Healthcare City, HC 12345
            </div>
        </div>
    </div>
    
    <div class=\"footer\">
        <p>Generated on {{ \"now\"|date(\"F j, Y \\\\a\\\\t g:i A\") }}</p>
        <p>Please arrive 15 minutes before your scheduled appointment time</p>
    </div>
</body>
</html>
", "appointment/pdf.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\appointment\\pdf.html.twig");
    }
}
