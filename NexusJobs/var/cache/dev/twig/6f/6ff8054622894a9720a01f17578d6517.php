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

/* auth/dev_register.html.twig */
class __TwigTemplate_87a34aa88a2670f18e2b1c96cd7f7346 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/dev_register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/dev_register.html.twig", 1);
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
        yield "<div class=\"container-fluid\" style=\"background-image: url('/images/Background-home.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;\">
    <div class=\"card\" style=\"max-width: 450px; width: 100%; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); border-radius: 15px; overflow: hidden; background-color: rgba(255, 255, 255, 0.95);\">
        <div class=\"card-header text-center\" style=\"background-color: #4B0082; padding: 20px;\">
            <h1 style=\"color: white; font-size: 1.8em; margin: 0;\">Inscription - Développeur·se</h1>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" style=\"display: flex; flex-direction: column; gap: 20px;\">
                <input type=\"text\" name=\"name\" placeholder=\"Votre nom\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <input type=\"email\" name=\"email\" placeholder=\"Votre email\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <input type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: #4B0082; color: white; border: none; border-radius: 5px; font-size: 1.2em; cursor: pointer;\">
                    S'inscrire
                </button>
            </form>
        </div>
        <div class=\"card-footer text-center\" style=\"padding: 15px; background-color: #F8F9FA;\">
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
        return "auth/dev_register.html.twig";
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
        return array (  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\" style=\"background-image: url('/images/Background-home.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;\">
    <div class=\"card\" style=\"max-width: 450px; width: 100%; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); border-radius: 15px; overflow: hidden; background-color: rgba(255, 255, 255, 0.95);\">
        <div class=\"card-header text-center\" style=\"background-color: #4B0082; padding: 20px;\">
            <h1 style=\"color: white; font-size: 1.8em; margin: 0;\">Inscription - Développeur·se</h1>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" style=\"display: flex; flex-direction: column; gap: 20px;\">
                <input type=\"text\" name=\"name\" placeholder=\"Votre nom\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <input type=\"email\" name=\"email\" placeholder=\"Votre email\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <input type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\" required style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;\">
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: #4B0082; color: white; border: none; border-radius: 5px; font-size: 1.2em; cursor: pointer;\">
                    S'inscrire
                </button>
            </form>
        </div>
        <div class=\"card-footer text-center\" style=\"padding: 15px; background-color: #F8F9FA;\">
        </div>
    </div>
</div>
{% endblock %}
", "auth/dev_register.html.twig", "C:\\Users\\maure\\nexus\\NexusJobs\\templates\\auth\\dev_register.html.twig");
    }
}
