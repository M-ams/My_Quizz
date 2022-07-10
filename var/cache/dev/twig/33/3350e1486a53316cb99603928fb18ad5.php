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

/* category/show_history.html.twig */
class __TwigTemplate_e0c33c95ea9ce5485c89417479d9caa8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show_history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show_history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/show_history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/history.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
\t<div class=\"head\">
\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">
\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/head.png"), "html", null, true);
        echo "\" alt=\"img quizz.fr\" class=\"homeimg\"/></a>
\t</div>

\t<body>
\t\t<div
\t\t\tclass=\"all_history\">

\t\t\t";
        // line 20
        echo "

\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["history"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
            // line 23
            echo "\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoryname"]) || array_key_exists("categoryname", $context) ? $context["categoryname"] : (function () { throw new RuntimeError('Variable "categoryname" does not exist.', 25, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25), [], "array", false, false, false, 25), "html", null, true);
            echo "</h1>


\t\t\t\t\t\t";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q1", [], "any", false, false, false, 28) == 0)) {
                // line 29
                echo "\t\t\t\t\t\t\t<p>Question 01 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 31
                echo "\t\t\t\t\t\t\t<p>Question 01 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 33
            echo "
\t\t\t\t\t\t";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q2", [], "any", false, false, false, 34) == 0)) {
                // line 35
                echo "\t\t\t\t\t\t\t<p>Question 02 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t\t<p>Question 02 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 39
            echo "
\t\t\t\t\t\t";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q3", [], "any", false, false, false, 40) == 0)) {
                // line 41
                echo "\t\t\t\t\t\t\t<p>Question 03 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t\t<p>Question 03 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 45
            echo "
\t\t\t\t\t\t";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q4", [], "any", false, false, false, 46) == 0)) {
                // line 47
                echo "\t\t\t\t\t\t\t<p>Question 04 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 49
                echo "\t\t\t\t\t\t\t<p>Question 04 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 51
            echo "
\t\t\t\t\t\t";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q5", [], "any", false, false, false, 52) == 0)) {
                // line 53
                echo "\t\t\t\t\t\t\t<p>Question 05 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t\t\t\t<p>Question 05 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 57
            echo "
\t\t\t\t\t\t";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q6", [], "any", false, false, false, 58) == 0)) {
                // line 59
                echo "\t\t\t\t\t\t\t<p>Question 06 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t<p>Question 06 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 63
            echo "
\t\t\t\t\t\t";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q7", [], "any", false, false, false, 64) == 0)) {
                // line 65
                echo "\t\t\t\t\t\t\t<p>Question 07 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t<p>Question 07 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t\t\t\t";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q8", [], "any", false, false, false, 70) == 0)) {
                // line 71
                echo "\t\t\t\t\t\t\t<p>Question 08 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t\t\t<p>Question 08 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 75
            echo "
\t\t\t\t\t\t";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q9", [], "any", false, false, false, 76) == 0)) {
                // line 77
                echo "\t\t\t\t\t\t\t<p>Question 09 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 79
                echo "\t\t\t\t\t\t\t<p>Question 09 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 81
            echo "
\t\t\t\t\t\t";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, $context["history"], "Q10", [], "any", false, false, false, 82) == 0)) {
                // line 83
                echo "\t\t\t\t\t\t\t<p>Question 10 : Faux</p>
\t\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t\t<p>Question 10 : Vrai</p>
\t\t\t\t\t\t";
            }
            // line 87
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t</div>

\t\t<div class=\"endpage\">
\t\t\t<div class=\"btn\">
\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Quitter</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/show_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 95,  285 => 91,  268 => 87,  264 => 85,  260 => 83,  258 => 82,  255 => 81,  251 => 79,  247 => 77,  245 => 76,  242 => 75,  238 => 73,  234 => 71,  232 => 70,  229 => 69,  225 => 67,  221 => 65,  219 => 64,  216 => 63,  212 => 61,  208 => 59,  206 => 58,  203 => 57,  199 => 55,  195 => 53,  193 => 52,  190 => 51,  186 => 49,  182 => 47,  180 => 46,  177 => 45,  173 => 43,  169 => 41,  167 => 40,  164 => 39,  160 => 37,  156 => 35,  154 => 34,  151 => 33,  147 => 31,  143 => 29,  141 => 28,  135 => 25,  131 => 23,  114 => 22,  110 => 20,  100 => 12,  96 => 11,  92 => 9,  82 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/history.css') }}\" type=\"text/css\"/>
{% endblock stylesheets %}


{% block body %}

\t<div class=\"head\">
\t\t<a href=\"{{ path('app_main') }}\">
\t\t\t<img src=\"{{ asset('images/head.png') }}\" alt=\"img quizz.fr\" class=\"homeimg\"/></a>
\t</div>

\t<body>
\t\t<div
\t\t\tclass=\"all_history\">

\t\t\t{# {% for categoryname in categoryname %} #}


\t\t\t{% for history in history %}
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>{{ categoryname[loop.index0] }}</h1>


\t\t\t\t\t\t{% if history.Q1 == 0 %}
\t\t\t\t\t\t\t<p>Question 01 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 01 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q2 == 0 %}
\t\t\t\t\t\t\t<p>Question 02 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 02 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q3 == 0 %}
\t\t\t\t\t\t\t<p>Question 03 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 03 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q4 == 0 %}
\t\t\t\t\t\t\t<p>Question 04 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 04 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q5 == 0 %}
\t\t\t\t\t\t\t<p>Question 05 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 05 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q6 == 0 %}
\t\t\t\t\t\t\t<p>Question 06 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 06 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q7 == 0 %}
\t\t\t\t\t\t\t<p>Question 07 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 07 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q8 == 0 %}
\t\t\t\t\t\t\t<p>Question 08 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 08 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q9 == 0 %}
\t\t\t\t\t\t\t<p>Question 09 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 09 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if history.Q10 == 0 %}
\t\t\t\t\t\t\t<p>Question 10 : Faux</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Question 10 : Vrai</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t\t<div class=\"endpage\">
\t\t\t<div class=\"btn\">
\t\t\t\t<a href=\"{{path('app_main')}}\">
\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Quitter</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</body>
{% endblock body %}
", "category/show_history.html.twig", "/Users/mams/WAC/Semestre 2/Framework PHP MVC/W-PHP-502-LYN-2-1-Quiz-quentin.brenas/templates/category/show_history.html.twig");
    }
}
