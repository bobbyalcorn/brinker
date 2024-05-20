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

/* question/index.html.twig */
class __TwigTemplate_e5578ad9264004df6b9618f65791100e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/index.html.twig", 1);
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

        yield "View Questions";
        
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

        <h1 class=\"text-center mb-4\">View Questions</h1>

        <style>
            .custom-table thead th {
                background-color: #f8f9fa;
            }
            .custom-table tbody tr:hover {
                background-color: #f1f1f1;
            }
        </style>


        <a type=\"button\" class=\"btn btn-secondary my-3 me-2\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Back to Dashboard</a>
        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
        yield "\" class=\"btn btn-success btn-action my-3\">Add New Question</a>

        <div class=\"p-3 w-100 bg-light border\">`
            <div class=\"table-responsive mt-2\">
                <table class=\"table table-bordered table-striped table-hover custom-table w-100\">
                    <thead>
                    <tr>
                        <!--<th scope=\"col\">#</th>-->
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\"></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 36
            yield "                            <tr>
                                <!--<th scope=\"row\">";
            // line 37
            yield "</th>-->
                                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "description", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"d-flex justify-content-end\">
                                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questions_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary btn-action me-2 fw-semibold\">View</a>
                                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questions_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning btn-action me-2 fw-semibold\">Edit</a>
                                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-action fw-semibold\">Delete</a>
                                    </div>
                                </td>
                            </tr>

                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            yield "                            <tr>
                                <td colspan=\"2\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                    </tbody>
                </table>
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
        return "question/index.html.twig";
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
        return array (  169 => 53,  160 => 49,  148 => 42,  144 => 41,  138 => 38,  135 => 37,  132 => 36,  127 => 35,  111 => 22,  107 => 21,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View Questions{% endblock %}

{% block body %}

    <div class=\"container mt-5\">

        <h1 class=\"text-center mb-4\">View Questions</h1>

        <style>
            .custom-table thead th {
                background-color: #f8f9fa;
            }
            .custom-table tbody tr:hover {
                background-color: #f1f1f1;
            }
        </style>


        <a type=\"button\" class=\"btn btn-secondary my-3 me-2\" href=\"{{ path('dashboard') }}\">Back to Dashboard</a>
        <a href=\"{{ path('question_new') }}\" class=\"btn btn-success btn-action my-3\">Add New Question</a>

        <div class=\"p-3 w-100 bg-light border\">`
            <div class=\"table-responsive mt-2\">
                <table class=\"table table-bordered table-striped table-hover custom-table w-100\">
                    <thead>
                    <tr>
                        <!--<th scope=\"col\">#</th>-->
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\"></th>
                    </tr>
                    </thead>
                    <tbody>
                        {% for question in questions %}
                            <tr>
                                <!--<th scope=\"row\">{# {{ question.id }} #}</th>-->
                                <td>{{ question.description }}</td>
                                <td>
                                    <div class=\"d-flex justify-content-end\">
                                        <a href=\"{{ path('questions_show', {'id': question.id}) }}\" class=\"btn btn-sm btn-primary btn-action me-2 fw-semibold\">View</a>
                                        <a href=\"{{ path('questions_edit', {'id': question.id}) }}\" class=\"btn btn-sm btn-warning btn-action me-2 fw-semibold\">Edit</a>
                                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-action fw-semibold\">Delete</a>
                                    </div>
                                </td>
                            </tr>

                        {% else %}
                            <tr>
                                <td colspan=\"2\">no records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{% endblock %}
", "question/index.html.twig", "/home/balcorn/public_html/brinker.bobbyalcorn.com/templates/question/index.html.twig");
    }
}
