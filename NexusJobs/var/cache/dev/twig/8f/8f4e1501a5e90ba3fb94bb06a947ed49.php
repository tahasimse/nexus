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

/* auth/company_login.html.twig */
class __TwigTemplate_6a5b125c6c385777a615cdf98ed97199 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/company_login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/company_login.html.twig", 1);
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
        yield "<div class=\"container-fluid\" style=\"background-image: url('/images/BackgroundComp.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;\">
    <div class=\"card\" style=\"max-width: 400px; width: 100%; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); border-radius: 15px; overflow: hidden; background-color: rgba(255, 255, 255, 0.95); margin-top: -40px;\">
        <div class=\"card-header text-center\" style=\"background-color: #003366; padding: 20px;\">
            <h1 style=\"color: white; font-size: 1.8em; margin: 0;\">Connexion - Entreprise</h1>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" style=\"display: flex; flex-direction: column; gap: 20px;\">
                <input type=\"email\" name=\"email\" placeholder=\"Votre email\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <input type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: #003366; color: white; border: none; border-radius: 5px; font-size: 1.2em; cursor: pointer;\">
                    Se connecter
                </button>
            </form>
            <p class=\"text-center mt-4\" style=\"margin-top: 20px; font-size: 1em;\">
                Pas encore inscrit ? <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company_register");
        yield "\" style=\"color: #003366; font-weight: bold;\">Créer un compte</a>
            </p>
        </div>
        <div class=\"card-footer text-center\" style=\"padding: 15px; background-color: #F8F9FA;\">
            <img src=\"/images/logo.png\" alt=\"Logo Nexus\" class=\"img-fluid\" style=\"max-height: 50px;\">
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
        return "auth/company_login.html.twig";
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
        return array (  83 => 18,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\" style=\"background-image: url('/images/BackgroundComp.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;\">
    <div class=\"card\" style=\"max-width: 400px; width: 100%; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); border-radius: 15px; overflow: hidden; background-color: rgba(255, 255, 255, 0.95); margin-top: -40px;\">
        <div class=\"card-header text-center\" style=\"background-color: #003366; padding: 20px;\">
            <h1 style=\"color: white; font-size: 1.8em; margin: 0;\">Connexion - Entreprise</h1>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" style=\"display: flex; flex-direction: column; gap: 20px;\">
                <input type=\"email\" name=\"email\" placeholder=\"Votre email\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <input type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: #003366; color: white; border: none; border-radius: 5px; font-size: 1.2em; cursor: pointer;\">
                    Se connecter
                </button>
            </form>
            <p class=\"text-center mt-4\" style=\"margin-top: 20px; font-size: 1em;\">
                Pas encore inscrit ? <a href=\"{{ path('app_company_register') }}\" style=\"color: #003366; font-weight: bold;\">Créer un compte</a>
            </p>
        </div>
        <div class=\"card-footer text-center\" style=\"padding: 15px; background-color: #F8F9FA;\">
            <img src=\"/images/logo.png\" alt=\"Logo Nexus\" class=\"img-fluid\" style=\"max-height: 50px;\">
        </div>
    </div>
</div>
{% endblock %}
", "auth/company_login.html.twig", "C:\\Users\\maure\\nexus\\NexusJobs\\templates\\auth\\company_login.html.twig");
    }
}
