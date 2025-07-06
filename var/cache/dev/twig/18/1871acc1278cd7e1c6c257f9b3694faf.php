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

/* admin/appointment/show.html.twig */
class __TwigTemplate_08b1308c00e12e023a25e174d89060b3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/appointment/show.html.twig"));

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

        yield "Appointment Details - Admin Dashboard";
        
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
        yield "<div class=\"admin-page-header\">
    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <div>
            <h2><i class=\"icon-calendar\"></i> Appointment Details</h2>
            <p>Review and manage appointment information</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"icon-arrow-left\"></i> Back to List
        </a>
    </div>
</div>

<div class=\"appointment-grid\">
    <!-- Patient Information -->
    <div class=\"info-card\">
        <h3><i class=\"icon-user\"></i> Patient Information</h3>
        <div class=\"info-row\">
            <label>Name:</label>
            <span>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 24, $this->source); })()), "patientName", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
        </div>
        <div class=\"info-row\">
            <label>Email:</label>
            <span>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
        </div>
        ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 30, $this->source); })()), "phone", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <div class=\"info-row\">
            <label>Phone:</label>
            <span>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 33, $this->source); })()), "phone", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
        </div>
        ";
        }
        // line 36
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 36, $this->source); })()), "patientAge", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "        <div class=\"info-row\">
            <label>Age:</label>
            <span>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 39, $this->source); })()), "patientAge", [], "any", false, false, false, 39), "html", null, true);
            yield "</span>
        </div>
        ";
        }
        // line 42
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 42, $this->source); })()), "gender", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        <div class=\"info-row\">
            <label>Gender:</label>
            <span>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 45, $this->source); })()), "gender", [], "any", false, false, false, 45)), "html", null, true);
            yield "</span>
        </div>
        ";
        }
        // line 48
        yield "    </div>

    <!-- Service Information -->
    <div class=\"info-card\">
        <h3><i class=\"icon-user-md\"></i> Service Information</h3>
        <div class=\"info-row\">
            <label>Service:</label>
            <span>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 55, $this->source); })()), "service", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
        yield "</span>
        </div>
        <div class=\"info-row\">
            <label>Speciality:</label>
            <span>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 59, $this->source); })()), "service", [], "any", false, false, false, 59), "speciality", [], "any", false, false, false, 59), "html", null, true);
        yield "</span>
        </div>
        ";
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 61, $this->source); })()), "service", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "        <div class=\"info-row\">
            <label>Price:</label>
            <span>\$";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 64, $this->source); })()), "service", [], "any", false, false, false, 64), "price", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
        </div>
        ";
        }
        // line 67
        yield "    </div>
</div>

<div class=\"appointment-grid\">
    <!-- Appointment Details -->
    <div class=\"info-card\">
        <h3><i class=\"icon-calendar\"></i> Appointment Details</h3>
        <div class=\"info-row\">
            <label>Date:</label>
            <span>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 76, $this->source); })()), "formattedDate", [], "any", false, false, false, 76), "html", null, true);
        yield "</span>
        </div>
        <div class=\"info-row\">
            <label>Time:</label>
            <span>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 80, $this->source); })()), "formattedTime", [], "any", false, false, false, 80), "html", null, true);
        yield "</span>
        </div>
        <div class=\"info-row\">
            <label>Status:</label>
            <span class=\"status-badge status-";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84), "html", null, true);
        yield "\">
                ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85) == "pending")) {
            // line 86
            yield "                    <i class=\"icon-clock-o\"></i> Pending
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 87, $this->source); })()), "status", [], "any", false, false, false, 87) == "confirmed")) {
            // line 88
            yield "                    <i class=\"icon-check\"></i> Confirmed
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 89
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 89, $this->source); })()), "status", [], "any", false, false, false, 89) == "completed")) {
            // line 90
            yield "                    <i class=\"icon-check-circle\"></i> Completed
                ";
        } else {
            // line 92
            yield "                    <i class=\"icon-times\"></i> Cancelled
                ";
        }
        // line 94
        yield "            </span>
        </div>
        <div class=\"info-row\">
            <label>Created:</label>
            <span>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 98, $this->source); })()), "createdAt", [], "any", false, false, false, 98), "M d, Y \\a\\t H:i"), "html", null, true);
        yield "</span>
        </div>
        ";
        // line 100
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 100, $this->source); })()), "updatedAt", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "        <div class=\"info-row\">
            <label>Last Updated:</label>
            <span>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 103, $this->source); })()), "updatedAt", [], "any", false, false, false, 103), "M d, Y \\a\\t H:i"), "html", null, true);
            yield "</span>
        </div>
        ";
        }
        // line 106
        yield "    </div>

    <!-- Actions -->
    <div class=\"info-card\">
        <h3><i class=\"icon-cogs\"></i> Actions</h3>
        
        ";
        // line 112
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 112, $this->source); })()), "status", [], "any", false, false, false, 112) == "pending")) {
            // line 113
            yield "            <form method=\"POST\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\">
                <button type=\"submit\" class=\"btn btn-success btn-block\" onclick=\"return confirm('Confirm this appointment? The patient will receive a confirmation email.')\">
                    <i class=\"icon-check\"></i> Confirm Appointment
                </button>
            </form>
            
            <button type=\"button\" class=\"btn btn-danger btn-block\" onclick=\"showCancelModal()\">
                <i class=\"icon-times\"></i> Cancel Appointment
            </button>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 122
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 122, $this->source); })()), "status", [], "any", false, false, false, 122) == "confirmed")) {
            // line 123
            yield "            <form method=\"POST\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_complete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\" onclick=\"return confirm('Mark this appointment as completed?')\">
                    <i class=\"icon-check-circle\"></i> Mark as Completed
                </button>
            </form>
            
            <button type=\"button\" class=\"btn btn-danger btn-block\" onclick=\"showCancelModal()\">
                <i class=\"icon-times\"></i> Cancel Appointment
            </button>
        ";
        }
        // line 133
        yield "        
        <form method=\"POST\" action=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)]), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135))), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"btn btn-outline-danger btn-block\" onclick=\"return confirm('Are you sure you want to delete this appointment? This action cannot be undone.')\">
                <i class=\"icon-trash\"></i> Delete Appointment
            </button>
        </form>
    </div>
</div>

<!-- Message & Medical History -->
";
        // line 144
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 144, $this->source); })()), "message", [], "any", false, false, false, 144) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 144, $this->source); })()), "medicalHistory", [], "any", false, false, false, 144))) {
            // line 145
            yield "<div class=\"info-card\">
    <h3><i class=\"icon-file-text\"></i> Additional Information</h3>
    
    ";
            // line 148
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 148, $this->source); })()), "message", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "    <div class=\"info-section\">
        <h4>Patient Message:</h4>
        <div class=\"message-content\">";
                // line 151
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 151, $this->source); })()), "message", [], "any", false, false, false, 151), "html", null, true));
                yield "</div>
    </div>
    ";
            }
            // line 154
            yield "    
    ";
            // line 155
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 155, $this->source); })()), "medicalHistory", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "    <div class=\"info-section\">
        <h4>Medical History:</h4>
        <div class=\"message-content\">";
                // line 158
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 158, $this->source); })()), "medicalHistory", [], "any", false, false, false, 158), "html", null, true));
                yield "</div>
    </div>
    ";
            }
            // line 161
            yield "</div>
";
        }
        // line 163
        yield "
<!-- Cancellation Reason -->
";
        // line 165
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 165, $this->source); })()), "status", [], "any", false, false, false, 165) == "cancelled") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 165, $this->source); })()), "cancellationReason", [], "any", false, false, false, 165))) {
            // line 166
            yield "<div class=\"info-card cancellation-card\">
    <h3><i class=\"icon-exclamation-triangle\"></i> Cancellation Information</h3>
    <div class=\"message-content\">";
            // line 168
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 168, $this->source); })()), "cancellationReason", [], "any", false, false, false, 168), "html", null, true));
            yield "</div>
</div>
";
        }
        // line 171
        yield "
<!-- Cancel Modal -->
<div id=\"cancelModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3>Cancel Appointment</h3>
            <button class=\"close\" onclick=\"hideCancelModal()\">&times;</button>
        </div>
        <form method=\"POST\" action=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)]), "html", null, true);
        yield "\">
            <div class=\"modal-body\">
                <p>Please provide a reason for cancelling this appointment (optional):</p>
                <textarea name=\"cancellation_reason\" rows=\"4\" placeholder=\"Reason for cancellation...\"></textarea>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideCancelModal()\">Cancel</button>
                <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to cancel this appointment? The patient will receive a cancellation email.')\">
                    <i class=\"icon-times\"></i> Cancel Appointment
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function showCancelModal() {
    document.getElementById('cancelModal').style.display = 'block';
}

function hideCancelModal() {
    document.getElementById('cancelModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('cancelModal');
    if (event.target == modal) {
        hideCancelModal();
    }
}
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
        return "admin/appointment/show.html.twig";
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
        return array (  385 => 179,  375 => 171,  369 => 168,  365 => 166,  363 => 165,  359 => 163,  355 => 161,  349 => 158,  345 => 156,  343 => 155,  340 => 154,  334 => 151,  330 => 149,  328 => 148,  323 => 145,  321 => 144,  309 => 135,  305 => 134,  302 => 133,  288 => 123,  286 => 122,  273 => 113,  271 => 112,  263 => 106,  257 => 103,  253 => 101,  251 => 100,  246 => 98,  240 => 94,  236 => 92,  232 => 90,  230 => 89,  227 => 88,  225 => 87,  222 => 86,  220 => 85,  216 => 84,  209 => 80,  202 => 76,  191 => 67,  185 => 64,  181 => 62,  179 => 61,  174 => 59,  167 => 55,  158 => 48,  152 => 45,  148 => 43,  145 => 42,  139 => 39,  135 => 37,  132 => 36,  126 => 33,  122 => 31,  120 => 30,  115 => 28,  108 => 24,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Appointment Details - Admin Dashboard{% endblock %}

{% block body %}
<div class=\"admin-page-header\">
    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <div>
            <h2><i class=\"icon-calendar\"></i> Appointment Details</h2>
            <p>Review and manage appointment information</p>
        </div>
        <a href=\"{{ path('admin_appointment_index') }}\" class=\"btn btn-secondary\">
            <i class=\"icon-arrow-left\"></i> Back to List
        </a>
    </div>
</div>

<div class=\"appointment-grid\">
    <!-- Patient Information -->
    <div class=\"info-card\">
        <h3><i class=\"icon-user\"></i> Patient Information</h3>
        <div class=\"info-row\">
            <label>Name:</label>
            <span>{{ appointment.patientName }}</span>
        </div>
        <div class=\"info-row\">
            <label>Email:</label>
            <span>{{ appointment.email }}</span>
        </div>
        {% if appointment.phone %}
        <div class=\"info-row\">
            <label>Phone:</label>
            <span>{{ appointment.phone }}</span>
        </div>
        {% endif %}
        {% if appointment.patientAge %}
        <div class=\"info-row\">
            <label>Age:</label>
            <span>{{ appointment.patientAge }}</span>
        </div>
        {% endif %}
        {% if appointment.gender %}
        <div class=\"info-row\">
            <label>Gender:</label>
            <span>{{ appointment.gender|title }}</span>
        </div>
        {% endif %}
    </div>

    <!-- Service Information -->
    <div class=\"info-card\">
        <h3><i class=\"icon-user-md\"></i> Service Information</h3>
        <div class=\"info-row\">
            <label>Service:</label>
            <span>{{ appointment.service.name }}</span>
        </div>
        <div class=\"info-row\">
            <label>Speciality:</label>
            <span>{{ appointment.service.speciality }}</span>
        </div>
        {% if appointment.service.price %}
        <div class=\"info-row\">
            <label>Price:</label>
            <span>\${{ appointment.service.price }}</span>
        </div>
        {% endif %}
    </div>
</div>

<div class=\"appointment-grid\">
    <!-- Appointment Details -->
    <div class=\"info-card\">
        <h3><i class=\"icon-calendar\"></i> Appointment Details</h3>
        <div class=\"info-row\">
            <label>Date:</label>
            <span>{{ appointment.formattedDate }}</span>
        </div>
        <div class=\"info-row\">
            <label>Time:</label>
            <span>{{ appointment.formattedTime }}</span>
        </div>
        <div class=\"info-row\">
            <label>Status:</label>
            <span class=\"status-badge status-{{ appointment.status }}\">
                {% if appointment.status == 'pending' %}
                    <i class=\"icon-clock-o\"></i> Pending
                {% elseif appointment.status == 'confirmed' %}
                    <i class=\"icon-check\"></i> Confirmed
                {% elseif appointment.status == 'completed' %}
                    <i class=\"icon-check-circle\"></i> Completed
                {% else %}
                    <i class=\"icon-times\"></i> Cancelled
                {% endif %}
            </span>
        </div>
        <div class=\"info-row\">
            <label>Created:</label>
            <span>{{ appointment.createdAt|date('M d, Y \\\\a\\\\t H:i') }}</span>
        </div>
        {% if appointment.updatedAt %}
        <div class=\"info-row\">
            <label>Last Updated:</label>
            <span>{{ appointment.updatedAt|date('M d, Y \\\\a\\\\t H:i') }}</span>
        </div>
        {% endif %}
    </div>

    <!-- Actions -->
    <div class=\"info-card\">
        <h3><i class=\"icon-cogs\"></i> Actions</h3>
        
        {% if appointment.status == 'pending' %}
            <form method=\"POST\" action=\"{{ path('admin_appointment_confirm', {'id': appointment.id}) }}\">
                <button type=\"submit\" class=\"btn btn-success btn-block\" onclick=\"return confirm('Confirm this appointment? The patient will receive a confirmation email.')\">
                    <i class=\"icon-check\"></i> Confirm Appointment
                </button>
            </form>
            
            <button type=\"button\" class=\"btn btn-danger btn-block\" onclick=\"showCancelModal()\">
                <i class=\"icon-times\"></i> Cancel Appointment
            </button>
        {% elseif appointment.status == 'confirmed' %}
            <form method=\"POST\" action=\"{{ path('admin_appointment_complete', {'id': appointment.id}) }}\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\" onclick=\"return confirm('Mark this appointment as completed?')\">
                    <i class=\"icon-check-circle\"></i> Mark as Completed
                </button>
            </form>
            
            <button type=\"button\" class=\"btn btn-danger btn-block\" onclick=\"showCancelModal()\">
                <i class=\"icon-times\"></i> Cancel Appointment
            </button>
        {% endif %}
        
        <form method=\"POST\" action=\"{{ path('admin_appointment_delete', {'id': appointment.id}) }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ appointment.id) }}\">
            <button type=\"submit\" class=\"btn btn-outline-danger btn-block\" onclick=\"return confirm('Are you sure you want to delete this appointment? This action cannot be undone.')\">
                <i class=\"icon-trash\"></i> Delete Appointment
            </button>
        </form>
    </div>
</div>

<!-- Message & Medical History -->
{% if appointment.message or appointment.medicalHistory %}
<div class=\"info-card\">
    <h3><i class=\"icon-file-text\"></i> Additional Information</h3>
    
    {% if appointment.message %}
    <div class=\"info-section\">
        <h4>Patient Message:</h4>
        <div class=\"message-content\">{{ appointment.message|nl2br }}</div>
    </div>
    {% endif %}
    
    {% if appointment.medicalHistory %}
    <div class=\"info-section\">
        <h4>Medical History:</h4>
        <div class=\"message-content\">{{ appointment.medicalHistory|nl2br }}</div>
    </div>
    {% endif %}
</div>
{% endif %}

<!-- Cancellation Reason -->
{% if appointment.status == 'cancelled' and appointment.cancellationReason %}
<div class=\"info-card cancellation-card\">
    <h3><i class=\"icon-exclamation-triangle\"></i> Cancellation Information</h3>
    <div class=\"message-content\">{{ appointment.cancellationReason|nl2br }}</div>
</div>
{% endif %}

<!-- Cancel Modal -->
<div id=\"cancelModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3>Cancel Appointment</h3>
            <button class=\"close\" onclick=\"hideCancelModal()\">&times;</button>
        </div>
        <form method=\"POST\" action=\"{{ path('admin_appointment_cancel', {'id': appointment.id}) }}\">
            <div class=\"modal-body\">
                <p>Please provide a reason for cancelling this appointment (optional):</p>
                <textarea name=\"cancellation_reason\" rows=\"4\" placeholder=\"Reason for cancellation...\"></textarea>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideCancelModal()\">Cancel</button>
                <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to cancel this appointment? The patient will receive a cancellation email.')\">
                    <i class=\"icon-times\"></i> Cancel Appointment
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function showCancelModal() {
    document.getElementById('cancelModal').style.display = 'block';
}

function hideCancelModal() {
    document.getElementById('cancelModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('cancelModal');
    if (event.target == modal) {
        hideCancelModal();
    }
}
</script>
{% endblock %}
", "admin/appointment/show.html.twig", "C:\\Users\\dell1\\Downloads\\248506\\site\\templates\\admin\\appointment\\show.html.twig");
    }
}
