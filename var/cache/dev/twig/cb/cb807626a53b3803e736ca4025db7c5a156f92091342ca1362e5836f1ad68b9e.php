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

/* produit/afficher_prod.html.twig */
class __TwigTemplate_358202f7da2cee2bcd97c6902e0943c57b36d2d9fd622b812edae34db683fa97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficher_prod.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficher_prod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/afficher_prod.html.twig", 1);
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
           <h2 class=\"margin-bottom-10\">Les produits : </h2>
             <div class=\"panel panel-default table-responsive\">
              <table class=\"table table-striped table-bordered templatemo-user-table\">
                <thead>
                  <tr>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">#ID <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Nom produit <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Quantité <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Prix <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Description <span class=\"caret\"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                 ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 21
            echo "                  <tr>
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
                    <td><a href=\"/modifierp/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idProd", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"templatemo-edit-btn\">Edit</a></td>
                    <td><a href=\"/produit/supprimerp/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idProd", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"btn btn-danger\" 
                        onclick=\"return confirm('Etes vous sûr de supprimer ce produit ?');\">Delete</a> </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return "produit/afficher_prod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  91 => 21,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}

  <div class=\"templatemo-content-container\">
          <div class=\"templatemo-content-widget no-padding\">
           <h2 class=\"margin-bottom-10\">Les produits : </h2>
             <div class=\"panel panel-default table-responsive\">
              <table class=\"table table-striped table-bordered templatemo-user-table\">
                <thead>
                  <tr>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">#ID <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Nom produit <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Quantité <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Prix <span class=\"caret\"></span></a></td>
                    <td><a href=\"\" class=\"white-text templatemo-sort-by\">Description <span class=\"caret\"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                 {%for p in produit%}
                  <tr>
                    <td>{{p.idProd}}</td>
                    <td>{{p.nomProd}}</td>
                    <td>{{p.quantite}}</td>
                    <td>{{p.prix}}</td>
                    <td>{{p.description}}</td>
                    <td><a href=\"/modifierp/{{p.idProd}}\" class=\"templatemo-edit-btn\">Edit</a></td>
                    <td><a href=\"/produit/supprimerp/{{ p.idProd }}\" class=\"btn btn-danger\" 
                        onclick=\"return confirm('Etes vous sûr de supprimer ce produit ?');\">Delete</a> </td>
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
{% endblock content %}", "produit/afficher_prod.html.twig", "C:\\Users\\Mehdi\\Desktop\\PiWeb-main\\PiWeb-main\\templates\\produit\\afficher_prod.html.twig");
    }
}
