<?php

/* layout/breadcrumb.html.twig */
class __TwigTemplate_dfed58446e72b5c39e5a87427f35c51240850f81ded70043d974029e5cd08d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98e956f82e20d979e5dd593398e3306f9f648092ebb6457dd08ed6a09fe3540e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e956f82e20d979e5dd593398e3306f9f648092ebb6457dd08ed6a09fe3540e->enter($__internal_98e956f82e20d979e5dd593398e3306f9f648092ebb6457dd08ed6a09fe3540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/breadcrumb.html.twig"));

        // line 1
        if ( !twig_test_empty($this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->renderBreadcrumbs())) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->renderBreadcrumbs();
            echo "
";
        } else {
            // line 4
            echo "    ";
            if ((twig_length_filter($this->env, ($context["active"] ?? $this->getContext($context, "active"))) > 0)) {
                // line 5
                echo "        <ol class=\"breadcrumb\">
            <li>
                <a href=\"";
                // line 7
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\">
                    <i class=\"fa fa-home\"></i>
                </a>
            </li>
            ";
                // line 11
                if (($context["active"] ?? $this->getContext($context, "active"))) {
                    // line 12
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["active"] ?? $this->getContext($context, "active")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 13
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["item"], "route", array()))) ? ("#") : (((twig_in_filter("/", $this->getAttribute($context["item"], "route", array()))) ? ($this->getAttribute($context["item"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", array()), $this->getAttribute($context["item"], "routeArgs", array())))))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            <li class=\"active\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                echo "</li>
        </ol>
    ";
            }
        }
        
        $__internal_98e956f82e20d979e5dd593398e3306f9f648092ebb6457dd08ed6a09fe3540e->leave($__internal_98e956f82e20d979e5dd593398e3306f9f648092ebb6457dd08ed6a09fe3540e_prof);

    }

    public function getTemplateName()
    {
        return "layout/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  62 => 15,  51 => 13,  46 => 12,  44 => 11,  37 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if wo_render_breadcrumbs() is not empty %}
    {{ wo_render_breadcrumbs() }}
{% else %}
    {% if active|length > 0 %}
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"{{ path('homepage') }}\">
                    <i class=\"fa fa-home\"></i>
                </a>
            </li>
            {% if active %}
                {% for item in active %}
                    <li><a href=\"{{ item.route is empty ? '#' : '/' in item.route ? item.route : path(item.route, item.routeArgs) }}\">{{ item.label }}</a></li>
                {% endfor %}
            {% endif %}
            <li class=\"active\">{{ title }}</li>
        </ol>
    {% endif %}
{% endif %}", "layout/breadcrumb.html.twig", "/home/mseesay/PROJET_OM/app/Resources/views/layout/breadcrumb.html.twig");
    }
}
