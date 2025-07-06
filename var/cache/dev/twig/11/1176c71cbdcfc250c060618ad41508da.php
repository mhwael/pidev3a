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

/* service/show.html.twig */
class __TwigTemplate_3ebf042752775cdd27b06733a84ab860 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()), "speciality", [], "any", false, false, false, 3), "html", null, true);
        
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
            <h1><i class=\"icon-user-md\"></i> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
            <p>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 10, $this->source); })()), "speciality", [], "any", false, false, false, 10), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 10, $this->source); })()), "categorie", [], "any", false, false, false, 10), "type", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
        </div>
    </div>
</section>

<div class=\"container_12\" style=\"margin-top: 2rem;\">
    <div class=\"grid_8 alpha\">
        <div class=\"service-card\">
            <h2 style=\"color: #2c3e50; margin-bottom: 1rem;\">Service Details</h2>
            
            <div style=\"margin-bottom: 2rem;\">
                <div style=\"display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;\">
                    <div>
                        <div class=\"service-name\" style=\"font-size: 1.5rem;\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "</div>
                        <div class=\"service-speciality\" style=\"font-size: 1rem;\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 24, $this->source); })()), "speciality", [], "any", false, false, false, 24), "html", null, true);
        yield "</div>
                    </div>
                    <span class=\"service-category\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 26, $this->source); })()), "categorie", [], "any", false, false, false, 26), "type", [], "any", false, false, false, 26), "html", null, true);
        yield "</span>
                </div>
                
                ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <div style=\"background: #f8f9fa; padding: 1rem; border-radius: 4px; margin: 1rem 0;\">
                        <h4 style=\"color: #2c3e50; margin-bottom: 0.5rem;\">About</h4>
                        <p style=\"color: #7f8c8d; line-height: 1.6;\">";
            // line 32
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true));
            yield "</p>
                    </div>
                ";
        }
        // line 35
        yield "            </div>
            
            <div class=\"service-details\">
                <h4 style=\"color: #2c3e50; margin-bottom: 1rem;\">Contact Information</h4>
                
                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-map-marker\"></i>
                    <div>
                        <strong>Location:</strong><br>
                        <span style=\"color: #7f8c8d;\">";
        // line 44
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 44, $this->source); })()), "location", [], "any", false, false, false, 44), "html", null, true));
        yield "</span>
                    </div>
                </div>
                
                ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 48, $this->source); })()), "phone", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-phone\"></i>
                    <div>
                        <strong>Phone:</strong><br>
                        <a href=\"tel:";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 53, $this->source); })()), "phone", [], "any", false, false, false, 53), "html", null, true);
            yield "\" style=\"color: #3498db; font-size: 1.1rem;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 53, $this->source); })()), "phone", [], "any", false, false, false, 53), "html", null, true);
            yield "</a>
                    </div>
                </div>
                ";
        }
        // line 57
        yield "                
                ";
        // line 58
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-envelope\"></i>
                    <div>
                        <strong>Email:</strong><br>
                        <a href=\"mailto:";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "html", null, true);
            yield "\" style=\"color: #3498db;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "html", null, true);
            yield "</a>
                    </div>
                </div>
                ";
        }
        // line 67
        yield "                
                ";
        // line 68
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 68, $this->source); })()), "price", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-money\"></i>
                    <div>
                        <strong>Consultation Fee:</strong><br>
                        <span style=\"font-weight: bold; color: #27ae60; font-size: 1.2rem;\">Starting from \$";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 73, $this->source); })()), "price", [], "any", false, false, false, 73), "html", null, true);
            yield "</span>
                    </div>
                </div>
                ";
        }
        // line 77
        yield "            </div>
            
            ";
        // line 79
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 79, $this->source); })()), "availableTimes", [], "any", false, false, false, 79))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "                <div style=\"margin-top: 2rem;\">
                    <h4 style=\"color: #2c3e50; margin-bottom: 1rem;\">Available Times</h4>
                    <div style=\"background: #ecf0f1; padding: 1rem; border-radius: 4px;\">
                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 83, $this->source); })()), "availableTimes", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                // line 84
                yield "                            <span style=\"background: #34495e; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; margin: 0.25rem; display: inline-block;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                yield "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['time'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                    </div>
                </div>
            ";
        }
        // line 89
        yield "            
            <div class=\"service-actions\" style=\"margin: 2rem 0; padding: 1.5rem; background: #f8f9fa; border-radius: 8px; text-align: center;\">
                <h4 style=\"color: #2c3e50; margin-bottom: 1rem;\">Ready to book an appointment?</h4>
                <p style=\"color: #7f8c8d; margin-bottom: 1.5rem;\">Schedule your consultation with ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92), "html", null, true);
        yield " today</p>
                <div class=\"action-buttons\" style=\"display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;\">
                    <a href=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_book_service", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        yield "\" class=\"btn btn-primary\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.75rem 2rem; text-decoration: none; border-radius: 8px; font-weight: 600; transition: transform 0.3s ease;\">
                        <i class=\"icon-calendar\"></i> Book Appointment
                    </a>
                    <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointments");
        yield "\" class=\"btn btn-secondary\" style=\"background: #6c757d; color: white; padding: 0.75rem 2rem; text-decoration: none; border-radius: 8px; font-weight: 600;\">
                        <i class=\"icon-list\"></i> View All Services
                    </a>
                </div>
            </div>
        </div>
        
        <div style=\"margin-top: 2rem;\">
            <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" class=\"btn\" style=\"background: #95a5a6; color: white;\">
                <i class=\"icon-arrow-left\"></i> Back to Services
            </a>
        </div>
    </div>
    
    <div class=\"grid_4 omega\">
        <div class=\"service-card\">
            <h3 style=\"color: #2c3e50; margin-bottom: 1rem;\">Quick Actions</h3>
            
            ";
        // line 115
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 115, $this->source); })()), "phone", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "                <a href=\"tel:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 116, $this->source); })()), "phone", [], "any", false, false, false, 116), "html", null, true);
            yield "\" class=\"btn\" style=\"background: #27ae60; color: white; width: 100%; margin-bottom: 1rem; text-align: center; display: block;\">
                    <i class=\"icon-phone\"></i> Call Now
                </a>
            ";
        }
        // line 120
        yield "            
            ";
        // line 121
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 121, $this->source); })()), "email", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                <a href=\"mailto:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), "html", null, true);
            yield "\" class=\"btn btn-primary\" style=\"width: 100%; margin-bottom: 1rem; text-align: center; display: block;\">
                    <i class=\"icon-envelope\"></i> Send Email
                </a>
            ";
        }
        // line 126
        yield "            
            <div style=\"background: #f8f9fa; padding: 1rem; border-radius: 4px; margin-top: 1rem;\">
                <h5 style=\"color: #2c3e50; margin-bottom: 0.5rem;\">Service Type</h5>
                <span class=\"service-category\" style=\"font-size: 0.9rem;\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 129, $this->source); })()), "categorie", [], "any", false, false, false, 129), "type", [], "any", false, false, false, 129), "html", null, true);
        yield "</span>
                
                ";
        // line 131
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 131, $this->source); })()), "categorie", [], "any", false, false, false, 131), "description", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                    <p style=\"color: #7f8c8d; font-size: 0.9rem; margin-top: 0.5rem;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 132, $this->source); })()), "categorie", [], "any", false, false, false, 132), "description", [], "any", false, false, false, 132), "html", null, true);
            yield "</p>
                ";
        }
        // line 134
        yield "            </div>
        </div>
        
        <div class=\"service-card\">
            <h3 style=\"color: #2c3e50; margin-bottom: 1rem;\">Related Services</h3>
            <p style=\"color: #7f8c8d;\">
                <a href=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services", ["category" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 140, $this->source); })()), "categorie", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140)]), "html", null, true);
        yield "\" style=\"color: #3498db;\">
                    View all ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 141, $this->source); })()), "categorie", [], "any", false, false, false, 141), "type", [], "any", false, false, false, 141), "html", null, true);
        yield " services
                </a>
            </p>
            <p style=\"color: #7f8c8d;\">
                <a href=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services", ["speciality" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 145, $this->source); })()), "speciality", [], "any", false, false, false, 145)]), "html", null, true);
        yield "\" style=\"color: #3498db;\">
                    View all ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 146, $this->source); })()), "speciality", [], "any", false, false, false, 146), "html", null, true);
        yield " specialists
                </a>
            </p>
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
        return "service/show.html.twig";
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
        return array (  347 => 146,  343 => 145,  336 => 141,  332 => 140,  324 => 134,  318 => 132,  316 => 131,  311 => 129,  306 => 126,  298 => 122,  296 => 121,  293 => 120,  285 => 116,  283 => 115,  270 => 105,  259 => 97,  253 => 94,  248 => 92,  243 => 89,  238 => 86,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  214 => 77,  207 => 73,  201 => 69,  199 => 68,  196 => 67,  187 => 63,  181 => 59,  179 => 58,  176 => 57,  167 => 53,  161 => 49,  159 => 48,  152 => 44,  141 => 35,  135 => 32,  131 => 30,  129 => 29,  123 => 26,  118 => 24,  114 => 23,  96 => 10,  92 => 9,  87 => 6,  77 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ service.name }} - {{ service.speciality }}{% endblock %}

{% block body %}
<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-user-md\"></i> {{ service.name }}</h1>
            <p>{{ service.speciality }} - {{ service.categorie.type }}</p>
        </div>
    </div>
</section>

<div class=\"container_12\" style=\"margin-top: 2rem;\">
    <div class=\"grid_8 alpha\">
        <div class=\"service-card\">
            <h2 style=\"color: #2c3e50; margin-bottom: 1rem;\">Service Details</h2>
            
            <div style=\"margin-bottom: 2rem;\">
                <div style=\"display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;\">
                    <div>
                        <div class=\"service-name\" style=\"font-size: 1.5rem;\">{{ service.name }}</div>
                        <div class=\"service-speciality\" style=\"font-size: 1rem;\">{{ service.speciality }}</div>
                    </div>
                    <span class=\"service-category\">{{ service.categorie.type }}</span>
                </div>
                
                {% if service.description %}
                    <div style=\"background: #f8f9fa; padding: 1rem; border-radius: 4px; margin: 1rem 0;\">
                        <h4 style=\"color: #2c3e50; margin-bottom: 0.5rem;\">About</h4>
                        <p style=\"color: #7f8c8d; line-height: 1.6;\">{{ service.description|nl2br }}</p>
                    </div>
                {% endif %}
            </div>
            
            <div class=\"service-details\">
                <h4 style=\"color: #2c3e50; margin-bottom: 1rem;\">Contact Information</h4>
                
                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-map-marker\"></i>
                    <div>
                        <strong>Location:</strong><br>
                        <span style=\"color: #7f8c8d;\">{{ service.location|nl2br }}</span>
                    </div>
                </div>
                
                {% if service.phone %}
                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-phone\"></i>
                    <div>
                        <strong>Phone:</strong><br>
                        <a href=\"tel:{{ service.phone }}\" style=\"color: #3498db; font-size: 1.1rem;\">{{ service.phone }}</a>
                    </div>
                </div>
                {% endif %}
                
                {% if service.email %}
                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-envelope\"></i>
                    <div>
                        <strong>Email:</strong><br>
                        <a href=\"mailto:{{ service.email }}\" style=\"color: #3498db;\">{{ service.email }}</a>
                    </div>
                </div>
                {% endif %}
                
                {% if service.price %}
                <div class=\"service-detail\" style=\"margin-bottom: 1rem;\">
                    <i class=\"icon-money\"></i>
                    <div>
                        <strong>Consultation Fee:</strong><br>
                        <span style=\"font-weight: bold; color: #27ae60; font-size: 1.2rem;\">Starting from \${{ service.price }}</span>
                    </div>
                </div>
                {% endif %}
            </div>
            
            {% if service.availableTimes is not empty %}
                <div style=\"margin-top: 2rem;\">
                    <h4 style=\"color: #2c3e50; margin-bottom: 1rem;\">Available Times</h4>
                    <div style=\"background: #ecf0f1; padding: 1rem; border-radius: 4px;\">
                        {% for time in service.availableTimes %}
                            <span style=\"background: #34495e; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; margin: 0.25rem; display: inline-block;\">{{ time }}</span>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
            
            <div class=\"service-actions\" style=\"margin: 2rem 0; padding: 1.5rem; background: #f8f9fa; border-radius: 8px; text-align: center;\">
                <h4 style=\"color: #2c3e50; margin-bottom: 1rem;\">Ready to book an appointment?</h4>
                <p style=\"color: #7f8c8d; margin-bottom: 1.5rem;\">Schedule your consultation with {{ service.name }} today</p>
                <div class=\"action-buttons\" style=\"display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;\">
                    <a href=\"{{ path('app_appointment_book_service', {'id': service.id}) }}\" class=\"btn btn-primary\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.75rem 2rem; text-decoration: none; border-radius: 8px; font-weight: 600; transition: transform 0.3s ease;\">
                        <i class=\"icon-calendar\"></i> Book Appointment
                    </a>
                    <a href=\"{{ path('app_appointments') }}\" class=\"btn btn-secondary\" style=\"background: #6c757d; color: white; padding: 0.75rem 2rem; text-decoration: none; border-radius: 8px; font-weight: 600;\">
                        <i class=\"icon-list\"></i> View All Services
                    </a>
                </div>
            </div>
        </div>
        
        <div style=\"margin-top: 2rem;\">
            <a href=\"{{ path('app_services') }}\" class=\"btn\" style=\"background: #95a5a6; color: white;\">
                <i class=\"icon-arrow-left\"></i> Back to Services
            </a>
        </div>
    </div>
    
    <div class=\"grid_4 omega\">
        <div class=\"service-card\">
            <h3 style=\"color: #2c3e50; margin-bottom: 1rem;\">Quick Actions</h3>
            
            {% if service.phone %}
                <a href=\"tel:{{ service.phone }}\" class=\"btn\" style=\"background: #27ae60; color: white; width: 100%; margin-bottom: 1rem; text-align: center; display: block;\">
                    <i class=\"icon-phone\"></i> Call Now
                </a>
            {% endif %}
            
            {% if service.email %}
                <a href=\"mailto:{{ service.email }}\" class=\"btn btn-primary\" style=\"width: 100%; margin-bottom: 1rem; text-align: center; display: block;\">
                    <i class=\"icon-envelope\"></i> Send Email
                </a>
            {% endif %}
            
            <div style=\"background: #f8f9fa; padding: 1rem; border-radius: 4px; margin-top: 1rem;\">
                <h5 style=\"color: #2c3e50; margin-bottom: 0.5rem;\">Service Type</h5>
                <span class=\"service-category\" style=\"font-size: 0.9rem;\">{{ service.categorie.type }}</span>
                
                {% if service.categorie.description %}
                    <p style=\"color: #7f8c8d; font-size: 0.9rem; margin-top: 0.5rem;\">{{ service.categorie.description }}</p>
                {% endif %}
            </div>
        </div>
        
        <div class=\"service-card\">
            <h3 style=\"color: #2c3e50; margin-bottom: 1rem;\">Related Services</h3>
            <p style=\"color: #7f8c8d;\">
                <a href=\"{{ path('app_services', {'category': service.categorie.id}) }}\" style=\"color: #3498db;\">
                    View all {{ service.categorie.type }} services
                </a>
            </p>
            <p style=\"color: #7f8c8d;\">
                <a href=\"{{ path('app_services', {'speciality': service.speciality}) }}\" style=\"color: #3498db;\">
                    View all {{ service.speciality }} specialists
                </a>
            </p>
        </div>
    </div>
</div>
{% endblock %}
", "service/show.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\service\\show.html.twig");
    }
}
