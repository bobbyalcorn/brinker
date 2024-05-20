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

/* security/login.html.twig */
class __TwigTemplate_d4685bf5d1c4b133f53f59dbcf0f8389 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Log in";
        
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

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">Login</h1>
                <form method=\"post\">
                    <div class=\"p-3 w-100 bg-light border\">
                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label\">Email address</label>
                            <input type=\"email\" class=\"form-control\" name=\"_email\" id=\"inputEmail\" autocomplete=\"email\" placeholder=\"Email Address\" required autofocus>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"inputPassword\" autocomplete=\"current-password\" placeholder=\"Password\" required>
                        </div>
                        <div class=\"mb-3 form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" name=\"_remember_me\" id=\"rememberMe\">
                            <label class=\"form-check-label\" for=\"rememberMe\">Remember Me</label>
                        </div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>
                </form>
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
        return "security/login.html.twig";
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
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in{% endblock %}

{% block body %}

    <div class=\"container mt-5\">

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">Login</h1>
                <form method=\"post\">
                    <div class=\"p-3 w-100 bg-light border\">
                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label\">Email address</label>
                            <input type=\"email\" class=\"form-control\" name=\"_email\" id=\"inputEmail\" autocomplete=\"email\" placeholder=\"Email Address\" required autofocus>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"inputPassword\" autocomplete=\"current-password\" placeholder=\"Password\" required>
                        </div>
                        <div class=\"mb-3 form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" name=\"_remember_me\" id=\"rememberMe\">
                            <label class=\"form-check-label\" for=\"rememberMe\">Remember Me</label>
                        </div>
                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

{% endblock %}
", "security/login.html.twig", "/home/balcorn/public_html/brinker.bobbyalcorn.com/templates/security/login.html.twig");
    }
}
