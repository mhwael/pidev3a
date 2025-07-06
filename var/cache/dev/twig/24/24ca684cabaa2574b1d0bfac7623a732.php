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

/* admin/service/edit.html.twig */
class __TwigTemplate_a04748eba75d6431c37b1e39f454db30 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service/edit.html.twig"));

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

        yield "Edit Service - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Admin Dashboard";
        
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
        yield "<div class=\"admin-page-header\">
    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <div>
            <h2><i class=\"icon-edit\"></i> Edit Service</h2>
            <p>Update service information and availability schedule</p>
        </div>
        <div style=\"display: flex; gap: 0.5rem;\">
            <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                <i class=\"icon-eye\"></i> View
            </a>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"icon-arrow-left\"></i> Back to Services
            </a>
        </div>
    </div>
</div>

<div class=\"service-form-container\">
    <div class=\"form-card\">
        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
        
        <!-- Basic Information Section -->
        <div class=\"form-section\">
            <h3><i class=\"icon-user-md\"></i> Doctor Information</h3>
            
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), 'label', ["class" => "form-label required", "label" => "Doctor Name"]);
        yield "
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), 'errors');
        yield "
                    <small class=\"form-help\">Enter the full name of the doctor</small>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group half-width\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "speciality", [], "any", false, false, false, 42), 'label', ["class" => "form-label required", "label" => "Medical Speciality"]);
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "speciality", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "speciality", [], "any", false, false, false, 44), 'errors');
        yield "
                </div>
                <div class=\"form-group half-width\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "categorie", [], "any", false, false, false, 47), 'label', ["class" => "form-label required", "label" => "Category"]);
        yield "
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "categorie", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "categorie", [], "any", false, false, false, 49), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "location", [], "any", false, false, false, 55), 'label', ["class" => "form-label required", "label" => "Practice Location"]);
        yield "
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "location", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "location", [], "any", false, false, false, 57), 'errors');
        yield "
                    <small class=\"form-help\">Enter the complete address where the doctor practices</small>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'label', ["class" => "form-label", "label" => "Description"]);
        yield "
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'errors');
        yield "
                    <small class=\"form-help\">Additional information about the doctor's experience and services</small>
                </div>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class=\"form-section\">
            <h3><i class=\"icon-phone\"></i> Contact Information</h3>
            
            <div class=\"form-row\">
                <div class=\"form-group half-width\">
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "phone", [], "any", false, false, false, 78), 'label', ["class" => "form-label", "label" => "Phone Number"]);
        yield "
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "phone", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), 'errors');
        yield "
                </div>
                <div class=\"form-group half-width\">
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'label', ["class" => "form-label", "label" => "Email Address"]);
        yield "
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group half-width\">
                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "price", [], "any", false, false, false, 91), 'label', ["class" => "form-label", "label" => "Consultation Fee"]);
        yield "
                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "price", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "price", [], "any", false, false, false, 93), 'errors');
        yield "
                    <small class=\"form-help\">Cost per consultation (optional)</small>
                </div>
                <div class=\"form-group half-width\" style=\"display: flex; align-items: center; margin-top: 2rem;\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "isActive", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-check-input", "style" => "margin-right: 0.5rem;"]]);
        yield "
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "isActive", [], "any", false, false, false, 98), 'label', ["class" => "form-check-label", "label" => "Active Service"]);
        yield "
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "isActive", [], "any", false, false, false, 99), 'errors');
        yield "
                </div>
            </div>
        </div>

        <!-- Schedule Section -->
        <div class=\"form-section\">
            <h3><i class=\"icon-calendar\"></i> Availability Schedule</h3>
            
            <div class=\"schedule-picker\">
                <div class=\"schedule-info\">
                    <p><i class=\"icon-info-circle\"></i> Update the doctor's availability schedule using the interface below:</p>
                </div>

                <!-- Simple Day/Time Selector -->
                <div class=\"availability-container\">
                    <div class=\"weekdays-grid\">
                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"monday\">
                                <span>Monday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"tuesday\">
                                <span>Tuesday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"wednesday\">
                                <span>Wednesday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"thursday\">
                                <span>Thursday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"friday\">
                                <span>Friday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"saturday\">
                                <span>Saturday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"13:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"sunday\">
                                <span>Sunday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"13:00\">
                            </div>
                        </div>
                    </div>

                    <!-- Preview -->
                    <div class=\"schedule-preview\">
                        <h4><i class=\"icon-eye\"></i> Schedule Preview</h4>
                        <div id=\"schedulePreview\" class=\"preview-content\">
                            <em>Select days and times to see the schedule preview</em>
                        </div>
                    </div>
                </div>

                <!-- Hidden field for form data -->
                ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "availableTimesString", [], "any", false, false, false, 211), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "availableTimesString", [], "any", false, false, false, 212), 'errors');
        yield "
            </div>
        </div>

        <!-- Form Actions -->
        <div class=\"form-actions\">
            ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "submit", [], "any", false, false, false, 218), 'widget', ["attr" => ["class" => "btn btn-primary btn-lg"]]);
        yield "
            <a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
        yield "\" class=\"btn btn-secondary btn-lg\">Cancel</a>
        </div>

        ";
        // line 222
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<style>
.service-form-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 1rem;
}

.form-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.form-section {
    margin-bottom: 3rem;
    padding: 1.5rem;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    background: #f8f9fa;
}

.form-section h3 {
    margin: 0 0 1.5rem 0;
    color: #2c3e50;
    font-size: 1.3rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #3498db;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.form-row {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-row .form-group {
    flex: 1;
}

.form-row .form-group.half-width {
    flex: 0 0 calc(50% - 0.75rem);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #495057;
    font-size: 0.95rem;
}

.form-label.required::after {
    content: \" *\";
    color: #e74c3c;
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
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
}

.form-help {
    display: block;
    margin-top: 0.25rem;
    font-size: 0.875rem;
    color: #6c757d;
}

/* Schedule Picker Styles */
.schedule-picker {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
}

.schedule-info {
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: #e3f2fd;
    border-radius: 6px;
    border-left: 4px solid #2196f3;
}

.schedule-info p {
    margin: 0;
    color: #1565c0;
}

.weekdays-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.weekday-item {
    border: 2px solid #e9ecef;
    border-radius: 8px;
    padding: 1rem;
    background: white;
    transition: all 0.3s ease;
}

.weekday-item:hover {
    border-color: #3498db;
    box-shadow: 0 2px 8px rgba(52, 152, 219, 0.1);
}

.weekday-item.active {
    border-color: #27ae60;
    background: #f0fff4;
}

.weekday-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.75rem;
    font-weight: 600;
    color: #495057;
    cursor: pointer;
}

.weekday-check {
    margin: 0;
}

.time-range {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    opacity: 0.5;
    transition: opacity 0.3s ease;
}

.weekday-item.active .time-range {
    opacity: 1;
}

.time-range input[type=\"time\"] {
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 0.9rem;
}

.time-range span {
    color: #6c757d;
    font-size: 0.9rem;
}

.schedule-preview {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 1.5rem;
}

.schedule-preview h4 {
    margin: 0 0 1rem 0;
    color: #495057;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.preview-content {
    line-height: 1.6;
}

.preview-content .day-schedule {
    padding: 0.5rem 0;
    border-bottom: 1px solid #e9ecef;
}

.preview-content .day-schedule:last-child {
    border-bottom: none;
}

.form-actions {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid #e9ecef;
    display: flex;
    gap: 1rem;
    justify-content: center;
}

.btn-lg {
    padding: 0.75rem 2rem;
    font-size: 1.1rem;
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
    
    .form-row .form-group.half-width {
        flex: 1;
    }
    
    .weekdays-grid {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const weekdayItems = document.querySelectorAll('.weekday-item');
    const schedulePreview = document.getElementById('schedulePreview');
    const hiddenField = document.querySelector('#";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "availableTimesString", [], "any", false, false, false, 461), "vars", [], "any", false, false, false, 461), "id", [], "any", false, false, false, 461), "html", null, true);
        yield "');

    // Load existing schedule data if available
    const existingSchedule = ";
        // line 464
        yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "availableTimes", [], "any", true, true, false, 464)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 464, $this->source); })()), "availableTimes", [], "any", false, false, false, 464), "{}")) : ("{}")));
        yield ";
    loadExistingSchedule(existingSchedule);

    // Initialize
    updateSchedulePreview();

    // Add event listeners to checkboxes and time inputs
    weekdayItems.forEach(item => {
        const checkbox = item.querySelector('.weekday-check');
        const timeInputs = item.querySelectorAll('input[type=\"time\"]');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
            updateSchedulePreview();
        });

        timeInputs.forEach(input => {
            input.addEventListener('change', updateSchedulePreview);
        });
    });

    function loadExistingSchedule(schedule) {
        if (typeof schedule === 'object' && schedule !== null) {
            weekdayItems.forEach(item => {
                const checkbox = item.querySelector('.weekday-check');
                const day = checkbox.value;
                
                if (schedule[day]) {
                    checkbox.checked = true;
                    item.classList.add('active');
                    
                    const startTime = item.querySelector('.start-time');
                    const endTime = item.querySelector('.end-time');
                    
                    if (schedule[day].start) {
                        startTime.value = schedule[day].start;
                    }
                    if (schedule[day].end) {
                        endTime.value = schedule[day].end;
                    }
                }
            });
        }
    }

    function updateSchedulePreview() {
        const schedule = {};
        const scheduleText = [];

        weekdayItems.forEach(item => {
            const checkbox = item.querySelector('.weekday-check');
            const day = checkbox.value;
            
            if (checkbox.checked) {
                const startTime = item.querySelector('.start-time').value;
                const endTime = item.querySelector('.end-time').value;
                
                schedule[day] = {
                    start: startTime,
                    end: endTime
                };

                const dayName = day.charAt(0).toUpperCase() + day.slice(1);
                scheduleText.push(`\${dayName}: \${startTime} - \${endTime}`);
            }
        });

        // Update preview
        if (scheduleText.length > 0) {
            schedulePreview.innerHTML = scheduleText.map(text => 
                `<div class=\"day-schedule\"><strong>\${text}</strong></div>`
            ).join('');
        } else {
            schedulePreview.innerHTML = '<em>Select days and times to see the schedule preview</em>';
        }

        // Update hidden field with JSON data
        hiddenField.value = JSON.stringify(schedule);
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/service/edit.html.twig";
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
        return array (  655 => 464,  649 => 461,  407 => 222,  401 => 219,  397 => 218,  388 => 212,  384 => 211,  269 => 99,  265 => 98,  261 => 97,  254 => 93,  250 => 92,  246 => 91,  237 => 85,  233 => 84,  229 => 83,  223 => 80,  219 => 79,  215 => 78,  200 => 66,  196 => 65,  192 => 64,  182 => 57,  178 => 56,  174 => 55,  165 => 49,  161 => 48,  157 => 47,  151 => 44,  147 => 43,  143 => 42,  133 => 35,  129 => 34,  125 => 33,  114 => 25,  102 => 16,  96 => 13,  87 => 6,  77 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Edit Service - {{ service.name }} - Admin Dashboard{% endblock %}

{% block body %}
<div class=\"admin-page-header\">
    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <div>
            <h2><i class=\"icon-edit\"></i> Edit Service</h2>
            <p>Update service information and availability schedule</p>
        </div>
        <div style=\"display: flex; gap: 0.5rem;\">
            <a href=\"{{ path('admin_service_show', {'id': service.id}) }}\" class=\"btn btn-info\">
                <i class=\"icon-eye\"></i> View
            </a>
            <a href=\"{{ path('admin_service_index') }}\" class=\"btn btn-secondary\">
                <i class=\"icon-arrow-left\"></i> Back to Services
            </a>
        </div>
    </div>
</div>

<div class=\"service-form-container\">
    <div class=\"form-card\">
        {{ form_start(form) }}
        
        <!-- Basic Information Section -->
        <div class=\"form-section\">
            <h3><i class=\"icon-user-md\"></i> Doctor Information</h3>
            
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.name, 'Doctor Name', {'class': 'form-label required'}) }}
                    {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.name) }}
                    <small class=\"form-help\">Enter the full name of the doctor</small>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group half-width\">
                    {{ form_label(form.speciality, 'Medical Speciality', {'class': 'form-label required'}) }}
                    {{ form_widget(form.speciality, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.speciality) }}
                </div>
                <div class=\"form-group half-width\">
                    {{ form_label(form.categorie, 'Category', {'class': 'form-label required'}) }}
                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.categorie) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.location, 'Practice Location', {'class': 'form-label required'}) }}
                    {{ form_widget(form.location, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.location) }}
                    <small class=\"form-help\">Enter the complete address where the doctor practices</small>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.description, 'Description', {'class': 'form-label'}) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.description) }}
                    <small class=\"form-help\">Additional information about the doctor's experience and services</small>
                </div>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class=\"form-section\">
            <h3><i class=\"icon-phone\"></i> Contact Information</h3>
            
            <div class=\"form-row\">
                <div class=\"form-group half-width\">
                    {{ form_label(form.phone, 'Phone Number', {'class': 'form-label'}) }}
                    {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.phone) }}
                </div>
                <div class=\"form-group half-width\">
                    {{ form_label(form.email, 'Email Address', {'class': 'form-label'}) }}
                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.email) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group half-width\">
                    {{ form_label(form.price, 'Consultation Fee', {'class': 'form-label'}) }}
                    {{ form_widget(form.price, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.price) }}
                    <small class=\"form-help\">Cost per consultation (optional)</small>
                </div>
                <div class=\"form-group half-width\" style=\"display: flex; align-items: center; margin-top: 2rem;\">
                    {{ form_widget(form.isActive, {'attr': {'class': 'form-check-input', 'style': 'margin-right: 0.5rem;'}}) }}
                    {{ form_label(form.isActive, 'Active Service', {'class': 'form-check-label'}) }}
                    {{ form_errors(form.isActive) }}
                </div>
            </div>
        </div>

        <!-- Schedule Section -->
        <div class=\"form-section\">
            <h3><i class=\"icon-calendar\"></i> Availability Schedule</h3>
            
            <div class=\"schedule-picker\">
                <div class=\"schedule-info\">
                    <p><i class=\"icon-info-circle\"></i> Update the doctor's availability schedule using the interface below:</p>
                </div>

                <!-- Simple Day/Time Selector -->
                <div class=\"availability-container\">
                    <div class=\"weekdays-grid\">
                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"monday\">
                                <span>Monday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"tuesday\">
                                <span>Tuesday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"wednesday\">
                                <span>Wednesday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"thursday\">
                                <span>Thursday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"friday\">
                                <span>Friday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"17:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"saturday\">
                                <span>Saturday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"13:00\">
                            </div>
                        </div>

                        <div class=\"weekday-item\">
                            <label class=\"weekday-label\">
                                <input type=\"checkbox\" class=\"weekday-check\" value=\"sunday\">
                                <span>Sunday</span>
                            </label>
                            <div class=\"time-range\">
                                <input type=\"time\" class=\"start-time\" value=\"09:00\">
                                <span>to</span>
                                <input type=\"time\" class=\"end-time\" value=\"13:00\">
                            </div>
                        </div>
                    </div>

                    <!-- Preview -->
                    <div class=\"schedule-preview\">
                        <h4><i class=\"icon-eye\"></i> Schedule Preview</h4>
                        <div id=\"schedulePreview\" class=\"preview-content\">
                            <em>Select days and times to see the schedule preview</em>
                        </div>
                    </div>
                </div>

                <!-- Hidden field for form data -->
                {{ form_widget(form.availableTimesString, {'attr': {'style': 'display: none;'}}) }}
                {{ form_errors(form.availableTimesString) }}
            </div>
        </div>

        <!-- Form Actions -->
        <div class=\"form-actions\">
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary btn-lg'}}) }}
            <a href=\"{{ path('admin_service_index') }}\" class=\"btn btn-secondary btn-lg\">Cancel</a>
        </div>

        {{ form_end(form) }}
    </div>
</div>

<style>
.service-form-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 1rem;
}

.form-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.form-section {
    margin-bottom: 3rem;
    padding: 1.5rem;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    background: #f8f9fa;
}

.form-section h3 {
    margin: 0 0 1.5rem 0;
    color: #2c3e50;
    font-size: 1.3rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #3498db;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.form-row {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-row .form-group {
    flex: 1;
}

.form-row .form-group.half-width {
    flex: 0 0 calc(50% - 0.75rem);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #495057;
    font-size: 0.95rem;
}

.form-label.required::after {
    content: \" *\";
    color: #e74c3c;
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
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
}

.form-help {
    display: block;
    margin-top: 0.25rem;
    font-size: 0.875rem;
    color: #6c757d;
}

/* Schedule Picker Styles */
.schedule-picker {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
}

.schedule-info {
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: #e3f2fd;
    border-radius: 6px;
    border-left: 4px solid #2196f3;
}

.schedule-info p {
    margin: 0;
    color: #1565c0;
}

.weekdays-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.weekday-item {
    border: 2px solid #e9ecef;
    border-radius: 8px;
    padding: 1rem;
    background: white;
    transition: all 0.3s ease;
}

.weekday-item:hover {
    border-color: #3498db;
    box-shadow: 0 2px 8px rgba(52, 152, 219, 0.1);
}

.weekday-item.active {
    border-color: #27ae60;
    background: #f0fff4;
}

.weekday-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.75rem;
    font-weight: 600;
    color: #495057;
    cursor: pointer;
}

.weekday-check {
    margin: 0;
}

.time-range {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    opacity: 0.5;
    transition: opacity 0.3s ease;
}

.weekday-item.active .time-range {
    opacity: 1;
}

.time-range input[type=\"time\"] {
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 0.9rem;
}

.time-range span {
    color: #6c757d;
    font-size: 0.9rem;
}

.schedule-preview {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 1.5rem;
}

.schedule-preview h4 {
    margin: 0 0 1rem 0;
    color: #495057;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.preview-content {
    line-height: 1.6;
}

.preview-content .day-schedule {
    padding: 0.5rem 0;
    border-bottom: 1px solid #e9ecef;
}

.preview-content .day-schedule:last-child {
    border-bottom: none;
}

.form-actions {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid #e9ecef;
    display: flex;
    gap: 1rem;
    justify-content: center;
}

.btn-lg {
    padding: 0.75rem 2rem;
    font-size: 1.1rem;
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
    
    .form-row .form-group.half-width {
        flex: 1;
    }
    
    .weekdays-grid {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const weekdayItems = document.querySelectorAll('.weekday-item');
    const schedulePreview = document.getElementById('schedulePreview');
    const hiddenField = document.querySelector('#{{ form.availableTimesString.vars.id }}');

    // Load existing schedule data if available
    const existingSchedule = {{ service.availableTimes|default('{}')|json_encode|raw }};
    loadExistingSchedule(existingSchedule);

    // Initialize
    updateSchedulePreview();

    // Add event listeners to checkboxes and time inputs
    weekdayItems.forEach(item => {
        const checkbox = item.querySelector('.weekday-check');
        const timeInputs = item.querySelectorAll('input[type=\"time\"]');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
            updateSchedulePreview();
        });

        timeInputs.forEach(input => {
            input.addEventListener('change', updateSchedulePreview);
        });
    });

    function loadExistingSchedule(schedule) {
        if (typeof schedule === 'object' && schedule !== null) {
            weekdayItems.forEach(item => {
                const checkbox = item.querySelector('.weekday-check');
                const day = checkbox.value;
                
                if (schedule[day]) {
                    checkbox.checked = true;
                    item.classList.add('active');
                    
                    const startTime = item.querySelector('.start-time');
                    const endTime = item.querySelector('.end-time');
                    
                    if (schedule[day].start) {
                        startTime.value = schedule[day].start;
                    }
                    if (schedule[day].end) {
                        endTime.value = schedule[day].end;
                    }
                }
            });
        }
    }

    function updateSchedulePreview() {
        const schedule = {};
        const scheduleText = [];

        weekdayItems.forEach(item => {
            const checkbox = item.querySelector('.weekday-check');
            const day = checkbox.value;
            
            if (checkbox.checked) {
                const startTime = item.querySelector('.start-time').value;
                const endTime = item.querySelector('.end-time').value;
                
                schedule[day] = {
                    start: startTime,
                    end: endTime
                };

                const dayName = day.charAt(0).toUpperCase() + day.slice(1);
                scheduleText.push(`\${dayName}: \${startTime} - \${endTime}`);
            }
        });

        // Update preview
        if (scheduleText.length > 0) {
            schedulePreview.innerHTML = scheduleText.map(text => 
                `<div class=\"day-schedule\"><strong>\${text}</strong></div>`
            ).join('');
        } else {
            schedulePreview.innerHTML = '<em>Select days and times to see the schedule preview</em>';
        }

        // Update hidden field with JSON data
        hiddenField.value = JSON.stringify(schedule);
    }
});
</script>
{% endblock %}
", "admin/service/edit.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\service\\edit.html.twig");
    }
}
