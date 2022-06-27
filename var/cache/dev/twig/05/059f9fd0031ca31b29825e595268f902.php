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

/* partials/navbar.html.twig */
class __TwigTemplate_13e7a285befcfd650f4c306e1eb1ece0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar\">
\t<a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">My Quizz</a>
\t<div class=\"navbar-links\">
\t\t";
        // line 7
        echo "\t</div>
\t<div class=\"navbar-buttons\">
\t\t";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"/user/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tProfile
\t\t\t\t\t\t<i class=\"ri-user-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tLogout
\t\t\t\t\t\t<i class=\"logout-icon ri-shut-down-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        } else {
            // line 27
            echo "\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tLogin
\t\t\t\t\t\t<i class=\"ri-login-circle-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn signup\" type=\"button\">
\t\t\t\t\t\tSignup
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tAdmin
\t\t\t\t\t\t<i class=\"ri-user-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 53
        echo "
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  112 => 45,  109 => 44,  106 => 43,  96 => 36,  85 => 28,  82 => 27,  71 => 19,  60 => 11,  57 => 10,  55 => 9,  51 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar\">
\t<a class=\"navbar-brand\" href=\"{{ path('app_index') }}\">My Quizz</a>
\t<div class=\"navbar-links\">
\t\t{# <ul class=\"navbar-links-list\">
\t\t\t<input type=\"text\" class=\"nav-search\" placeholder=\"Search...\">
\t\t</ul> #}
\t</div>
\t<div class=\"navbar-buttons\">
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"/user/{{ app.user.id }}\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tProfile
\t\t\t\t\t\t<i class=\"ri-user-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tLogout
\t\t\t\t\t\t<i class=\"logout-icon ri-shut-down-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tLogin
\t\t\t\t\t\t<i class=\"ri-login-circle-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"btn-content\">
\t\t\t\t\t<button class=\"nav-btn signup\" type=\"button\">
\t\t\t\t\t\tSignup
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<div class=\"nav-buttons\">
\t\t\t\t<a href=\"{{ path(\"admin\")}}\">
\t\t\t\t\t<button class=\"nav-btn login\" type=\"button\">
\t\t\t\t\t\tAdmin
\t\t\t\t\t\t<i class=\"ri-user-line\"></i>
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endif %}

\t</div>
</nav>
", "partials/navbar.html.twig", "/home/erwan/formation/semestre 2/projet/W-PHP-502-MAR-2-1-Quiz-erwan.durey/Quiz/templates/partials/navbar.html.twig");
    }
}
