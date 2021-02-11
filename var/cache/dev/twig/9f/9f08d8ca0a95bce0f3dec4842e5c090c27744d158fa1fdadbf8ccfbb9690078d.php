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

/* engagement/new.html.twig */
class __TwigTemplate_400697ff94c3230ad09c67ccd9f74f5b7e66b1661124f7791a24695301fb51a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "engagement/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "engagement/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "engagement/new.html.twig", 1);
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

        echo "Création d'un engagement";
        
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
        echo "<h1 class=\"mb-5\">Création d'un engagement</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
    <button type=\"button\" class=\"btn btn-outline-primary\">";
        // line 8
        echo twig_include($this->env, $context, "engagement/_form.html.twig");
        echo "
    </button>
    <button type=\"button\" class=\"btn btn-secondary\"><a  href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("engagement_index");
        echo "\"><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i>
        retour à la liste</a></button>
  </div>

<!--
<div class=\"container\">
    <form action=\"\" method=\"POST\">
        <div class=\"row\">
            <div class=\"col col-sm-6\">
                  <fieldset>


                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"montant\">Montant</label>
                        <input class=\"form-control\" type=\"number\" name=\"montant\" placeholder=\"montant\" id=\"montant\">
                    </div>

                      
                </fieldset>
            </div>
            <div class=\"col col-sm-6\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"numeroOrdrePaiement\"> Numéro ordre de paiement:</label>
                        <input class=\"form-control\" type=\"number\" name=\"numeroOrdrePaiement\"
                            placeholder=\"numeroOrdrePaiement\" id=\"numeroOrdrePaiement\">
                    </div>
                      
                </fieldset>
            </div>

            <div class=\"col col-sm-4\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"cammandeNumero\">Numéro de commande</label>
                        <input class=\"form-control\" type=\"number\" name=\"commandeNumero\"
                            placeholder=\"Saisir le numéro de la commande\" id=\"cammandeNumero\">
                    </div>
                      
                </fieldset>
            </div>

            <div class=\"col col-sm-4\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"budgetNumero\">Numéro du budget </label>
                        <input class=\"form-control\" type=\"number\" name=\"budgetNumero\"
                            placeholder=\"Saisir le numéro du budget\" id=\"budgetNumero\">
                    </div>
                      
                </fieldset>
            </div>
            <div class=\"col col-sm-4\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"compteNumero\">Numéro de compte</label>
                        <input class=\"form-control\" type=\"number\" name=\"compteNumero\"
                            placeholder=\"Saisir le numéro du compte\" id=\"compteNumero\">
                    </div>
                      
                </fieldset>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            </button>
        </div>
    </form>
</div>
-->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "engagement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Création d'un engagement{% endblock %}

{% block body %}
<h1 class=\"mb-5\">Création d'un engagement</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
    <button type=\"button\" class=\"btn btn-outline-primary\">{{ include('engagement/_form.html.twig') }}
    </button>
    <button type=\"button\" class=\"btn btn-secondary\"><a  href=\"{{ path('engagement_index') }}\"><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i>
        retour à la liste</a></button>
  </div>

<!--
<div class=\"container\">
    <form action=\"\" method=\"POST\">
        <div class=\"row\">
            <div class=\"col col-sm-6\">
                  <fieldset>


                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"montant\">Montant</label>
                        <input class=\"form-control\" type=\"number\" name=\"montant\" placeholder=\"montant\" id=\"montant\">
                    </div>

                      
                </fieldset>
            </div>
            <div class=\"col col-sm-6\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"numeroOrdrePaiement\"> Numéro ordre de paiement:</label>
                        <input class=\"form-control\" type=\"number\" name=\"numeroOrdrePaiement\"
                            placeholder=\"numeroOrdrePaiement\" id=\"numeroOrdrePaiement\">
                    </div>
                      
                </fieldset>
            </div>

            <div class=\"col col-sm-4\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"cammandeNumero\">Numéro de commande</label>
                        <input class=\"form-control\" type=\"number\" name=\"commandeNumero\"
                            placeholder=\"Saisir le numéro de la commande\" id=\"cammandeNumero\">
                    </div>
                      
                </fieldset>
            </div>

            <div class=\"col col-sm-4\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"budgetNumero\">Numéro du budget </label>
                        <input class=\"form-control\" type=\"number\" name=\"budgetNumero\"
                            placeholder=\"Saisir le numéro du budget\" id=\"budgetNumero\">
                    </div>
                      
                </fieldset>
            </div>
            <div class=\"col col-sm-4\">
                  <fieldset>

                    <div class=\"form-group\">
                        <label class=\"form-control\" for=\"compteNumero\">Numéro de compte</label>
                        <input class=\"form-control\" type=\"number\" name=\"compteNumero\"
                            placeholder=\"Saisir le numéro du compte\" id=\"compteNumero\">
                    </div>
                      
                </fieldset>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            </button>
        </div>
    </form>
</div>
-->



{% endblock %}", "engagement/new.html.twig", "C:\\wamp\\www\\tranquil-chamber-71759\\templates\\engagement\\new.html.twig");
    }
}
