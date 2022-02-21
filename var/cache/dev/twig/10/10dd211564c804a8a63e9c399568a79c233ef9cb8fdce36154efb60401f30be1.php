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

/* fournisseur/afficher_fourni.html.twig */
class __TwigTemplate_0f78c32ef4c0b033cb89565339649597195556b25175ca6ea232e215dbc5c841 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/afficher_fourni.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/afficher_fourni.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/afficher_fourni.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
        <div class=\"templatemo-content-container\">
          <div class=\"templatemo-content-widget no-padding\">
            <h2 class=\"margin-bottom-10\">Les fournisseurs : </h2>
            <div class=\"panel panel-default table-responsive\">
              <table class=\"table table-striped table-bordered templatemo-user-table\">
                <thead>
                  <tr>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">#ID <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Nom fournisseur <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Email <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Numero telephone <span class=\"caret\"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                 ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 20
            echo "                  <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
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
                    <td><a href=\"/modifierf/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"templatemo-edit-btn\">Edit</a></td>
                    <td><a href=\"/fournisseur/supprimerf/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"btn btn-danger\" 
                        onclick=\"return confirm('Etes vous sûr de supprimer ce fournisseur?');\">Delete</a> </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            
              </table>    
            </div>                          
          </div>          
     
              
          <footer class=\"text-right\">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>         
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/afficher_fourni.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 29,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  90 => 20,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}

        <div class=\"templatemo-content-container\">
          <div class=\"templatemo-content-widget no-padding\">
            <h2 class=\"margin-bottom-10\">Les fournisseurs : </h2>
            <div class=\"panel panel-default table-responsive\">
              <table class=\"table table-striped table-bordered templatemo-user-table\">
                <thead>
                  <tr>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">#ID <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Nom fournisseur <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Email <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Numero telephone <span class=\"caret\"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                 {%for f in fournisseur%}
                  <tr>
                    <td>{{f.id}}</td>
                    <td>{{f.nomFourni}}</td>
                    <td>{{f.email}}</td>
                    <td>{{f.numTelf}}</td>
                    <td><a href=\"/modifierf/{{f.id}}\" class=\"templatemo-edit-btn\">Edit</a></td>
                    <td><a href=\"/fournisseur/supprimerf/{{ f.id }}\" class=\"btn btn-danger\" 
                        onclick=\"return confirm('Etes vous sûr de supprimer ce fournisseur?');\">Delete</a> </td>
                  </tr>
                {% endfor %}            
              </table>    
            </div>                          
          </div>          
     
              
          <footer class=\"text-right\">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>         
        </div>
    {% endblock content %}
    
   ", "fournisseur/afficher_fourni.html.twig", "C:\\Users\\Mehdi\\Desktop\\PiWeb-main\\PiWeb-main\\templates\\fournisseur\\afficher_fourni.html.twig");
    }
}
