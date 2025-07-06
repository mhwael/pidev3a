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

/* admin/base.html.twig */
class __TwigTemplate_37222d9c08aa5cb69859d89d75df8c31 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "    
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 19
        yield "</head>
<body>
    <!-- Admin Header -->
    <div class=\"admin-header\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <h1><i class=\"icon-cogs\"></i> Admin Dashboard - Salutem Medical Center</h1>
            </div>
        </div>
    </div>

    <!-- Admin Navigation -->
    <div class=\"admin-nav\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <nav>
                    <ul>
                        <li><a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_index");
        yield "\" ";
        if ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "get", ["_route"], "method", false, false, false, 36), 0, 15) == "admin_categorie")) {
            yield "class=\"active\"";
        }
        yield "><i class=\"icon-list\"></i> Categories</a></li>
                        <li><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
        yield "\" ";
        if ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", ["_route"], "method", false, false, false, 37), 0, 13) == "admin_service")) {
            yield "class=\"active\"";
        }
        yield "><i class=\"icon-user-md\"></i> Services</a></li>
                        <li><a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_index");
        yield "\" ";
        if ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38), 0, 17) == "admin_appointment")) {
            yield "class=\"active\"";
        }
        yield "><i class=\"icon-calendar\"></i> Appointments</a></li>
                        <li><a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"icon-home\"></i> Back to Site</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Flash Messages -->
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 48
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                yield "            <div class=\"container_12\">
                <div class=\"grid_12\">
                    <div class=\"alert alert-";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
                        ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
    <!-- Content -->
    <div class=\"admin-content\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                ";
        // line 63
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 64
        yield "            </div>
        </div>
    </div>

    <!-- Admin Footer -->
    <footer style=\"background: #2c3e50; color: white; text-align: center; padding: 1rem 0; margin-top: 2rem;\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <p>&copy; ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Salutem Medical Center - Admin Dashboard</p>
            </div>
        </div>
    </footer>
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

        yield "Admin Dashboard - Salutem Medical Center";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font/font-awesome.css"), "html", null, true);
        yield "\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
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
        return "admin/base.html.twig";
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
        return array (  265 => 63,  255 => 17,  250 => 16,  240 => 15,  230 => 12,  226 => 11,  221 => 10,  211 => 9,  194 => 4,  179 => 72,  169 => 64,  167 => 63,  160 => 58,  154 => 57,  143 => 52,  139 => 51,  135 => 49,  130 => 48,  126 => 47,  115 => 39,  107 => 38,  99 => 37,  91 => 36,  72 => 19,  70 => 15,  67 => 14,  65 => 9,  60 => 7,  54 => 4,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{% block title %}Admin Dashboard - Salutem Medical Center{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\" type=\"image/x-icon\">
    
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('font/font-awesome.css') }}\" type=\"text/css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/admin.css') }}\">
    {% endblock %}
    
    {% block javascripts %}
        <script src=\"{{ asset('js/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/script.js') }}\"></script>
    {% endblock %}
</head>
<body>
    <!-- Admin Header -->
    <div class=\"admin-header\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <h1><i class=\"icon-cogs\"></i> Admin Dashboard - Salutem Medical Center</h1>
            </div>
        </div>
    </div>

    <!-- Admin Navigation -->
    <div class=\"admin-nav\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <nav>
                    <ul>
                        <li><a href=\"{{ path('admin_categorie_index') }}\" {% if app.request.get('_route')|slice(0, 15) == 'admin_categorie' %}class=\"active\"{% endif %}><i class=\"icon-list\"></i> Categories</a></li>
                        <li><a href=\"{{ path('admin_service_index') }}\" {% if app.request.get('_route')|slice(0, 13) == 'admin_service' %}class=\"active\"{% endif %}><i class=\"icon-user-md\"></i> Services</a></li>
                        <li><a href=\"{{ path('admin_appointment_index') }}\" {% if app.request.get('_route')|slice(0, 17) == 'admin_appointment' %}class=\"active\"{% endif %}><i class=\"icon-calendar\"></i> Appointments</a></li>
                        <li><a href=\"{{ path('app_home') }}\"><i class=\"icon-home\"></i> Back to Site</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Flash Messages -->
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"container_12\">
                <div class=\"grid_12\">
                    <div class=\"alert alert-{{ type }}\">
                        {{ message }}
                    </div>
                </div>
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Content -->
    <div class=\"admin-content\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </div>

    <!-- Admin Footer -->
    <footer style=\"background: #2c3e50; color: white; text-align: center; padding: 1rem 0; margin-top: 2rem;\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <p>&copy; {{ \"now\"|date(\"Y\") }} Salutem Medical Center - Admin Dashboard</p>
            </div>
        </div>
    </footer>
</body>
</html>
", "admin/base.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\base.html.twig");
    }
}
