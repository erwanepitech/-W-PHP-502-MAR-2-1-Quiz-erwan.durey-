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

/* pages/login/login.html.twig */
class __TwigTemplate_1cc9ef41ddcff066edb1ea0d4c4676b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        // line 4
        echo "\tMy Quizz - Log in
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<div class=\"box\">
\t\t<div class=\"square\" style=\"--i:0;\"></div>
\t\t<div class=\"square\" style=\"--i:1;\"></div>
\t\t<div class=\"square\" style=\"--i:2;\"></div>
\t\t<div class=\"square\" style=\"--i:3;\"></div>
\t\t<div class=\"square\" style=\"--i:4;\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"form\">
\t\t\t\t<h2>Log In</h2>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageData", [], "any", false, false, false, 20), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Email address\">
\t\t\t\t\t\t<i class=\"ri-mail-line mail-icon\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Password\">
\t\t\t\t\t\t<i class=\"ri-lock-2-line pwd-icon\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 34
        echo "
\t\t\t\t\t<p class=\"forget\">
\t\t\t\t\t\t<a href=\"#\">Forgot Password ?</a>
\t\t\t\t\t</p>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t\t<input type=\"submit\" name=\"\" id=\"\" value=\"Login\">
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"no-account\">Don't have an account ?
\t\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Sign up</a>
\t\t\t\t\t</p>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  130 => 38,  124 => 34,  114 => 23,  111 => 22,  105 => 20,  103 => 19,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tMy Quizz - Log in
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
\t\t\t\t<h2>Log In</h2>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Email address\">
\t\t\t\t\t\t<i class=\"ri-mail-line mail-icon\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"Password\">
\t\t\t\t\t\t<i class=\"ri-lock-2-line pwd-icon\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t{# <div class=\"agreeTerms\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\"/>
\t\t\t\t\t\tKeep me logged in
\t\t\t\t\t</div> #}

\t\t\t\t\t<p class=\"forget\">
\t\t\t\t\t\t<a href=\"#\">Forgot Password ?</a>
\t\t\t\t\t</p>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t<div class=\"inputBox\">
\t\t\t\t\t\t<input type=\"submit\" name=\"\" id=\"\" value=\"Login\">
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"no-account\">Don't have an account ?
\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\">Sign up</a>
\t\t\t\t\t</p>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "pages/login/login.html.twig", "/home/erwan/formation/semestre 2/projet/W-PHP-502-MAR-2-1-Quiz-erwan.durey/Quiz/templates/pages/login/login.html.twig");
    }
}
