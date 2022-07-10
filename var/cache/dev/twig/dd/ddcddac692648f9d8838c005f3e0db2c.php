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

/* category/final_quizz.html.twig */
class __TwigTemplate_f088358d7af5d3bb356e39951da47965 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/final_quizz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/final_quizz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/final_quizz.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reponse.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
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
        echo "\t<div class=\"head\">
\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">
\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/head.png"), "html", null, true);
        echo "\" alt=\"img quizz.fr\" class=\"homeimg\"/></a>
\t</div>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t";
        // line 14
        if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 14, $this->source); })()) == null)) {
            // line 15
            echo "
\t\t\t\t<p>
\t\t\t\t\tVotre score est de 0/10</p>
\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t<p>
\t\t\t\t\tVotre score est de
\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "/10</p>

\t\t\t";
        }
        // line 24
        echo "
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["verify"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["verify"]) {
            // line 26
            echo "

\t\t\t\t<p>Question
\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
            echo "
\t\t\t\t\t:
\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $context["verify"], "html", null, true);
            echo "</p>


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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verify'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t<p>Votre score a été envoyé par mail.</p>
\t\t\t<div class=\"btn\">
\t\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Quitter</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/final_quizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 38,  172 => 35,  154 => 31,  149 => 29,  144 => 26,  127 => 25,  124 => 24,  118 => 21,  114 => 19,  108 => 15,  106 => 14,  99 => 10,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/reponse.css') }}\" type=\"text/css\"/>
{% endblock stylesheets %}

{% block body %}
\t<div class=\"head\">
\t\t<a href=\"{{ path('app_main') }}\">
\t\t\t<img src=\"{{ asset('images/head.png') }}\" alt=\"img quizz.fr\" class=\"homeimg\"/></a>
\t</div>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t{% if score == null %}

\t\t\t\t<p>
\t\t\t\t\tVotre score est de 0/10</p>
\t\t\t{% else %}
\t\t\t\t<p>
\t\t\t\t\tVotre score est de
\t\t\t\t\t{{score}}/10</p>

\t\t\t{% endif %}

\t\t\t{% for verify in verify %}


\t\t\t\t<p>Question
\t\t\t\t\t{{loop.index}}
\t\t\t\t\t:
\t\t\t\t\t{{ verify }}</p>


\t\t\t{% endfor %}

\t\t\t<p>Votre score a été envoyé par mail.</p>
\t\t\t<div class=\"btn\">
\t\t\t\t<a href=\"{{ path('app_main') }}\">
\t\t\t\t\t<button type=\"submit\" class=\"bouton\">Quitter</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "category/final_quizz.html.twig", "/Users/mams/WAC/Semestre 2/Framework PHP MVC/W-PHP-502-LYN-2-1-Quiz-quentin.brenas/templates/category/final_quizz.html.twig");
    }
}
