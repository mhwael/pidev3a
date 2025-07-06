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

/* home/patient_info.html.twig */
class __TwigTemplate_9dc397af3d814dfe2fba5430b6d66ae3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/patient_info.html.twig"));

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
        yield "<!--=======content================================-->
<div class=\"wrapper marBot3\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2 class=\"v3\">Patient Information</h2>
            <div class=\"grid_6 alpha mobile_bottom_mar\">
                <h3>New Patient Information</h3>
                <p>Welcome to Salutem Medical Center! We are committed to providing you with excellent healthcare services. Please review the following information to help make your visit as smooth as possible.</p>
                
                <h4>What to Bring</h4>
                <ul class=\"list2\">
                    <li>Photo identification (driver's license, passport, etc.)</li>
                    <li>Insurance cards (primary and secondary)</li>
                    <li>List of current medications</li>
                    <li>Previous medical records or test results</li>
                    <li>Completed new patient forms</li>
                </ul>

                <h4>Insurance</h4>
                <p>We accept most major insurance plans. Please contact your insurance provider to verify coverage before your appointment. Our billing department can help answer any insurance-related questions.</p>

                <h4>Appointment Scheduling</h4>
                <p>To schedule an appointment, please call our office at +1 959 603 6035. We recommend scheduling routine appointments 2-3 weeks in advance. Same-day appointments may be available for urgent medical needs.</p>
            </div>
            <div class=\"grid_6 omega\">
                <h3>Patient Portal</h3>
                <p>Our secure patient portal allows you to:</p>
                <ul class=\"list2\">
                    <li>View test results</li>
                    <li>Request prescription refills</li>
                    <li>Schedule appointments</li>
                    <li>Communicate with your healthcare team</li>
                    <li>Update your personal information</li>
                    <li>Access educational materials</li>
                </ul>

                <h4>Office Hours</h4>
                <p><strong>Monday - Friday:</strong> 8:00 AM - 6:00 PM<br>
                <strong>Saturday:</strong> 9:00 AM - 2:00 PM<br>
                <strong>Sunday:</strong> Closed</p>

                <h4>Emergency Care</h4>
                <p>For medical emergencies, please call 911 or go to your nearest emergency room. For after-hours urgent care needs, our answering service will connect you with our on-call physician.</p>

                <h4>Payment Options</h4>
                <p>We accept cash, checks, and major credit cards. Payment is expected at the time of service unless prior arrangements have been made with our billing department.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"gray_bg\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Patient Forms</h2>
            <p>Please download and complete the following forms before your first appointment to save time during check-in:</p>
            <div class=\"grid_4 alpha\">
                <h3>Required Forms</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">New Patient Registration Form</a></li>
                    <li><a href=\"#\">Medical History Questionnaire</a></li>
                    <li><a href=\"#\">Insurance Information Form</a></li>
                </ul>
            </div>
            <div class=\"grid_4\">
                <h3>Additional Forms</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">Authorization for Release of Medical Records</a></li>
                    <li><a href=\"#\">Financial Policy Agreement</a></li>
                    <li><a href=\"#\">HIPAA Privacy Notice</a></li>
                </ul>
            </div>
            <div class=\"grid_4 omega\">
                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> +1 959 603 6035<br>
                <strong>Fax:</strong> +1 504 889 9898<br>
                <strong>Email:</strong> <a href=\"mailto:mail@demolink.org\">mail@demolink.org</a></p>
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
        return "home/patient_info.html.twig";
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
        return array (  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<!--=======content================================-->
<div class=\"wrapper marBot3\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2 class=\"v3\">Patient Information</h2>
            <div class=\"grid_6 alpha mobile_bottom_mar\">
                <h3>New Patient Information</h3>
                <p>Welcome to Salutem Medical Center! We are committed to providing you with excellent healthcare services. Please review the following information to help make your visit as smooth as possible.</p>
                
                <h4>What to Bring</h4>
                <ul class=\"list2\">
                    <li>Photo identification (driver's license, passport, etc.)</li>
                    <li>Insurance cards (primary and secondary)</li>
                    <li>List of current medications</li>
                    <li>Previous medical records or test results</li>
                    <li>Completed new patient forms</li>
                </ul>

                <h4>Insurance</h4>
                <p>We accept most major insurance plans. Please contact your insurance provider to verify coverage before your appointment. Our billing department can help answer any insurance-related questions.</p>

                <h4>Appointment Scheduling</h4>
                <p>To schedule an appointment, please call our office at +1 959 603 6035. We recommend scheduling routine appointments 2-3 weeks in advance. Same-day appointments may be available for urgent medical needs.</p>
            </div>
            <div class=\"grid_6 omega\">
                <h3>Patient Portal</h3>
                <p>Our secure patient portal allows you to:</p>
                <ul class=\"list2\">
                    <li>View test results</li>
                    <li>Request prescription refills</li>
                    <li>Schedule appointments</li>
                    <li>Communicate with your healthcare team</li>
                    <li>Update your personal information</li>
                    <li>Access educational materials</li>
                </ul>

                <h4>Office Hours</h4>
                <p><strong>Monday - Friday:</strong> 8:00 AM - 6:00 PM<br>
                <strong>Saturday:</strong> 9:00 AM - 2:00 PM<br>
                <strong>Sunday:</strong> Closed</p>

                <h4>Emergency Care</h4>
                <p>For medical emergencies, please call 911 or go to your nearest emergency room. For after-hours urgent care needs, our answering service will connect you with our on-call physician.</p>

                <h4>Payment Options</h4>
                <p>We accept cash, checks, and major credit cards. Payment is expected at the time of service unless prior arrangements have been made with our billing department.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"gray_bg\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Patient Forms</h2>
            <p>Please download and complete the following forms before your first appointment to save time during check-in:</p>
            <div class=\"grid_4 alpha\">
                <h3>Required Forms</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">New Patient Registration Form</a></li>
                    <li><a href=\"#\">Medical History Questionnaire</a></li>
                    <li><a href=\"#\">Insurance Information Form</a></li>
                </ul>
            </div>
            <div class=\"grid_4\">
                <h3>Additional Forms</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">Authorization for Release of Medical Records</a></li>
                    <li><a href=\"#\">Financial Policy Agreement</a></li>
                    <li><a href=\"#\">HIPAA Privacy Notice</a></li>
                </ul>
            </div>
            <div class=\"grid_4 omega\">
                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> +1 959 603 6035<br>
                <strong>Fax:</strong> +1 504 889 9898<br>
                <strong>Email:</strong> <a href=\"mailto:mail@demolink.org\">mail@demolink.org</a></p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/patient_info.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\home\\patient_info.html.twig");
    }
}
