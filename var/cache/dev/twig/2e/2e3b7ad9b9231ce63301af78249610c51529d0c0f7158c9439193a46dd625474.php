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

/* room/detail.html.twig */
class __TwigTemplate_3e73a28e7e3092b0b42d72a2fc422775341c4c4e2922b324afc9773aa2380baa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'search' => [$this, 'block_search'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "room/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Buildings</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/roomDetail.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/roomsTableStyles.css"), "html", null, true);
        echo ">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"wrapper\">
        <div class=\"mainBlock\">
            <div class=\"roomInfo\">
                <p id=\"name\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "
                </p>
                <p>
                    Building: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 17, $this->source); })()), "building", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "
                </p>
                <p>
                    Manager: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 20, $this->source); })()), "manager", [], "any", false, false, false, 20), "html", null, true);
        echo "
                </p>
                <p>
                    Group: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 23, $this->source); })()), "group", [], "any", false, false, false, 23), "html", null, true);
        echo "
                </p>
            </div>
            <div class=\"actualReservations\">
                <table>
                    <thead>
                    <tr>
                        <th>Room name</th>
                        <th>Room number</th>
                        <th>Reserved from</th>
                        <th>Reserved to</th>
                    </tr>
                    </thead>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 36, $this->source); })()), "reservations", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 37
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 37), "approved"))) {
                // line 38
                echo "                            <tr>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 40, $this->source); })()), "number", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "getFromInString", [], "method", false, false, false, 41), "html", null, true);
                echo "</td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "getToInString", [], "method", false, false, false, 42), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            // line 45
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </table>
            </div>
            ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "                <div class=\"requests\">
                    <table>
                        <thead>
                        <tr>
                            <th>UserId</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Status</th>
                            <th>Accept</th>
                            <th>Reject</th>
                        </tr>
                        </thead>
                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 62, $this->source); })()), "requests", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 63
                echo "                            <tr>
                                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "user", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "user", [], "any", false, false, false, 65), "username", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "user", [], "any", false, false, false, 66), "firstName", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "user", [], "any", false, false, false, 67), "lastName", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "status", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                <td>
";
                // line 73
                echo "                                    <button>

                                    </button>
                                </td>
                                <td>
";
                // line 79
                echo "                                        <a href=\"\">Denied</a>
";
                // line 81
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                    </table>
                </div>
            ";
        }
        // line 87
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 88
            echo "                ";
            if ((0 === twig_compare((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 88, $this->source); })()), "pending"))) {
                // line 89
                echo "                    <p class=\"membershipInfo\">Your application for a room membership is pending</p>
                ";
            } elseif ((0 === twig_compare(            // line 90
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 90, $this->source); })()), "denied"))) {
                // line 91
                echo "                    <p class=\"membershipInfoo\">Your application for a room membership was rejected</p>
                ";
            } elseif (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("reservation", twig_get_attribute($this->env, $this->source,             // line 92
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 93
                echo "                    <div class=\"reserveButton\">
                        <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_reservation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\" id=\"buttonLink\">Reserve the room</a>
                    </div>
";
                // line 97
                echo "                ";
            } else {
                // line 98
                echo "                    <form action=\"/rooms/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98), "html", null, true);
                echo "/request\" id=\"membershipButton\" method=\"post\">
                        <button type=\"submit\">Become a member</button>
                    </form>
                ";
            }
            // line 102
            echo "            ";
        }
        // line 103
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 103,  318 => 102,  310 => 98,  307 => 97,  302 => 94,  299 => 93,  297 => 92,  294 => 91,  292 => 90,  289 => 89,  286 => 88,  283 => 87,  278 => 84,  270 => 81,  267 => 79,  260 => 73,  255 => 68,  251 => 67,  247 => 66,  243 => 65,  239 => 64,  236 => 63,  232 => 62,  217 => 49,  215 => 48,  211 => 46,  205 => 45,  199 => 42,  195 => 41,  191 => 40,  187 => 39,  184 => 38,  181 => 37,  177 => 36,  161 => 23,  155 => 20,  149 => 17,  141 => 14,  135 => 10,  125 => 9,  107 => 7,  95 => 5,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}<title>Buildings</title>{% endblock %}
{% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset(\"styles/roomDetail.css\") }}>
        <link rel=\"stylesheet\" href={{ asset(\"styles/roomsTableStyles.css\") }}>
{% endblock %}
{% block search %}
{% endblock %}
{% block content %}
    <div class=\"wrapper\">
        <div class=\"mainBlock\">
            <div class=\"roomInfo\">
                <p id=\"name\">
                    {{ room.name }} {{ room.id }}
                </p>
                <p>
                    Building: {{ room.building.name }}
                </p>
                <p>
                    Manager: {{ room.manager }}
                </p>
                <p>
                    Group: {{ room.group }}
                </p>
            </div>
            <div class=\"actualReservations\">
                <table>
                    <thead>
                    <tr>
                        <th>Room name</th>
                        <th>Room number</th>
                        <th>Reserved from</th>
                        <th>Reserved to</th>
                    </tr>
                    </thead>
                    {% for reservation in room.reservations %}
                        {% if reservation.status == 'approved' %}
                            <tr>
                                <td>{{ room.name }}</td>
                                <td>{{ room.number }}</td>
                                <td>{{ reservation.getFromInString() }}</td>
                                <td>{{ reservation.getToInString() }}</td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                </table>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"requests\">
                    <table>
                        <thead>
                        <tr>
                            <th>UserId</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Status</th>
                            <th>Accept</th>
                            <th>Reject</th>
                        </tr>
                        </thead>
                        {% for request in room.requests %}
                            <tr>
                                <td>{{ request.user.id }}</td>
                                <td>{{ request.user.username }}</td>
                                <td>{{ request.user.firstName }}</td>
                                <td>{{ request.user.lastName }}</td>
                                <td>{{ request.status }}</td>
                                <td>
{#                                    {% if request.status == 'pending' %}#}
{#                                        <a href={% do request.setStatus('pending') %}>Approve</a>#}
{#                                    {% endif %}#}
                                    <button>

                                    </button>
                                </td>
                                <td>
{#                                    {% if request.status == 'pending' %}#}
                                        <a href=\"\">Denied</a>
{#                                    {% endif %}#}
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% endif %}
            {% if is_granted('ROLE_USER') %}
                {% if status == 'pending' %}
                    <p class=\"membershipInfo\">Your application for a room membership is pending</p>
                {% elseif status == 'denied' %}
                    <p class=\"membershipInfoo\">Your application for a room membership was rejected</p>
                {% elseif is_granted('reservation', app.user) or is_granted('ROLE_ADMIN') %}
                    <div class=\"reserveButton\">
                        <a href=\"{{ path('room_reservation', {'id': room.id}) }}\" id=\"buttonLink\">Reserve the room</a>
                    </div>
{#                {% if is_granted('reservation', app.user) or is_granted('ROLE_ADMIN') %}#}
                {% else %}
                    <form action=\"/rooms/{{ room.id }}/request\" id=\"membershipButton\" method=\"post\">
                        <button type=\"submit\">Become a member</button>
                    </form>
                {% endif %}
            {% endif %}
        </div>
    </div>
{% endblock %}


", "room/detail.html.twig", "/Users/MacOSX/Desktop/TWA-SEMESTRAL/twa-semestral/templates/room/detail.html.twig");
    }
}
