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

/* produit/affichep.html.twig */
class __TwigTemplate_af37ee0c1364012691b431f210fb3423a38aa79442f51ed9d0f0a520d1f055a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/affichep.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/affichep.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
     <meta charset=\"utf-8\" />
     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  

        <title>Titre</title>
    </head>

    <body>
    <table> 
    <tr>
    <th> ID produit </th>
    <th> nom produit </th>
    <th> quantité </th>
    <th> prix </th>
    <th> description </th>
    </tr>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 21
            echo "    <tr>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idProd", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProd", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantite", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
    <td> <a href=\"/produit/supprimerp/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idProd", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"btn btn-danger\" 
    onclick=\"return confirm('Etes vous sûr de supprimer ce produit ?');\">Supprimer</a> </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </table>
    </body>
</html> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/affichep.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
     <meta charset=\"utf-8\" />
     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  

        <title>Titre</title>
    </head>

    <body>
    <table> 
    <tr>
    <th> ID produit </th>
    <th> nom produit </th>
    <th> quantité </th>
    <th> prix </th>
    <th> description </th>
    </tr>
    {% for p in produit %}
    <tr>
    <td>{{p.idProd}}</td>
    <td>{{p.nomProd}}</td>
    <td>{{p.quantite}}</td>
    <td>{{p.prix}}</td>
    <td>{{p.description}}</td>
    <td> <a href=\"/produit/supprimerp/{{ p.idProd }}\" class=\"btn btn-danger\" 
    onclick=\"return confirm('Etes vous sûr de supprimer ce produit ?');\">Supprimer</a> </td>
    </tr>
    {% endfor %}
    </table>
    </body>
</html> ", "produit/affichep.html.twig", "C:\\Users\\Mehdi\\Desktop\\PiWeb-main\\PiWeb-main\\templates\\produit\\affichep.html.twig");
    }
}
