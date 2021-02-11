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

/* engagement/index.html.twig */
class __TwigTemplate_9f946ed5efbb0335e2183d453402575addc8da3d4100058246850b6a92be6f9d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "engagement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "engagement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "engagement/index.html.twig", 1);
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

        echo "liste des engagements";
        
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
        echo "<h1>la liste des engagements</h1>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "<div class=\"alert alert-success\">
    ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "<table id=\"example\" class=\"table table-striped table-bordered \">
    <thead>
        <tr>
            <th>Id</th>
            <th>Montant</th>
            <th>Date</th>
            <th>Numero Ordre Paiement</th>
            <th>numéro commande</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["engagements"]) || array_key_exists("engagements", $context) ? $context["engagements"] : (function () { throw new RuntimeError('Variable "engagements" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["engagement"]) {
            // line 25
            echo "        <tr>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engagement"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engagement"], "montant", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["engagement"], "date", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engagement"], "date", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engagement"], "numeroOrdrePaiement", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["engagement"], "commande", [], "any", false, false, false, 30), "numero", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <button type=\"button\" class=\"btn btn-secondary\"> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engagement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["engagement"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Voir <i class=\"fa fa-eye\"
                        aria-hidden=\"true\"></i>
                </a></button>
                    <button type=\"button\" class=\"btn btn-secondary\">  <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engagement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["engagement"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">editer <i class=\"fa fa-pencil\"
                        aria-hidden=\"true\"></i>
                </a></button>
                  </div>
               
              
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "        <tr>
            <td colspan=\"5\">no records found</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engagement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
</table>
<button type=\"button\" class=\"btn btn-secondary\">
    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engagement_new");
        echo "\">Créer un nouveau <i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i>
    </a></button>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "engagement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 52,  180 => 49,  171 => 45,  157 => 36,  151 => 33,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  126 => 25,  121 => 24,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}liste des engagements{% endblock %}

{% block body %}
<h1>la liste des engagements</h1>
{% for message in app.flashes('info') %}
<div class=\"alert alert-success\">
    {{message}}
</div>
{% endfor %}
<table id=\"example\" class=\"table table-striped table-bordered \">
    <thead>
        <tr>
            <th>Id</th>
            <th>Montant</th>
            <th>Date</th>
            <th>Numero Ordre Paiement</th>
            <th>numéro commande</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        {% for engagement in engagements %}
        <tr>
            <td>{{ engagement.id }}</td>
            <td>{{ engagement.montant }}</td>
            <td>{{ engagement.date ? engagement.date|date('d-m-Y') : '' }}</td>
            <td>{{ engagement.numeroOrdrePaiement }}</td>
            <td>{{engagement.commande.numero}}</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <button type=\"button\" class=\"btn btn-secondary\"> <a href=\"{{ path('engagement_show', {'id': engagement.id}) }}\">Voir <i class=\"fa fa-eye\"
                        aria-hidden=\"true\"></i>
                </a></button>
                    <button type=\"button\" class=\"btn btn-secondary\">  <a href=\"{{ path('engagement_edit', {'id': engagement.id}) }}\">editer <i class=\"fa fa-pencil\"
                        aria-hidden=\"true\"></i>
                </a></button>
                  </div>
               
              
            </td>
        </tr>
        {% else %}
        <tr>
            <td colspan=\"5\">no records found</td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<button type=\"button\" class=\"btn btn-secondary\">
    <a href=\"{{ path('engagement_new') }}\">Créer un nouveau <i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i>
    </a></button>

{% endblock %}", "engagement/index.html.twig", "C:\\wamp\\www\\tranquil-chamber-71759\\templates\\engagement\\index.html.twig");
    }
}
