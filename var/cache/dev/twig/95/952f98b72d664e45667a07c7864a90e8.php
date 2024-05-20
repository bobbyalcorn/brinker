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

/* home/index.html.twig */
class __TwigTemplate_1c027565b8a9df7d5dc1cf9d593fddfd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Welcome";
        
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
    <div class=\"container\">

        <div class=\"d-flex justify-content-center mb-3\">
            <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/header-image.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Project Image\">
        </div>

        <div class=\"row mt-4\">
            <div class=\"col\">
                <div class=\"p-3 border bg-light fw-semibold text-center\">
                    Thank you for considering my application for the Sr. Engineer role on the Digital Guest Experience (DGE) Loyalty Management System (LMS) Team. I appreciate the opportunity to showcase my skills through the coding project assignment you have provided. I am excited about the chance to contribute to your team and look forward to demonstrating my capabilities. Thank you again for this opportunity, and I look forward to the possibility of joining Brinker.
                </div>
            </div>
        </div>

        <div class=\"row d-flex align-items-stretch mt-4\">

            <div class=\"col-12 col-md-6 d-flex text-center mb-4 mb-md-0\">
                <div class=\"p-3 w-100 bg-light border\">
                    <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/login-image.png"), "html", null, true);
        yield "\" class=\"img-fluid mb-4\" alt=\"Login Image\">
                    <a class=\"btn btn-success fw-semibold mt-auto\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">I Already Have An Account</a>
                </div>
            </div>

            <div class=\"col-12 col-md-6 d-flex text-center\">
                <div class=\"p-3 w-100 bg-light border\">
                    <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/registration-image.png"), "html", null, true);
        yield "\" class=\"img-fluid mb-4\" alt=\"Registration Image\">
                    <a class=\"btn btn-primary fw-semibold mt-auto\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">I Need To Register</a>
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
        return "home/index.html.twig";
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
        return array (  131 => 33,  127 => 32,  118 => 26,  114 => 25,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"d-flex justify-content-center mb-3\">
            <img src=\"{{ asset('images/header-image.png') }}\" class=\"img-fluid\" alt=\"Project Image\">
        </div>

        <div class=\"row mt-4\">
            <div class=\"col\">
                <div class=\"p-3 border bg-light fw-semibold text-center\">
                    Thank you for considering my application for the Sr. Engineer role on the Digital Guest Experience (DGE) Loyalty Management System (LMS) Team. I appreciate the opportunity to showcase my skills through the coding project assignment you have provided. I am excited about the chance to contribute to your team and look forward to demonstrating my capabilities. Thank you again for this opportunity, and I look forward to the possibility of joining Brinker.
                </div>
            </div>
        </div>

        <div class=\"row d-flex align-items-stretch mt-4\">

            <div class=\"col-12 col-md-6 d-flex text-center mb-4 mb-md-0\">
                <div class=\"p-3 w-100 bg-light border\">
                    <img src=\"{{ asset('images/login-image.png') }}\" class=\"img-fluid mb-4\" alt=\"Login Image\">
                    <a class=\"btn btn-success fw-semibold mt-auto\" href=\"{{ path('app_login') }}\">I Already Have An Account</a>
                </div>
            </div>

            <div class=\"col-12 col-md-6 d-flex text-center\">
                <div class=\"p-3 w-100 bg-light border\">
                    <img src=\"{{ asset('images/registration-image.png') }}\" class=\"img-fluid mb-4\" alt=\"Registration Image\">
                    <a class=\"btn btn-primary fw-semibold mt-auto\" href=\"{{ path('app_register') }}\">I Need To Register</a>
                </div>
            </div>

        </div>

    </div>

{% endblock %}
", "home/index.html.twig", "/home/balcorn/public_html/brinker.bobbyalcorn.com/templates/home/index.html.twig");
    }
}
