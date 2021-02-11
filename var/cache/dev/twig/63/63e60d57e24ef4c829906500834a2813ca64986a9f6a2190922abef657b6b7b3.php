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

/* nouvelle_mesure/show.html.twig */
class __TwigTemplate_62af63dc9edc98462d38132f3912179cccfcfeafa5fac4e0c59c283a09e6e3c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nouvelle_mesure/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nouvelle_mesure/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nouvelle_mesure/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "NouvelleMesure";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>NouvelleMesure</h1>

<table class=\"table table-striped table-bordered \">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nouvelle_mesure"]) || array_key_exists("nouvelle_mesure", $context) ? $context["nouvelle_mesure"] : (function () { throw new RuntimeError('Variable "nouvelle_mesure" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Montant</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nouvelle_mesure"]) || array_key_exists("nouvelle_mesure", $context) ? $context["nouvelle_mesure"] : (function () { throw new RuntimeError('Variable "nouvelle_mesure" does not exist.', 16, $this->source); })()), "montant", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["nouvelle_mesure"]) || array_key_exists("nouvelle_mesure", $context) ? $context["nouvelle_mesure"] : (function () { throw new RuntimeError('Variable "nouvelle_mesure" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nouvelle_mesure"]) || array_key_exists("nouvelle_mesure", $context) ? $context["nouvelle_mesure"] : (function () { throw new RuntimeError('Variable "nouvelle_mesure" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
    </tbody>
</table>
<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelle_mesure_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["nouvelle_mesure"]) || array_key_exists("nouvelle_mesure", $context) ? $context["nouvelle_mesure"] : (function () { throw new RuntimeError('Variable "nouvelle_mesure" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> editer</a>
    </button>
    ";
        // line 27
        echo twig_include($this->env, $context, "nouvelle_mesure/_delete_form.html.twig");
        echo "
    <button type=\"button\" class=\"btn btn-secondary\"> <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelle_mesure_index");
        echo "\"><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> retour à la
        liste</a></button>
  </div>

<div style=\"text-align: right;\">

   
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nouvelle_mesure/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  123 => 27,  118 => 25,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}NouvelleMesure{% endblock %}

{% block body %}
<h1>NouvelleMesure</h1>

<table class=\"table table-striped table-bordered \">
    <tbody>
        <tr>
            <th>Id</th>
            <td>{{ nouvelle_mesure.id }}</td>
        </tr>
        <tr>
            <th>Montant</th>
            <td>{{ nouvelle_mesure.montant }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ nouvelle_mesure.date ? nouvelle_mesure.date|date('d-m-Y')  : '' }}</td>
        </tr>
    </tbody>
</table>
<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
    <button type=\"button\" class=\"btn btn-secondary\"><a href=\"{{ path('nouvelle_mesure_edit', {'id': nouvelle_mesure.id}) }}\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> editer</a>
    </button>
    {{ include('nouvelle_mesure/_delete_form.html.twig') }}
    <button type=\"button\" class=\"btn btn-secondary\"> <a href=\"{{ path('nouvelle_mesure_index') }}\"><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> retour à la
        liste</a></button>
  </div>

<div style=\"text-align: right;\">

   
</div>

{% endblock %}", "nouvelle_mesure/show.html.twig", "C:\\wamp\\www\\tranquil-chamber-71759\\templates\\nouvelle_mesure\\show.html.twig");
    }
}
