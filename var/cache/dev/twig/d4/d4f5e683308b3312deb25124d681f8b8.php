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

/* main/index.html.twig */
class __TwigTemplate_0ed788ce6ac28c718216df303765ad6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "myQuizz.fr
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
\t<div class=\"head\">
\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/head.png"), "html", null, true);
        echo "\" alt=\"img quizz.fr\" class=\"homeimg\"/>
\t</div>

\t<div class=\"wrapper\">
\t\t<div class=\"container\">

\t\t\t<nav>
\t\t\t\t<div class=\"nav_connect\">
\t\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "
\t\t\t\t\t\t<p>Hello
\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>

\t\t\t\t\t";
        } else {
            // line 30
            echo "
\t\t\t\t\t\t<a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>

\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"nav_title\">


\t\t\t\t\t<p>Catégories :</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"nav_categories\">
\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "\t\t\t\t\t\t<div class=\"nav_categories_content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 44), "idq" => 0]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"nav_categories_br\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</nav>

\t\t<div class=\"quizz\">

\t\t\t<div class=\"msg_acceuil\">
\t\t\t\t<p>Bienvenue sur notre Quizz.fr !
\t\t\t\t</p>
\t\t\t</div>


\t\t\t<div class=\"dashboard\">
\t\t\t\t<div class=\"btn\">
\t\t\t\t";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 66
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
            echo "\">
\t\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Créez votre quizz</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69) == null)) {
                // line 70
                echo "\t\t\t\t\t\t";
            } else {
                // line 71
                echo "
\t\t\t\t\t\t\t<a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_history", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Voir votre historique</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t</div>
";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 79
            echo "\t\t\t\t<div class=\"test01\">
\t\t\t\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 81
                echo "\t\t\t\t\t\t<div class=\"nav_categories_content\">


\t\t\t\t\t\t\t<p>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t\t<a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"bouton\">Editer</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"nav_categories_br\"></div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 97
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 97,  271 => 88,  264 => 84,  259 => 81,  255 => 80,  252 => 79,  250 => 78,  247 => 77,  244 => 76,  237 => 72,  234 => 71,  231 => 70,  229 => 69,  222 => 66,  220 => 65,  203 => 50,  189 => 44,  185 => 42,  181 => 41,  172 => 34,  166 => 31,  163 => 30,  157 => 27,  153 => 26,  149 => 24,  147 => 23,  136 => 15,  132 => 13,  122 => 12,  104 => 10,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}myQuizz.fr
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/home.css') }}\" type=\"text/css\"/>
{% endblock stylesheets %}

{% block head %}{% endblock head %}

{% block body %}

\t<div class=\"head\">
\t\t<img src=\"{{ asset('images/head.png') }}\" alt=\"img quizz.fr\" class=\"homeimg\"/>
\t</div>

\t<div class=\"wrapper\">
\t\t<div class=\"container\">

\t\t\t<nav>
\t\t\t\t<div class=\"nav_connect\">
\t\t\t\t\t{% if app.user %}

\t\t\t\t\t\t<p>Hello
\t\t\t\t\t\t\t{{ app.user.email }}</p>
\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\">Déconnexion</a>

\t\t\t\t\t{% else %}

\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">Connexion</a>

\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"nav_title\">


\t\t\t\t\t<p>Catégories :</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"nav_categories\">
\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t<div class=\"nav_categories_content\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_category_index', {'id': category.id,'idq': 0}) }}\">{{ category.name }}</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"nav_categories_br\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t</nav>

\t\t<div class=\"quizz\">

\t\t\t<div class=\"msg_acceuil\">
\t\t\t\t<p>Bienvenue sur notre Quizz.fr !
\t\t\t\t</p>
\t\t\t</div>


\t\t\t<div class=\"dashboard\">
\t\t\t\t<div class=\"btn\">
\t\t\t\t{% if is_granted(\"ROLE_USER\") %}
\t\t\t\t\t<a href=\"{{ path('app_category_new') }}\">
\t\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Créez votre quizz</button>
\t\t\t\t\t</a>
\t\t\t\t\t{% if user.id == null %}
\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t<a href=\"{{ path('app_show_history', {'id': user.id })}}\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Voir votre historique</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t\t</div>
{% if is_granted(\"ROLE_USER\") %}
\t\t\t\t<div class=\"test01\">
\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t<div class=\"nav_categories_content\">


\t\t\t\t\t\t\t<p>{{ category.name }}</p>
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_category_edit', {'id': category.id}) }}\">
\t\t\t\t\t\t\t\t<button class=\"bouton\">Editer</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"nav_categories_br\"></div>
\t\t\t\t{% endfor %}
{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</div></div>{% endblock %}
", "main/index.html.twig", "/Users/mams/WAC/Semestre 2/Framework PHP MVC/W-PHP-502-LYN-2-1-Quiz-quentin.brenas/templates/main/index.html.twig");
    }
}
