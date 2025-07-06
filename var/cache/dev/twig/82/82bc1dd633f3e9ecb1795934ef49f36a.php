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

/* home/services.html.twig */
class __TwigTemplate_e4055c68decd4a202dab47356142744d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/services.html.twig"));

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
        yield "<!--=======content================================-->
<div class=\"wrapper marBot3\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2 class=\"v3\">Services overview</h2>
            <div class=\"grid_4 alpha mobile_bottom_mar\">
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #1</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic4.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #4</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic7.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #7</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #2</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic5.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #5</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic8.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #8</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class=\"grid_4 omega\">
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #3</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page2_pic6.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #6</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"gray_bg\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Our Healthcare Specialties</h2>
            <div class=\"grid_6 alpha\">
                <ul class=\"list2\">
                    <li><a href=\"#\">Family Medicine / General Practice</a></li>
                    <li><a href=\"#\">Hospital Medicine</a></li>
                    <li><a href=\"#\">Internal Medicine</a></li>
                    <li><a href=\"#\">Allergy &amp; Asthma</a></li>
                    <li><a href=\"#\">Anesthesiology</a></li>
                    <li><a href=\"#\">Audiology &amp; Hearing Aids</a></li>
                    <li><a href=\"#\">Cardiology / Heartcare</a></li>
                    <li><a href=\"#\">Dermatology</a></li>
                    <li><a href=\"#\">Endocrinology</a></li>
                    <li><a href=\"#\">Family Medicine / General Practice</a></li>
                    <li><a href=\"#\">Gastroenterology</a></li>
                </ul>
            </div>
            <div class=\"grid_6 omega\">
                <ul class=\"list2\">
                    <li><a href=\"#\">Geriatrics</a></li>
                    <li><a href=\"#\">Gynecology / Woman's Health</a></li>
                    <li><a href=\"#\">Hematology</a></li>
                    <li><a href=\"#\">Infectious Disease</a></li>
                    <li><a href=\"#\">Nephrology</a></li>
                    <li><a href=\"#\">Neurology</a></li>
                    <li><a href=\"#\">Oncology</a></li>
                    <li><a href=\"#\">Ophthalmology / Eye Care</a></li>
                    <li><a href=\"#\">Orthopedics</a></li>
                    <li><a href=\"#\">Otolaryngology</a></li>
                    <li><a href=\"#\">Pediatrics</a></li>
                </ul>
            </div>
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
        return "home/services.html.twig";
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
        return array (  154 => 52,  146 => 47,  136 => 40,  128 => 35,  120 => 30,  110 => 23,  102 => 18,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<!--=======content================================-->
<div class=\"wrapper marBot3\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2 class=\"v3\">Services overview</h2>
            <div class=\"grid_4 alpha mobile_bottom_mar\">
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic1.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #1</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic4.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #4</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic7.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #7</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic2.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #2</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic5.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #5</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic8.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #8</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class=\"grid_4 omega\">
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic3.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #3</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page2_pic6.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Service name #6</a></h3>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"gray_bg\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Our Healthcare Specialties</h2>
            <div class=\"grid_6 alpha\">
                <ul class=\"list2\">
                    <li><a href=\"#\">Family Medicine / General Practice</a></li>
                    <li><a href=\"#\">Hospital Medicine</a></li>
                    <li><a href=\"#\">Internal Medicine</a></li>
                    <li><a href=\"#\">Allergy &amp; Asthma</a></li>
                    <li><a href=\"#\">Anesthesiology</a></li>
                    <li><a href=\"#\">Audiology &amp; Hearing Aids</a></li>
                    <li><a href=\"#\">Cardiology / Heartcare</a></li>
                    <li><a href=\"#\">Dermatology</a></li>
                    <li><a href=\"#\">Endocrinology</a></li>
                    <li><a href=\"#\">Family Medicine / General Practice</a></li>
                    <li><a href=\"#\">Gastroenterology</a></li>
                </ul>
            </div>
            <div class=\"grid_6 omega\">
                <ul class=\"list2\">
                    <li><a href=\"#\">Geriatrics</a></li>
                    <li><a href=\"#\">Gynecology / Woman's Health</a></li>
                    <li><a href=\"#\">Hematology</a></li>
                    <li><a href=\"#\">Infectious Disease</a></li>
                    <li><a href=\"#\">Nephrology</a></li>
                    <li><a href=\"#\">Neurology</a></li>
                    <li><a href=\"#\">Oncology</a></li>
                    <li><a href=\"#\">Ophthalmology / Eye Care</a></li>
                    <li><a href=\"#\">Orthopedics</a></li>
                    <li><a href=\"#\">Otolaryngology</a></li>
                    <li><a href=\"#\">Pediatrics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/services.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\home\\services.html.twig");
    }
}
