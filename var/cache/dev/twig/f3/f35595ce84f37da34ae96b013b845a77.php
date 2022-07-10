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

/* category/reponse.html.twig */
class __TwigTemplate_e0d6d4d70c086d9a601a09075ca0df94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/reponse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/reponse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/reponse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
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
\t\t\t

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["reponses"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["reponses"]) {
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 17, $this->source); })()), "idq", [], "any", false, false, false, 17))) {
                // line 18
                echo "\t<div class=\"reponse\">
\t\t<p>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponses"], 0, [], "array", false, false, false, 19), "reponse", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
\t</div> 
";
            }
            // line 22
            echo "\t

";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t
\t\t\t";
        // line 26
        $context["routeParamsUpdate"] = (twig_get_attribute($this->env, $this->source, (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 26, $this->source); })()), "idq", [], "any", false, false, false, 26) + 1);
        // line 27
        echo "\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 27, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index", ["id" => 1, "idq" => (isset($context["routeParamsUpdate"]) || array_key_exists("routeParamsUpdate", $context) ? $context["routeParamsUpdate"] : (function () { throw new RuntimeError('Variable "routeParamsUpdate" does not exist.', 27, $this->source); })())])]);
        echo "

\t\t\t<div class=\"btn\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 30, $this->source); })()), "next", [], "any", false, false, false, 30), 'widget', ["label" => "Suivant"]);
        echo "
\t\t\t</div>
\t\t\t";
        // line 33
        echo "

\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 35, $this->source); })()), 'form_end');
        echo "

\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/reponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 35,  169 => 33,  164 => 30,  157 => 27,  155 => 26,  152 => 25,  136 => 22,  130 => 19,  127 => 18,  125 => 17,  108 => 16,  99 => 10,  95 => 9,  92 => 8,  82 => 7,  69 => 3,  59 => 2,  36 => 1,);
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
\t\t\t

{% for reponses in reponses %}
{% if loop.index0 == routeParams.idq %}
\t<div class=\"reponse\">
\t\t<p>{{ reponses[0].reponse }}</p>
\t</div> 
{% endif %}
\t

{% endfor %}
\t\t\t
\t\t\t{% set routeParamsUpdate = routeParams.idq + 1 %}
\t\t\t{{ form_start(form2,{action:path('app_category_index', {'id': 1,'idq': routeParamsUpdate})}) }}

\t\t\t<div class=\"btn\">
\t\t\t\t{{ form_widget(form2.next, { 'label': 'Suivant' }) }}
\t\t\t</div>
\t\t\t{# <p>La bonne réponse est {{reponses[routeParams.idq].reponses}}</p> #}


\t\t\t{{ form_end(form2) }}

\t\t</div>
\t</div>
{% endblock %}
", "category/reponse.html.twig", "/Users/mams/WAC/Semestre 2/Framework PHP MVC/W-PHP-502-LYN-2-1-Quiz-quentin.brenas/templates/category/reponse.html.twig");
    }
}
