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

/* building/detail.html.twig */
class __TwigTemplate_5ff9751fbaf765efe7a8d221f64c0e923293c6dfe3631dc3df81db1bb09f9c43 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "building/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "building/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "building/detail.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/building.css"), "html", null, true);
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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"mainBlock\">
        <div class=\"buildingDetail\">
            <div class=\"image\">
                <img id=\"build-image\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/NTK.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"info\">
                <p class=\"name\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["building"]) || array_key_exists("building", $context) ? $context["building"] : (function () { throw new RuntimeError('Variable "building" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                <p class=\"text\">
                <p class=\"address\">Address: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["building"]) || array_key_exists("building", $context) ? $context["building"] : (function () { throw new RuntimeError('Variable "building" does not exist.', 16, $this->source); })()), "address", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                </p>
            </div>
        </div>
        <div class=\"tableAndButton\">
            <div class=\"roomsTable\">
                <table>
                    <thead>
                    <tr>
                        <th>Room name</th>
                        <th>Room number</th>
                        <th>Building</th>
                        <th>Room manager</th>
                        <th>Group</th>
                    </tr>
                    </thead>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["building"]) || array_key_exists("building", $context) ? $context["building"] : (function () { throw new RuntimeError('Variable "building" does not exist.', 32, $this->source); })()), "getRooms", [], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td><a href=";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 35), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["building"]) || array_key_exists("building", $context) ? $context["building"] : (function () { throw new RuntimeError('Variable "building" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            ";
            // line 37
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["room"], "manager", [], "any", false, false, false, 37))) {
                // line 38
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "manager", [], "any", false, false, false, 38), "firstName", [], "any", false, false, false, 38), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "manager", [], "any", false, false, false, 38), "lastName", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            ";
            } else {
                // line 40
                echo "                                <td>-</td>
                            ";
            }
            // line 42
            echo "                            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["room"], "group", [], "any", false, false, false, 42))) {
                // line 43
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "group", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                            ";
            } else {
                // line 45
                echo "                                <td>-</td>
                            ";
            }
            // line 47
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    <tr></tr>
                </table>
                ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "                    <div class=\"buttons\">
                        <div class=\"buttonAdd\">
                            <a href=";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_create");
            echo " class=\"addRoomButton\">ADD ROOM</a>
                        </div>
                        <div class=\"buttonEdit\">
                            <a href=";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("building_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["building"]) || array_key_exists("building", $context) ? $context["building"] : (function () { throw new RuntimeError('Variable "building" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo " class=\"editBuildingButton\">EDIT</a>
                        </div>
                    </div>
                ";
        }
        // line 61
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "building/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 61,  222 => 57,  216 => 54,  212 => 52,  210 => 51,  206 => 49,  199 => 47,  195 => 45,  189 => 43,  186 => 42,  182 => 40,  174 => 38,  172 => 37,  168 => 36,  162 => 35,  158 => 34,  155 => 33,  151 => 32,  132 => 16,  127 => 14,  121 => 11,  116 => 8,  106 => 7,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}<title>Buildings</title>{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href={{ asset(\"styles/building.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"styles/roomsTableStyles.css\") }}>
{% endblock %}
{% block content %}
    <div class=\"mainBlock\">
        <div class=\"buildingDetail\">
            <div class=\"image\">
                <img id=\"build-image\" src=\"{{ asset('images/NTK.png') }}\" alt=\"\">
            </div>
            <div class=\"info\">
                <p class=\"name\">{{ building.name }}</p>
                <p class=\"text\">
                <p class=\"address\">Address: {{ building.address }}</p>
                </p>
            </div>
        </div>
        <div class=\"tableAndButton\">
            <div class=\"roomsTable\">
                <table>
                    <thead>
                    <tr>
                        <th>Room name</th>
                        <th>Room number</th>
                        <th>Building</th>
                        <th>Room manager</th>
                        <th>Group</th>
                    </tr>
                    </thead>
                    {% for room in building.getRooms() %}
                        <tr>
                            <td>{{ room.name }}</td>
                            <td><a href={{ path('room_detail', {'id': room.id}) }}>{{ room.number }}</a></td>
                            <td>{{ building.name }}</td>
                            {% if room.manager is not null %}
                                <td>{{ room.manager.firstName }} {{ room.manager.lastName }}</td>
                            {% else %}
                                <td>-</td>
                            {% endif %}
                            {% if room.group is not null %}
                                <td>{{ room.group.name }}</td>
                            {% else %}
                                <td>-</td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    <tr></tr>
                </table>
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"buttons\">
                        <div class=\"buttonAdd\">
                            <a href={{ path('room_create') }} class=\"addRoomButton\">ADD ROOM</a>
                        </div>
                        <div class=\"buttonEdit\">
                            <a href={{ path('building_edit', {'id': building.id}) }} class=\"editBuildingButton\">EDIT</a>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "building/detail.html.twig", "/Users/MacOSX/Desktop/TWA-SEMESTRAL/twa-semestral/templates/building/detail.html.twig");
    }
}
