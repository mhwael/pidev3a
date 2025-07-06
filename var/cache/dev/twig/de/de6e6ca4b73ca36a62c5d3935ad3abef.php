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

/* service/index.html.twig */
class __TwigTemplate_5a74ab8da8d1bffc881af412c42f3701 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

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

        yield "Medical Services - Salutem Medical Center";
        
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
            <h1><i class=\"icon-hospital\"></i> Medical Services</h1>
            <p>Find the best medical services and specialists</p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<div class=\"filter-section\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"filter-form\">
                <form method=\"GET\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">
                    <div class=\"grid_12\">
                        <h3 style=\"margin-bottom: 1rem; color: #2c3e50;\">Filter Services</h3>
                    </div>
                    
                    <div class=\"grid_3 alpha\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Search</label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Doctor name, location...\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </div>
                    
                    <div class=\"grid_3\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Category</label>
                            <select name=\"category\" class=\"form-control\">
                                <option value=\"\">All Categories</option>
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 38
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\" ";
            if (((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 38, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 38))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "type", [], "any", false, false, false, 39), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                            </select>
                        </div>
                    </div>
                    
                    <div class=\"grid_3\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Speciality</label>
                            <select name=\"speciality\" class=\"form-control\">
                                <option value=\"\">All Specialities</option>
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specialities"]) || array_key_exists("specialities", $context) ? $context["specialities"] : (function () { throw new RuntimeError('Variable "specialities" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
            // line 52
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["speciality"], "html", null, true);
            yield "\" ";
            if (((isset($context["currentSpeciality"]) || array_key_exists("currentSpeciality", $context) ? $context["currentSpeciality"] : (function () { throw new RuntimeError('Variable "currentSpeciality" does not exist.', 52, $this->source); })()) == $context["speciality"])) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["speciality"], "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['speciality'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                            </select>
                        </div>
                    </div>
                    
                    <div class=\"grid_3 omega\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">&nbsp;</label>
                            <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">
                                <i class=\"icon-search\"></i> Filter
                            </button>
                        </div>
                    </div>
                    
                    <div class=\"clear\"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Services List -->
<div class=\"container_12\">
    <div class=\"grid_12\">
        ";
        // line 79
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 79, $this->source); })()))) {
            // line 80
            yield "            <div style=\"text-align: center; padding: 4rem 0;\">
                <i class=\"icon-info-sign\" style=\"font-size: 4rem; color: #7f8c8d; margin-bottom: 1rem;\"></i>
                <h3 style=\"color: #7f8c8d;\">No services found</h3>
                <p style=\"color: #95a5a6;\">Try adjusting your filters or search terms.</p>
                <a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
            yield "\" class=\"btn btn-primary\">View All Services</a>
            </div>
        ";
        } else {
            // line 87
            yield "            <div style=\"margin-bottom: 2rem;\">
                <h2 style=\"color: #2c3e50;\">Available Services (";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 88, $this->source); })())), "html", null, true);
            yield ")</h2>
                ";
            // line 89
            if ((((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 89, $this->source); })()) || (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 89, $this->source); })())) || (isset($context["currentSpeciality"]) || array_key_exists("currentSpeciality", $context) ? $context["currentSpeciality"] : (function () { throw new RuntimeError('Variable "currentSpeciality" does not exist.', 89, $this->source); })()))) {
                // line 90
                yield "                    <p style=\"color: #7f8c8d;\">
                        Filtered results
                        ";
                // line 92
                if ((($tmp = (isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 92, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " for \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 92, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 93
                yield "                        ";
                if ((($tmp = (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 93, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " 
                            ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 94, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 95
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 95) == (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 95, $this->source); })()))) {
                            yield " in ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "type", [], "any", false, false, false, 95), "html", null, true);
                        }
                        // line 96
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    yield "                        ";
                }
                // line 98
                yield "                        ";
                if ((($tmp = (isset($context["currentSpeciality"]) || array_key_exists("currentSpeciality", $context) ? $context["currentSpeciality"] : (function () { throw new RuntimeError('Variable "currentSpeciality" does not exist.', 98, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " specializing in ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentSpeciality"]) || array_key_exists("currentSpeciality", $context) ? $context["currentSpeciality"] : (function () { throw new RuntimeError('Variable "currentSpeciality" does not exist.', 98, $this->source); })()), "html", null, true);
                }
                // line 99
                yield "                    </p>
                ";
            }
            // line 101
            yield "            </div>
            
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 104
                yield "                <div class=\"service-card\">
                    <div style=\"display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;\">
                        <div>
                            <div class=\"service-name\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 107), "html", null, true);
                yield "</div>
                            <div class=\"service-speciality\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "speciality", [], "any", false, false, false, 108), "html", null, true);
                yield "</div>
                        </div>
                        <span class=\"service-category\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "categorie", [], "any", false, false, false, 110), "type", [], "any", false, false, false, 110), "html", null, true);
                yield "</span>
                    </div>
                    
                    ";
                // line 113
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "                        <p style=\"color: #7f8c8d; margin-bottom: 1rem;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 114), 0, 200), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 114)) > 200)) {
                        yield "...";
                    }
                    yield "</p>
                    ";
                }
                // line 116
                yield "                    
                    <div class=\"service-details\">
                        <div class=\"service-detail\">
                            <i class=\"icon-map-marker\"></i>
                            <span>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "location", [], "any", false, false, false, 120), 0, 80), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "location", [], "any", false, false, false, 120)) > 80)) {
                    yield "...";
                }
                yield "</span>
                        </div>
                        
                        ";
                // line 123
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "phone", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 124
                    yield "                        <div class=\"service-detail\">
                            <i class=\"icon-phone\"></i>
                            <a href=\"tel:";
                    // line 126
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "phone", [], "any", false, false, false, 126), "html", null, true);
                    yield "\" style=\"color: #3498db;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "phone", [], "any", false, false, false, 126), "html", null, true);
                    yield "</a>
                        </div>
                        ";
                }
                // line 129
                yield "                        
                        ";
                // line 130
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "email", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 131
                    yield "                        <div class=\"service-detail\">
                            <i class=\"icon-envelope\"></i>
                            <a href=\"mailto:";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "email", [], "any", false, false, false, 133), "html", null, true);
                    yield "\" style=\"color: #3498db;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "email", [], "any", false, false, false, 133), "html", null, true);
                    yield "</a>
                        </div>
                        ";
                }
                // line 136
                yield "                        
                        ";
                // line 137
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 138
                    yield "                        <div class=\"service-detail\">
                            <i class=\"icon-money\"></i>
                            <span style=\"font-weight: bold; color: #27ae60;\">Starting from \$";
                    // line 140
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 140), "html", null, true);
                    yield "</span>
                        </div>
                        ";
                }
                // line 143
                yield "                    </div>
                    
                    ";
                // line 145
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "availableTimes", [], "any", false, false, false, 145))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 146
                    yield "                        <div style=\"background: #ecf0f1; padding: 0.75rem; border-radius: 4px; margin-top: 1rem;\">
                            <strong style=\"color: #2c3e50;\">Available Times:</strong><br>
                            ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "availableTimes", [], "any", false, false, false, 148));
                    foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
                        // line 149
                        yield "                                <span style=\"background: #34495e; color: white; padding: 0.25rem 0.5rem; border-radius: 15px; font-size: 0.8rem; margin: 0.25rem 0.25rem 0.25rem 0; display: inline-block;\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                        yield "</span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['time'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    yield "                        </div>
                    ";
                }
                // line 153
                yield "                    
                    <div style=\"margin-top: 1.5rem;\">
                        <a href=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
                            <i class=\"icon-info-sign\"></i> View Details
                        </a>
                        <a href=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_book_service", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                yield "\" class=\"btn\" style=\"background: #e67e22; color: white;\">
                            <i class=\"icon-calendar\"></i> Book Appointment
                        </a>
                        ";
                // line 161
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "phone", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 162
                    yield "                            <a href=\"tel:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "phone", [], "any", false, false, false, 162), "html", null, true);
                    yield "\" class=\"btn\" style=\"background: #27ae60; color: white;\">
                                <i class=\"icon-phone\"></i> Call Now
                            </a>
                        ";
                }
                // line 166
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "        ";
        }
        // line 170
        yield "    </div>
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
        return "service/index.html.twig";
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
        return array (  435 => 170,  432 => 169,  424 => 166,  416 => 162,  414 => 161,  408 => 158,  402 => 155,  398 => 153,  394 => 151,  385 => 149,  381 => 148,  377 => 146,  375 => 145,  371 => 143,  365 => 140,  361 => 138,  359 => 137,  356 => 136,  348 => 133,  344 => 131,  342 => 130,  339 => 129,  331 => 126,  327 => 124,  325 => 123,  316 => 120,  310 => 116,  301 => 114,  299 => 113,  293 => 110,  288 => 108,  284 => 107,  279 => 104,  275 => 103,  271 => 101,  267 => 99,  261 => 98,  258 => 97,  252 => 96,  246 => 95,  242 => 94,  237 => 93,  231 => 92,  227 => 90,  225 => 89,  221 => 88,  218 => 87,  212 => 84,  206 => 80,  204 => 79,  179 => 56,  170 => 53,  161 => 52,  157 => 51,  146 => 42,  137 => 39,  128 => 38,  124 => 37,  112 => 28,  101 => 20,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Medical Services - Salutem Medical Center{% endblock %}

{% block body %}
<section class=\"services-header\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h1><i class=\"icon-hospital\"></i> Medical Services</h1>
            <p>Find the best medical services and specialists</p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<div class=\"filter-section\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"filter-form\">
                <form method=\"GET\" action=\"{{ path('app_services') }}\">
                    <div class=\"grid_12\">
                        <h3 style=\"margin-bottom: 1rem; color: #2c3e50;\">Filter Services</h3>
                    </div>
                    
                    <div class=\"grid_3 alpha\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Search</label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Doctor name, location...\" value=\"{{ currentSearch }}\">
                        </div>
                    </div>
                    
                    <div class=\"grid_3\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Category</label>
                            <select name=\"category\" class=\"form-control\">
                                <option value=\"\">All Categories</option>
                                {% for category in categories %}
                                    <option value=\"{{ category.id }}\" {% if currentCategory == category.id %}selected{% endif %}>
                                        {{ category.type }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    
                    <div class=\"grid_3\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Speciality</label>
                            <select name=\"speciality\" class=\"form-control\">
                                <option value=\"\">All Specialities</option>
                                {% for speciality in specialities %}
                                    <option value=\"{{ speciality }}\" {% if currentSpeciality == speciality %}selected{% endif %}>
                                        {{ speciality }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    
                    <div class=\"grid_3 omega\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">&nbsp;</label>
                            <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">
                                <i class=\"icon-search\"></i> Filter
                            </button>
                        </div>
                    </div>
                    
                    <div class=\"clear\"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Services List -->
<div class=\"container_12\">
    <div class=\"grid_12\">
        {% if services is empty %}
            <div style=\"text-align: center; padding: 4rem 0;\">
                <i class=\"icon-info-sign\" style=\"font-size: 4rem; color: #7f8c8d; margin-bottom: 1rem;\"></i>
                <h3 style=\"color: #7f8c8d;\">No services found</h3>
                <p style=\"color: #95a5a6;\">Try adjusting your filters or search terms.</p>
                <a href=\"{{ path('app_services') }}\" class=\"btn btn-primary\">View All Services</a>
            </div>
        {% else %}
            <div style=\"margin-bottom: 2rem;\">
                <h2 style=\"color: #2c3e50;\">Available Services ({{ services|length }})</h2>
                {% if currentSearch or currentCategory or currentSpeciality %}
                    <p style=\"color: #7f8c8d;\">
                        Filtered results
                        {% if currentSearch %} for \"{{ currentSearch }}\"{% endif %}
                        {% if currentCategory %} 
                            {% for category in categories %}
                                {% if category.id == currentCategory %} in {{ category.type }}{% endif %}
                            {% endfor %}
                        {% endif %}
                        {% if currentSpeciality %} specializing in {{ currentSpeciality }}{% endif %}
                    </p>
                {% endif %}
            </div>
            
            {% for service in services %}
                <div class=\"service-card\">
                    <div style=\"display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;\">
                        <div>
                            <div class=\"service-name\">{{ service.name }}</div>
                            <div class=\"service-speciality\">{{ service.speciality }}</div>
                        </div>
                        <span class=\"service-category\">{{ service.categorie.type }}</span>
                    </div>
                    
                    {% if service.description %}
                        <p style=\"color: #7f8c8d; margin-bottom: 1rem;\">{{ service.description|slice(0, 200) }}{% if service.description|length > 200 %}...{% endif %}</p>
                    {% endif %}
                    
                    <div class=\"service-details\">
                        <div class=\"service-detail\">
                            <i class=\"icon-map-marker\"></i>
                            <span>{{ service.location|slice(0, 80) }}{% if service.location|length > 80 %}...{% endif %}</span>
                        </div>
                        
                        {% if service.phone %}
                        <div class=\"service-detail\">
                            <i class=\"icon-phone\"></i>
                            <a href=\"tel:{{ service.phone }}\" style=\"color: #3498db;\">{{ service.phone }}</a>
                        </div>
                        {% endif %}
                        
                        {% if service.email %}
                        <div class=\"service-detail\">
                            <i class=\"icon-envelope\"></i>
                            <a href=\"mailto:{{ service.email }}\" style=\"color: #3498db;\">{{ service.email }}</a>
                        </div>
                        {% endif %}
                        
                        {% if service.price %}
                        <div class=\"service-detail\">
                            <i class=\"icon-money\"></i>
                            <span style=\"font-weight: bold; color: #27ae60;\">Starting from \${{ service.price }}</span>
                        </div>
                        {% endif %}
                    </div>
                    
                    {% if service.availableTimes is not empty %}
                        <div style=\"background: #ecf0f1; padding: 0.75rem; border-radius: 4px; margin-top: 1rem;\">
                            <strong style=\"color: #2c3e50;\">Available Times:</strong><br>
                            {% for time in service.availableTimes %}
                                <span style=\"background: #34495e; color: white; padding: 0.25rem 0.5rem; border-radius: 15px; font-size: 0.8rem; margin: 0.25rem 0.25rem 0.25rem 0; display: inline-block;\">{{ time }}</span>
                            {% endfor %}
                        </div>
                    {% endif %}
                    
                    <div style=\"margin-top: 1.5rem;\">
                        <a href=\"{{ path('app_service_show', {'id': service.id}) }}\" class=\"btn btn-primary\">
                            <i class=\"icon-info-sign\"></i> View Details
                        </a>
                        <a href=\"{{ path('app_appointment_book_service', {'id': service.id}) }}\" class=\"btn\" style=\"background: #e67e22; color: white;\">
                            <i class=\"icon-calendar\"></i> Book Appointment
                        </a>
                        {% if service.phone %}
                            <a href=\"tel:{{ service.phone }}\" class=\"btn\" style=\"background: #27ae60; color: white;\">
                                <i class=\"icon-phone\"></i> Call Now
                            </a>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
</div>
{% endblock %}
", "service/index.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\service\\index.html.twig");
    }
}
