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

/* appointment/book.html.twig */
class __TwigTemplate_32eeef08cdd5ecc11e656aae208113af extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/book.html.twig"));

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
            <h1><i class=\"icon-calendar\"></i> Book Appointment</h1>
            <p>Fill out the form below to schedule your medical appointment</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"appointment-form-container\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-edit\"></i> Appointment Details</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        yield "
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "service", [], "any", false, false, false, 27), 'label');
        yield "
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "service", [], "any", false, false, false, 28), 'widget');
        yield "
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "service", [], "any", false, false, false, 29), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "patientName", [], "any", false, false, false, 35), 'label');
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "patientName", [], "any", false, false, false, 36), 'widget');
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "patientName", [], "any", false, false, false, 37), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'label');
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget');
        yield "
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'errors');
        yield "
                        </div>
                        <div class=\"form-group half-width\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "phone", [], "any", false, false, false, 48), 'label');
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "phone", [], "any", false, false, false, 49), 'widget');
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "phone", [], "any", false, false, false, 50), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "patientAge", [], "any", false, false, false, 56), 'label');
        yield "
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "patientAge", [], "any", false, false, false, 57), 'widget');
        yield "
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "patientAge", [], "any", false, false, false, 58), 'errors');
        yield "
                        </div>
                        <div class=\"form-group half-width\">
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "gender", [], "any", false, false, false, 61), 'label');
        yield "
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "gender", [], "any", false, false, false, 62), 'widget');
        yield "
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "gender", [], "any", false, false, false, 63), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "preferredDate", [], "any", false, false, false, 69), 'label');
        yield "
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "preferredDate", [], "any", false, false, false, 70), 'widget');
        yield "
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "preferredDate", [], "any", false, false, false, 71), 'errors');
        yield "
                        </div>
                        <div class=\"form-group half-width\">
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "preferredTime", [], "any", false, false, false, 74), 'label');
        yield "
                            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "preferredTime", [], "any", false, false, false, 75), 'widget');
        yield "
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "preferredTime", [], "any", false, false, false, 76), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "medicalHistory", [], "any", false, false, false, 82), 'label');
        yield "
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "medicalHistory", [], "any", false, false, false, 83), 'widget');
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "medicalHistory", [], "any", false, false, false, 84), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "message", [], "any", false, false, false, 90), 'label');
        yield "
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "message", [], "any", false, false, false, 91), 'widget');
        yield "
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "message", [], "any", false, false, false, 92), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-actions\">
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "submit", [], "any", false, false, false, 97), 'widget');
        yield "
                        <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointments");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
                    </div>

                    ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"grid_4\">
        <div class=\"appointment-sidebar\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-info-circle\"></i> Important Information</h3>
                </div>
                <div class=\"card-body\">
                    <ul class=\"info-list\">
                        <li><i class=\"icon-check\"></i> Appointments are subject to confirmation</li>
                        <li><i class=\"icon-check\"></i> You will receive email confirmation</li>
                        <li><i class=\"icon-check\"></i> Please arrive 15 minutes early</li>
                        <li><i class=\"icon-check\"></i> Bring valid ID and insurance card</li>
                        <li><i class=\"icon-check\"></i> Cancel at least 24 hours in advance</li>
                    </ul>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-phone\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <p>If you need assistance with booking, please contact us:</p>
                    <div class=\"contact-info\">
                        <p><i class=\"icon-phone\"></i> <strong>Phone:</strong> (555) 123-4567</p>
                        <p><i class=\"icon-envelope\"></i> <strong>Email:</strong> appointments@salutem-medical.com</p>
                    </div>
                    <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contacts");
        yield "\" class=\"btn btn-info btn-sm\">Contact Form</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.appointment-form-container {
    margin: 2rem 0;
}

.form-row {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-row .form-group {
    flex: 1;
}

.form-row .form-group.half-width {
    flex: 0 0 calc(50% - 0.5rem);
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #2c3e50;
}

.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-actions {
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
    display: flex;
    gap: 1rem;
}

.appointment-sidebar {
    margin: 2rem 0;
}

.info-list {
    list-style: none;
    padding: 0;
}

.info-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f1f3f4;
}

.info-list li:last-child {
    border-bottom: none;
}

.info-list i {
    color: #28a745;
    margin-right: 0.5rem;
}

.contact-info p {
    margin: 0.5rem 0;
}

.contact-info i {
    color: #667eea;
    margin-right: 0.5rem;
    width: 16px;
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
    
    .form-row .form-group.half-width {
        flex: 1;
    }
    
    .form-actions {
        flex-direction: column;
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
        return "appointment/book.html.twig";
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
        return array (  317 => 134,  281 => 101,  275 => 98,  271 => 97,  263 => 92,  259 => 91,  255 => 90,  246 => 84,  242 => 83,  238 => 82,  229 => 76,  225 => 75,  221 => 74,  215 => 71,  211 => 70,  207 => 69,  198 => 63,  194 => 62,  190 => 61,  184 => 58,  180 => 57,  176 => 56,  167 => 50,  163 => 49,  159 => 48,  153 => 45,  149 => 44,  145 => 43,  136 => 37,  132 => 36,  128 => 35,  119 => 29,  115 => 28,  111 => 27,  104 => 23,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-calendar\"></i> Book Appointment</h1>
            <p>Fill out the form below to schedule your medical appointment</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"appointment-form-container\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-edit\"></i> Appointment Details</h2>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.service) }}
                            {{ form_widget(form.service) }}
                            {{ form_errors(form.service) }}
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.patientName) }}
                            {{ form_widget(form.patientName) }}
                            {{ form_errors(form.patientName) }}
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            {{ form_label(form.email) }}
                            {{ form_widget(form.email) }}
                            {{ form_errors(form.email) }}
                        </div>
                        <div class=\"form-group half-width\">
                            {{ form_label(form.phone) }}
                            {{ form_widget(form.phone) }}
                            {{ form_errors(form.phone) }}
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            {{ form_label(form.patientAge) }}
                            {{ form_widget(form.patientAge) }}
                            {{ form_errors(form.patientAge) }}
                        </div>
                        <div class=\"form-group half-width\">
                            {{ form_label(form.gender) }}
                            {{ form_widget(form.gender) }}
                            {{ form_errors(form.gender) }}
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            {{ form_label(form.preferredDate) }}
                            {{ form_widget(form.preferredDate) }}
                            {{ form_errors(form.preferredDate) }}
                        </div>
                        <div class=\"form-group half-width\">
                            {{ form_label(form.preferredTime) }}
                            {{ form_widget(form.preferredTime) }}
                            {{ form_errors(form.preferredTime) }}
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.medicalHistory) }}
                            {{ form_widget(form.medicalHistory) }}
                            {{ form_errors(form.medicalHistory) }}
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.message) }}
                            {{ form_widget(form.message) }}
                            {{ form_errors(form.message) }}
                        </div>
                    </div>

                    <div class=\"form-actions\">
                        {{ form_widget(form.submit) }}
                        <a href=\"{{ path('app_appointments') }}\" class=\"btn btn-secondary\">Cancel</a>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"grid_4\">
        <div class=\"appointment-sidebar\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-info-circle\"></i> Important Information</h3>
                </div>
                <div class=\"card-body\">
                    <ul class=\"info-list\">
                        <li><i class=\"icon-check\"></i> Appointments are subject to confirmation</li>
                        <li><i class=\"icon-check\"></i> You will receive email confirmation</li>
                        <li><i class=\"icon-check\"></i> Please arrive 15 minutes early</li>
                        <li><i class=\"icon-check\"></i> Bring valid ID and insurance card</li>
                        <li><i class=\"icon-check\"></i> Cancel at least 24 hours in advance</li>
                    </ul>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-phone\"></i> Need Help?</h3>
                </div>
                <div class=\"card-body\">
                    <p>If you need assistance with booking, please contact us:</p>
                    <div class=\"contact-info\">
                        <p><i class=\"icon-phone\"></i> <strong>Phone:</strong> (555) 123-4567</p>
                        <p><i class=\"icon-envelope\"></i> <strong>Email:</strong> appointments@salutem-medical.com</p>
                    </div>
                    <a href=\"{{ path('app_contacts') }}\" class=\"btn btn-info btn-sm\">Contact Form</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.appointment-form-container {
    margin: 2rem 0;
}

.form-row {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-row .form-group {
    flex: 1;
}

.form-row .form-group.half-width {
    flex: 0 0 calc(50% - 0.5rem);
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #2c3e50;
}

.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-actions {
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
    display: flex;
    gap: 1rem;
}

.appointment-sidebar {
    margin: 2rem 0;
}

.info-list {
    list-style: none;
    padding: 0;
}

.info-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f1f3f4;
}

.info-list li:last-child {
    border-bottom: none;
}

.info-list i {
    color: #28a745;
    margin-right: 0.5rem;
}

.contact-info p {
    margin: 0.5rem 0;
}

.contact-info i {
    color: #667eea;
    margin-right: 0.5rem;
    width: 16px;
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
    
    .form-row .form-group.half-width {
        flex: 1;
    }
    
    .form-actions {
        flex-direction: column;
    }
}
</style>
{% endblock %}
", "appointment/book.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\appointment\\book.html.twig");
    }
}
