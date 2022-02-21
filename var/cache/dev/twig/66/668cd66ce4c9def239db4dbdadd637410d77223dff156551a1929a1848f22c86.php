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

/* fournisseur/affiche.html.twig */
class __TwigTemplate_9096999ce87b130b12b71b24b5c4f4383205fe067c4a3b41fff6acc682b2e683 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/affiche.html.twig"));

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
    <th> ID </th>
    <th> nom fournisseur </th>
    <th> email </th>
    <th> num tel </th>
    </tr>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 20
            echo "    <tr>
    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo " </td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "nomFourni", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "numTelf", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
    <td> <a href=\"/fournisseur/supprimerf/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"btn btn-danger\" 
    onclick=\"return confirm('Etes vous sûr de supprimer ce fournisseur?');\">Supprimer</a> </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
    </body>
</html> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  67 => 20,  63 => 19,  43 => 1,);
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
    <th> ID </th>
    <th> nom fournisseur </th>
    <th> email </th>
    <th> num tel </th>
    </tr>
    {% for f in fournisseur %}
    <tr>
    <td>{{f.id}} </td>
    <td>{{f.nomFourni}}</td>
    <td>{{f.email}}</td>
    <td>{{f.numTelf}}</td>
    <td> <a href=\"/fournisseur/supprimerf/{{ f.id }}\" class=\"btn btn-danger\" 
    onclick=\"return confirm('Etes vous sûr de supprimer ce fournisseur?');\">Supprimer</a> </td>
    </tr>
    {% endfor %}
    </table>
    </body>
</html> ", "fournisseur/affiche.html.twig", "C:\\Users\\Mehdi\\Desktop\\PiWeb-main\\PiWeb-main\\templates\\fournisseur\\affiche.html.twig");
    }
}
