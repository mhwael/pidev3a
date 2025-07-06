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

/* admin/categorie/edit.html.twig */
class __TwigTemplate_77d13e25eadaaaff3e93636406da9a28 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/edit.html.twig"));

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

        yield "Edit Category: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "html", null, true);
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
        yield "<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1>
                    <i class=\"icon-edit\"></i> Edit Category: 
                    ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13) == "Home Visit")) {
            // line 14
            yield "                        <i class=\"icon-home\" style=\"color: #28a745;\"></i>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15) == "In Cabinet")) {
            // line 16
            yield "                        <i class=\"icon-building\" style=\"color: #17a2b8;\"></i>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17) == "Online")) {
            // line 18
            yield "                        <i class=\"icon-laptop\" style=\"color: #6f42c1;\"></i>
                    ";
        }
        // line 20
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true);
        yield "
                </h1>
                <div class=\"btn-group\">
                    <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                        <i class=\"icon-eye\"></i> View Details
                    </a>
                    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"icon-arrow-left\"></i> Back to Categories
                    </a>
                </div>
            </div>

            <!-- Flash Messages -->
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            yield "                <div class=\"alert alert-success\">
                    <i class=\"icon-check-circle\"></i> ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["error"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            yield "                <div class=\"alert alert-danger\">
                    <i class=\"icon-exclamation-triangle\"></i> ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
            <div class=\"grid_8 alpha\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-edit\"></i> Edit Category Details</h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["class" => "category-form"]]);
        yield "
                            <div class=\"form-group\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53), 'label', ["attr" => ["class" => "form-label required"], "label" => "Category Type"]);
        yield "
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55), 'errors');
        yield "
                                <small class=\"form-text\">Select the type of medical consultation this category represents.</small>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'label', ["attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Enter a detailed description of this category type and what services it includes..."]]);
        // line 65
        yield "
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'errors');
        yield "
                                <small class=\"form-text\">Optional: Provide a description of what this consultation type includes and any specific details.</small>
                            </div>

                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg\">
                                    <i class=\"icon-save\"></i> Update Category
                                </button>
                                <a href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                                    <i class=\"icon-times\"></i> Cancel
                                </a>
                            </div>
                        ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                <!-- Current Information -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-info-circle\"></i> Current Information</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"current-info\">
                            <div class=\"info-item\">
                                <label>Category ID</label>
                                <span class=\"badge bg-light\">#";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <label>Services Count</label>
                                <span class=\"stats-badge\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 98, $this->source); })()), "servicesCount", [], "any", false, false, false, 98), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <label>Created</label>
                                <div style=\"color: #6c757d; font-size: 0.875rem;\">
                                    ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 104, $this->source); })()), "createdAt", [], "any", false, false, false, 104), "M j, Y"), "html", null, true);
        yield " at ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 104, $this->source); })()), "createdAt", [], "any", false, false, false, 104), "g:i A"), "html", null, true);
        yield "
                                </div>
                            </div>
                            
                            ";
        // line 108
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 108, $this->source); })()), "updatedAt", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                                <div class=\"info-item\">
                                    <label>Last Updated</label>
                                    <div style=\"color: #6c757d; font-size: 0.875rem;\">
                                        ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 112, $this->source); })()), "updatedAt", [], "any", false, false, false, 112), "M j, Y"), "html", null, true);
            yield " at ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 112, $this->source); })()), "updatedAt", [], "any", false, false, false, 112), "g:i A"), "html", null, true);
            yield "
                                    </div>
                                </div>
                            ";
        }
        // line 116
        yield "                        </div>
                    </div>
                </div>

                <!-- Category Guide -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-question-circle\"></i> Category Types</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"guide-content\">
                            <div class=\"category-guide-item ";
        // line 127
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 127, $this->source); })()), "type", [], "any", false, false, false, 127) == "Home Visit")) ? ("active") : (""));
        yield "\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #28a745 0%, #20c997 100%);\">
                                    <i class=\"icon-home\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Home Visit</h4>
                                    <p>At patient's location</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item ";
        // line 137
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 137, $this->source); })()), "type", [], "any", false, false, false, 137) == "In Cabinet")) ? ("active") : (""));
        yield "\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                                    <i class=\"icon-building\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>In Cabinet</h4>
                                    <p>At medical office</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item ";
        // line 147
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 147, $this->source); })()), "type", [], "any", false, false, false, 147) == "Online")) ? ("active") : (""));
        yield "\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #6f42c1 0%, #764ba2 100%);\">
                                    <i class=\"icon-laptop\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Online</h4>
                                    <p>Virtual consultation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services -->
                ";
        // line 161
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 161, $this->source); })()), "servicesCount", [], "any", false, false, false, 161) > 0)) {
            // line 162
            yield "                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3><i class=\"icon-stethoscope\"></i> Related Services</h3>
                        </div>
                        <div class=\"card-body\">
                            <p style=\"margin-bottom: 1rem; color: #6c757d; font-size: 0.875rem;\">
                                This category has <strong>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 168, $this->source); })()), "servicesCount", [], "any", false, false, false, 168), "html", null, true);
            yield "</strong> 
                                service";
            // line 169
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 169, $this->source); })()), "servicesCount", [], "any", false, false, false, 169) != 1)) {
                yield "s";
            }
            yield ".
                            </p>
                            <a href=\"";
            // line 171
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
            yield "?category=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 171, $this->source); })()), "id", [], "any", false, false, false, 171), "html", null, true);
            yield "\" class=\"btn btn-primary btn-block\">
                                <i class=\"icon-list\"></i> View Services
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 177
        yield "            </div>
        </div>
    </div>
</div>
            <div>
                <h4>Basic Information</h4>
                <p><strong>ID:</strong> ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183), "html", null, true);
        yield "</p>
                <p><strong>Type:</strong> ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 184, $this->source); })()), "type", [], "any", false, false, false, 184), "html", null, true);
        yield "</p>
                <p><strong>Services:</strong> ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 185, $this->source); })()), "servicesCount", [], "any", false, false, false, 185), "html", null, true);
        yield " service(s)</p>
            </div>
            <div>
                <h4>Timestamps</h4>
                <p><strong>Created:</strong> ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 189, $this->source); })()), "createdAt", [], "any", false, false, false, 189), "Y-m-d H:i:s"), "html", null, true);
        yield "</p>
                <p><strong>Updated:</strong> 
                    ";
        // line 191
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 191, $this->source); })()), "updatedAt", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 192
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 192, $this->source); })()), "updatedAt", [], "any", false, false, false, 192), "Y-m-d H:i:s"), "html", null, true);
            yield "
                    ";
        } else {
            // line 194
            yield "                        <em>Never updated</em>
                    ";
        }
        // line 196
        yield "                </p>
            </div>
        </div>
    </div>
</div>

";
        // line 202
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 202, $this->source); })()), "servicesCount", [], "any", false, false, false, 202) > 0)) {
            // line 203
            yield "<div class=\"card\">
    <div class=\"card-header\">
        <h3><i class=\"icon-user-md\"></i> Services in this Category (";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 205, $this->source); })()), "servicesCount", [], "any", false, false, false, 205), "html", null, true);
            yield ")</h3>
    </div>
    <div class=\"card-body\">
        <div class=\"alert alert-info\">
            <i class=\"icon-info-circle\"></i> This category has ";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 209, $this->source); })()), "servicesCount", [], "any", false, false, false, 209), "html", null, true);
            yield " service(s) assigned to it. 
            <a href=\"";
            // line 210
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_service_index");
            yield "\">Manage services</a>
        </div>
    </div>
</div>
";
        }
        // line 215
        yield "
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
    
    .current-info {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .current-info .info-item {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #667eea;
    }
    
    .current-info .info-item label {
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
    }
    
    .stats-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        min-width: 2rem;
        text-align: center;
        display: inline-block;
    }
    
    .guide-content {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .category-guide-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid transparent;
        transition: all 0.3s ease;
    }
    
    .category-guide-item:hover {
        background: #e9ecef;
        border-left-color: #667eea;
    }
    
    .category-guide-item.active {
        background: linear-gradient(135deg, #e3f2fd 0%, #f3e5f5 100%);
        border-left-color: #667eea;
        box-shadow: 0 2px 8px rgba(102, 126, 234, 0.2);
    }
    
    .guide-icon {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
        flex-shrink: 0;
    }
    
    .guide-text h4 {
        margin: 0 0 0.25rem 0;
        color: #495057;
        font-size: 0.875rem;
        font-weight: 600;
    }
    
    .guide-text p {
        margin: 0;
        color: #6c757d;
        font-size: 0.8rem;
    }
    
    .btn-group {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    .btn-block {
        width: 100%;
        text-align: center;
    }
    
    .bg-light {
        background-color: #f8f9fa !important;
        color: #6c757d !important;
    }
    
    .alert {
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: none;
    }
    
    .alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        color: #155724;
        border-left: 4px solid #28a745;
    }
    
    .alert-danger {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        color: #721c24;
        border-left: 4px solid #dc3545;
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
        
        .btn-group {
            justify-content: center;
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
        return "admin/categorie/edit.html.twig";
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
        return array (  448 => 215,  440 => 210,  436 => 209,  429 => 205,  425 => 203,  423 => 202,  415 => 196,  411 => 194,  405 => 192,  403 => 191,  398 => 189,  391 => 185,  387 => 184,  383 => 183,  375 => 177,  364 => 171,  357 => 169,  353 => 168,  345 => 162,  343 => 161,  326 => 147,  313 => 137,  300 => 127,  287 => 116,  278 => 112,  273 => 109,  271 => 108,  262 => 104,  253 => 98,  245 => 93,  227 => 78,  220 => 74,  209 => 66,  206 => 65,  204 => 61,  200 => 60,  192 => 55,  188 => 54,  184 => 53,  179 => 51,  170 => 44,  161 => 41,  158 => 40,  154 => 39,  151 => 38,  142 => 35,  139 => 34,  135 => 33,  125 => 26,  119 => 23,  112 => 20,  108 => 18,  106 => 17,  103 => 16,  101 => 15,  98 => 14,  96 => 13,  87 => 6,  77 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Edit Category: {{ categorie.type }} - Admin Dashboard{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <!-- Page Header -->
            <div class=\"page-header\">
                <h1>
                    <i class=\"icon-edit\"></i> Edit Category: 
                    {% if categorie.type == 'Home Visit' %}
                        <i class=\"icon-home\" style=\"color: #28a745;\"></i>
                    {% elseif categorie.type == 'In Cabinet' %}
                        <i class=\"icon-building\" style=\"color: #17a2b8;\"></i>
                    {% elseif categorie.type == 'Online' %}
                        <i class=\"icon-laptop\" style=\"color: #6f42c1;\"></i>
                    {% endif %}
                    {{ categorie.type }}
                </h1>
                <div class=\"btn-group\">
                    <a href=\"{{ path('admin_categorie_show', {'id': categorie.id}) }}\" class=\"btn btn-info\">
                        <i class=\"icon-eye\"></i> View Details
                    </a>
                    <a href=\"{{ path('admin_categorie_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"icon-arrow-left\"></i> Back to Categories
                    </a>
                </div>
            </div>

            <!-- Flash Messages -->
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    <i class=\"icon-check-circle\"></i> {{ message }}
                </div>
            {% endfor %}

            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">
                    <i class=\"icon-exclamation-triangle\"></i> {{ message }}
                </div>
            {% endfor %}

            <div class=\"grid_8 alpha\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2><i class=\"icon-edit\"></i> Edit Category Details</h2>
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
                                    <i class=\"icon-save\"></i> Update Category
                                </button>
                                <a href=\"{{ path('admin_categorie_show', {'id': categorie.id}) }}\" class=\"btn btn-secondary\">
                                    <i class=\"icon-times\"></i> Cancel
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                <!-- Current Information -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-info-circle\"></i> Current Information</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"current-info\">
                            <div class=\"info-item\">
                                <label>Category ID</label>
                                <span class=\"badge bg-light\">#{{ categorie.id }}</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <label>Services Count</label>
                                <span class=\"stats-badge\">{{ categorie.servicesCount }}</span>
                            </div>
                            
                            <div class=\"info-item\">
                                <label>Created</label>
                                <div style=\"color: #6c757d; font-size: 0.875rem;\">
                                    {{ categorie.createdAt|date('M j, Y') }} at {{ categorie.createdAt|date('g:i A') }}
                                </div>
                            </div>
                            
                            {% if categorie.updatedAt %}
                                <div class=\"info-item\">
                                    <label>Last Updated</label>
                                    <div style=\"color: #6c757d; font-size: 0.875rem;\">
                                        {{ categorie.updatedAt|date('M j, Y') }} at {{ categorie.updatedAt|date('g:i A') }}
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <!-- Category Guide -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><i class=\"icon-question-circle\"></i> Category Types</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"guide-content\">
                            <div class=\"category-guide-item {{ categorie.type == 'Home Visit' ? 'active' : '' }}\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #28a745 0%, #20c997 100%);\">
                                    <i class=\"icon-home\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Home Visit</h4>
                                    <p>At patient's location</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item {{ categorie.type == 'In Cabinet' ? 'active' : '' }}\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);\">
                                    <i class=\"icon-building\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>In Cabinet</h4>
                                    <p>At medical office</p>
                                </div>
                            </div>
                            
                            <div class=\"category-guide-item {{ categorie.type == 'Online' ? 'active' : '' }}\">
                                <div class=\"guide-icon\" style=\"background: linear-gradient(135deg, #6f42c1 0%, #764ba2 100%);\">
                                    <i class=\"icon-laptop\"></i>
                                </div>
                                <div class=\"guide-text\">
                                    <h4>Online</h4>
                                    <p>Virtual consultation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services -->
                {% if categorie.servicesCount > 0 %}
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3><i class=\"icon-stethoscope\"></i> Related Services</h3>
                        </div>
                        <div class=\"card-body\">
                            <p style=\"margin-bottom: 1rem; color: #6c757d; font-size: 0.875rem;\">
                                This category has <strong>{{ categorie.servicesCount }}</strong> 
                                service{% if categorie.servicesCount != 1 %}s{% endif %}.
                            </p>
                            <a href=\"{{ path('admin_service_index') }}?category={{ categorie.id }}\" class=\"btn btn-primary btn-block\">
                                <i class=\"icon-list\"></i> View Services
                            </a>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
            <div>
                <h4>Basic Information</h4>
                <p><strong>ID:</strong> {{ categorie.id }}</p>
                <p><strong>Type:</strong> {{ categorie.type }}</p>
                <p><strong>Services:</strong> {{ categorie.servicesCount }} service(s)</p>
            </div>
            <div>
                <h4>Timestamps</h4>
                <p><strong>Created:</strong> {{ categorie.createdAt|date('Y-m-d H:i:s') }}</p>
                <p><strong>Updated:</strong> 
                    {% if categorie.updatedAt %}
                        {{ categorie.updatedAt|date('Y-m-d H:i:s') }}
                    {% else %}
                        <em>Never updated</em>
                    {% endif %}
                </p>
            </div>
        </div>
    </div>
</div>

{% if categorie.servicesCount > 0 %}
<div class=\"card\">
    <div class=\"card-header\">
        <h3><i class=\"icon-user-md\"></i> Services in this Category ({{ categorie.servicesCount }})</h3>
    </div>
    <div class=\"card-body\">
        <div class=\"alert alert-info\">
            <i class=\"icon-info-circle\"></i> This category has {{ categorie.servicesCount }} service(s) assigned to it. 
            <a href=\"{{ path('admin_service_index') }}\">Manage services</a>
        </div>
    </div>
</div>
{% endif %}

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
    
    .current-info {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .current-info .info-item {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 6px;
        border-left: 3px solid #667eea;
    }
    
    .current-info .info-item label {
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
    }
    
    .stats-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        min-width: 2rem;
        text-align: center;
        display: inline-block;
    }
    
    .guide-content {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .category-guide-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid transparent;
        transition: all 0.3s ease;
    }
    
    .category-guide-item:hover {
        background: #e9ecef;
        border-left-color: #667eea;
    }
    
    .category-guide-item.active {
        background: linear-gradient(135deg, #e3f2fd 0%, #f3e5f5 100%);
        border-left-color: #667eea;
        box-shadow: 0 2px 8px rgba(102, 126, 234, 0.2);
    }
    
    .guide-icon {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
        flex-shrink: 0;
    }
    
    .guide-text h4 {
        margin: 0 0 0.25rem 0;
        color: #495057;
        font-size: 0.875rem;
        font-weight: 600;
    }
    
    .guide-text p {
        margin: 0;
        color: #6c757d;
        font-size: 0.8rem;
    }
    
    .btn-group {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    .btn-block {
        width: 100%;
        text-align: center;
    }
    
    .bg-light {
        background-color: #f8f9fa !important;
        color: #6c757d !important;
    }
    
    .alert {
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: none;
    }
    
    .alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        color: #155724;
        border-left: 4px solid #28a745;
    }
    
    .alert-danger {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        color: #721c24;
        border-left: 4px solid #dc3545;
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
        
        .btn-group {
            justify-content: center;
        }
    }
</style>
{% endblock %}
", "admin/categorie/edit.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\categorie\\edit.html.twig");
    }
}
