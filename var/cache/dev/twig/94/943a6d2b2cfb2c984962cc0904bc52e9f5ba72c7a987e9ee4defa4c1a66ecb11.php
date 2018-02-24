<?php

/* default/dashboard.html.twig */
class __TwigTemplate_4208bd81360e0b1b631dcb458727258a0a387f7d4c64343b612bb2af78041664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b2e9dfcd380521fa8b9217424ec2874886b5b782f469b5ba108876e1e329ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2e9dfcd380521fa8b9217424ec2874886b5b782f469b5ba108876e1e329ecb->enter($__internal_6b2e9dfcd380521fa8b9217424ec2874886b5b782f469b5ba108876e1e329ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b2e9dfcd380521fa8b9217424ec2874886b5b782f469b5ba108876e1e329ecb->leave($__internal_6b2e9dfcd380521fa8b9217424ec2874886b5b782f469b5ba108876e1e329ecb_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f642b4fc749cb085f1da7e53a18111cc6f1e456fbdfc648f6f0e15cda4f832c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f642b4fc749cb085f1da7e53a18111cc6f1e456fbdfc648f6f0e15cda4f832c0->enter($__internal_f642b4fc749cb085f1da7e53a18111cc6f1e456fbdfc648f6f0e15cda4f832c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_f642b4fc749cb085f1da7e53a18111cc6f1e456fbdfc648f6f0e15cda4f832c0->leave($__internal_f642b4fc749cb085f1da7e53a18111cc6f1e456fbdfc648f6f0e15cda4f832c0_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fc42bfbdfc1b210a596e1293d2c45ad24670cd871033ed2e0c46ad8992396506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc42bfbdfc1b210a596e1293d2c45ad24670cd871033ed2e0c46ad8992396506->enter($__internal_fc42bfbdfc1b210a596e1293d2c45ad24670cd871033ed2e0c46ad8992396506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_fc42bfbdfc1b210a596e1293d2c45ad24670cd871033ed2e0c46ad8992396506->leave($__internal_fc42bfbdfc1b210a596e1293d2c45ad24670cd871033ed2e0c46ad8992396506_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", "default/dashboard.html.twig", "/home/mseesay/PROJET_OM/app/Resources/views/default/dashboard.html.twig");
    }
}
