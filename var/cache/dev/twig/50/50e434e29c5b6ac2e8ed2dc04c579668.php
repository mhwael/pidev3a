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

/* home/index.html.twig */
class __TwigTemplate_8b5acce1febf3a69989ecb69e03b9cb4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.carouFredSel-6.1.0.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.touchSwipe.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accordion.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(window).load( function(){
            //  Responsive layout, resizing the items
            \$('#carousel').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',      
                scroll: 1,
                prev: '#prev',
                next: '#next',
                pagination: false,
                mousewheel: false,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                items: {
                  width:300,
                  height: 'auto',   //  optionally resize item-height
                    visible: {
                        min: 1,
                        max: 3
                    }
                }
            });

            \$(\"#accordion\").accordion({ header: \"h5\" });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        yield "<!--=======content================================-->
<div class=\"pic_section\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Welcome!</h2>
            <h3>Meet our medical specialties:</h3>
            <ul class=\"listWithMarker mobile_bottom_mar\">
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Family Medicine / General Practice</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Hospital Medicine</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Internal Medicine</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Allergy &amp; Asthma</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Anesthesiology</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Audiology &amp; Hearing Aids</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Cardiology / Heartcare</a></li>
            </ul>
            <a href=\"#\" class=\"more_btn\">view all</a>
        </div>
    </div>
</div>

<div class=\"gray_bg txt_cntr\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <p class=\"splash_title1\">Salutem MC strives to provide a high standard of healthcare</p>
            <p class=\"splash_title2\">in a caring, friendly and familiar environment</p>
            <div class=\"grid_3 alpha\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_icon1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Vestibulum iaculis</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
            <div class=\"grid_3\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_icon2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Proin dictum</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
            <div class=\"grid_3\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_icon3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Elementum velit</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
            <div class=\"grid_3 omega\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_icon4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Fusce euismod</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"wrapper marBot1\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"grid_7 alpha mobile_bottom_mar\">
                <h2>Our doctors advice</h2>

                <div class=\"wrapper\">
                    <img src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img2\">
                    <div class=\"box\">
                        <h3><a href=\"#\">Perspiciatiste natus erroratem</a></h3>
                        <p class=\"comments_txt\"><a href=\"#\" class=\"link3\">Stella White</a> <span class=\"vline1\"></span><a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>2</a></p>
                        <p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. <a href=\"#\" class=\"more_btn2\"><strong class=\"icon-circle-arrow-right\"></strong></a></p>
                    </div>
                </div>
                <div class=\"wrapper\">
                    <img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img2\">
                    <div class=\"box\">
                        <h3><a href=\"#\">Perspiciatiste natus erroratem</a></h3>
                        <p class=\"comments_txt\"><a href=\"#\" class=\"link3\">Robert Smith</a> <span class=\"vline1\"></span><a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>2</a></p>
                        <p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. <a href=\"#\" class=\"more_btn2\"><strong class=\"icon-circle-arrow-right\"></strong></a></p>
                    </div>
                </div>
                <div class=\"wrapper\">
                    <img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img2\">
                    <div class=\"box\">
                        <h3><a href=\"#\">Perspiciatiste natus erroratem</a></h3>
                        <p class=\"comments_txt\"><a href=\"#\" class=\"link3\">Simon True</a> <span class=\"vline1\"></span><a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>2</a></p>
                        <p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. <a href=\"#\" class=\"more_btn2\"><strong class=\"icon-circle-arrow-right\"></strong></a></p>
                    </div>
                </div>
            </div>
            
            <div class=\"grid_4 prefix_1 omega\">
                <h2>We'll treat you right</h2>
                <div id=\"accordion\">
                    <div>
                        <h5><a href=\"#\">Cum sociis natoque <span class=\"hide2\">pibusnis</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">perspiciatis unde <span class=\"hide2\">omnis  natus</span> </a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">sit voluptatem <span class=\"hide2\">Dis partrient</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">nasceturdui <span class=\"hide2\">Fusce feugiat</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">malesuada odio. <span class=\"hide2\">Morbi nunc odio</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                </div>

                <h2 class=\"v5\">Patients say<strong class=\"icon-comment v2\"></strong></h2>
                <p class=\"say_txt1\">Eaque ipsa quae ab illo inveritatis et quasi architecto beatae vitae.</p>
                <p class=\"say_txt2\">\"Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursleo vel metus. Nulla facilisi. Aenean nec eros. Vestie ipsum primis...\"</p>
                <p class=\"say_txt3\">Kate White, the flu</p>
                <div class=\"clear\"></div>
                <a href=\"#\" class=\"more_btn3\">See full discussion<strong class=\"icon-circle-arrow-right\"></strong></a>
            </div>
            
        </div>
    </div>
</div>

<div class=\"gray_bg mar_bot0\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Protect your family</h2>
            <div class=\"list_carousel responsive\">
                <ul id=\"carousel\">
                    <li>
                        <img src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic4.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic5.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic6.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic4.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic5.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page1_pic6.jpg"), "html", null, true);
        yield "\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                </ul>
                <div class=\"clear\"></div>
                <a class=\"prev\" id=\"prev\"  href=\"javascript:;\"></a>
                <a class=\"next\" id=\"next\"  href=\"javascript:;\"></a> 
            </div>
        </div>
    </div>
</div>

<!--=======footer=================================-->
<footer>
    <div class=\"main-footer\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <h2 class=\"h2_footer\">Get in  Touch</h2>
                <p>Sed ut perspiciatis unde omnis is natus error sit voluptantium doloremqtium, totam rem aperiam, eaque ipsa quae abtore veritatis et quasi architecto beatae vitae dicta.</p>
                <ul class=\"soc_icons\">
                    <li><a href=\"#\"><i class=\"icon-google-plus\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-rss\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer_priv\">
        <div class=\"container_12\">
            <div class=\"grid_10 prefix_1\">
                <p>SALUTEM. Medical Clinic &copy; ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " | <a href=\"#\">Privacy policy</a></p>
            </div>
        </div>
    </div>  
</footer>

<script type=\"text/javascript\">
    \$(document).ready(function(){
      // Initialize the gallery
      \$('.magnifier2').touchTouch();
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  411 => 264,  372 => 228,  362 => 221,  352 => 214,  342 => 207,  332 => 200,  322 => 193,  256 => 130,  245 => 122,  234 => 114,  214 => 97,  202 => 88,  190 => 79,  178 => 70,  148 => 42,  138 => 41,  99 => 9,  95 => 8,  91 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/jquery.carouFredSel-6.1.0.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.touchSwipe.min.js') }}\"></script>
    <script src=\"{{ asset('js/accordion.js') }}\"></script>
    <script>
        \$(window).load( function(){
            //  Responsive layout, resizing the items
            \$('#carousel').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',      
                scroll: 1,
                prev: '#prev',
                next: '#next',
                pagination: false,
                mousewheel: false,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                items: {
                  width:300,
                  height: 'auto',   //  optionally resize item-height
                    visible: {
                        min: 1,
                        max: 3
                    }
                }
            });

            \$(\"#accordion\").accordion({ header: \"h5\" });
        });
    </script>
{% endblock %}

{% block body %}
<!--=======content================================-->
<div class=\"pic_section\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Welcome!</h2>
            <h3>Meet our medical specialties:</h3>
            <ul class=\"listWithMarker mobile_bottom_mar\">
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Family Medicine / General Practice</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Hospital Medicine</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Internal Medicine</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Allergy &amp; Asthma</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Anesthesiology</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Audiology &amp; Hearing Aids</a></li>
                <li><strong class=\"icon-check\"></strong><a href=\"#\">Cardiology / Heartcare</a></li>
            </ul>
            <a href=\"#\" class=\"more_btn\">view all</a>
        </div>
    </div>
</div>

<div class=\"gray_bg txt_cntr\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <p class=\"splash_title1\">Salutem MC strives to provide a high standard of healthcare</p>
            <p class=\"splash_title2\">in a caring, friendly and familiar environment</p>
            <div class=\"grid_3 alpha\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"{{ asset('images/page1_icon1.png') }}\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Vestibulum iaculis</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
            <div class=\"grid_3\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"{{ asset('images/page1_icon2.png') }}\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Proin dictum</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
            <div class=\"grid_3\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"{{ asset('images/page1_icon3.png') }}\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Elementum velit</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
            <div class=\"grid_3 omega\">
                <div class=\"splash_banner1\">
                    <div class=\"img1\">
                        <img src=\"{{ asset('images/page1_icon4.png') }}\" alt=\"\" class=\"no_resize\">
                    </div>
                    <h3 class=\"v2\"><a href=\"#\">Fusce euismod</a></h3>
                    <p class=\"txt1\">Sed ut persde omnis iste natus error sit voluptatem accusantium doloremque laudantiuotam rem aperiam, eaque ipsa.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"wrapper marBot1\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"grid_7 alpha mobile_bottom_mar\">
                <h2>Our doctors advice</h2>

                <div class=\"wrapper\">
                    <img src=\"{{ asset('images/page1_pic1.jpg') }}\" alt=\"\" class=\"img2\">
                    <div class=\"box\">
                        <h3><a href=\"#\">Perspiciatiste natus erroratem</a></h3>
                        <p class=\"comments_txt\"><a href=\"#\" class=\"link3\">Stella White</a> <span class=\"vline1\"></span><a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>2</a></p>
                        <p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. <a href=\"#\" class=\"more_btn2\"><strong class=\"icon-circle-arrow-right\"></strong></a></p>
                    </div>
                </div>
                <div class=\"wrapper\">
                    <img src=\"{{ asset('images/page1_pic2.jpg') }}\" alt=\"\" class=\"img2\">
                    <div class=\"box\">
                        <h3><a href=\"#\">Perspiciatiste natus erroratem</a></h3>
                        <p class=\"comments_txt\"><a href=\"#\" class=\"link3\">Robert Smith</a> <span class=\"vline1\"></span><a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>2</a></p>
                        <p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. <a href=\"#\" class=\"more_btn2\"><strong class=\"icon-circle-arrow-right\"></strong></a></p>
                    </div>
                </div>
                <div class=\"wrapper\">
                    <img src=\"{{ asset('images/page1_pic3.jpg') }}\" alt=\"\" class=\"img2\">
                    <div class=\"box\">
                        <h3><a href=\"#\">Perspiciatiste natus erroratem</a></h3>
                        <p class=\"comments_txt\"><a href=\"#\" class=\"link3\">Simon True</a> <span class=\"vline1\"></span><a href=\"#\" class=\"comments_btn\"><strong class=\"icon-comment\"></strong>2</a></p>
                        <p>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. <a href=\"#\" class=\"more_btn2\"><strong class=\"icon-circle-arrow-right\"></strong></a></p>
                    </div>
                </div>
            </div>
            
            <div class=\"grid_4 prefix_1 omega\">
                <h2>We'll treat you right</h2>
                <div id=\"accordion\">
                    <div>
                        <h5><a href=\"#\">Cum sociis natoque <span class=\"hide2\">pibusnis</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">perspiciatis unde <span class=\"hide2\">omnis  natus</span> </a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">sit voluptatem <span class=\"hide2\">Dis partrient</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">nasceturdui <span class=\"hide2\">Fusce feugiat</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                    <div>
                        <h5><a href=\"#\">malesuada odio. <span class=\"hide2\">Morbi nunc odio</span></a></h5>
                        <div>
                            <p>Dis partrient montes, nasceturdui. Fusce feugiat malesuada odio. <span class=\"hide2\">Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</span></p>
                        </div>
                    </div>
                </div>

                <h2 class=\"v5\">Patients say<strong class=\"icon-comment v2\"></strong></h2>
                <p class=\"say_txt1\">Eaque ipsa quae ab illo inveritatis et quasi architecto beatae vitae.</p>
                <p class=\"say_txt2\">\"Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursleo vel metus. Nulla facilisi. Aenean nec eros. Vestie ipsum primis...\"</p>
                <p class=\"say_txt3\">Kate White, the flu</p>
                <div class=\"clear\"></div>
                <a href=\"#\" class=\"more_btn3\">See full discussion<strong class=\"icon-circle-arrow-right\"></strong></a>
            </div>
            
        </div>
    </div>
</div>

<div class=\"gray_bg mar_bot0\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2>Protect your family</h2>
            <div class=\"list_carousel responsive\">
                <ul id=\"carousel\">
                    <li>
                        <img src=\"{{ asset('images/page1_pic4.jpg') }}\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"{{ asset('images/page1_pic5.jpg') }}\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"{{ asset('images/page1_pic6.jpg') }}\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"{{ asset('images/page1_pic4.jpg') }}\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"{{ asset('images/page1_pic5.jpg') }}\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                    <li>
                        <img src=\"{{ asset('images/page1_pic6.jpg') }}\" alt=\"\">
                        <div class=\"img_title1\">
                            <p><a href=\"#\">Accusantium dolore</a></p>
                            <p>laudantiuotam rem aperiam, eaque</p>
                        </div>
                    </li>
                </ul>
                <div class=\"clear\"></div>
                <a class=\"prev\" id=\"prev\"  href=\"javascript:;\"></a>
                <a class=\"next\" id=\"next\"  href=\"javascript:;\"></a> 
            </div>
        </div>
    </div>
</div>

<!--=======footer=================================-->
<footer>
    <div class=\"main-footer\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <h2 class=\"h2_footer\">Get in  Touch</h2>
                <p>Sed ut perspiciatis unde omnis is natus error sit voluptantium doloremqtium, totam rem aperiam, eaque ipsa quae abtore veritatis et quasi architecto beatae vitae dicta.</p>
                <ul class=\"soc_icons\">
                    <li><a href=\"#\"><i class=\"icon-google-plus\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    <li><a href=\"#\"><i class=\"icon-rss\"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer_priv\">
        <div class=\"container_12\">
            <div class=\"grid_10 prefix_1\">
                <p>SALUTEM. Medical Clinic &copy; {{ \"now\"|date(\"Y\") }} | <a href=\"#\">Privacy policy</a></p>
            </div>
        </div>
    </div>  
</footer>

<script type=\"text/javascript\">
    \$(document).ready(function(){
      // Initialize the gallery
      \$('.magnifier2').touchTouch();
    });
</script>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\home\\index.html.twig");
    }
}
