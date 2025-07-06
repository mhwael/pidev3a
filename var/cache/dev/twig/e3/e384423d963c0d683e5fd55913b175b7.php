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

/* home/contacts.html.twig */
class __TwigTemplate_3c6fe2eb33ca948bf1d4ef44d96677e9 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contacts.html.twig"));

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
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/forms.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<!--=======content================================-->
<div class=\"wrapper marBot6\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"grid_5 alpha mobile_bottom_mar\">
                <h2>Find us</h2>
                <figure class=\"img_inner\">
                    <iframe src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe>
                </figure>
                <h3 class=\"v4\">8901 Marmora Road,<br>Glasgow, D04 89GR.</h3>
                <address>
                    <dl>
                        <dt></dt>
                        <dd><span>Freephone:</span> +1 800 559 6580</dd>
                        <dd><span>Telephone:</span> +1 959 603 6035</dd>
                        <dd><span>FAX:</span> +1 504 889 9898</dd>
                        <dd>E-mail: <a href=\"#\" class=\"link1\">mail@demolink.org</a></dd>
                    </dl>
                </address>
            </div>

            <div class=\"grid_7 omega\">
                <h2>Get in touch</h2>
                
                ";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["success"], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                    <div class=\"success_wrapper\">
                        <div class=\"success\">
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", ["success"], "method", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 39
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                        </div>
                    </div>
                ";
        }
        // line 44
        yield "
                ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["error"], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                    <div class=\"error_wrapper\">
                        <div class=\"error\">
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", ["error"], "method", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                        </div>
                    </div>
                ";
        }
        // line 54
        yield "
                ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 55, $this->source); })()), 'form_start');
        yield "
                    <fieldset>
                        <div class=\"form-group\">
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), 'label');
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), 'widget', ["attr" => ["placeholder" => "Your Name"]]);
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'label');
        yield "
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'widget', ["attr" => ["placeholder" => "Your Email"]]);
        yield "
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 70, $this->source); })()), "state", [], "any", false, false, false, 70), 'label');
        yield "
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 71, $this->source); })()), "state", [], "any", false, false, false, 71), 'widget', ["attr" => ["placeholder" => "Your State"]]);
        yield "
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 72, $this->source); })()), "state", [], "any", false, false, false, 72), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 76, $this->source); })()), "phone", [], "any", false, false, false, 76), 'label');
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 77, $this->source); })()), "phone", [], "any", false, false, false, 77), 'widget', ["attr" => ["placeholder" => "Your Phone"]]);
        yield "
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 78, $this->source); })()), "phone", [], "any", false, false, false, 78), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 82, $this->source); })()), "fax", [], "any", false, false, false, 82), 'label');
        yield "
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 83, $this->source); })()), "fax", [], "any", false, false, false, 83), 'widget', ["attr" => ["placeholder" => "Your Fax"]]);
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 84, $this->source); })()), "fax", [], "any", false, false, false, 84), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 88, $this->source); })()), "message", [], "any", false, false, false, 88), 'label');
        yield "
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 89, $this->source); })()), "message", [], "any", false, false, false, 89), 'widget', ["attr" => ["placeholder" => "Your Message"]]);
        yield "
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 90, $this->source); })()), "message", [], "any", false, false, false, 90), 'errors');
        yield "
                        </div>

                        <div class=\"clear\"></div>
                        <div class=\"btns\">
                            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 95, $this->source); })()), "submit", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "more_btn3"]]);
        yield "
                            <div class=\"clear\"></div>
                        </div>
                    </fieldset>
                ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 99, $this->source); })()), 'form_end');
        yield "
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
        return "home/contacts.html.twig";
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
        return array (  295 => 99,  288 => 95,  280 => 90,  276 => 89,  272 => 88,  265 => 84,  261 => 83,  257 => 82,  250 => 78,  246 => 77,  242 => 76,  235 => 72,  231 => 71,  227 => 70,  220 => 66,  216 => 65,  212 => 64,  205 => 60,  201 => 59,  197 => 58,  191 => 55,  188 => 54,  183 => 51,  174 => 49,  170 => 48,  166 => 46,  164 => 45,  161 => 44,  156 => 41,  147 => 39,  143 => 38,  139 => 36,  137 => 35,  111 => 11,  101 => 10,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/forms.js') }}\"></script>
{% endblock %}

{% block body %}
<!--=======content================================-->
<div class=\"wrapper marBot6\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"grid_5 alpha mobile_bottom_mar\">
                <h2>Find us</h2>
                <figure class=\"img_inner\">
                    <iframe src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe>
                </figure>
                <h3 class=\"v4\">8901 Marmora Road,<br>Glasgow, D04 89GR.</h3>
                <address>
                    <dl>
                        <dt></dt>
                        <dd><span>Freephone:</span> +1 800 559 6580</dd>
                        <dd><span>Telephone:</span> +1 959 603 6035</dd>
                        <dd><span>FAX:</span> +1 504 889 9898</dd>
                        <dd>E-mail: <a href=\"#\" class=\"link1\">mail@demolink.org</a></dd>
                    </dl>
                </address>
            </div>

            <div class=\"grid_7 omega\">
                <h2>Get in touch</h2>
                
                {% if app.flashes('success') %}
                    <div class=\"success_wrapper\">
                        <div class=\"success\">
                            {% for message in app.flashes('success') %}
                                {{ message }}
                            {% endfor %}
                        </div>
                    </div>
                {% endif %}

                {% if app.flashes('error') %}
                    <div class=\"error_wrapper\">
                        <div class=\"error\">
                            {% for message in app.flashes('error') %}
                                {{ message }}
                            {% endfor %}
                        </div>
                    </div>
                {% endif %}

                {{ form_start(contact_form) }}
                    <fieldset>
                        <div class=\"form-group\">
                            {{ form_label(contact_form.name) }}
                            {{ form_widget(contact_form.name, {'attr': {'placeholder': 'Your Name'}}) }}
                            {{ form_errors(contact_form.name) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(contact_form.email) }}
                            {{ form_widget(contact_form.email, {'attr': {'placeholder': 'Your Email'}}) }}
                            {{ form_errors(contact_form.email) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(contact_form.state) }}
                            {{ form_widget(contact_form.state, {'attr': {'placeholder': 'Your State'}}) }}
                            {{ form_errors(contact_form.state) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(contact_form.phone) }}
                            {{ form_widget(contact_form.phone, {'attr': {'placeholder': 'Your Phone'}}) }}
                            {{ form_errors(contact_form.phone) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(contact_form.fax) }}
                            {{ form_widget(contact_form.fax, {'attr': {'placeholder': 'Your Fax'}}) }}
                            {{ form_errors(contact_form.fax) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(contact_form.message) }}
                            {{ form_widget(contact_form.message, {'attr': {'placeholder': 'Your Message'}}) }}
                            {{ form_errors(contact_form.message) }}
                        </div>

                        <div class=\"clear\"></div>
                        <div class=\"btns\">
                            {{ form_widget(contact_form.submit, {'attr': {'class': 'more_btn3'}}) }}
                            <div class=\"clear\"></div>
                        </div>
                    </fieldset>
                {{ form_end(contact_form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/contacts.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\home\\contacts.html.twig");
    }
}
