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

/* admin/service/new.html.twig */
class __TwigTemplate_c99acd8bfe8bfdc1646fd62886b159f7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service/new.html.twig"));

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

        yield "Add New Service";
        
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
            <h2><i class=\"icon-plus\"></i> Add New Service</h2>
            <p>Create a new medical service</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"icon-arrow-left\"></i> Back to Services
        </a>
    </div>
</div>

<div class=\"container\">
    <div class=\"form-container\">
        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"form-section\">
            <h3>Basic Information</h3>
            
            <div class=\"form-group\">
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'label');
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), 'widget');
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), 'errors');
        yield "
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "speciality", [], "any", false, false, false, 33), 'label');
        yield "
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "speciality", [], "any", false, false, false, 34), 'widget');
        yield "
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "speciality", [], "any", false, false, false, 35), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "categorie", [], "any", false, false, false, 38), 'label');
        yield "
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "categorie", [], "any", false, false, false, 39), 'widget');
        yield "
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "categorie", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "location", [], "any", false, false, false, 45), 'label');
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "location", [], "any", false, false, false, 46), 'widget');
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "location", [], "any", false, false, false, 47), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'label');
        yield "
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'widget');
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'errors');
        yield "
            </div>
        </div>

        <div class=\"form-section\">
            <h3>Contact Information</h3>
            
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "phone", [], "any", false, false, false, 62), 'label');
        yield "
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "phone", [], "any", false, false, false, 63), 'widget');
        yield "
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "phone", [], "any", false, false, false, 64), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'label');
        yield "
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'widget');
        yield "
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "price", [], "any", false, false, false, 75), 'label');
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "price", [], "any", false, false, false, 76), 'widget');
        yield "
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "price", [], "any", false, false, false, 77), 'errors');
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "isActive", [], "any", false, false, false, 80), 'label');
        yield "
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "isActive", [], "any", false, false, false, 81), 'widget');
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "isActive", [], "any", false, false, false, 82), 'errors');
        yield "
                </div>
            </div>
        </div>

        <div class=\"form-section\">
            <h3><i class=\"icon-calendar\"></i> Availability Schedule</h3>
            <p class=\"help-text\">Set the doctor's weekly availability using the date and time selectors below. This schedule will be used for appointment bookings.</p>
            
            <!-- Hidden field to store the schedule data -->
            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "availableTimesString", [], "any", false, false, false, 92), 'widget', ["attr" => ["style" => "display: none;", "id" => "schedule_data"]]);
        yield "
            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "availableTimesString", [], "any", false, false, false, 93), 'errors');
        yield "
            
            <!-- Weekly Schedule Builder -->
            <div class=\"weekly-schedule\">
                <div class=\"schedule-day\" data-day=\"monday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"monday\">
                            <span class=\"day-name\">Monday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"tuesday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"tuesday\">
                            <span class=\"day-name\">Tuesday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"wednesday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"wednesday\">
                            <span class=\"day-name\">Wednesday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"thursday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"thursday\">
                            <span class=\"day-name\">Thursday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"friday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"friday\">
                            <span class=\"day-name\">Friday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"saturday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"saturday\">
                            <span class=\"day-name\">Saturday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"13:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"sunday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"sunday\">
                            <span class=\"day-name\">Sunday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"13:00\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Schedule Preview -->
            <div class=\"schedule-preview\">
                <h4><i class=\"icon-eye\"></i> Schedule Preview</h4>
                <div id=\"schedule-preview-content\">
                    <em>Select days and times to see the schedule preview</em>
                </div>
            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "submit", [], "any", false, false, false, 255), 'widget');
        yield "
            <a href=\"";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
        </div>

        ";
        // line 259
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 1rem;
}

.form-container {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.form-section {
    margin-bottom: 2rem;
    padding: 1.5rem;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    background: #f8f9fa;
}

.form-section h3 {
    margin: 0 0 1rem 0;
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 0.5rem;
}

.form-row {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group {
    flex: 1;
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #495057;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

/* Schedule Builder Styles - Based on appointment booking form */
.help-text {
    color: #6c757d;
    font-style: italic;
    margin-bottom: 1.5rem;
}

.weekly-schedule {
    margin-bottom: 2rem;
}

.schedule-day {
    margin-bottom: 1rem;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    background: white;
    transition: all 0.3s ease;
}

.schedule-day.active {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.day-header {
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 6px 6px 0 0;
}

.day-toggle {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    color: #2c3e50;
    cursor: pointer;
    margin: 0;
}

.day-checkbox {
    margin: 0;
    transform: scale(1.2);
}

.day-name {
    font-size: 1.1rem;
}

.time-slots {
    padding: 1rem;
    background: white;
    border-radius: 0 0 6px 6px;
    animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
    from {
        opacity: 0;
        max-height: 0;
        padding: 0 1rem;
    }
    to {
        opacity: 1;
        max-height: 200px;
        padding: 1rem;
    }
}

.time-slots label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.5rem;
}

.schedule-preview {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 1.5rem;
    margin-top: 1.5rem;
}

.schedule-preview h4 {
    margin: 0 0 1rem 0;
    color: #2c3e50;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

#schedule-preview-content {
    line-height: 1.8;
}

.preview-day {
    padding: 0.5rem 0;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.preview-day:last-child {
    border-bottom: none;
}

.preview-day-name {
    font-weight: 600;
    color: #2c3e50;
}

.preview-day-time {
    color: #667eea;
    font-weight: 500;
}

.quick-setup {
    background: #e3f2fd;
    border: 1px solid #bbdefb;
    border-radius: 8px;
    padding: 1rem;
    margin-bottom: 1.5rem;
}

.quick-setup h4 {
    margin: 0 0 1rem 0;
    color: #1565c0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.quick-buttons {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

.form-actions {
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
    display: flex;
    gap: 1rem;
}

.btn {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    font-size: 1rem;
}

.btn-primary {
    background: #3498db;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scheduleDays = document.querySelectorAll('.schedule-day');
    const schedulePreview = document.getElementById('schedule-preview-content');
    const scheduleDataField = document.getElementById('schedule_data');

    // Initialize schedule functionality
    scheduleDays.forEach(function(dayElement) {
        const checkbox = dayElement.querySelector('.day-checkbox');
        const timeSlots = dayElement.querySelector('.time-slots');
        const startTimeInput = dayElement.querySelector('.start-time');
        const endTimeInput = dayElement.querySelector('.end-time');

        // Handle day selection
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                dayElement.classList.add('active');
                timeSlots.style.display = 'block';
            } else {
                dayElement.classList.remove('active');
                timeSlots.style.display = 'none';
            }
            updateSchedulePreview();
            updateScheduleData();
        });

        // Handle time changes
        startTimeInput.addEventListener('change', function() {
            updateSchedulePreview();
            updateScheduleData();
        });

        endTimeInput.addEventListener('change', function() {
            updateSchedulePreview();
            updateScheduleData();
        });
    });

    function updateSchedulePreview() {
        let previewHtml = '';
        let hasSchedule = false;

        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            if (checkbox.checked) {
                hasSchedule = true;
                const dayName = dayElement.querySelector('.day-name').textContent;
                const startTime = dayElement.querySelector('.start-time').value;
                const endTime = dayElement.querySelector('.end-time').value;
                
                previewHtml += '<div class=\"preview-day\">';
                previewHtml += '<span class=\"preview-day-name\">' + dayName + '</span>';
                previewHtml += '<span class=\"preview-day-time\">' + startTime + ' - ' + endTime + '</span>';
                previewHtml += '</div>';
            }
        });

        if (hasSchedule) {
            schedulePreview.innerHTML = previewHtml;
        } else {
            schedulePreview.innerHTML = '<em>Select days and times to see the schedule preview</em>';
        }
    }

    function updateScheduleData() {
        const scheduleData = {};

        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            if (checkbox.checked) {
                const day = checkbox.value;
                const startTime = dayElement.querySelector('.start-time').value;
                const endTime = dayElement.querySelector('.end-time').value;
                
                scheduleData[day] = {
                    start: startTime,
                    end: endTime
                };
            }
        });

        // Store the schedule data as JSON in the hidden field
        scheduleDataField.value = JSON.stringify(scheduleData);
    }

    // Quick setup buttons
    const quickSetupButtons = document.createElement('div');
    quickSetupButtons.className = 'quick-setup';
    quickSetupButtons.innerHTML = `
        <h4><i class=\"icon-magic\"></i> Quick Setup</h4>
        <div class=\"quick-buttons\">
            <button type=\"button\" class=\"btn btn-sm btn-info\" onclick=\"setWeekdays()\">Weekdays 9-5</button>
            <button type=\"button\" class=\"btn btn-sm btn-info\" onclick=\"setFullWeek()\">Full Week 9-5</button>
            <button type=\"button\" class=\"btn btn-sm btn-secondary\" onclick=\"clearAll()\">Clear All</button>
        </div>
    `;

    // Insert quick setup before the schedule preview
    const schedulePreviewElement = document.querySelector('.schedule-preview');
    schedulePreviewElement.parentNode.insertBefore(quickSetupButtons, schedulePreviewElement);

    // Quick setup functions
    window.setWeekdays = function() {
        ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'].forEach(function(day) {
            const dayElement = document.querySelector('[data-day=\"' + day + '\"]');
            const checkbox = dayElement.querySelector('.day-checkbox');
            checkbox.checked = true;
            checkbox.dispatchEvent(new Event('change'));
        });
    };

    window.setFullWeek = function() {
        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            checkbox.checked = true;
            checkbox.dispatchEvent(new Event('change'));
        });
    };

    window.clearAll = function() {
        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            checkbox.checked = false;
            checkbox.dispatchEvent(new Event('change'));
        });
    };
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
        return "admin/service/new.html.twig";
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
        return array (  439 => 259,  433 => 256,  429 => 255,  264 => 93,  260 => 92,  247 => 82,  243 => 81,  239 => 80,  233 => 77,  229 => 76,  225 => 75,  216 => 69,  212 => 68,  208 => 67,  202 => 64,  198 => 63,  194 => 62,  182 => 53,  178 => 52,  174 => 51,  167 => 47,  163 => 46,  159 => 45,  151 => 40,  147 => 39,  143 => 38,  137 => 35,  133 => 34,  129 => 33,  121 => 28,  117 => 27,  113 => 26,  104 => 20,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Add New Service{% endblock %}

{% block body %}
<div class=\"admin-page-header\">
    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <div>
            <h2><i class=\"icon-plus\"></i> Add New Service</h2>
            <p>Create a new medical service</p>
        </div>
        <a href=\"{{ path('admin_service_index') }}\" class=\"btn btn-secondary\">
            <i class=\"icon-arrow-left\"></i> Back to Services
        </a>
    </div>
</div>

<div class=\"container\">
    <div class=\"form-container\">
        {{ form_start(form) }}
        
        <div class=\"form-section\">
            <h3>Basic Information</h3>
            
            <div class=\"form-group\">
                {{ form_label(form.name) }}
                {{ form_widget(form.name) }}
                {{ form_errors(form.name) }}
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.speciality) }}
                    {{ form_widget(form.speciality) }}
                    {{ form_errors(form.speciality) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.categorie) }}
                    {{ form_widget(form.categorie) }}
                    {{ form_errors(form.categorie) }}
                </div>
            </div>

            <div class=\"form-group\">
                {{ form_label(form.location) }}
                {{ form_widget(form.location) }}
                {{ form_errors(form.location) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description) }}
                {{ form_errors(form.description) }}
            </div>
        </div>

        <div class=\"form-section\">
            <h3>Contact Information</h3>
            
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.phone) }}
                    {{ form_widget(form.phone) }}
                    {{ form_errors(form.phone) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email) }}
                    {{ form_errors(form.email) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.price) }}
                    {{ form_widget(form.price) }}
                    {{ form_errors(form.price) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.isActive) }}
                    {{ form_widget(form.isActive) }}
                    {{ form_errors(form.isActive) }}
                </div>
            </div>
        </div>

        <div class=\"form-section\">
            <h3><i class=\"icon-calendar\"></i> Availability Schedule</h3>
            <p class=\"help-text\">Set the doctor's weekly availability using the date and time selectors below. This schedule will be used for appointment bookings.</p>
            
            <!-- Hidden field to store the schedule data -->
            {{ form_widget(form.availableTimesString, {'attr': {'style': 'display: none;', 'id': 'schedule_data'}}) }}
            {{ form_errors(form.availableTimesString) }}
            
            <!-- Weekly Schedule Builder -->
            <div class=\"weekly-schedule\">
                <div class=\"schedule-day\" data-day=\"monday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"monday\">
                            <span class=\"day-name\">Monday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"tuesday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"tuesday\">
                            <span class=\"day-name\">Tuesday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"wednesday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"wednesday\">
                            <span class=\"day-name\">Wednesday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"thursday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"thursday\">
                            <span class=\"day-name\">Thursday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"friday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"friday\">
                            <span class=\"day-name\">Friday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"17:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"saturday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"saturday\">
                            <span class=\"day-name\">Saturday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"13:00\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"schedule-day\" data-day=\"sunday\">
                    <div class=\"day-header\">
                        <label class=\"day-toggle\">
                            <input type=\"checkbox\" class=\"day-checkbox\" value=\"sunday\">
                            <span class=\"day-name\">Sunday</span>
                        </label>
                    </div>
                    <div class=\"time-slots\" style=\"display: none;\">
                        <div class=\"form-row\">
                            <div class=\"form-group half-width\">
                                <label>Start Time</label>
                                <input type=\"time\" class=\"form-control start-time\" value=\"09:00\">
                            </div>
                            <div class=\"form-group half-width\">
                                <label>End Time</label>
                                <input type=\"time\" class=\"form-control end-time\" value=\"13:00\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Schedule Preview -->
            <div class=\"schedule-preview\">
                <h4><i class=\"icon-eye\"></i> Schedule Preview</h4>
                <div id=\"schedule-preview-content\">
                    <em>Select days and times to see the schedule preview</em>
                </div>
            </div>
        </div>

        <div class=\"form-actions\">
            {{ form_widget(form.submit) }}
            <a href=\"{{ path('admin_service_index') }}\" class=\"btn btn-secondary\">Cancel</a>
        </div>

        {{ form_end(form) }}
    </div>
</div>

<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 1rem;
}

.form-container {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.form-section {
    margin-bottom: 2rem;
    padding: 1.5rem;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    background: #f8f9fa;
}

.form-section h3 {
    margin: 0 0 1rem 0;
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 0.5rem;
}

.form-row {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group {
    flex: 1;
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #495057;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

/* Schedule Builder Styles - Based on appointment booking form */
.help-text {
    color: #6c757d;
    font-style: italic;
    margin-bottom: 1.5rem;
}

.weekly-schedule {
    margin-bottom: 2rem;
}

.schedule-day {
    margin-bottom: 1rem;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    background: white;
    transition: all 0.3s ease;
}

.schedule-day.active {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.day-header {
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 6px 6px 0 0;
}

.day-toggle {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    color: #2c3e50;
    cursor: pointer;
    margin: 0;
}

.day-checkbox {
    margin: 0;
    transform: scale(1.2);
}

.day-name {
    font-size: 1.1rem;
}

.time-slots {
    padding: 1rem;
    background: white;
    border-radius: 0 0 6px 6px;
    animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
    from {
        opacity: 0;
        max-height: 0;
        padding: 0 1rem;
    }
    to {
        opacity: 1;
        max-height: 200px;
        padding: 1rem;
    }
}

.time-slots label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.5rem;
}

.schedule-preview {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 1.5rem;
    margin-top: 1.5rem;
}

.schedule-preview h4 {
    margin: 0 0 1rem 0;
    color: #2c3e50;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

#schedule-preview-content {
    line-height: 1.8;
}

.preview-day {
    padding: 0.5rem 0;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.preview-day:last-child {
    border-bottom: none;
}

.preview-day-name {
    font-weight: 600;
    color: #2c3e50;
}

.preview-day-time {
    color: #667eea;
    font-weight: 500;
}

.quick-setup {
    background: #e3f2fd;
    border: 1px solid #bbdefb;
    border-radius: 8px;
    padding: 1rem;
    margin-bottom: 1.5rem;
}

.quick-setup h4 {
    margin: 0 0 1rem 0;
    color: #1565c0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.quick-buttons {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

.form-actions {
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
    display: flex;
    gap: 1rem;
}

.btn {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    font-size: 1rem;
}

.btn-primary {
    background: #3498db;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scheduleDays = document.querySelectorAll('.schedule-day');
    const schedulePreview = document.getElementById('schedule-preview-content');
    const scheduleDataField = document.getElementById('schedule_data');

    // Initialize schedule functionality
    scheduleDays.forEach(function(dayElement) {
        const checkbox = dayElement.querySelector('.day-checkbox');
        const timeSlots = dayElement.querySelector('.time-slots');
        const startTimeInput = dayElement.querySelector('.start-time');
        const endTimeInput = dayElement.querySelector('.end-time');

        // Handle day selection
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                dayElement.classList.add('active');
                timeSlots.style.display = 'block';
            } else {
                dayElement.classList.remove('active');
                timeSlots.style.display = 'none';
            }
            updateSchedulePreview();
            updateScheduleData();
        });

        // Handle time changes
        startTimeInput.addEventListener('change', function() {
            updateSchedulePreview();
            updateScheduleData();
        });

        endTimeInput.addEventListener('change', function() {
            updateSchedulePreview();
            updateScheduleData();
        });
    });

    function updateSchedulePreview() {
        let previewHtml = '';
        let hasSchedule = false;

        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            if (checkbox.checked) {
                hasSchedule = true;
                const dayName = dayElement.querySelector('.day-name').textContent;
                const startTime = dayElement.querySelector('.start-time').value;
                const endTime = dayElement.querySelector('.end-time').value;
                
                previewHtml += '<div class=\"preview-day\">';
                previewHtml += '<span class=\"preview-day-name\">' + dayName + '</span>';
                previewHtml += '<span class=\"preview-day-time\">' + startTime + ' - ' + endTime + '</span>';
                previewHtml += '</div>';
            }
        });

        if (hasSchedule) {
            schedulePreview.innerHTML = previewHtml;
        } else {
            schedulePreview.innerHTML = '<em>Select days and times to see the schedule preview</em>';
        }
    }

    function updateScheduleData() {
        const scheduleData = {};

        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            if (checkbox.checked) {
                const day = checkbox.value;
                const startTime = dayElement.querySelector('.start-time').value;
                const endTime = dayElement.querySelector('.end-time').value;
                
                scheduleData[day] = {
                    start: startTime,
                    end: endTime
                };
            }
        });

        // Store the schedule data as JSON in the hidden field
        scheduleDataField.value = JSON.stringify(scheduleData);
    }

    // Quick setup buttons
    const quickSetupButtons = document.createElement('div');
    quickSetupButtons.className = 'quick-setup';
    quickSetupButtons.innerHTML = `
        <h4><i class=\"icon-magic\"></i> Quick Setup</h4>
        <div class=\"quick-buttons\">
            <button type=\"button\" class=\"btn btn-sm btn-info\" onclick=\"setWeekdays()\">Weekdays 9-5</button>
            <button type=\"button\" class=\"btn btn-sm btn-info\" onclick=\"setFullWeek()\">Full Week 9-5</button>
            <button type=\"button\" class=\"btn btn-sm btn-secondary\" onclick=\"clearAll()\">Clear All</button>
        </div>
    `;

    // Insert quick setup before the schedule preview
    const schedulePreviewElement = document.querySelector('.schedule-preview');
    schedulePreviewElement.parentNode.insertBefore(quickSetupButtons, schedulePreviewElement);

    // Quick setup functions
    window.setWeekdays = function() {
        ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'].forEach(function(day) {
            const dayElement = document.querySelector('[data-day=\"' + day + '\"]');
            const checkbox = dayElement.querySelector('.day-checkbox');
            checkbox.checked = true;
            checkbox.dispatchEvent(new Event('change'));
        });
    };

    window.setFullWeek = function() {
        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            checkbox.checked = true;
            checkbox.dispatchEvent(new Event('change'));
        });
    };

    window.clearAll = function() {
        scheduleDays.forEach(function(dayElement) {
            const checkbox = dayElement.querySelector('.day-checkbox');
            checkbox.checked = false;
            checkbox.dispatchEvent(new Event('change'));
        });
    };
});
</script>
{% endblock %}
", "admin/service/new.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\service\\new.html.twig");
    }
}
