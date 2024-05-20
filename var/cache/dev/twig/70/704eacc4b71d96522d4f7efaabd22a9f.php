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

/* registration/register.html.twig */
class __TwigTemplate_4c705b83d7d9029fd198a5ae480dfc29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <div class=\"container mt-5\">

        <h1 class=\"text-center mb-4\">Register</h1>

        <!--<img src=\"";
        // line 11
        yield "\" class=\"mw-100\" alt=\"Home Image\">-->

        <div class=\"row mt-4\">
            <div class=\"col\">
                <div class=\"p-3 border bg-light fw-semibold text-center\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper lacus in sodales iaculis. Maecenas dignissim quis felis id luctus. Aenean maximus posuere augue, ut pellentesque ante tincidunt sit amet. Integer quis quam urna. Suspendisse potenti. Vestibulum eleifend, ligula ut scelerisque posuere, eros nibh varius magna, ultricies vulputate enim dolor id purus. Etiam iaculis libero nec turpis aliquet facilisis at sit amet massa. Sed rutrum lectus eu nisi euismod, et venenatis dui vehicula.
                </div>
            </div>
        </div>

        <div class=\"row d-flex align-items-stretch mt-4\">

            <div class=\"col-12 col-md-6 d-flex text-center mb-4 mb-md-0\">
                <div class=\"p-3 w-100 bg-light border\">
                    ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), 'widget');
        yield "
                    <button type=\"submit\" class=\"btn btn-primary mt-3\">Create Account</button>
                    ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <div class=\"col-12 col-md-6 d-flex text-center\">
                <div class=\"p-3 w-100 bg-light border\">
                    <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/registration-image.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Registration Image\">
                </div>
            </div>

        </div>

    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  131 => 34,  122 => 28,  117 => 26,  113 => 25,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

    <div class=\"container mt-5\">

        <h1 class=\"text-center mb-4\">Register</h1>

        <!--<img src=\"{# {{ asset('images/home.webp') }} #}\" class=\"mw-100\" alt=\"Home Image\">-->

        <div class=\"row mt-4\">
            <div class=\"col\">
                <div class=\"p-3 border bg-light fw-semibold text-center\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper lacus in sodales iaculis. Maecenas dignissim quis felis id luctus. Aenean maximus posuere augue, ut pellentesque ante tincidunt sit amet. Integer quis quam urna. Suspendisse potenti. Vestibulum eleifend, ligula ut scelerisque posuere, eros nibh varius magna, ultricies vulputate enim dolor id purus. Etiam iaculis libero nec turpis aliquet facilisis at sit amet massa. Sed rutrum lectus eu nisi euismod, et venenatis dui vehicula.
                </div>
            </div>
        </div>

        <div class=\"row d-flex align-items-stretch mt-4\">

            <div class=\"col-12 col-md-6 d-flex text-center mb-4 mb-md-0\">
                <div class=\"p-3 w-100 bg-light border\">
                    {{ form_start(registrationForm) }}
                    {{ form_widget(registrationForm) }}
                    <button type=\"submit\" class=\"btn btn-primary mt-3\">Create Account</button>
                    {{ form_end(registrationForm) }}
                </div>
            </div>

            <div class=\"col-12 col-md-6 d-flex text-center\">
                <div class=\"p-3 w-100 bg-light border\">
                    <img src=\"{{ asset('images/registration-image.png') }}\" class=\"img-fluid\" alt=\"Registration Image\">
                </div>
            </div>

        </div>

    </div>


{% endblock %}", "registration/register.html.twig", "/home/balcorn/public_html/brinker.bobbyalcorn.com/templates/registration/register.html.twig");
    }
}
