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
class __TwigTemplate_a2dfc673f650d33f7c26d514b4183cc5f27ea835d563e295318afd97cacda13c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'fonts' => [$this, 'block_fonts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/reset.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/global.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/login-form.css"), "html", null, true);
        echo ">
    ";
        // line 12
        $this->displayBlock('fonts', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body>
<header id=\"header\">
    ";
        // line 23
        $this->displayBlock('navbar', $context, $blocks);
        // line 82
        echo "</header>
<main>
    ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "</main>
<footer>
    <h4>Copyright © 2021 Alisher and Mikhail</h4>
</footer>
";
        // line 90
        echo "<script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/hideAndShowNavBar.js"), "html", null, true);
        echo "></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Reservio</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_fonts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonts"));

        // line 13
        echo "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 24
        echo "        <nav>
            <ul class=\"menu\">
                <li id=\"logo\"><a href=";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "><h1>RESERVIO</h1></a></li>
                <li id=\"home\">
                    <a href=";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo ">
                        <p class=\"homeIcon\"><i class=\"fa fa-home\"></i></p>
                        <p class=\"homeText\">Home</p>
                    </a>
                </li>
                <li id=\"buildings\">
                    <a href=";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("building_list");
        echo ">
                        <p class=\"buildingIcon\"><i class=\"fa fa-building\"></i></p>
                        <p class=\"buildingText\">Buildings</p>
                    </a>
                </li>
                <li id=\"rooms\">
                    <a href=";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_list");
        echo ">
                        <p class=\"buildingIcon\"><i class=\"fa fa-building\"></i></p>
                        <p class=\"buildingText\">Rooms</p>
                    </a>
                </li>
";
        // line 52
        echo "
                ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 54
            echo "                    <li id=\"logout\">
                        <a href=";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo ">
                            <p class=\"profileIcon\"><i class=\"fa fa-logout\"></i></p>
                            <p class=\"profileText\">Logout</p>
                        </a>
                    </li>
                ";
        } else {
            // line 61
            echo "                    <li id=\"login\"><a id=\"open_pop_up\" href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo ">Login</a></li>
                    <li id=\"login\"><a href=";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo ">Register</a></li>
                ";
        }
        // line 64
        echo "            </ul>
        </nav>
";
        // line 67
        echo "        <div class=\"pop_up\" id=\"pop_up\">
            <div class=\"pop_up_container\">
                <div class=\"pop_up_body\" id=\"pop_up_body\">
                    <p>Login into you're account</p>
                    <form action=\"\">
                        <input type=\"email\" placeholder=\"E-mail\">
                        <input type=\"password\" placeholder=\"Password\">
                        <button>Login</button>
                        <div class=\"pop_up_close\" id=\"pop_up_close\">&#10006</div>
                    </form>
                </div>
            </div>
        </div>
";
        // line 81
        echo "    ";
        
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 84,  264 => 81,  249 => 67,  245 => 64,  240 => 62,  235 => 61,  226 => 55,  223 => 54,  221 => 53,  218 => 52,  210 => 40,  201 => 34,  192 => 28,  187 => 26,  183 => 24,  173 => 23,  163 => 19,  153 => 18,  139 => 13,  129 => 12,  110 => 8,  96 => 90,  90 => 85,  88 => 84,  84 => 82,  82 => 23,  77 => 20,  74 => 18,  72 => 12,  68 => 11,  64 => 10,  59 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    {% block title %}<title>Reservio</title>{% endblock %}
    <link rel=\"stylesheet\" href={{ asset(\"styles/reset.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"styles/global.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"styles/login-form.css\") }}>
    {% block fonts %}
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    {% endblock %}
    {% block stylesheets %}
    {% endblock %}
</head>
<body>
<header id=\"header\">
    {% block navbar %}
        <nav>
            <ul class=\"menu\">
                <li id=\"logo\"><a href={{ path('index') }}><h1>RESERVIO</h1></a></li>
                <li id=\"home\">
                    <a href={{ path('index') }}>
                        <p class=\"homeIcon\"><i class=\"fa fa-home\"></i></p>
                        <p class=\"homeText\">Home</p>
                    </a>
                </li>
                <li id=\"buildings\">
                    <a href={{ path('building_list') }}>
                        <p class=\"buildingIcon\"><i class=\"fa fa-building\"></i></p>
                        <p class=\"buildingText\">Buildings</p>
                    </a>
                </li>
                <li id=\"rooms\">
                    <a href={{ path('room_list') }}>
                        <p class=\"buildingIcon\"><i class=\"fa fa-building\"></i></p>
                        <p class=\"buildingText\">Rooms</p>
                    </a>
                </li>
{#                <li id=\"buildings\">#}
{#                    <a href={{ path('building_list') }}>#}
{#                        <p class=\"buildingIcon\"><i class=\"fa fa-building\"></i></p>#}
{#                        <p class=\"buildingText\">Groups</p>#}
{#                    </a>#}
{#                </li>#}
{#                <li id=\"create\"><a href={{ path('index') }}>Create</a></li>#}

                {% if is_granted('ROLE_USER')%}
                    <li id=\"logout\">
                        <a href={{ path('app_logout') }}>
                            <p class=\"profileIcon\"><i class=\"fa fa-logout\"></i></p>
                            <p class=\"profileText\">Logout</p>
                        </a>
                    </li>
                {% else %}
                    <li id=\"login\"><a id=\"open_pop_up\" href={{ path('app_login') }}>Login</a></li>
                    <li id=\"login\"><a href={{ path('app_registration') }}>Register</a></li>
                {% endif %}
            </ul>
        </nav>
{#  Pop-up login menu  #}
        <div class=\"pop_up\" id=\"pop_up\">
            <div class=\"pop_up_container\">
                <div class=\"pop_up_body\" id=\"pop_up_body\">
                    <p>Login into you're account</p>
                    <form action=\"\">
                        <input type=\"email\" placeholder=\"E-mail\">
                        <input type=\"password\" placeholder=\"Password\">
                        <button>Login</button>
                        <div class=\"pop_up_close\" id=\"pop_up_close\">&#10006</div>
                    </form>
                </div>
            </div>
        </div>
{# Pop-up logi menu end#}
    {% endblock %}
</header>
<main>
    {% block content %}{% endblock %}
</main>
<footer>
    <h4>Copyright © 2021 Alisher and Mikhail</h4>
</footer>
{#<script src={{ asset(\"Scripts/pop-up.js\") }}></script>#}
<script src={{ asset(\"Scripts/hideAndShowNavBar.js\") }}></script>
</body>
</html>", "base.html.twig", "/Users/MacOSX/Desktop/TWA-SEMESTRAL/twa-semestral/templates/base.html.twig");
    }
}
