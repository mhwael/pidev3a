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

/* admin/categorie/new.html.twig */
class __TwigTemplate_4653f28e97f04cfade8098fed4860316 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/new.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Add New Category - Admin Dashboard";
        
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
        yield "<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1><i class=\"icon-plus\"></i> Add New Category</h1>
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"icon-arrow-left\"></i> Back to Categories
                </a>
            </div>

            <div class=\"grid_8 alpha\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-edit\"></i> Category Details</h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "category-form"]]);
        yield "
                            <div class=\"form-group\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), 'label', ["attr" => ["class" => "form-label required"], "label" => "Category Type"]);
        yield "
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27), 'errors');
        yield "
                                <small class=\"form-text\">Select the type of medical consultation this category represents.</small>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'label', ["attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Enter a detailed description of this category type and what services it includes..."]]);
        // line 37
        yield "
                                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'errors');
        yield "
                                <small class=\"form-text\">Optional: Provide a description of what this consultation type includes and any specific details.</small>
                            </div>

                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg\">
                                    <i class=\"icon-save\"></i> Create Category
                                </button>
                                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_index");
        yield "\" class=\"btn btn-secondary\">
                                    <i class=\"icon-times\"></i> Cancel
                                </a>
                            </div>
                        ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-info-circle\"></i> Category Types Guide</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"guide-content\">
                            <div class=\"category-guide-item\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #28a745 0%, #20c997 100%);\">
                                    <i class=\"icon-home\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Home Visit</h4>
                                    <p>Medical consultations conducted at the patient's home for convenience and comfort.</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                                    <i class=\"icon-building\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>In Cabinet</h4>
                                    <p>Traditional consultations conducted in a medical office or clinic setting.</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #6f42c1 0%, #764ba2 100%);\">
                                    <i class=\"icon-laptop\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Online</h4>
                                    <p>Virtual consultations via video call, phone, or digital communication platforms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-lightbulb\"></i> Tips</h3>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"tips-list\">
                            <li><strong>Be specific:</strong> Choose the type that best matches your service delivery method.</li>
                            <li><strong>Clear descriptions:</strong> Help patients understand what to expect from this category.</li>
                            <li><strong>Consistency:</strong> Use consistent naming and descriptions across similar categories.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <h4><i class=\"icon-building\"></i> In Cabinet</h4>
                <p>Traditional consultations in medical facilities with full equipment and resources.</p>
            </div>
            <div style=\"border: 1px solid #ddd; padding: 1rem; border-radius: 4px;\">
                <h4><i class=\"icon-laptop\"></i> Online</h4>
                <p>Virtual consultations via secure video conferencing for follow-ups and remote care.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid #e9ecef;
    }
    
    .page-header h1 {
        margin: 0;
        color: #495057;
        font-size: 1.8rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .category-form {
        max-width: 100%;
    }
    
    .form-group {
        margin-bottom: 2rem;
    }
    
    .form-label {
        display: block;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }
    
    .form-label.required::after {
        content: \" *\";
        color: #dc3545;
    }
    
    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #dee2e6;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #fff;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        transform: translateY(-1px);
    }
    
    .form-control:hover {
        border-color: #adb5bd;
    }
    
    .form-text {
        display: block;
        margin-top: 0.5rem;
        color: #6c757d;
        font-size: 0.875rem;
        line-height: 1.4;
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid #f1f3f4;
    }
    
    .guide-content {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .category-guide-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid transparent;
        transition: all 0.3s ease;
    }
    
    .category-guide-item:hover {
        background: #e9ecef;
        border-left-color: #667eea;
        transform: translateX(5px);
    }
    
    .guide-icon {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }
    
    .guide-text h4 {
        margin: 0 0 0.5rem 0;
        color: #495057;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .guide-text p {
        margin: 0;
        color: #6c757d;
        font-size: 0.875rem;
        line-height: 1.4;
    }
    
    .tips-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .tips-list li {
        margin-bottom: 1rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #667eea;
        font-size: 0.875rem;
        line-height: 1.4;
    }
    
    .tips-list li:last-child {
        margin-bottom: 0;
    }
    
    .tips-list strong {
        color: #495057;
    }
    
    /* Form validation styles */
    .form-control.is-invalid {
        border-color: #dc3545;
    }
    
    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
    }
    
    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .guide-content {
            gap: 1rem;
        }
        
        .category-guide-item {
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
        return "admin/categorie/new.html.twig";
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
        return array (  155 => 50,  148 => 46,  137 => 38,  134 => 37,  132 => 33,  128 => 32,  120 => 27,  116 => 26,  112 => 25,  107 => 23,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Add New Category - Admin Dashboard{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1><i class=\"icon-plus\"></i> Add New Category</h1>
                <a href=\"{{ path('admin_categorie_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"icon-arrow-left\"></i> Back to Categories
                </a>
            </div>

            <div class=\"grid_8 alpha\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-edit\"></i> Category Details</h2>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'class': 'category-form'}}) }}
                            <div class=\"form-group\">
                                {{ form_label(form.type, 'Category Type', {'attr': {'class': 'form-label required'}}) }}
                                {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.type) }}
                                <small class=\"form-text\">Select the type of medical consultation this category represents.</small>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.description, 'Description', {'attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.description, {'attr': {
                                    'class': 'form-control', 
                                    'rows': 5, 
                                    'placeholder': 'Enter a detailed description of this category type and what services it includes...'
                                }}) }}
                                {{ form_errors(form.description) }}
                                <small class=\"form-text\">Optional: Provide a description of what this consultation type includes and any specific details.</small>
                            </div>

                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg\">
                                    <i class=\"icon-save\"></i> Create Category
                                </button>
                                <a href=\"{{ path('admin_categorie_index') }}\" class=\"btn btn-secondary\">
                                    <i class=\"icon-times\"></i> Cancel
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-info-circle\"></i> Category Types Guide</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"guide-content\">
                            <div class=\"category-guide-item\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #28a745 0%, #20c997 100%);\">
                                    <i class=\"icon-home\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Home Visit</h4>
                                    <p>Medical consultations conducted at the patient's home for convenience and comfort.</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                                    <i class=\"icon-building\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>In Cabinet</h4>
                                    <p>Traditional consultations conducted in a medical office or clinic setting.</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #6f42c1 0%, #764ba2 100%);\">
                                    <i class=\"icon-laptop\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Online</h4>
                                    <p>Virtual consultations via video call, phone, or digital communication platforms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-lightbulb\"></i> Tips</h3>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"tips-list\">
                            <li><strong>Be specific:</strong> Choose the type that best matches your service delivery method.</li>
                            <li><strong>Clear descriptions:</strong> Help patients understand what to expect from this category.</li>
                            <li><strong>Consistency:</strong> Use consistent naming and descriptions across similar categories.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <h4><i class=\"icon-building\"></i> In Cabinet</h4>
                <p>Traditional consultations in medical facilities with full equipment and resources.</p>
            </div>
            <div style=\"border: 1px solid #ddd; padding: 1rem; border-radius: 4px;\">
                <h4><i class=\"icon-laptop\"></i> Online</h4>
                <p>Virtual consultations via secure video conferencing for follow-ups and remote care.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid #e9ecef;
    }
    
    .page-header h1 {
        margin: 0;
        color: #495057;
        font-size: 1.8rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .category-form {
        max-width: 100%;
    }
    
    .form-group {
        margin-bottom: 2rem;
    }
    
    .form-label {
        display: block;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }
    
    .form-label.required::after {
        content: \" *\";
        color: #dc3545;
    }
    
    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #dee2e6;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #fff;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        transform: translateY(-1px);
    }
    
    .form-control:hover {
        border-color: #adb5bd;
    }
    
    .form-text {
        display: block;
        margin-top: 0.5rem;
        color: #6c757d;
        font-size: 0.875rem;
        line-height: 1.4;
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid #f1f3f4;
    }
    
    .guide-content {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .category-guide-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid transparent;
        transition: all 0.3s ease;
    }
    
    .category-guide-item:hover {
        background: #e9ecef;
        border-left-color: #667eea;
        transform: translateX(5px);
    }
    
    .guide-icon {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }
    
    .guide-text h4 {
        margin: 0 0 0.5rem 0;
        color: #495057;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .guide-text p {
        margin: 0;
        color: #6c757d;
        font-size: 0.875rem;
        line-height: 1.4;
    }
    
    .tips-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .tips-list li {
        margin-bottom: 1rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #667eea;
        font-size: 0.875rem;
        line-height: 1.4;
    }
    
    .tips-list li:last-child {
        margin-bottom: 0;
    }
    
    .tips-list strong {
        color: #495057;
    }
    
    /* Form validation styles */
    .form-control.is-invalid {
        border-color: #dc3545;
    }
    
    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
    }
    
    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .guide-content {
            gap: 1rem;
        }
        
        .category-guide-item {
            flex-direction: column;
            text-align: center;
        }
    }
</style>
{% endblock %}
", "admin/categorie/new.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\categorie\\new.html.twig");
    }
}
