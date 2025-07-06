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

/* base.html.twig */
class __TwigTemplate_2a2508b13ea563ed9e96c1671ba1e2ed extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta charset=\"utf-8\">
    <meta name=\"format-detection\" content=\"telephone=no\" />
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\" />
    
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 101
        yield "    
    ";
        // line 102
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 113
        yield "    
    <!--[if lt IE 8]>
       <div style='clear: both; text-align:center; position: relative;'>
         <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
           <img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5shiv.js"), "html", null, true);
        yield "\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ie.css"), "html", null, true);
        yield "\">
    <![endif]-->
</head>
<body>
    <!--button back top-->
    <div id=\"back-top\"></div>    
    <div class=\"main\">
        <div class=\"div-content\">  
            <!-- Top section -->
            <div class=\"top_section\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <p>24/7 Support:<br><strong class=\"icon-phone\"></strong> +1 959 603 6035<span class=\"vline1\"></span> <strong class=\"icon-envelope-alt\"></strong> <a href=\"#\">mail@demolink.org</a></p>
                    </div>
                </div>
            </div>

            <!-- Header -->
            <header";
        // line 141
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "request", [], "any", false, false, false, 141), "get", ["_route"], "method", false, false, false, 141) != "app_home")) {
            yield " class=\"content_header\"";
        }
        yield ">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <h1><a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Salutem\"></a></h1>
                        <nav>
                            <ul class=\"sf-menu\">
                                <li";
        // line 147
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "get", ["_route"], "method", false, false, false, 147) == "app_home")) {
            yield " class=\"current\"";
        }
        yield "><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">About us</a></li>
                                <li";
        // line 148
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "get", ["_route"], "method", false, false, false, 148) == "app_services")) {
            yield " class=\"current\"";
        }
        yield "><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\"><span></span>Services</a>
                                    <ul class='submenu'>
                                        <li><a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">All Services</a></li>
                                        <li><a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services", ["category" => 1]);
        yield "\">Home Visit</a></li>
                                        <li><a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services", ["category" => 2]);
        yield "\">In Cabinet</a></li>
                                        <li><a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services", ["category" => 3]);
        yield "\">Online</a></li>
                                    </ul>
                                </li>
                                <li";
        // line 156
        if ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "request", [], "any", false, false, false, 156), "get", ["_route"], "method", false, false, false, 156), 0, 15) == "app_appointment")) {
            yield " class=\"current\"";
        }
        yield "><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointments");
        yield "\">Book Appointment</a></li>
                                <li><a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Physicians</a></li>
                                <li><a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Patient Info</a></li>
                                <li><a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contacts");
        yield "\">Contacts</a></li>
                                <li><a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_appointments");
        yield "\">My Appointments</a></li>
                                <li><a href=\"/admin/service\">Admin</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            <!-- Flash messages -->
            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "flashes", [], "any", false, false, false, 169));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 170
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 171
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
                        ";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "
            <!-- Content -->
            ";
        // line 178
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 179
        yield "
            <!-- Footer -->
            <footer style=\"background: #2c3e50; color: white; padding: 2rem 0; margin-top: 3rem;\">
                <div class=\"container_12\">
                    <div class=\"grid_4 alpha\">
                        <h3>Salutem Medical Center</h3>
                        <p>Providing quality healthcare services with professional medical staff and modern facilities.</p>
                    </div>
                    <div class=\"grid_4\">
                        <h3>Quick Links</h3>
                        <ul style=\"list-style: none; padding: 0;\">
                            <li style=\"margin-bottom: 0.5rem;\"><a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" style=\"color: #ecf0f1;\">All Services</a></li>
                            <li style=\"margin-bottom: 0.5rem;\"><a href=\"/admin/service\" style=\"color: #ecf0f1;\">Admin Panel</a></li>
                            <li style=\"margin-bottom: 0.5rem;\"><a href=\"/admin/categorie\" style=\"color: #ecf0f1;\">Manage Categories</a></li>
                        </ul>
                    </div>
                    <div class=\"grid_4 omega\">
                        <h3>Contact Info</h3>
                        <p><i class=\"icon-phone\"></i> +1 959 603 6035</p>
                        <p><i class=\"icon-envelope-alt\"></i> mail@demolink.org</p>
                        <p><i class=\"icon-map-marker\"></i> Medical Center Location</p>
                    </div>
                </div>
            </footer>

        </div>
    </div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Salutem Medical Center";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font/font-awesome.css"), "html", null, true);
        yield "\" type=\"text/css\" media=\"screen\">
        <style>
            /* Modern styling for public pages */
            .services-header {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                padding: 4rem 0;
                text-align: center;
            }
            .filter-section {
                background: #f8f9fa;
                padding: 2rem 0;
                margin-bottom: 2rem;
            }
            .service-card {
                background: white;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                margin-bottom: 2rem;
                padding: 1.5rem;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .service-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            }
            .service-name {
                font-size: 1.25rem;
                font-weight: bold;
                color: #2c3e50;
                margin-bottom: 0.25rem;
            }
            .service-speciality {
                color: #7f8c8d;
                font-size: 0.9rem;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .service-category {
                background: #3498db;
                color: white;
                padding: 0.25rem 0.75rem;
                border-radius: 20px;
                font-size: 0.8rem;
                text-transform: uppercase;
            }
            .service-detail {
                margin-bottom: 0.5rem;
                display: flex;
                align-items: center;
            }
            .service-detail i {
                width: 20px;
                margin-right: 0.5rem;
                color: #7f8c8d;
            }
            .btn {
                display: inline-block;
                padding: 0.75rem 1.5rem;
                text-decoration: none;
                border-radius: 4px;
                border: none;
                cursor: pointer;
                transition: all 0.3s;
                text-align: center;
                margin: 0.25rem;
            }
            .btn-primary {
                background: #3498db;
                color: white;
            }
            .btn-primary:hover {
                background: #2980b9;
            }
            .filter-form {
                background: white;
                padding: 1.5rem;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            .form-control {
                width: 100%;
                padding: 0.5rem;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 1rem;
            }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-1.1.1.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scroll_to_top.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.equalheights.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/superfish.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mobilemenu.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/touchTouch.jquery.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  452 => 178,  442 => 111,  438 => 110,  434 => 109,  430 => 108,  426 => 107,  422 => 106,  418 => 105,  414 => 104,  409 => 103,  399 => 102,  302 => 12,  297 => 11,  287 => 10,  270 => 4,  243 => 190,  230 => 179,  228 => 178,  224 => 176,  218 => 175,  209 => 172,  204 => 171,  199 => 170,  195 => 169,  183 => 160,  179 => 159,  175 => 158,  171 => 157,  163 => 156,  157 => 153,  153 => 152,  149 => 151,  145 => 150,  136 => 148,  128 => 147,  120 => 144,  112 => 141,  91 => 123,  87 => 122,  76 => 113,  74 => 102,  71 => 101,  69 => 10,  64 => 8,  60 => 7,  54 => 4,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{% block title %}Salutem Medical Center{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"format-detection\" content=\"telephone=no\" />
    <link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\" type=\"image/x-icon\">
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.ico') }}\" type=\"image/x-icon\" />
    
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('font/font-awesome.css') }}\" type=\"text/css\" media=\"screen\">
        <style>
            /* Modern styling for public pages */
            .services-header {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                padding: 4rem 0;
                text-align: center;
            }
            .filter-section {
                background: #f8f9fa;
                padding: 2rem 0;
                margin-bottom: 2rem;
            }
            .service-card {
                background: white;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                margin-bottom: 2rem;
                padding: 1.5rem;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .service-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            }
            .service-name {
                font-size: 1.25rem;
                font-weight: bold;
                color: #2c3e50;
                margin-bottom: 0.25rem;
            }
            .service-speciality {
                color: #7f8c8d;
                font-size: 0.9rem;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .service-category {
                background: #3498db;
                color: white;
                padding: 0.25rem 0.75rem;
                border-radius: 20px;
                font-size: 0.8rem;
                text-transform: uppercase;
            }
            .service-detail {
                margin-bottom: 0.5rem;
                display: flex;
                align-items: center;
            }
            .service-detail i {
                width: 20px;
                margin-right: 0.5rem;
                color: #7f8c8d;
            }
            .btn {
                display: inline-block;
                padding: 0.75rem 1.5rem;
                text-decoration: none;
                border-radius: 4px;
                border: none;
                cursor: pointer;
                transition: all 0.3s;
                text-align: center;
                margin: 0.25rem;
            }
            .btn-primary {
                background: #3498db;
                color: white;
            }
            .btn-primary:hover {
                background: #2980b9;
            }
            .filter-form {
                background: white;
                padding: 1.5rem;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            .form-control {
                width: 100%;
                padding: 0.5rem;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 1rem;
            }
        </style>
    {% endblock %}
    
    {% block javascripts %}
        <script src=\"{{ asset('js/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/jquery-migrate-1.1.1.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
        <script src=\"{{ asset('js/scroll_to_top.js') }}\"></script>
        <script src=\"{{ asset('js/script.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.equalheights.js') }}\"></script>
        <script src=\"{{ asset('js/superfish.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.mobilemenu.js') }}\"></script>
        <script src=\"{{ asset('js/touchTouch.jquery.js') }}\"></script>
    {% endblock %}
    
    <!--[if lt IE 8]>
       <div style='clear: both; text-align:center; position: relative;'>
         <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
           <img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src=\"{{ asset('js/html5shiv.js') }}\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/ie.css') }}\">
    <![endif]-->
</head>
<body>
    <!--button back top-->
    <div id=\"back-top\"></div>    
    <div class=\"main\">
        <div class=\"div-content\">  
            <!-- Top section -->
            <div class=\"top_section\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <p>24/7 Support:<br><strong class=\"icon-phone\"></strong> +1 959 603 6035<span class=\"vline1\"></span> <strong class=\"icon-envelope-alt\"></strong> <a href=\"#\">mail@demolink.org</a></p>
                    </div>
                </div>
            </div>

            <!-- Header -->
            <header{% if app.request.get('_route') != 'app_home' %} class=\"content_header\"{% endif %}>
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <h1><a href=\"{{ path('app_home') }}\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"Salutem\"></a></h1>
                        <nav>
                            <ul class=\"sf-menu\">
                                <li{% if app.request.get('_route') == 'app_home' %} class=\"current\"{% endif %}><a href=\"{{ path('app_services') }}\">About us</a></li>
                                <li{% if app.request.get('_route') == 'app_services' %} class=\"current\"{% endif %}><a href=\"{{ path('app_services') }}\"><span></span>Services</a>
                                    <ul class='submenu'>
                                        <li><a href=\"{{ path('app_services') }}\">All Services</a></li>
                                        <li><a href=\"{{ path('app_services', {'category': 1}) }}\">Home Visit</a></li>
                                        <li><a href=\"{{ path('app_services', {'category': 2}) }}\">In Cabinet</a></li>
                                        <li><a href=\"{{ path('app_services', {'category': 3}) }}\">Online</a></li>
                                    </ul>
                                </li>
                                <li{% if app.request.get('_route')|slice(0, 15) == 'app_appointment' %} class=\"current\"{% endif %}><a href=\"{{ path('app_appointments') }}\">Book Appointment</a></li>
                                <li><a href=\"{{ path('app_services') }}\">Physicians</a></li>
                                <li><a href=\"{{ path('app_services') }}\">Patient Info</a></li>
                                <li><a href=\"{{ path('app_contacts') }}\">Contacts</a></li>
                                <li><a href=\"{{ path('app_my_appointments') }}\">My Appointments</a></li>
                                <li><a href=\"/admin/service\">Admin</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            <!-- Flash messages -->
            {% for type, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

            <!-- Content -->
            {% block body %}{% endblock %}

            <!-- Footer -->
            <footer style=\"background: #2c3e50; color: white; padding: 2rem 0; margin-top: 3rem;\">
                <div class=\"container_12\">
                    <div class=\"grid_4 alpha\">
                        <h3>Salutem Medical Center</h3>
                        <p>Providing quality healthcare services with professional medical staff and modern facilities.</p>
                    </div>
                    <div class=\"grid_4\">
                        <h3>Quick Links</h3>
                        <ul style=\"list-style: none; padding: 0;\">
                            <li style=\"margin-bottom: 0.5rem;\"><a href=\"{{ path('app_services') }}\" style=\"color: #ecf0f1;\">All Services</a></li>
                            <li style=\"margin-bottom: 0.5rem;\"><a href=\"/admin/service\" style=\"color: #ecf0f1;\">Admin Panel</a></li>
                            <li style=\"margin-bottom: 0.5rem;\"><a href=\"/admin/categorie\" style=\"color: #ecf0f1;\">Manage Categories</a></li>
                        </ul>
                    </div>
                    <div class=\"grid_4 omega\">
                        <h3>Contact Info</h3>
                        <p><i class=\"icon-phone\"></i> +1 959 603 6035</p>
                        <p><i class=\"icon-envelope-alt\"></i> mail@demolink.org</p>
                        <p><i class=\"icon-map-marker\"></i> Medical Center Location</p>
                    </div>
                </div>
            </footer>

        </div>
    </div>
</body>
</html>
", "base.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\base.html.twig");
    }
}
