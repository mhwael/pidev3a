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

/* appointment/book_service.html.twig */
class __TwigTemplate_c482357ea1f96517b423339b52e168b1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/book_service.html.twig"));

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
            <p>Schedule an appointment with ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"service-info-card\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-user-md\"></i> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"service-details\">
                        <div class=\"detail-item\">
                            <strong>Speciality:</strong> 
                            <span class=\"speciality-badge\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 26, $this->source); })()), "speciality", [], "any", false, false, false, 26), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"detail-item\">
                            <strong>Location:</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 29, $this->source); })()), "location", [], "any", false, false, false, 29), "html", null, true);
        yield "
                        </div>
                        ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 31, $this->source); })()), "price", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                        <div class=\"detail-item\">
                            <strong>Consultation Fee:</strong> \$";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), "html", null, true);
            yield "
                        </div>
                        ";
        }
        // line 36
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                        <div class=\"detail-item\">
                            <strong>About:</strong> ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
            yield "
                        </div>
                        ";
        }
        // line 41
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"appointment-form-container\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-edit\"></i> Appointment Details</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start');
        yield "
                    
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "service", [], "any", false, false, false, 54), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "patientName", [], "any", false, false, false, 58), 'label');
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "patientName", [], "any", false, false, false, 59), 'widget');
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "patientName", [], "any", false, false, false, 60), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'label');
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'widget');
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'errors');
        yield "
                        </div>
                        <div class=\"form-group half-width\">
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "phone", [], "any", false, false, false, 71), 'label');
        yield "
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "phone", [], "any", false, false, false, 72), 'widget');
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "phone", [], "any", false, false, false, 73), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "patientAge", [], "any", false, false, false, 79), 'label');
        yield "
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "patientAge", [], "any", false, false, false, 80), 'widget');
        yield "
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "patientAge", [], "any", false, false, false, 81), 'errors');
        yield "
                        </div>
                        <div class=\"form-group half-width\">
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "gender", [], "any", false, false, false, 84), 'label');
        yield "
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "gender", [], "any", false, false, false, 85), 'widget');
        yield "
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "gender", [], "any", false, false, false, 86), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group half-width\">
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "preferredDate", [], "any", false, false, false, 92), 'label');
        yield "
                            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "preferredDate", [], "any", false, false, false, 93), 'widget');
        yield "
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "preferredDate", [], "any", false, false, false, 94), 'errors');
        yield "
                        </div>
                        <div class=\"form-group half-width\">
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "preferredTime", [], "any", false, false, false, 97), 'label');
        yield "
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "preferredTime", [], "any", false, false, false, 98), 'widget');
        yield "
                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "preferredTime", [], "any", false, false, false, 99), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "medicalHistory", [], "any", false, false, false, 105), 'label');
        yield "
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "medicalHistory", [], "any", false, false, false, 106), 'widget');
        yield "
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "medicalHistory", [], "any", false, false, false, 107), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "message", [], "any", false, false, false, 113), 'label');
        yield "
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "message", [], "any", false, false, false, 114), 'widget');
        yield "
                            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "message", [], "any", false, false, false, 115), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-actions\">
                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "submit", [], "any", false, false, false, 120), 'widget');
        yield "
                        <a href=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Back to Service</a>
                    </div>

                    ";
        // line 124
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"grid_4\">
        <div class=\"appointment-sidebar\">
            ";
        // line 132
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 132, $this->source); })()), "availableTimes", [], "any", false, false, false, 132))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-clock-o\"></i> Available Times</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"available-times\">
                        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 139, $this->source); })()), "availableTimes", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["day"] => $context["times"]) {
                // line 140
                yield "                            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($context["times"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 141
                    yield "                            <div class=\"time-slot\">
                                <strong>";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["day"]), "html", null, true);
                    yield ":</strong>
                                <div class=\"times\">
                                    ";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["times"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                        // line 145
                        yield "                                        <span class=\"time-badge\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                        yield "</span>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['time'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    yield "                                </div>
                            </div>
                            ";
                }
                // line 150
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['day'], $context['times'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 155
        yield "
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-info-circle\"></i> Appointment Guidelines</h3>
                </div>
                <div class=\"card-body\">
                    <ul class=\"guideline-list\">
                        <li><i class=\"icon-check\"></i> Appointment confirmation required</li>
                        <li><i class=\"icon-check\"></i> Arrive 15 minutes early</li>
                        <li><i class=\"icon-check\"></i> Bring valid ID and insurance</li>
                        <li><i class=\"icon-check\"></i> Cancel 24 hours in advance</li>
                    </ul>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-phone\"></i> Contact Information</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 175
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 175, $this->source); })()), "phone", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 176
            yield "                    <p><i class=\"icon-phone\"></i> <strong>Phone:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 176, $this->source); })()), "phone", [], "any", false, false, false, 176), "html", null, true);
            yield "</p>
                    ";
        }
        // line 178
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 178, $this->source); })()), "email", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 179
            yield "                    <p><i class=\"icon-envelope\"></i> <strong>Email:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 179, $this->source); })()), "email", [], "any", false, false, false, 179), "html", null, true);
            yield "</p>
                    ";
        }
        // line 181
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<style>
.service-info-card {
    margin: 2rem 0 1rem 0;
}

.service-details {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.appointment-form-container {
    margin: 1rem 0;
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

.available-times {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.time-slot {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.times {
    display: flex;
    flex-wrap: wrap;
    gap: 0.25rem;
}

.time-badge {
    background: #f8f9fa;
    color: #495057;
    padding: 0.25rem 0.5rem;
    border-radius: 15px;
    font-size: 0.8rem;
    border: 1px solid #dee2e6;
}

.guideline-list {
    list-style: none;
    padding: 0;
}

.guideline-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f1f3f4;
}

.guideline-list li:last-child {
    border-bottom: none;
}

.guideline-list i {
    color: #28a745;
    margin-right: 0.5rem;
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
    
    .detail-item {
        flex-direction: column;
        align-items: flex-start;
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
        return "appointment/book_service.html.twig";
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
        return array (  430 => 181,  424 => 179,  421 => 178,  415 => 176,  413 => 175,  391 => 155,  385 => 151,  379 => 150,  374 => 147,  365 => 145,  361 => 144,  356 => 142,  353 => 141,  350 => 140,  346 => 139,  338 => 133,  336 => 132,  325 => 124,  319 => 121,  315 => 120,  307 => 115,  303 => 114,  299 => 113,  290 => 107,  286 => 106,  282 => 105,  273 => 99,  269 => 98,  265 => 97,  259 => 94,  255 => 93,  251 => 92,  242 => 86,  238 => 85,  234 => 84,  228 => 81,  224 => 80,  220 => 79,  211 => 73,  207 => 72,  203 => 71,  197 => 68,  193 => 67,  189 => 66,  180 => 60,  176 => 59,  172 => 58,  165 => 54,  160 => 52,  147 => 41,  141 => 38,  138 => 37,  135 => 36,  129 => 33,  126 => 32,  124 => 31,  119 => 29,  113 => 26,  104 => 20,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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
            <p>Schedule an appointment with {{ service.name }}</p>
        </div>
    </div>
</section>

<div class=\"container_12\">
    <div class=\"grid_8\">
        <div class=\"service-info-card\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2><i class=\"icon-user-md\"></i> {{ service.name }}</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"service-details\">
                        <div class=\"detail-item\">
                            <strong>Speciality:</strong> 
                            <span class=\"speciality-badge\">{{ service.speciality }}</span>
                        </div>
                        <div class=\"detail-item\">
                            <strong>Location:</strong> {{ service.location }}
                        </div>
                        {% if service.price %}
                        <div class=\"detail-item\">
                            <strong>Consultation Fee:</strong> \${{ service.price }}
                        </div>
                        {% endif %}
                        {% if service.description %}
                        <div class=\"detail-item\">
                            <strong>About:</strong> {{ service.description }}
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"appointment-form-container\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-edit\"></i> Appointment Details</h3>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    
                    {{ form_widget(form.service, {'attr': {'style': 'display: none;'}}) }}

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
                        <a href=\"{{ path('app_service_show', {'id': service.id}) }}\" class=\"btn btn-secondary\">Back to Service</a>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"grid_4\">
        <div class=\"appointment-sidebar\">
            {% if service.availableTimes is not empty %}
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-clock-o\"></i> Available Times</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"available-times\">
                        {% for day, times in service.availableTimes %}
                            {% if times is not empty %}
                            <div class=\"time-slot\">
                                <strong>{{ day|capitalize }}:</strong>
                                <div class=\"times\">
                                    {% for time in times %}
                                        <span class=\"time-badge\">{{ time }}</span>
                                    {% endfor %}
                                </div>
                            </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
            {% endif %}

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-info-circle\"></i> Appointment Guidelines</h3>
                </div>
                <div class=\"card-body\">
                    <ul class=\"guideline-list\">
                        <li><i class=\"icon-check\"></i> Appointment confirmation required</li>
                        <li><i class=\"icon-check\"></i> Arrive 15 minutes early</li>
                        <li><i class=\"icon-check\"></i> Bring valid ID and insurance</li>
                        <li><i class=\"icon-check\"></i> Cancel 24 hours in advance</li>
                    </ul>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h3><i class=\"icon-phone\"></i> Contact Information</h3>
                </div>
                <div class=\"card-body\">
                    {% if service.phone %}
                    <p><i class=\"icon-phone\"></i> <strong>Phone:</strong> {{ service.phone }}</p>
                    {% endif %}
                    {% if service.email %}
                    <p><i class=\"icon-envelope\"></i> <strong>Email:</strong> {{ service.email }}</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.service-info-card {
    margin: 2rem 0 1rem 0;
}

.service-details {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.speciality-badge {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.appointment-form-container {
    margin: 1rem 0;
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

.available-times {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.time-slot {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.times {
    display: flex;
    flex-wrap: wrap;
    gap: 0.25rem;
}

.time-badge {
    background: #f8f9fa;
    color: #495057;
    padding: 0.25rem 0.5rem;
    border-radius: 15px;
    font-size: 0.8rem;
    border: 1px solid #dee2e6;
}

.guideline-list {
    list-style: none;
    padding: 0;
}

.guideline-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f1f3f4;
}

.guideline-list li:last-child {
    border-bottom: none;
}

.guideline-list i {
    color: #28a745;
    margin-right: 0.5rem;
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
    
    .detail-item {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>
{% endblock %}
", "appointment/book_service.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\appointment\\book_service.html.twig");
    }
}
