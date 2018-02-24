<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_039d30f950dd6a42c88f45234abc4536412edb5eabf9cf7e09724c1a5e475ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06f9a67c22733157017098762547c3bf808938aec4771a20c27e93afcf3edc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f9a67c22733157017098762547c3bf808938aec4771a20c27e93afcf3edc29->enter($__internal_06f9a67c22733157017098762547c3bf808938aec4771a20c27e93afcf3edc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f9a67c22733157017098762547c3bf808938aec4771a20c27e93afcf3edc29->leave($__internal_06f9a67c22733157017098762547c3bf808938aec4771a20c27e93afcf3edc29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91b3502334afc7cadee15a2f227064d7fc97adaa8b724752a7c7e8fe8199ce5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b3502334afc7cadee15a2f227064d7fc97adaa8b724752a7c7e8fe8199ce5d->enter($__internal_91b3502334afc7cadee15a2f227064d7fc97adaa8b724752a7c7e8fe8199ce5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91b3502334afc7cadee15a2f227064d7fc97adaa8b724752a7c7e8fe8199ce5d->leave($__internal_91b3502334afc7cadee15a2f227064d7fc97adaa8b724752a7c7e8fe8199ce5d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41119df93e09e194bbc691561849da29ab8691bb0f3f99307cce43e4ad62eab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41119df93e09e194bbc691561849da29ab8691bb0f3f99307cce43e4ad62eab6->enter($__internal_41119df93e09e194bbc691561849da29ab8691bb0f3f99307cce43e4ad62eab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41119df93e09e194bbc691561849da29ab8691bb0f3f99307cce43e4ad62eab6->leave($__internal_41119df93e09e194bbc691561849da29ab8691bb0f3f99307cce43e4ad62eab6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d8be8a1b3a863c3a403c31d3ba3436cb25bc8ce729bee9de4738d78df29568a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8be8a1b3a863c3a403c31d3ba3436cb25bc8ce729bee9de4738d78df29568a->enter($__internal_0d8be8a1b3a863c3a403c31d3ba3436cb25bc8ce729bee9de4738d78df29568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d8be8a1b3a863c3a403c31d3ba3436cb25bc8ce729bee9de4738d78df29568a->leave($__internal_0d8be8a1b3a863c3a403c31d3ba3436cb25bc8ce729bee9de4738d78df29568a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/mseesay/PROJET_OM/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
