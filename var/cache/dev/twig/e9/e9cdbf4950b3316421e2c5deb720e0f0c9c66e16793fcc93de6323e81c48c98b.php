<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_59e5126ba99907f3b4fdaf8ed84a0557c3212d7742352dfe50bb984413a5aaae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87508b53f48ce0e5e5f2329b36477252a7bba551e1d862178d36314ddd06ddb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87508b53f48ce0e5e5f2329b36477252a7bba551e1d862178d36314ddd06ddb1->enter($__internal_87508b53f48ce0e5e5f2329b36477252a7bba551e1d862178d36314ddd06ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87508b53f48ce0e5e5f2329b36477252a7bba551e1d862178d36314ddd06ddb1->leave($__internal_87508b53f48ce0e5e5f2329b36477252a7bba551e1d862178d36314ddd06ddb1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b07a18a428683c73ec055cd49c0bacecc317c0e565e0bd0e98fbbe4b4303abfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07a18a428683c73ec055cd49c0bacecc317c0e565e0bd0e98fbbe4b4303abfb->enter($__internal_b07a18a428683c73ec055cd49c0bacecc317c0e565e0bd0e98fbbe4b4303abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b07a18a428683c73ec055cd49c0bacecc317c0e565e0bd0e98fbbe4b4303abfb->leave($__internal_b07a18a428683c73ec055cd49c0bacecc317c0e565e0bd0e98fbbe4b4303abfb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abc1528f272b7b813f3b76d4609568a4c6445ad65383df12b31acf52342ab247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc1528f272b7b813f3b76d4609568a4c6445ad65383df12b31acf52342ab247->enter($__internal_abc1528f272b7b813f3b76d4609568a4c6445ad65383df12b31acf52342ab247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_abc1528f272b7b813f3b76d4609568a4c6445ad65383df12b31acf52342ab247->leave($__internal_abc1528f272b7b813f3b76d4609568a4c6445ad65383df12b31acf52342ab247_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e696ba59bfd7a9a2cea5adf7f7159d10a573e2ece44959298ee3d5b4f3137f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e696ba59bfd7a9a2cea5adf7f7159d10a573e2ece44959298ee3d5b4f3137f7->enter($__internal_9e696ba59bfd7a9a2cea5adf7f7159d10a573e2ece44959298ee3d5b4f3137f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9e696ba59bfd7a9a2cea5adf7f7159d10a573e2ece44959298ee3d5b4f3137f7->leave($__internal_9e696ba59bfd7a9a2cea5adf7f7159d10a573e2ece44959298ee3d5b4f3137f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/mseesay/PROJET_OM/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
