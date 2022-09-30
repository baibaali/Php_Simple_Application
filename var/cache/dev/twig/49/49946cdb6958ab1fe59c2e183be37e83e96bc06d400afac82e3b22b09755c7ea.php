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

/* building/list.html.twig */
class __TwigTemplate_1d6b0ebc5700fc1e5fd22bcefe2321c98c056cebd40e6048c78e445784485ca3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "building/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "building/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "building/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/buildings.css"), "html", null, true);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buildings"]) || array_key_exists("buildings", $context) ? $context["buildings"] : (function () { throw new RuntimeError('Variable "buildings" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 11
            echo "        <div class=\"wrapper\">
            <div class=\"mainBlock\">
                <div class=\"block\">
                    <div class=\"image\">
                        <img id=\"bldImg\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["building"], "getImageUrl", [], "method", false, false, false, 15), "html", null, true);
            echo "\" width=\"100\" height=\"100\" alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["building"], "getName", [], "method", false, false, false, 15), "html", null, true);
            echo ">
                    </div>
                    <div class=\"descr\">
                        <dl>
                            <dd id=\"name\"><a href=";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("building_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["building"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo " ";
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "style=\"pointer-events:none\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["building"], "getName", [], "method", false, false, false, 19), "html", null, true);
            echo "</a></dd>
                            <dd id=\"address\">Address: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["building"], "getAddress", [], "method", false, false, false, 20), "html", null, true);
            echo "</dd>
                            <dd>

                            </dd>
                        </dl>
                    </div>
                </div>
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
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["building"], "getRooms", [], "method", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 39
                echo "                            <tr>
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                                <td><a href=";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 41), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["building"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                ";
                // line 43
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["room"], "manager", [], "any", false, false, false, 43))) {
                    // line 44
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "manager", [], "any", false, false, false, 44), "firstName", [], "any", false, false, false, 44), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "manager", [], "any", false, false, false, 44), "lastName", [], "any", false, false, false, 44), "html", null, true);
                    echo "</td>
                                ";
                } else {
                    // line 46
                    echo "                                    <td>-</td>
                                ";
                }
                // line 48
                echo "                                ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["room"], "group", [], "any", false, false, false, 48))) {
                    // line 49
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "group", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                    echo "</td>
                                ";
                } else {
                    // line 51
                    echo "                                    <td>-</td>
                                ";
                }
                // line 53
                echo "                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    </table>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "        <form action=\"/buildings/create\" mthod=“POST” class=\"addBuildingButton\">
            <button>Add building</button>
        </form>
";
            // line 67
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "building/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 67,  254 => 61,  251 => 60,  241 => 55,  234 => 53,  230 => 51,  224 => 49,  221 => 48,  217 => 46,  209 => 44,  207 => 43,  203 => 42,  197 => 41,  193 => 40,  190 => 39,  186 => 38,  165 => 20,  155 => 19,  146 => 15,  140 => 11,  135 => 10,  125 => 9,  107 => 7,  95 => 5,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}<title>Buildings</title>{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href={{ asset(\"styles/buildings.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"styles/roomsTableStyles.css\") }}>
{% endblock %}
{% block search %}
{% endblock %}
{% block content %}
    {% for building in buildings %}
        <div class=\"wrapper\">
            <div class=\"mainBlock\">
                <div class=\"block\">
                    <div class=\"image\">
                        <img id=\"bldImg\" src=\"{{ building.getImageUrl() }}\" width=\"100\" height=\"100\" alt={{ building.getName() }}>
                    </div>
                    <div class=\"descr\">
                        <dl>
                            <dd id=\"name\"><a href={{ path('building_detail', {'id': building.id}) }} {% if not is_granted('ROLE_ADMIN') %}style=\"pointer-events:none\"{% endif %}>{{ building.getName() }}</a></dd>
                            <dd id=\"address\">Address: {{ building.getAddress() }}</dd>
                            <dd>

                            </dd>
                        </dl>
                    </div>
                </div>
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
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
    {% if is_granted('ROLE_ADMIN') %}
        <form action=\"/buildings/create\" mthod=“POST” class=\"addBuildingButton\">
            <button>Add building</button>
        </form>
{#        <div class=\"addBuildingButton\">#}
{#            <a href={{ path('building_create') }} id=\"bldAddBtn\">Add building</a>#}
{#        </div>#}
    {% endif %}
{% endblock %}


", "building/list.html.twig", "/Users/MacOSX/Desktop/TWA-SEMESTRAL/twa-semestral/templates/building/list.html.twig");
    }
}
