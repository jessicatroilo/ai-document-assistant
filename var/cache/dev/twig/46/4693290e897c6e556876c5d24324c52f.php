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

/* document_analysis/analyse.html.twig */
class __TwigTemplate_e70b577aa084404b5b2ef49f8cca2ebb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document_analysis/analyse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document_analysis/analyse.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Analyser votre texte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div>
    ";
        // line 8
        yield "    <div>
        <h1>Assistant de synthèse - RH/ Santé du travail</h1>
        <p>Collez un document pour obtenir un résumé, les points clés et les actions à suivre. </p>
    </div>

    ";
        // line 14
        yield "    <div>
    <h2> Votre texte </h2>
    <form action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_analyze");
        yield "\" method='POST'>
        <textarea id='texte' name=\"user_text\" >
        C'est ici que je colle mon document
        </textarea>
        <button type=\"submit\"> Analyser le document</button>
    </form>
    </div>

    ";
        // line 25
        yield "    <div>
    <h2> Résultat </h2>
        <div>
            <div>
                <h3> Résumé </h3>
                    <p> le résumé ici </p>
            </div>
            <div>
                <h3> Points importants </h3>
                    <ul>
                        <li>ici le point 1</li>
                        <li>ici le point 2</li>
                        <li> ici le point n</li>
                    </ul>
            </div>
            <div>
                <h3> Actions à suivre </h3>
                    <ul>
                        <li>ici l'action 1</li>
                        <li>ici l'action 2</li>
                        <li>ici l'action n</li>
                    </ul>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "document_analysis/analyse.html.twig";
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
        return array (  125 => 25,  114 => 16,  110 => 14,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Analyser votre texte{% endblock %}

{% block body %}
<div>
    {# En-tête #}
    <div>
        <h1>Assistant de synthèse - RH/ Santé du travail</h1>
        <p>Collez un document pour obtenir un résumé, les points clés et les actions à suivre. </p>
    </div>

    {# Texte à coller #}
    <div>
    <h2> Votre texte </h2>
    <form action=\"{{path ('app_document_analyze') }}\" method='POST'>
        <textarea id='texte' name=\"user_text\" >
        C'est ici que je colle mon document
        </textarea>
        <button type=\"submit\"> Analyser le document</button>
    </form>
    </div>

    {# Résultat #}
    <div>
    <h2> Résultat </h2>
        <div>
            <div>
                <h3> Résumé </h3>
                    <p> le résumé ici </p>
            </div>
            <div>
                <h3> Points importants </h3>
                    <ul>
                        <li>ici le point 1</li>
                        <li>ici le point 2</li>
                        <li> ici le point n</li>
                    </ul>
            </div>
            <div>
                <h3> Actions à suivre </h3>
                    <ul>
                        <li>ici l'action 1</li>
                        <li>ici l'action 2</li>
                        <li>ici l'action n</li>
                    </ul>
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "document_analysis/analyse.html.twig", "/var/www/html/projets/ai-document-assistant/templates/document_analysis/analyse.html.twig");
    }
}
