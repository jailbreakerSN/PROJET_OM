<?php

/* layout/user.html.twig */
class __TwigTemplate_2f13a3a43a506902451681834845fa75df41387ed67eb670d3d8bd5146128ed3 extends Twig_Template
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
        $__internal_22ff8537bb6317b071106a849ed0e88663d7df2f5fd426a585461c4fa0247fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ff8537bb6317b071106a849ed0e88663d7df2f5fd426a585461c4fa0247fed->enter($__internal_22ff8537bb6317b071106a849ed0e88663d7df2f5fd426a585461c4fa0247fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/user.html.twig"));

        // line 1
        echo "<!-- User Account: style can be found in dropdown.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/user.html.twig", 2);
        // line 3
        $context["user_image"] = false;
        // line 4
        if ( !twig_test_empty($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getProfilePicture", array(), "method"))) {
            // line 5
            echo "    ";
            $context["user_image"] = ("images/profile/" . $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getProfilePicture", array(), "method"));
        }
        // line 7
        echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 9
        echo $context["macro"]->getavatar(($context["user_image"] ?? $this->getContext($context, "user_image")), $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "user-image");
        echo "
        <span class=\"hidden-xs\">";
        // line 10
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getName", array(), "method")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
        // line 15
        echo $context["macro"]->getavatar(($context["user_image"] ?? $this->getContext($context, "user_image")), $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()));
        echo "
            <p>
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo "
                <small>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Login %date%", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastLogin", array()), "d.m.Y g:i A")), "AvanzuAdminTheme"), "html", null, true);
        echo "</small>
            </p>
        </li>
        <!-- Menu Body -->
       ";
        // line 33
        echo "        <!-- Menu Footer-->
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_profile");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_logout");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
        </li>
    </ul>
</li>
";
        
        $__internal_22ff8537bb6317b071106a849ed0e88663d7df2f5fd426a585461c4fa0247fed->leave($__internal_22ff8537bb6317b071106a849ed0e88663d7df2f5fd426a585461c4fa0247fed_prof);

    }

    public function getTemplateName()
    {
        return "layout/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  72 => 36,  67 => 33,  60 => 18,  56 => 17,  51 => 15,  43 => 10,  39 => 9,  35 => 7,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- User Account: style can be found in dropdown.less -->
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
{% set user_image = false %}
{% if user.getProfilePicture() is not empty %}
    {% set user_image = 'images/profile/'~ user.getProfilePicture() %}
{% endif %}
<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        {{ macro.avatar(user_image, user.username, 'user-image') }}
        <span class=\"hidden-xs\">{{ user.getName()|title }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            {{ macro.avatar(user_image, user.username) }}
            <p>
                {{user.getName()}}
                <small>{{ 'Last Login %date%'|trans({'%date%': user.lastLogin|date('d.m.Y g:i A') }, 'AvanzuAdminTheme') }}</small>
            </p>
        </li>
        <!-- Menu Body -->
       {# <li class=\"user-body\">
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Followers</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Sales</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Friends</a>
            </div>
        </li>#}
        <!-- Menu Footer-->
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ path('avanzu_admin_profile') }}\" class=\"btn btn-default btn-flat\">{{'Profile'|trans({}, 'AvanzuAdminTheme')}}</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"{{ path('avanzu_admin_logout') }}\" class=\"btn btn-default btn-flat\">{{ 'Sign out'|trans({}, 'AvanzuAdminTheme') }}</a>
            </div>
        </li>
    </ul>
</li>
", "layout/user.html.twig", "/home/mseesay/PROJET_OM/app/Resources/views/layout/user.html.twig");
    }
}
