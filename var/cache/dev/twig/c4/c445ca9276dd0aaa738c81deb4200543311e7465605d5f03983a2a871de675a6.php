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

/* base.html.twig */
class __TwigTemplate_d9877dd0e39f1521ed25d99cd653a789ad8ce762d5b34cf60fe62d78287c101d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'Js' => [$this, 'block_Js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  
    <title>Visual Admin Dashboard - Home</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"templatemo\">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
            ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 20
        echo "    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

  </head>
  <body>  
  
    <!-- Left column -->
    <div class=\"templatemo-flex-row\">
    ";
        // line 32
        $this->displayBlock('sidebar', $context, $blocks);
        // line 67
        echo "
      <!-- Main content --> 
      <div class=\"templatemo-content col-1 light-gray-bg\">
      ";
        // line 70
        $this->displayBlock('navbar', $context, $blocks);
        // line 220
        echo "    <!-- JS -->

        ";
        // line 222
        $this->displayBlock('footer', $context, $blocks);
        // line 231
        echo "    ";
        $this->displayBlock('Js', $context, $blocks);
        // line 294
        echo "  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "    <link href=' http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet \" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link  rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/templatemo-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 33
        echo "      <div class=\"templatemo-sidebar\">
        <header class=\"templatemo-site-header\">
          <div class=\"square\"></div>
          <h1>Clutch.gg Admin</h1>
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
            <li><a href=\"#\"><i class=\"fa fa-home fa-fw\"></i>Dashboard</a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-bar-chart fa-fw\"></i>Liste user </a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-database fa-fw\"></i>Liste Jeux</a></li>
            <li><a href=\"maps.html\"><i class=\"fa fa-map-marker fa-fw\"></i>Liste Tournois</a></li>
            <li><a href=\"afficher_fourni\"><i class=\"fa fa-sliders fa-fw\"></i>Afficher les fournisseurs</a></li>
            <li><a href=\"afficher_prod\" class=\"active \"><i class=\"fa fa-sliders fa-fw\"></i>Afficher les Produits </a></li>
            <li><a href=\"ajouter_fourni\"><i class=\"fa fa-users fa-fw\"></i>Ajouter un fournisseur</a></li>
            <li><a href=\"ajouter_prod\"><i class=\"fa fa-users fa-fw\"></i>Ajouter un produit</a></li>
            <li><a href=\"login.html\"><i class=\"fa fa-eject fa-fw\"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 71
        echo "        <div class=\"templatemo-top-nav-container\">
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
            ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 216
        echo "        </div>
      </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 85
        echo "          <div class=\"templatemo-flex-row flex-content-row\">
            <div class=\"templatemo-content-widget white-bg col-2\">
              <i class=\"fa fa-times\"></i>
              <div class=\"square\"></div>
              <h2 class=\"templatemo-inline-block\">Visual Admin Template</h2><hr>
              <p>Works on all major browsers. IE 10+. Visual Admin is <a href=\"http://www.templatemo.com/tag/admin\" target=\"_parent\">free responsive admin template</a> for everyone. Feel free to use this template for your backend user interfaces. Please tell your friends about <a href=\"http://www.templatemo.com\" target=\"_parent\">templatemo.com</a> website. You may <a href=\"http://www.templatemo.com/contact\" target=\"_parent\">contact us</a> if you have anything to say.</p>
              <p>Nunc placerat purus eu tincidunt consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur. Fusce mi lacus, semper sit amet mattis eu.</p>              
            </div>
            <div class=\"templatemo-content-widget white-bg col-1 text-center\">
              <i class=\"fa fa-times\"></i>
              <h2 class=\"text-uppercase\">Maris</h2>
              <h3 class=\"text-uppercase margin-bottom-10\">Design Project</h3>
              <img src=\"images/bicycle.jpg\" alt=\"Bicycle\" class=\"img-circle img-thumbnail\">
            </div>
            <div class=\"templatemo-content-widget white-bg col-1\">
              <i class=\"fa fa-times\"></i>
              <h2 class=\"text-uppercase\">Dictum</h2>
              <h3 class=\"text-uppercase\">Sedvel Erat Non</h3><hr>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%;\"></div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
              </div>                          
            </div>
          </div>
          <div class=\"templatemo-flex-row flex-content-row\">
            <div class=\"col-1\">              
              <div class=\"templatemo-content-widget orange-bg\">
                <i class=\"fa fa-times\"></i>                
                <div class=\"media\">
                  <div class=\"media-left\">
                    <a href=\"#\">
                      <img class=\"media-object img-circle\" src=\"images/sunset.jpg\" alt=\"Sunset\">
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <h2 class=\"media-heading text-uppercase\">Consectur Fusce Enim</h2>
                    <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
                  </div>        
                </div>                
              </div>            
              <div class=\"templatemo-content-widget white-bg\">
                <i class=\"fa fa-times\"></i>
                <div class=\"media\">
                  <div class=\"media-left\">
                    <a href=\"#\">
                      <img class=\"media-object img-circle\" src=\"images/sunset.jpg\" alt=\"Sunset\">
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <h2 class=\"media-heading text-uppercase\">Consectur Fusce Enim</h2>
                    <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
                  </div>
                </div>                
              </div>            
            </div>
            <div class=\"col-1\">
              <div class=\"panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden\">
                <i class=\"fa fa-times\"></i>
                <div class=\"panel-heading templatemo-position-relative\"><h2 class=\"text-uppercase\">User Table</h2></div>
                <div class=\"table-responsive\">
                  <table class=\"table table-striped table-bordered\">
                    <thead>
                      <tr>
                        <td>No.</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Username</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>@jS</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Bill</td>
                        <td>Jones</td>
                        <td>@bJ</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Mary</td>
                        <td>James</td>
                        <td>@mJ</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Steve</td>
                        <td>Bride</td>
                        <td>@sB</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Paul</td>
                        <td>Richard</td>
                        <td>@pR</td>
                      </tr>                    
                    </tbody>
                  </table>    
                </div>                          
              </div>
            </div>           
          </div> <!-- Second row ends -->
          <div class=\"templatemo-flex-row flex-content-row templatemo-overflow-hidden\"> <!-- overflow hidden for iPad mini landscape view-->
            <div class=\"col-1 templatemo-overflow-hidden\">
              <div class=\"templatemo-content-widget white-bg templatemo-overflow-hidden\">
                <i class=\"fa fa-times\"></i>
                <div class=\"templatemo-flex-row flex-content-row\">
                  <div class=\"col-1 col-lg-6 col-md-12\">
                    <h2 class=\"text-center\">Modular<span class=\"badge\">new</span></h2>
                    <div id=\"pie_chart_div\" class=\"templatemo-chart\"></div> <!-- Pie chart div -->
                  </div>
                  <div class=\"col-1 col-lg-6 col-md-12\">
                    <h2 class=\"text-center\">Interactive<span class=\"badge\">new</span></h2>
                    <div id=\"bar_chart_div\" class=\"templatemo-chart\"></div> <!-- Bar chart div -->
                  </div>  
                </div>                
              </div>
            </div>
          </div>
              
          
     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 223
        echo "   <footer class=\"text-right\">
            <p>Copyright &copy; 2022 Clutch.gg 
            |Ben Hadj Amor Rawaà
            Ben Mbarek Khouloud
            Ghezal Mouhamed Mehdi 
            </p>
          </footer>    
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 231
    public function block_Js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Js"));

        // line 232
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>      <!-- jQuery -->
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script> <!--  jQuery Migrate Plugin -->
    <script src=\"https://www.google.com/jsapi\"></script> <!-- Google Chart -->
    <script>
      /* Google Chart 
      -------------------------------------------------------------------*/
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart); 
      
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
          ]);

          // Set chart options
          var options = {'title':'How Much Pizza I Ate Last Night'};

          // Instantiate and draw our chart, passing in some options.
          var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
          pieChart.draw(data, options);

          var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
          barChart.draw(data, options);
      }

      \$(document).ready(function(){
        if(\$.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          \$(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          \$(window).resize(function(){
            drawChart();
          });  
        }   
      });
      
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/templatemo-script.js"), "html", null, true);
        echo "\"></script>      <!-- Templatemo Script -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  489 => 292,  427 => 233,  422 => 232,  412 => 231,  395 => 223,  385 => 222,  245 => 85,  235 => 84,  222 => 216,  220 => 84,  205 => 71,  195 => 70,  152 => 33,  142 => 32,  130 => 18,  126 => 17,  122 => 16,  119 => 15,  109 => 14,  98 => 294,  95 => 231,  93 => 222,  89 => 220,  87 => 70,  82 => 67,  80 => 32,  66 => 20,  64 => 14,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  
    <title>Visual Admin Dashboard - Home</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"templatemo\">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
            {% block css %}
    <link href=' http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet \" href=\"{{asset('asset/css/font-awesome.min.css')}}\">
    <link  rel=\"stylesheet\" href=\"{{asset('asset/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('asset/css/templatemo-style.css')}}\">
    {% endblock css %}
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
    {% block sidebar %}
      <div class=\"templatemo-sidebar\">
        <header class=\"templatemo-site-header\">
          <div class=\"square\"></div>
          <h1>Clutch.gg Admin</h1>
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
            <li><a href=\"#\"><i class=\"fa fa-home fa-fw\"></i>Dashboard</a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-bar-chart fa-fw\"></i>Liste user </a></li>
            <li><a href=\"data-visualization.html\"><i class=\"fa fa-database fa-fw\"></i>Liste Jeux</a></li>
            <li><a href=\"maps.html\"><i class=\"fa fa-map-marker fa-fw\"></i>Liste Tournois</a></li>
            <li><a href=\"afficher_fourni\"><i class=\"fa fa-sliders fa-fw\"></i>Afficher les fournisseurs</a></li>
            <li><a href=\"afficher_prod\" class=\"active \"><i class=\"fa fa-sliders fa-fw\"></i>Afficher les Produits </a></li>
            <li><a href=\"ajouter_fourni\"><i class=\"fa fa-users fa-fw\"></i>Ajouter un fournisseur</a></li>
            <li><a href=\"ajouter_prod\"><i class=\"fa fa-users fa-fw\"></i>Ajouter un produit</a></li>
            <li><a href=\"login.html\"><i class=\"fa fa-eject fa-fw\"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
{% endblock sidebar %}

      <!-- Main content --> 
      <div class=\"templatemo-content col-1 light-gray-bg\">
      {% block navbar %}
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
            {% block content %}
          <div class=\"templatemo-flex-row flex-content-row\">
            <div class=\"templatemo-content-widget white-bg col-2\">
              <i class=\"fa fa-times\"></i>
              <div class=\"square\"></div>
              <h2 class=\"templatemo-inline-block\">Visual Admin Template</h2><hr>
              <p>Works on all major browsers. IE 10+. Visual Admin is <a href=\"http://www.templatemo.com/tag/admin\" target=\"_parent\">free responsive admin template</a> for everyone. Feel free to use this template for your backend user interfaces. Please tell your friends about <a href=\"http://www.templatemo.com\" target=\"_parent\">templatemo.com</a> website. You may <a href=\"http://www.templatemo.com/contact\" target=\"_parent\">contact us</a> if you have anything to say.</p>
              <p>Nunc placerat purus eu tincidunt consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur. Fusce mi lacus, semper sit amet mattis eu.</p>              
            </div>
            <div class=\"templatemo-content-widget white-bg col-1 text-center\">
              <i class=\"fa fa-times\"></i>
              <h2 class=\"text-uppercase\">Maris</h2>
              <h3 class=\"text-uppercase margin-bottom-10\">Design Project</h3>
              <img src=\"images/bicycle.jpg\" alt=\"Bicycle\" class=\"img-circle img-thumbnail\">
            </div>
            <div class=\"templatemo-content-widget white-bg col-1\">
              <i class=\"fa fa-times\"></i>
              <h2 class=\"text-uppercase\">Dictum</h2>
              <h3 class=\"text-uppercase\">Sedvel Erat Non</h3><hr>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%;\"></div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
              </div>                          
            </div>
          </div>
          <div class=\"templatemo-flex-row flex-content-row\">
            <div class=\"col-1\">              
              <div class=\"templatemo-content-widget orange-bg\">
                <i class=\"fa fa-times\"></i>                
                <div class=\"media\">
                  <div class=\"media-left\">
                    <a href=\"#\">
                      <img class=\"media-object img-circle\" src=\"images/sunset.jpg\" alt=\"Sunset\">
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <h2 class=\"media-heading text-uppercase\">Consectur Fusce Enim</h2>
                    <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
                  </div>        
                </div>                
              </div>            
              <div class=\"templatemo-content-widget white-bg\">
                <i class=\"fa fa-times\"></i>
                <div class=\"media\">
                  <div class=\"media-left\">
                    <a href=\"#\">
                      <img class=\"media-object img-circle\" src=\"images/sunset.jpg\" alt=\"Sunset\">
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <h2 class=\"media-heading text-uppercase\">Consectur Fusce Enim</h2>
                    <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
                  </div>
                </div>                
              </div>            
            </div>
            <div class=\"col-1\">
              <div class=\"panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden\">
                <i class=\"fa fa-times\"></i>
                <div class=\"panel-heading templatemo-position-relative\"><h2 class=\"text-uppercase\">User Table</h2></div>
                <div class=\"table-responsive\">
                  <table class=\"table table-striped table-bordered\">
                    <thead>
                      <tr>
                        <td>No.</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Username</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>@jS</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Bill</td>
                        <td>Jones</td>
                        <td>@bJ</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Mary</td>
                        <td>James</td>
                        <td>@mJ</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Steve</td>
                        <td>Bride</td>
                        <td>@sB</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Paul</td>
                        <td>Richard</td>
                        <td>@pR</td>
                      </tr>                    
                    </tbody>
                  </table>    
                </div>                          
              </div>
            </div>           
          </div> <!-- Second row ends -->
          <div class=\"templatemo-flex-row flex-content-row templatemo-overflow-hidden\"> <!-- overflow hidden for iPad mini landscape view-->
            <div class=\"col-1 templatemo-overflow-hidden\">
              <div class=\"templatemo-content-widget white-bg templatemo-overflow-hidden\">
                <i class=\"fa fa-times\"></i>
                <div class=\"templatemo-flex-row flex-content-row\">
                  <div class=\"col-1 col-lg-6 col-md-12\">
                    <h2 class=\"text-center\">Modular<span class=\"badge\">new</span></h2>
                    <div id=\"pie_chart_div\" class=\"templatemo-chart\"></div> <!-- Pie chart div -->
                  </div>
                  <div class=\"col-1 col-lg-6 col-md-12\">
                    <h2 class=\"text-center\">Interactive<span class=\"badge\">new</span></h2>
                    <div id=\"bar_chart_div\" class=\"templatemo-chart\"></div> <!-- Bar chart div -->
                  </div>  
                </div>                
              </div>
            </div>
          </div>
              
          
     {% endblock content %}
        </div>
      </div>
    </div>
    {% endblock navbar %}
    <!-- JS -->

        {% block footer %}
   <footer class=\"text-right\">
            <p>Copyright &copy; 2022 Clutch.gg 
            |Ben Hadj Amor Rawaà
            Ben Mbarek Khouloud
            Ghezal Mouhamed Mehdi 
            </p>
          </footer>    
        {% endblock footer %}
    {% block Js %}
    <script src=\"{{asset('asset/js/jquery-1.11.2.min.js')}}\"></script>      <!-- jQuery -->
    <script src=\"{{asset('asset/js/jquery-migrate-1.2.1.min.js')}}\"></script> <!--  jQuery Migrate Plugin -->
    <script src=\"https://www.google.com/jsapi\"></script> <!-- Google Chart -->
    <script>
      /* Google Chart 
      -------------------------------------------------------------------*/
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart); 
      
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
          ]);

          // Set chart options
          var options = {'title':'How Much Pizza I Ate Last Night'};

          // Instantiate and draw our chart, passing in some options.
          var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
          pieChart.draw(data, options);

          var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
          barChart.draw(data, options);
      }

      \$(document).ready(function(){
        if(\$.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          \$(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          \$(window).resize(function(){
            drawChart();
          });  
        }   
      });
      
    </script>
    <script type=\"text/javascript\" src=\"{{asset('asset/js/templatemo-script.js')}}\"></script>      <!-- Templatemo Script -->
{% endblock Js %}
  </body>
</html>", "base.html.twig", "C:\\Users\\Mehdi\\Desktop\\PiWeb-main\\PiWeb-main\\templates\\base.html.twig");
    }
}
