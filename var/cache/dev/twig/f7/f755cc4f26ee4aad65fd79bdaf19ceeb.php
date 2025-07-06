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

/* home/physicians.html.twig */
class __TwigTemplate_e4afaffbe143454d3b6eb16d3a1bce53 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/physicians.html.twig"));

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
            <h2 class=\"v3\">Our Physicians</h2>
            <div class=\"grid_4 alpha mobile_bottom_mar\">
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page3_pic1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. John Smith</a></h3>
                    <p><strong>Cardiology / Heart Care</strong></p>
                    <p>Dr. Smith specializes in cardiovascular medicine with over 15 years of experience treating heart conditions.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page3_pic4.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Sarah Johnson</a></h3>
                    <p><strong>Internal Medicine</strong></p>
                    <p>Dr. Johnson provides comprehensive internal medicine care for adult patients with various health conditions.</p>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page3_pic2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Michael Brown</a></h3>
                    <p><strong>Family Medicine</strong></p>
                    <p>Dr. Brown offers complete family medical care for patients of all ages, from children to seniors.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page3_pic5.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Lisa Wilson</a></h3>
                    <p><strong>Pediatrics</strong></p>
                    <p>Dr. Wilson specializes in pediatric care, providing medical services for infants, children, and adolescents.</p>
                </div>
            </div>
            <div class=\"grid_4 omega\">
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page3_pic3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. David Davis</a></h3>
                    <p><strong>Orthopedics</strong></p>
                    <p>Dr. Davis is an orthopedic surgeon specializing in musculoskeletal disorders and sports injuries.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page3_pic6.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Jennifer Taylor</a></h3>
                    <p><strong>Gynecology</strong></p>
                    <p>Dr. Taylor provides comprehensive women's health services including preventive care and treatments.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"gray_bg\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Why Choose Our Doctors?</h2>
            <div class=\"grid_6 alpha\">
                <h3>Excellence in Care</h3>
                <p>Our physicians are board-certified specialists with extensive training and experience in their respective fields. They are committed to providing the highest quality medical care using the latest treatment methods and technologies.</p>
                
                <h3>Patient-Centered Approach</h3>
                <p>We believe in treating each patient as an individual with unique needs. Our doctors take the time to listen, understand, and develop personalized treatment plans that address your specific health concerns.</p>
            </div>
            <div class=\"grid_6 omega\">
                <h3>Continuing Education</h3>
                <p>Our medical staff regularly participates in continuing education programs and medical conferences to stay current with the latest advances in medical research and treatment options.</p>
                
                <h3>Collaborative Care</h3>
                <p>Our physicians work together as a team to ensure comprehensive care. When needed, they collaborate with specialists to provide the most effective treatment for complex medical conditions.</p>
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
        return "home/physicians.html.twig";
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
        return array (  143 => 47,  134 => 41,  123 => 33,  114 => 27,  103 => 19,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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
            <h2 class=\"v3\">Our Physicians</h2>
            <div class=\"grid_4 alpha mobile_bottom_mar\">
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page3_pic1.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. John Smith</a></h3>
                    <p><strong>Cardiology / Heart Care</strong></p>
                    <p>Dr. Smith specializes in cardiovascular medicine with over 15 years of experience treating heart conditions.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page3_pic4.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Sarah Johnson</a></h3>
                    <p><strong>Internal Medicine</strong></p>
                    <p>Dr. Johnson provides comprehensive internal medicine care for adult patients with various health conditions.</p>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page3_pic2.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Michael Brown</a></h3>
                    <p><strong>Family Medicine</strong></p>
                    <p>Dr. Brown offers complete family medical care for patients of all ages, from children to seniors.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page3_pic5.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Lisa Wilson</a></h3>
                    <p><strong>Pediatrics</strong></p>
                    <p>Dr. Wilson specializes in pediatric care, providing medical services for infants, children, and adolescents.</p>
                </div>
            </div>
            <div class=\"grid_4 omega\">
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page3_pic3.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. David Davis</a></h3>
                    <p><strong>Orthopedics</strong></p>
                    <p>Dr. Davis is an orthopedic surgeon specializing in musculoskeletal disorders and sports injuries.</p>
                </div>
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page3_pic6.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Dr. Jennifer Taylor</a></h3>
                    <p><strong>Gynecology</strong></p>
                    <p>Dr. Taylor provides comprehensive women's health services including preventive care and treatments.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"gray_bg\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Why Choose Our Doctors?</h2>
            <div class=\"grid_6 alpha\">
                <h3>Excellence in Care</h3>
                <p>Our physicians are board-certified specialists with extensive training and experience in their respective fields. They are committed to providing the highest quality medical care using the latest treatment methods and technologies.</p>
                
                <h3>Patient-Centered Approach</h3>
                <p>We believe in treating each patient as an individual with unique needs. Our doctors take the time to listen, understand, and develop personalized treatment plans that address your specific health concerns.</p>
            </div>
            <div class=\"grid_6 omega\">
                <h3>Continuing Education</h3>
                <p>Our medical staff regularly participates in continuing education programs and medical conferences to stay current with the latest advances in medical research and treatment options.</p>
                
                <h3>Collaborative Care</h3>
                <p>Our physicians work together as a team to ensure comprehensive care. When needed, they collaborate with specialists to provide the most effective treatment for complex medical conditions.</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/physicians.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\home\\physicians.html.twig");
    }
}
