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

/* fournisseur/modifier_fourni.html.twig */
class __TwigTemplate_4c2cdba39b2fd69d3a1d964c961edfe0cd4edf985cfb4d0bf157b2be4c30b3d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/modifier_fourni.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/modifier_fourni.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Visual Admin Dashboard - Preferences</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"templatemo\">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/templatemo-style.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class=\"templatemo-flex-row\">
      <div class=\"templatemo-sidebar\">
        <header class=\"templatemo-site-header\">
          <div class=\"square\"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class=\"profile-photo-container\">
          <img src=\"images/profile-photo.jpg\" alt=\"Profile Photo\" class=\"img-responsive\">
          <div class=\"profile-photo-overlay\"></div>
        </div>
        <!-- Search box -->
        <form class=\"templatemo-search-form\" role=\"search\">
          <div class=\"input-group\">
              <button type=\"submit\" class=\"fa fa-search\"></button>
              <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"srch-term\" id=\"srch-term\">
          </div>
        </form>
        <div class=\"mobile-menu-icon\">
            <i class=\"fa fa-bars\"></i>
          </div>
        <nav class=\"templatemo-left-nav\">
          <ul>
            <li><a href=\"index.html\"><i class=\"fa fa-home fa-fw\"></i>Dashboard</a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-bar-chart fa-fw\"></i>Charts</a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-database fa-fw\"></i>Data Visualization</a></li>
            <li><a href=\"maps.html\"><i class=\"fa fa-map-marker fa-fw\"></i>Maps</a></li>
            <li><a href=\"/afficher_fourni\" ><i class=\"fa fa-users fa-fw\"></i>Afficher fournisseur</a></li>
            <li><a href=\"/afficher_prod\" ><i class=\"fa fa-users fa-fw\"></i>Afficher produit</a></li>
            <li><a href=\"/ajouter_fourni\"><i class=\"fa fa-sliders fa-fw\"></i>Ajouter fournisseur</a></li>
            <li><a href=\"/ajouter_prod\"><i class=\"fa fa-sliders fa-fw\"></i>Ajouter produit</a></li>
            <li><a href=\"login.html\"><i class=\"fa fa-eject fa-fw\"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class=\"templatemo-content col-1 light-gray-bg\">
        <div class=\"templatemo-top-nav-container\">
          <div class=\"row\">
            <nav class=\"templatemo-top-nav col-lg-12 col-md-12\">
              <ul class=\"text-uppercase\">
                <li><a href=\"\" class=\"active\">Admin panel</a></li>
                <li><a href=\"\">Dashboard</a></li>
                <li><a href=\"\">Overview</a></li>
                <li><a href=\"login.html\">Sign in form</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class=\"templatemo-content-container\">
          <div class=\"templatemo-content-widget white-bg\">
                             
            <h2 class=\"margin-bottom-10\">Modifier un fournisseur</h2>
             ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start');
        echo "
              ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'widget');
        echo "
            <p>  </p>
              

              <div class=\"form-group text-right\">
                <button type=\"submit\" class=\"templatemo-blue-button\">Modifier</button>
                <button type=\"reset\" class=\"templatemo-white-button\">Annuler</button>
              </div>                           
            ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
          </div>

          <footer class=\"text-right\">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type=\"text/javascript\" src=\"js/jquery-1.11.2.min.js\"></script>        <!-- jQuery -->
    <script type=\"text/javascript\" src=\"js/bootstrap-filestyle.min.js\"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type=\"text/javascript\" src=\"js/templatemo-script.js\"></script>        <!-- Templatemo Script -->
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/modifier_fourni.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 90,  129 => 82,  125 => 81,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Visual Admin Dashboard - Preferences</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"templatemo\">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/templatemo-style.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class=\"templatemo-flex-row\">
      <div class=\"templatemo-sidebar\">
        <header class=\"templatemo-site-header\">
          <div class=\"square\"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class=\"profile-photo-container\">
          <img src=\"images/profile-photo.jpg\" alt=\"Profile Photo\" class=\"img-responsive\">
          <div class=\"profile-photo-overlay\"></div>
        </div>
        <!-- Search box -->
        <form class=\"templatemo-search-form\" role=\"search\">
          <div class=\"input-group\">
              <button type=\"submit\" class=\"fa fa-search\"></button>
              <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"srch-term\" id=\"srch-term\">
          </div>
        </form>
        <div class=\"mobile-menu-icon\">
            <i class=\"fa fa-bars\"></i>
          </div>
        <nav class=\"templatemo-left-nav\">
          <ul>
            <li><a href=\"index.html\"><i class=\"fa fa-home fa-fw\"></i>Dashboard</a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-bar-chart fa-fw\"></i>Charts</a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-database fa-fw\"></i>Data Visualization</a></li>
            <li><a href=\"maps.html\"><i class=\"fa fa-map-marker fa-fw\"></i>Maps</a></li>
            <li><a href=\"/afficher_fourni\" ><i class=\"fa fa-users fa-fw\"></i>Afficher fournisseur</a></li>
            <li><a href=\"/afficher_prod\" ><i class=\"fa fa-users fa-fw\"></i>Afficher produit</a></li>
            <li><a href=\"/ajouter_fourni\"><i class=\"fa fa-sliders fa-fw\"></i>Ajouter fournisseur</a></li>
            <li><a href=\"/ajouter_prod\"><i class=\"fa fa-sliders fa-fw\"></i>Ajouter produit</a></li>
            <li><a href=\"login.html\"><i class=\"fa fa-eject fa-fw\"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class=\"templatemo-content col-1 light-gray-bg\">
        <div class=\"templatemo-top-nav-container\">
          <div class=\"row\">
            <nav class=\"templatemo-top-nav col-lg-12 col-md-12\">
              <ul class=\"text-uppercase\">
                <li><a href=\"\" class=\"active\">Admin panel</a></li>
                <li><a href=\"\">Dashboard</a></li>
                <li><a href=\"\">Overview</a></li>
                <li><a href=\"login.html\">Sign in form</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class=\"templatemo-content-container\">
          <div class=\"templatemo-content-widget white-bg\">
                             
            <h2 class=\"margin-bottom-10\">Modifier un fournisseur</h2>
             {{ form_start(form) }}
              {{form_widget(form)}}
            <p>  </p>
              

              <div class=\"form-group text-right\">
                <button type=\"submit\" class=\"templatemo-blue-button\">Modifier</button>
                <button type=\"reset\" class=\"templatemo-white-button\">Annuler</button>
              </div>                           
            {{ form_end(form) }}
          </div>

          <footer class=\"text-right\">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type=\"text/javascript\" src=\"js/jquery-1.11.2.min.js\"></script>        <!-- jQuery -->
    <script type=\"text/javascript\" src=\"js/bootstrap-filestyle.min.js\"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type=\"text/javascript\" src=\"js/templatemo-script.js\"></script>        <!-- Templatemo Script -->
  </body>
</html>
", "fournisseur/modifier_fourni.html.twig", "C:\\Users\\Mehdi\\Desktop\\PiWeb-main\\PiWeb-main\\templates\\fournisseur\\modifier_fourni.html.twig");
    }
}
