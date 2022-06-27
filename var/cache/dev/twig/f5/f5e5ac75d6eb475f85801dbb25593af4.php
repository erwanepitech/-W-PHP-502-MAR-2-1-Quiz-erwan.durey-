<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/registration/register.html.twig */
class __TwigTemplate_2520c59fb8deb6ee03e5940fcf97d5f6 extends Template
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
        // line 28
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/registration/register.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "My Quizz - Sign up
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "\t<div class=\"box\">
\t\t<div class=\"square\" style=\"--i:0;\"></div>
\t\t<div class=\"square\" style=\"--i:1;\"></div>
\t\t<div class=\"square\" style=\"--i:2;\"></div>
\t\t<div class=\"square\" style=\"--i:3;\"></div>
\t\t<div class=\"square\" style=\"--i:4;\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"form\">
\t\t\t\t
\t\t\t\t<h2>Sign Up</h2>
\t\t\t\t";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'row', ["attr" => ["placeholder" => "Email address"]]);
        echo "
\t\t\t\t\t<i class=\"ri-mail-line mail-icon\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), 'row', ["attr" => ["placeholder" => "Password"]]);
        echo "
\t\t\t\t\t<i class=\"ri-lock-2-line pwd-icon\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"agreeTerms\">
\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "agreeTerms", [], "any", false, false, false, 54), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t<input type=\"submit\" class=\"btn\" value=\"Register\">
\t\t\t\t</div>
\t\t\t\t<p class=\"no-account\">Already have an account ?
\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Log In</a>
\t\t\t\t</p>
\t\t\t\t";
        // line 65
        echo "\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
\t\t\t\t";
        // line 83
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 83,  134 => 65,  129 => 60,  120 => 54,  113 => 50,  106 => 46,  101 => 44,  89 => 34,  79 => 33,  59 => 30,  36 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Register
{% endblock %}

{% block body %}
\t{% for flash_error in app.flashes('verify_email_error') %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
\t{% endfor %}

\t<h1>Register</h1>

\t{{ form_start(registrationForm) }}
\t{{ form_row(registrationForm.email) }}
\t{{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
\t{{ form_row(registrationForm.agreeTerms) }}

\t<button type=\"submit\" class=\"btn\">Register</button>
\t{{ form_end(registrationForm) }}

\t<a href=\"/\">Homepage</a>
\t<a href=\"/login\">Login</a>
    
{% endblock %} #}

{% extends 'base.html.twig' %}

{% block title %}My Quizz - Sign up
{% endblock %}

{% block body %}
\t<div class=\"box\">
\t\t<div class=\"square\" style=\"--i:0;\"></div>
\t\t<div class=\"square\" style=\"--i:1;\"></div>
\t\t<div class=\"square\" style=\"--i:2;\"></div>
\t\t<div class=\"square\" style=\"--i:3;\"></div>
\t\t<div class=\"square\" style=\"--i:4;\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"form\">
\t\t\t\t
\t\t\t\t<h2>Sign Up</h2>
\t\t\t\t{{ form_start(registrationForm) }}
\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t{{ form_row(registrationForm.email, {'attr': {'placeholder': 'Email address'}}) }}
\t\t\t\t\t<i class=\"ri-mail-line mail-icon\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {'attr': {'placeholder': 'Password'}}) }}
\t\t\t\t\t<i class=\"ri-lock-2-line pwd-icon\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"agreeTerms\">
\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t<input type=\"submit\" class=\"btn\" value=\"Register\">
\t\t\t\t</div>
\t\t\t\t<p class=\"no-account\">Already have an account ?
\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Log In</a>
\t\t\t\t</p>
\t\t\t\t{# {% for flash_error in app.flashes('verify_email_error') %}
\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
\t\t\t\t{% endfor %} #}
\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t{# <form action=\"\">
\t\t\t\t                    <div class=\"inputBox\">
\t\t\t\t                        <input type=\"email\" name=\"\" id=\"\" placeholder=\"Email address\">
\t\t\t\t                        <i class=\"ri-mail-line mail-icon\"></i>
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"inputBox\">
\t\t\t\t                        <input type=\"password\" name=\"\" id=\"\" placeholder=\"Password\">
\t\t\t\t                        <i class=\"ri-lock-2-line pwd-sign-icon\"></i>
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"inputBox\">
\t\t\t\t                        <input type=\"password\" name=\"\" id=\"\" placeholder=\"Confirm Password\">
\t\t\t\t                        <i class=\"ri-lock-2-line pwd-confirm-icon\"></i>
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"inputBox\">
\t\t\t\t                        <input type=\"submit\" name=\"\" id=\"\" value=\"Sign up\">
\t\t\t\t                    </div>
\t\t\t\t                </form> #}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "pages/registration/register.html.twig", "/home/erwan/formation/semestre 2/projet/W-PHP-502-MAR-2-1-Quiz-erwan.durey/Quiz/templates/pages/registration/register.html.twig");
    }
}
