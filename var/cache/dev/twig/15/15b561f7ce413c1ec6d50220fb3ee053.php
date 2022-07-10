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

/* category/index.html.twig */
class __TwigTemplate_13654aaeda04a7a70b1a368b10c19386 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Category index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "

\t";
        // line 14
        echo "

\t<tbody>
\t\t<div class=\"head\">
\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">
\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/head.png"), "html", null, true);
        echo "\" alt=\"img quizz.fr\" class=\"homeimg\"/></a>
\t\t</div>
\t\t<div class=\"wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>


\t\t\t\t</div>


\t\t\t\t<div class=\"question_form\">
\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 31, $this->source); })()), "idq", [], "any", false, false, false, 31), [], "array", false, false, false, 31), "question", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
\t\t\t\t</div>

\t\t\t\t";
        // line 34
        $context["nameanswer"] = [0 => "A. ", 1 => "B. ", 2 => "C. "];
        // line 35
        echo "
\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 36, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 36, $this->source); })()), "idq", [], "any", false, false, false, 36), [], "array", false, false, false, 36));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 37
            echo "\t\t\t\t\t<div class=\"reponse_form\">
\t\t\t\t\t\t<div class=\"reponse_form_container\">

\t\t\t\t\t\t\t<p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nameanswer"]) || array_key_exists("nameanswer", $context) ? $context["nameanswer"] : (function () { throw new RuntimeError('Variable "nameanswer" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40), [], "array", false, false, false, 40), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<label>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 41), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
\t\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse", ["id" => 1, "idq" => twig_get_attribute($this->env, $this->source, (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 48, $this->source); })()), "idq", [], "any", false, false, false, 48)])]);
        echo "

\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "_token", [], "any", false, false, false, 50), 'row');
        echo "
\t\t\t\t<div class=\"test\">
\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Reponse", [], "any", false, false, false, 52), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"btn\">
\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "save", [], "any", false, false, false, 55), 'widget', ["label" => "Confirmer"]);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "


\t\t\t\t";
        // line 71
        echo "

\t\t\t</div>
\t\t</div>
\t</tbody>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 71,  226 => 57,  221 => 55,  215 => 52,  210 => 50,  205 => 48,  202 => 47,  182 => 41,  178 => 40,  173 => 37,  156 => 36,  153 => 35,  151 => 34,  145 => 31,  135 => 24,  127 => 19,  123 => 18,  117 => 14,  113 => 11,  103 => 10,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/reponse.css') }}\" type=\"text/css\"/>
{% endblock stylesheets %}

{% block title %}Category index
{% endblock %}

{% block body %}


\t{# {{ form_start(form,{action:path('app_category_index', {'id': 1,'idq': routeParamsUpdate})}) }} #}


\t<tbody>
\t\t<div class=\"head\">
\t\t\t<a href=\"{{ path('app_main') }}\">
\t\t\t\t<img src=\"{{ asset('images/head.png') }}\" alt=\"img quizz.fr\" class=\"homeimg\"/></a>
\t\t</div>
\t\t<div class=\"wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<p>{{ categories[0].name }}</p>


\t\t\t\t</div>


\t\t\t\t<div class=\"question_form\">
\t\t\t\t\t<p>{{ questions[routeParams.idq].question }}</p>
\t\t\t\t</div>

\t\t\t\t{% set nameanswer = [\"A. \",\"B. \",\"C. \"] %}

\t\t\t\t{% for reponse in reponses[routeParams.idq] %}
\t\t\t\t\t<div class=\"reponse_form\">
\t\t\t\t\t\t<div class=\"reponse_form_container\">

\t\t\t\t\t\t\t<p>{{nameanswer[loop.index0]}}
\t\t\t\t\t\t\t\t<label>{{ reponse.reponse }}</label>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t\t{{ form_start(form,{action:path('app_reponse', {'id': 1,'idq': routeParams.idq})}) }}

\t\t\t\t{{ form_row(form._token) }}
\t\t\t\t<div class=\"test\">
\t\t\t\t\t{{ form_row(form.Reponse) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"btn\">
\t\t\t\t\t{{ form_widget(form.save, { 'label': 'Confirmer' })}}
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}


\t\t\t\t{# {% if routeParams.idq == 9 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"bouton\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFinir
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"bouton\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSuivant
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}


\t\t\t</div>
\t\t</div>
\t</tbody>


{% endblock %}
", "category/index.html.twig", "/Users/mams/WAC/Semestre 2/Framework PHP MVC/W-PHP-502-LYN-2-1-Quiz-quentin.brenas/templates/category/index.html.twig");
    }
}
