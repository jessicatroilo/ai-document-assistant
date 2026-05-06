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

        yield "Analyser votre texte IA";
        
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
        yield "<div class=\"page\">
    <div class=\"container\">
        ";
        // line 9
        yield "        <div class=\"header\">
            <h1>Assistant de synthèse IA </h1>
            <p>Collez un compte-rendu, un email ou autre document pour obtenir un résumé, les points clés et les actions à suivre. </p>
        </div>

        <div class=\"grid\">
        ";
        // line 16
        yield "            <section class=\"panel input-panel\">
                <h2> Votre texte </h2>
                <form action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_analyze");
        yield "\" method='POST'>
                    <textarea id='texte' name=\"user_text\" placeholder=\"Collez votre document ici...\" required>
                    </textarea>
                    <button type=\"submit\" class=\"btn\"> Analyser le document</button>
                </form>
            </section>

            ";
        // line 26
        yield "            <section class=\"panel result-panel\">
                <h2> Résultat </h2>
                ";
        // line 28
        if ((($tmp = (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                <div>
                    <div class=\"card summary\">
                        <h3><i class=\"fa-regular fa-file\"></i> Résumé </h3>
                            <p> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 32, $this->source); })()), "summary", [], "any", false, false, false, 32), "html", null, true);
            yield " </p>
                    </div>
                    <div class=\"card points\">
                        <h3> <i class=\"fa-solid fa-star\"></i> Points importants </h3>
                            <ul>
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 37, $this->source); })()), "key_points", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                // line 38
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["point"], "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['point'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                            </ul>
                    </div>
                    <div class=\"card actions\">
                        <h3><i class=\"fa-solid fa-check\"></i> Actions à suivre </h3>
                            <ul>
                                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 45, $this->source); })()), "actions", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 46
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                            </ul>
                    </div>
                </div>
                ";
        }
        // line 52
        yield "            </section>
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
        return array (  184 => 52,  178 => 48,  169 => 46,  165 => 45,  158 => 40,  149 => 38,  145 => 37,  137 => 32,  132 => 29,  130 => 28,  126 => 26,  116 => 18,  112 => 16,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Analyser votre texte IA{% endblock %}

{% block body %}
<div class=\"page\">
    <div class=\"container\">
        {# En-tête #}
        <div class=\"header\">
            <h1>Assistant de synthèse IA </h1>
            <p>Collez un compte-rendu, un email ou autre document pour obtenir un résumé, les points clés et les actions à suivre. </p>
        </div>

        <div class=\"grid\">
        {# Texte à coller #}
            <section class=\"panel input-panel\">
                <h2> Votre texte </h2>
                <form action=\"{{path ('app_document_analyze') }}\" method='POST'>
                    <textarea id='texte' name=\"user_text\" placeholder=\"Collez votre document ici...\" required>
                    </textarea>
                    <button type=\"submit\" class=\"btn\"> Analyser le document</button>
                </form>
            </section>

            {# Résultat #}
            <section class=\"panel result-panel\">
                <h2> Résultat </h2>
                {% if result %}
                <div>
                    <div class=\"card summary\">
                        <h3><i class=\"fa-regular fa-file\"></i> Résumé </h3>
                            <p> {{ result.summary }} </p>
                    </div>
                    <div class=\"card points\">
                        <h3> <i class=\"fa-solid fa-star\"></i> Points importants </h3>
                            <ul>
                                {% for point in result.key_points %}
                                <li>{{ point }}</li>
                                {% endfor %}
                            </ul>
                    </div>
                    <div class=\"card actions\">
                        <h3><i class=\"fa-solid fa-check\"></i> Actions à suivre </h3>
                            <ul>
                                {% for action in result.actions %}
                                <li>{{ action }}</li>
                                {% endfor %}
                            </ul>
                    </div>
                </div>
                {% endif %}
            </section>
        </div>
    </div>
</div>
{% endblock %}
", "document_analysis/analyse.html.twig", "/var/www/html/projets/ai-document-assistant/templates/document_analysis/analyse.html.twig");
    }
}
