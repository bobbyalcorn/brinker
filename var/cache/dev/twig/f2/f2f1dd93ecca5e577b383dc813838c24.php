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

/* dashboard/index.html.twig */
class __TwigTemplate_45cb0ce4cc7110716f25a829cf9b2e50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        yield "Dashboard";
        
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

        <h1 class=\"text-center mb-4\">Dashboard</h1>

        <!--<img src=\"";
        // line 11
        yield "\" class=\"mw-100\" alt=\"Home Image\">-->

        <div class=\"row mt-4\">
            <div class=\"col\">
                <div class=\"p-3 border bg-light fw-semibold text-center\">
                    Welcome to the Dashboard of the Digital Guest Experience (DGE) Loyalty Management System (LMS). Here, you can manage Questions related to the DGE LMS. Our platform provides advanced tools and features to enhance and streamline the guest experience, making it easier to manage questions associated with loyalty management.
                </div>
            </div>
        </div>

        <!-- Row with responsive columns -->
        <div class=\"row g-4 d-flex align-items-stretch mt-2\">
            <div class=\"col-12 col-md-4 d-flex\">
                <div class=\"border bg-light text-center w-100\">
                    <a class=\"btn btn-primary w-100\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questions_index");
        yield "\">View Questions</a>
                </div>
            </div>
            <div class=\"col-12 col-md-4 d-flex\">
                <div class=\"border bg-light text-center w-100\">
                    <a class=\"btn btn-primary w-100\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
        yield "\">Create New Question</a>
                </div>
            </div>
            <div class=\"col-12 col-md-4 d-flex\">
                <div class=\"border bg-light text-center w-100\">
                    <a class=\"btn btn-danger w-100\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
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
        return "dashboard/index.html.twig";
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
        return array (  129 => 35,  121 => 30,  113 => 25,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}

    <div class=\"container mt-5\">

        <h1 class=\"text-center mb-4\">Dashboard</h1>

        <!--<img src=\"{# {{ asset('images/home.webp') }} #}\" class=\"mw-100\" alt=\"Home Image\">-->

        <div class=\"row mt-4\">
            <div class=\"col\">
                <div class=\"p-3 border bg-light fw-semibold text-center\">
                    Welcome to the Dashboard of the Digital Guest Experience (DGE) Loyalty Management System (LMS). Here, you can manage Questions related to the DGE LMS. Our platform provides advanced tools and features to enhance and streamline the guest experience, making it easier to manage questions associated with loyalty management.
                </div>
            </div>
        </div>

        <!-- Row with responsive columns -->
        <div class=\"row g-4 d-flex align-items-stretch mt-2\">
            <div class=\"col-12 col-md-4 d-flex\">
                <div class=\"border bg-light text-center w-100\">
                    <a class=\"btn btn-primary w-100\" href=\"{{ path('questions_index') }}\">View Questions</a>
                </div>
            </div>
            <div class=\"col-12 col-md-4 d-flex\">
                <div class=\"border bg-light text-center w-100\">
                    <a class=\"btn btn-primary w-100\" href=\"{{ path('question_new') }}\">Create New Question</a>
                </div>
            </div>
            <div class=\"col-12 col-md-4 d-flex\">
                <div class=\"border bg-light text-center w-100\">
                    <a class=\"btn btn-danger w-100\" href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "dashboard/index.html.twig", "/home/balcorn/public_html/brinker.bobbyalcorn.com/templates/dashboard/index.html.twig");
    }
}
