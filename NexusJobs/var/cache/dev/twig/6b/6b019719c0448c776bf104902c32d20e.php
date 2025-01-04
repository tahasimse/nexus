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
class __TwigTemplate_ddd063a2b326c5a63bdf3f5067d4619a extends Template
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

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container-fluid\" style=\"background-image: url('/images/Background-home1.jpg'); background-size: cover; background-position: center; height: 100vh; padding-top: 100px;\">
    <div class=\"container text-center\">
        <div class=\"card mx-auto\" style=\"max-width: 600px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border: 2px solid #2F4F4F; background-color: #C89F73;\">
            <div class=\"card-header text-white\" style=\"background-color: #2F4F4F;\">
                <h1>Bienvenue sur NexusJobs</h1>
            </div>
            <div class=\"card-body\">
                  <p class=\"mb-4\" style=\"font-size: 2em; font-weight: bold; color: #2F4F4F;\">Êtes-vous ? :</p>
                <div class=\"d-flex justify-content-around\" style=\"gap: 50px;\">
                    <div>
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dev_login");
        yield "\" class=\"btn\" style=\"background-color: #2F4F4F; color: white; padding: 15px 30px; font-size: 1.2em;\">Un·e développeur·se</a>
                        <img src=\"/images/developer1.jpg\" alt=\"Développeur\" class=\"img-fluid mt-3\" style=\"max-height: 400px;\">
                    </div>
                    <div>
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company_login");
        yield "\" class=\"btn\" style=\"background-color: #2F4F4F; color: white; padding: 15px 30px; font-size: 1.2em;\">Une Entreprise</a>
                        <img src=\"/images/company1.jpg\" alt=\"Entreprise\" class=\"img-fluid mt-3\" style=\"max-height: 400px;\">
                    </div>
                </div>
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
        return array (  86 => 18,  79 => 14,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\" style=\"background-image: url('/images/Background-home1.jpg'); background-size: cover; background-position: center; height: 100vh; padding-top: 100px;\">
    <div class=\"container text-center\">
        <div class=\"card mx-auto\" style=\"max-width: 600px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border: 2px solid #2F4F4F; background-color: #C89F73;\">
            <div class=\"card-header text-white\" style=\"background-color: #2F4F4F;\">
                <h1>Bienvenue sur NexusJobs</h1>
            </div>
            <div class=\"card-body\">
                  <p class=\"mb-4\" style=\"font-size: 2em; font-weight: bold; color: #2F4F4F;\">Êtes-vous ? :</p>
                <div class=\"d-flex justify-content-around\" style=\"gap: 50px;\">
                    <div>
                        <a href=\"{{ path('app_dev_login') }}\" class=\"btn\" style=\"background-color: #2F4F4F; color: white; padding: 15px 30px; font-size: 1.2em;\">Un·e développeur·se</a>
                        <img src=\"/images/developer1.jpg\" alt=\"Développeur\" class=\"img-fluid mt-3\" style=\"max-height: 400px;\">
                    </div>
                    <div>
                        <a href=\"{{ path('app_company_login') }}\" class=\"btn\" style=\"background-color: #2F4F4F; color: white; padding: 15px 30px; font-size: 1.2em;\">Une Entreprise</a>
                        <img src=\"/images/company1.jpg\" alt=\"Entreprise\" class=\"img-fluid mt-3\" style=\"max-height: 400px;\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "/var/www/NexusJobs/templates/home/index.html.twig");
    }
}
