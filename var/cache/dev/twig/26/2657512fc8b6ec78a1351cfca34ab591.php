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

/* emails/discover.html.twig */
class __TwigTemplate_54094a4a8a79ed616ffb846a39a667a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/discover.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/discover.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <style>
        ";
        // line 4
        echo "        h1 {
            color: #333;
        }
    </style>

    <h1>Welcome !</h1>
    <p> </p>
    <p><code>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 11, $this->source); })()), "to", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11), "address", [], "any", false, false, false, 11), "html", null, true);
        echo "</code></p>

    <p>
        ";
        // line 15
        echo "        <a href=\"";
        echo "https://127.0.0.1:8000/";
        echo "\">Discover our new quiz !</a>
        ";
        // line 17
        echo "    </p>
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_parse_1_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/discover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 1,  68 => 17,  63 => 15,  57 => 11,  48 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inline_css %}
    <style>
        {# here, define your CSS styles as usual #}
        h1 {
            color: #333;
        }
    </style>

    <h1>Welcome !</h1>
    <p> </p>
    <p><code>{{ email.to[0].address }}</code></p>

    <p>
        {# <p>Discover our new quiz !</p> #}
        <a href=\"{{ 'https://127.0.0.1:8000/' }}\">Discover our new quiz !</a>
        {# <a href=\"{{ signedUrl }}\">Confirm my Email</a> #}
    </p>
{% endapply %}", "emails/discover.html.twig", "/home/erwan/formation/semestre 2/projet/W-PHP-502-MAR-2-1-Quiz-erwan.durey/Quiz/templates/emails/discover.html.twig");
    }
}
