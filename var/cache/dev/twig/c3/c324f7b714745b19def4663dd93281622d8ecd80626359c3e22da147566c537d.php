<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_46cda2251bcb7b6e6bd1e2a7c88f536104817a5546bde4b4569ec4864fe5ceb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/loginBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_648a8c3dcc13942e3979a2e8bb974b5618860416e47f1b4aa856d7d34b5ea672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648a8c3dcc13942e3979a2e8bb974b5618860416e47f1b4aa856d7d34b5ea672->enter($__internal_648a8c3dcc13942e3979a2e8bb974b5618860416e47f1b4aa856d7d34b5ea672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648a8c3dcc13942e3979a2e8bb974b5618860416e47f1b4aa856d7d34b5ea672->leave($__internal_648a8c3dcc13942e3979a2e8bb974b5618860416e47f1b4aa856d7d34b5ea672_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ad4bb2d401bec598cb732a07a4b8e17e9c5b51552bfce0583630393b5fef87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad4bb2d401bec598cb732a07a4b8e17e9c5b51552bfce0583630393b5fef87f->enter($__internal_0ad4bb2d401bec598cb732a07a4b8e17e9c5b51552bfce0583630393b5fef87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["site_name"] ?? $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_0ad4bb2d401bec598cb732a07a4b8e17e9c5b51552bfce0583630393b5fef87f->leave($__internal_0ad4bb2d401bec598cb732a07a4b8e17e9c5b51552bfce0583630393b5fef87f_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fe79928638eaae89794abc5ca6ff8124a229de000307b9ed7971b04ee630ee19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe79928638eaae89794abc5ca6ff8124a229de000307b9ed7971b04ee630ee19->enter($__internal_fe79928638eaae89794abc5ca6ff8124a229de000307b9ed7971b04ee630ee19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_fe79928638eaae89794abc5ca6ff8124a229de000307b9ed7971b04ee630ee19->leave($__internal_fe79928638eaae89794abc5ca6ff8124a229de000307b9ed7971b04ee630ee19_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2580195d36d82e34f7e002255641b2cfdd5813a9f69686c9d7065e799d54982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2580195d36d82e34f7e002255641b2cfdd5813a9f69686c9d7065e799d54982->enter($__internal_e2580195d36d82e34f7e002255641b2cfdd5813a9f69686c9d7065e799d54982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t";
        // line 13
        $this->displayBlock('user_auth_contents', $context, $blocks);
        // line 14
        echo "\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t";
        
        $__internal_e2580195d36d82e34f7e002255641b2cfdd5813a9f69686c9d7065e799d54982->leave($__internal_e2580195d36d82e34f7e002255641b2cfdd5813a9f69686c9d7065e799d54982_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_2c31d76d1439412f5073fea1769af9eaba46f11caafa3c6e68f74283c9a21bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c31d76d1439412f5073fea1769af9eaba46f11caafa3c6e68f74283c9a21bfb->enter($__internal_2c31d76d1439412f5073fea1769af9eaba46f11caafa3c6e68f74283c9a21bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_2c31d76d1439412f5073fea1769af9eaba46f11caafa3c6e68f74283c9a21bfb->leave($__internal_2c31d76d1439412f5073fea1769af9eaba46f11caafa3c6e68f74283c9a21bfb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 14,  81 => 13,  72 => 9,  68 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/loginBase.html.twig' %}

{% block title %}{{ site_name }}{% endblock %}

{% block page_content %}
\t{% block fos_user_content %}
\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('bundles/app/images/logo.jpg') }}\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t{% block user_auth_contents %} {% endblock %}
\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t{% endblock %}
{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/mseesay/PROJET_OM/src/SalexUserBundle/Resources/views/layout.html.twig");
    }
}
