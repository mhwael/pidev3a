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

/* home/blog.html.twig */
class __TwigTemplate_fc7fc99f2936068df53e843dbb6b3bda extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog.html.twig"));

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
            <h2 class=\"v3\">Health & Medical Blog</h2>
            <div class=\"grid_8 alpha mobile_bottom_mar\">
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page4_pic1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">5 Tips for Maintaining Heart Health</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> December 15, 2024 | <strong>By:</strong> Dr. John Smith | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>5 Comments</a></p>
                    <p>Cardiovascular disease remains one of the leading causes of death worldwide. However, many heart conditions can be prevented through proper lifestyle choices and regular medical care. Here are five essential tips to keep your heart healthy...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
                
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page4_pic2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">The Importance of Regular Health Screenings</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> December 10, 2024 | <strong>By:</strong> Dr. Sarah Johnson | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>3 Comments</a></p>
                    <p>Preventive care is one of the most important aspects of maintaining good health. Regular health screenings can help detect potential health issues early, when they are most treatable. Learn about which screenings you should consider...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
                
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page4_pic3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Managing Stress for Better Health</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> December 5, 2024 | <strong>By:</strong> Dr. Lisa Wilson | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>8 Comments</a></p>
                    <p>Chronic stress can have serious negative effects on both physical and mental health. Learning effective stress management techniques is crucial for overall well-being. Discover practical strategies to reduce stress in your daily life...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
                
                <div class=\"wrapper marBot2\">
                    <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page4_pic4.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Nutrition Tips for Optimal Health</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> November 28, 2024 | <strong>By:</strong> Dr. Michael Brown | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>12 Comments</a></p>
                    <p>Proper nutrition plays a vital role in maintaining good health and preventing chronic diseases. A balanced diet can boost your immune system, improve energy levels, and support overall well-being. Learn about the key components of a healthy diet...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
            </div>
            
            <div class=\"grid_4 omega\">
                <h3>Recent Posts</h3>
                <ul class=\"list3\">
                    <li><a href=\"#\">Understanding Diabetes Management</a><br><small>December 12, 2024</small></li>
                    <li><a href=\"#\">Winter Wellness Tips</a><br><small>December 8, 2024</small></li>
                    <li><a href=\"#\">The Benefits of Regular Exercise</a><br><small>December 3, 2024</small></li>
                    <li><a href=\"#\">Women's Health: What You Need to Know</a><br><small>November 25, 2024</small></li>
                    <li><a href=\"#\">Pediatric Care: Keeping Your Children Healthy</a><br><small>November 20, 2024</small></li>
                </ul>
                
                <h3>Categories</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">Cardiology</a></li>
                    <li><a href=\"#\">Family Medicine</a></li>
                    <li><a href=\"#\">Pediatrics</a></li>
                    <li><a href=\"#\">Women's Health</a></li>
                    <li><a href=\"#\">Preventive Care</a></li>
                    <li><a href=\"#\">Nutrition</a></li>
                    <li><a href=\"#\">Mental Health</a></li>
                </ul>
                
                <h3>Archives</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">December 2024</a></li>
                    <li><a href=\"#\">November 2024</a></li>
                    <li><a href=\"#\">October 2024</a></li>
                    <li><a href=\"#\">September 2024</a></li>
                    <li><a href=\"#\">August 2024</a></li>
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
        return "home/blog.html.twig";
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
        return array (  127 => 37,  116 => 29,  105 => 21,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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
            <h2 class=\"v3\">Health & Medical Blog</h2>
            <div class=\"grid_8 alpha mobile_bottom_mar\">
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page4_pic1.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">5 Tips for Maintaining Heart Health</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> December 15, 2024 | <strong>By:</strong> Dr. John Smith | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>5 Comments</a></p>
                    <p>Cardiovascular disease remains one of the leading causes of death worldwide. However, many heart conditions can be prevented through proper lifestyle choices and regular medical care. Here are five essential tips to keep your heart healthy...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
                
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page4_pic2.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">The Importance of Regular Health Screenings</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> December 10, 2024 | <strong>By:</strong> Dr. Sarah Johnson | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>3 Comments</a></p>
                    <p>Preventive care is one of the most important aspects of maintaining good health. Regular health screenings can help detect potential health issues early, when they are most treatable. Learn about which screenings you should consider...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
                
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page4_pic3.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Managing Stress for Better Health</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> December 5, 2024 | <strong>By:</strong> Dr. Lisa Wilson | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>8 Comments</a></p>
                    <p>Chronic stress can have serious negative effects on both physical and mental health. Learning effective stress management techniques is crucial for overall well-being. Discover practical strategies to reduce stress in your daily life...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
                
                <div class=\"wrapper marBot2\">
                    <img src=\"{{ asset('images/page4_pic4.jpg') }}\" alt=\"\" class=\"img3\">
                    <h3><a href=\"#\">Nutrition Tips for Optimal Health</a></h3>
                    <p class=\"comments_txt\"><strong>Published:</strong> November 28, 2024 | <strong>By:</strong> Dr. Michael Brown | <a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>12 Comments</a></p>
                    <p>Proper nutrition plays a vital role in maintaining good health and preventing chronic diseases. A balanced diet can boost your immune system, improve energy levels, and support overall well-being. Learn about the key components of a healthy diet...</p>
                    <a href=\"#\" class=\"more_btn2\">Read More <strong class=\"icon-circle-arrow-right\"></strong></a>
                </div>
            </div>
            
            <div class=\"grid_4 omega\">
                <h3>Recent Posts</h3>
                <ul class=\"list3\">
                    <li><a href=\"#\">Understanding Diabetes Management</a><br><small>December 12, 2024</small></li>
                    <li><a href=\"#\">Winter Wellness Tips</a><br><small>December 8, 2024</small></li>
                    <li><a href=\"#\">The Benefits of Regular Exercise</a><br><small>December 3, 2024</small></li>
                    <li><a href=\"#\">Women's Health: What You Need to Know</a><br><small>November 25, 2024</small></li>
                    <li><a href=\"#\">Pediatric Care: Keeping Your Children Healthy</a><br><small>November 20, 2024</small></li>
                </ul>
                
                <h3>Categories</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">Cardiology</a></li>
                    <li><a href=\"#\">Family Medicine</a></li>
                    <li><a href=\"#\">Pediatrics</a></li>
                    <li><a href=\"#\">Women's Health</a></li>
                    <li><a href=\"#\">Preventive Care</a></li>
                    <li><a href=\"#\">Nutrition</a></li>
                    <li><a href=\"#\">Mental Health</a></li>
                </ul>
                
                <h3>Archives</h3>
                <ul class=\"list2\">
                    <li><a href=\"#\">December 2024</a></li>
                    <li><a href=\"#\">November 2024</a></li>
                    <li><a href=\"#\">October 2024</a></li>
                    <li><a href=\"#\">September 2024</a></li>
                    <li><a href=\"#\">August 2024</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/blog.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\home\\blog.html.twig");
    }
}
