<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_068e65855ba04d00ab26f4880e9c7f5272e75b778711f03ad5937310680ac89a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c23a6fd9e0d97bad7227edcabba4eb5aef2dd8a1491d14af7906f4f5182945b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c23a6fd9e0d97bad7227edcabba4eb5aef2dd8a1491d14af7906f4f5182945b->enter($__internal_5c23a6fd9e0d97bad7227edcabba4eb5aef2dd8a1491d14af7906f4f5182945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 18
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 27
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 34
        echo "
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter(($context["admin_skin"] ?? $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 60
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 95
        echo "
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar sidebar-offcanvas\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            ";
        // line 100
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 107
        echo "        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                ";
        // line 116
        $this->displayBlock('page_title', $context, $blocks);
        // line 117
        echo "                <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
            </h1>
            ";
        // line 119
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 122
        echo "        </section>

        <!-- Alert Boxes -->
        ";
        // line 125
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 126
($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 127
($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method"))) {
            // line 129
            echo "            <section class=\"flash-messages content-header\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
            // line 132
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 133
                echo "                            <div class=\"alert alert-success alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 137
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                            </div>
                        ";
            }
            // line 141
            echo "
                        ";
            // line 142
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 143
                echo "                            <div class=\"alert alert-danger alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 147
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                            </div>
                        ";
            }
            // line 151
            echo "
                        ";
            // line 152
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 153
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 157
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                            </div>
                        ";
            }
            // line 161
            echo "
                        ";
            // line 162
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 163
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 167
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                            </div>
                        ";
            }
            // line 171
            echo "                    </div>
                </div>
            </section>
        ";
        }
        // line 175
        echo "
        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 178
        $this->displayBlock('page_content', $context, $blocks);
        // line 179
        echo "        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    ";
        // line 184
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 189
        echo "
</div>
<!-- ./wrapper -->

";
        // line 194
        $this->displayBlock('javascripts', $context, $blocks);
        // line 199
        echo "
";
        // line 201
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 203
        echo "</body>
</html>
";
        
        $__internal_5c23a6fd9e0d97bad7227edcabba4eb5aef2dd8a1491d14af7906f4f5182945b->leave($__internal_5c23a6fd9e0d97bad7227edcabba4eb5aef2dd8a1491d14af7906f4f5182945b_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_868a55696722d0c45c96d09eaa0d65b5d1d7bf04c8afe6816144dd7c73073c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868a55696722d0c45c96d09eaa0d65b5d1d7bf04c8afe6816144dd7c73073c2a->enter($__internal_868a55696722d0c45c96d09eaa0d65b5d1d7bf04c8afe6816144dd7c73073c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["site_name"] ?? $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_868a55696722d0c45c96d09eaa0d65b5d1d7bf04c8afe6816144dd7c73073c2a->leave($__internal_868a55696722d0c45c96d09eaa0d65b5d1d7bf04c8afe6816144dd7c73073c2a_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e423df4e9a5936e815f890465478842c8b2c54897ede58dc4f6358eb7b6a971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e423df4e9a5936e815f890465478842c8b2c54897ede58dc4f6358eb7b6a971->enter($__internal_9e423df4e9a5936e815f890465478842c8b2c54897ede58dc4f6358eb7b6a971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_9e423df4e9a5936e815f890465478842c8b2c54897ede58dc4f6358eb7b6a971->leave($__internal_9e423df4e9a5936e815f890465478842c8b2c54897ede58dc4f6358eb7b6a971_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_e9a1ddc3decbc3777460d1e016ce7388c4bee44ae4619b5857a9fe4e894c97dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a1ddc3decbc3777460d1e016ce7388c4bee44ae4619b5857a9fe4e894c97dd->enter($__internal_e9a1ddc3decbc3777460d1e016ce7388c4bee44ae4619b5857a9fe4e894c97dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_e9a1ddc3decbc3777460d1e016ce7388c4bee44ae4619b5857a9fe4e894c97dd->leave($__internal_e9a1ddc3decbc3777460d1e016ce7388c4bee44ae4619b5857a9fe4e894c97dd_prof);

    }

    // line 60
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_86bfedaf4fe308e6b2d5324b702775bff9d347d55ea2c299c95bb0bb5a179ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86bfedaf4fe308e6b2d5324b702775bff9d347d55ea2c299c95bb0bb5a179ff6->enter($__internal_86bfedaf4fe308e6b2d5324b702775bff9d347d55ea2c299c95bb0bb5a179ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 61
        echo "        <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 74
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 80
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 81
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 83
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 89
            echo "                        </ul>
                    </div>
                ";
        }
        // line 92
        echo "            </nav>
        </header>
    ";
        
        $__internal_86bfedaf4fe308e6b2d5324b702775bff9d347d55ea2c299c95bb0bb5a179ff6->leave($__internal_86bfedaf4fe308e6b2d5324b702775bff9d347d55ea2c299c95bb0bb5a179ff6_prof);

    }

    // line 62
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_09df427aa731abf0e2872b4ee3a3ae7c4049c8e58d323608fdf1e12d84aae47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09df427aa731abf0e2872b4ee3a3ae7c4049c8e58d323608fdf1e12d84aae47e->enter($__internal_09df427aa731abf0e2872b4ee3a3ae7c4049c8e58d323608fdf1e12d84aae47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 63
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <span class=\"logo-mini\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </span>
                    <span class=\"logo-lg\">
                        ";
        // line 70
        $this->displayBlock("title", $context, $blocks);
        echo "
                    </span>
                </a>
            ";
        
        $__internal_09df427aa731abf0e2872b4ee3a3ae7c4049c8e58d323608fdf1e12d84aae47e->leave($__internal_09df427aa731abf0e2872b4ee3a3ae7c4049c8e58d323608fdf1e12d84aae47e_prof);

    }

    // line 83
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_66043b7aa9c44dd3d75a1203008f72b33e632096f83b0919bfeb9ac00b5e2f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66043b7aa9c44dd3d75a1203008f72b33e632096f83b0919bfeb9ac00b5e2f67->enter($__internal_66043b7aa9c44dd3d75a1203008f72b33e632096f83b0919bfeb9ac00b5e2f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 84
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_66043b7aa9c44dd3d75a1203008f72b33e632096f83b0919bfeb9ac00b5e2f67->leave($__internal_66043b7aa9c44dd3d75a1203008f72b33e632096f83b0919bfeb9ac00b5e2f67_prof);

    }

    // line 100
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_cde53b2c053fca843009e96588ae9f27230aeb8318a9a78b2d760993b0a2a85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde53b2c053fca843009e96588ae9f27230aeb8318a9a78b2d760993b0a2a85d->enter($__internal_cde53b2c053fca843009e96588ae9f27230aeb8318a9a78b2d760993b0a2a85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 101
        echo "                ";
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 102
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                    ";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                ";
        }
        // line 105
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
        echo "
            ";
        
        $__internal_cde53b2c053fca843009e96588ae9f27230aeb8318a9a78b2d760993b0a2a85d->leave($__internal_cde53b2c053fca843009e96588ae9f27230aeb8318a9a78b2d760993b0a2a85d_prof);

    }

    // line 116
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5f89baddacf4022ecae4a141fca18d31396d384b5e25d542605beaf7efe53a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f89baddacf4022ecae4a141fca18d31396d384b5e25d542605beaf7efe53a2c->enter($__internal_5f89baddacf4022ecae4a141fca18d31396d384b5e25d542605beaf7efe53a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_5f89baddacf4022ecae4a141fca18d31396d384b5e25d542605beaf7efe53a2c->leave($__internal_5f89baddacf4022ecae4a141fca18d31396d384b5e25d542605beaf7efe53a2c_prof);

    }

    // line 117
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_392ebd9acbe905ac3f68534601639a05496b6065afd43c9b725faba0672c0cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392ebd9acbe905ac3f68534601639a05496b6065afd43c9b725faba0672c0cc9->enter($__internal_392ebd9acbe905ac3f68534601639a05496b6065afd43c9b725faba0672c0cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_392ebd9acbe905ac3f68534601639a05496b6065afd43c9b725faba0672c0cc9->leave($__internal_392ebd9acbe905ac3f68534601639a05496b6065afd43c9b725faba0672c0cc9_prof);

    }

    // line 119
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_6ea0a3eba74cdcb7356afb0b65b9e86fcb3b2745b4202e6d311f9be843284664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea0a3eba74cdcb7356afb0b65b9e86fcb3b2745b4202e6d311f9be843284664->enter($__internal_6ea0a3eba74cdcb7356afb0b65b9e86fcb3b2745b4202e6d311f9be843284664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 120
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
            ";
        
        $__internal_6ea0a3eba74cdcb7356afb0b65b9e86fcb3b2745b4202e6d311f9be843284664->leave($__internal_6ea0a3eba74cdcb7356afb0b65b9e86fcb3b2745b4202e6d311f9be843284664_prof);

    }

    // line 178
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_373c736ba0dd0be479eddd28f80dafe373b62ec0ed87dc1e249ee8bf6e350fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373c736ba0dd0be479eddd28f80dafe373b62ec0ed87dc1e249ee8bf6e350fb0->enter($__internal_373c736ba0dd0be479eddd28f80dafe373b62ec0ed87dc1e249ee8bf6e350fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_373c736ba0dd0be479eddd28f80dafe373b62ec0ed87dc1e249ee8bf6e350fb0->leave($__internal_373c736ba0dd0be479eddd28f80dafe373b62ec0ed87dc1e249ee8bf6e350fb0_prof);

    }

    // line 184
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_ee20e78e5a1fb99e1a635c8da22f4191846a53fd77eea9d6ef1c9a506d430438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee20e78e5a1fb99e1a635c8da22f4191846a53fd77eea9d6ef1c9a506d430438->enter($__internal_ee20e78e5a1fb99e1a635c8da22f4191846a53fd77eea9d6ef1c9a506d430438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 185
        echo "        <footer class=\"main-footer\">
            <strong>Copyright &copy; ";
        // line 186
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, ($context["footer_url"] ?? $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? $this->getContext($context, "site_name")), "html", null, true);
        echo "
        </footer>
    ";
        
        $__internal_ee20e78e5a1fb99e1a635c8da22f4191846a53fd77eea9d6ef1c9a506d430438->leave($__internal_ee20e78e5a1fb99e1a635c8da22f4191846a53fd77eea9d6ef1c9a506d430438_prof);

    }

    // line 194
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66fd3b4b6147d41afcc9021883bf54b3942c6067b1f6322716acae933bc3e35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fd3b4b6147d41afcc9021883bf54b3942c6067b1f6322716acae933bc3e35b->enter($__internal_66fd3b4b6147d41afcc9021883bf54b3942c6067b1f6322716acae933bc3e35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 195
        echo "
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_66fd3b4b6147d41afcc9021883bf54b3942c6067b1f6322716acae933bc3e35b->leave($__internal_66fd3b4b6147d41afcc9021883bf54b3942c6067b1f6322716acae933bc3e35b_prof);

    }

    // line 201
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_e106cd1c0069411427bb42925dc573ba9dd09e65bbdf0c140548d41089968827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e106cd1c0069411427bb42925dc573ba9dd09e65bbdf0c140548d41089968827->enter($__internal_e106cd1c0069411427bb42925dc573ba9dd09e65bbdf0c140548d41089968827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_e106cd1c0069411427bb42925dc573ba9dd09e65bbdf0c140548d41089968827->leave($__internal_e106cd1c0069411427bb42925dc573ba9dd09e65bbdf0c140548d41089968827_prof);

    }

    public function getTemplateName()
    {
        return "layout/base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 201,  560 => 196,  557 => 195,  551 => 194,  537 => 186,  534 => 185,  528 => 184,  517 => 178,  507 => 120,  501 => 119,  490 => 117,  478 => 116,  468 => 105,  463 => 103,  458 => 102,  455 => 101,  449 => 100,  440 => 87,  436 => 86,  432 => 85,  427 => 84,  421 => 83,  410 => 70,  404 => 67,  396 => 63,  390 => 62,  381 => 92,  376 => 89,  374 => 83,  370 => 81,  368 => 80,  360 => 74,  358 => 62,  355 => 61,  349 => 60,  335 => 28,  329 => 27,  320 => 20,  317 => 19,  311 => 18,  299 => 15,  290 => 203,  288 => 201,  285 => 199,  283 => 194,  277 => 189,  275 => 184,  268 => 179,  266 => 178,  261 => 175,  255 => 171,  251 => 169,  242 => 167,  238 => 166,  233 => 163,  231 => 162,  228 => 161,  224 => 159,  215 => 157,  211 => 156,  206 => 153,  204 => 152,  201 => 151,  197 => 149,  188 => 147,  184 => 146,  179 => 143,  177 => 142,  174 => 141,  170 => 139,  161 => 137,  157 => 136,  152 => 133,  150 => 132,  145 => 129,  143 => 127,  142 => 126,  141 => 125,  136 => 122,  134 => 119,  128 => 117,  126 => 116,  115 => 107,  113 => 100,  106 => 95,  104 => 60,  98 => 57,  73 => 34,  70 => 27,  65 => 24,  61 => 22,  58 => 18,  53 => 15,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>{% block title %}{{ site_name }}{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"{{ admin_skin|default('skin-blue')}} fixed sidebar-mini\">
<div class=\"wrapper\">

    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"{{ path('homepage') }}\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <span class=\"logo-mini\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src=\"{{ asset('bundles/app/images/logo-mini.jpg') }}\" alt=\"\">
                    </span>
                    <span class=\"logo-lg\">
                        {{ block('title') }}
                    </span>
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            {% block avanzu_navbar %}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                {{ render(controller('AppBundle:Navbar:user')) }}
                            {% endblock %}
                        </ul>
                    </div>
                {% endif %}
            </nav>
        </header>
    {% endblock %}

    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar sidebar-offcanvas\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            {% block avanzu_sidebar %}
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ render(controller('AppBundle:Sidebar:userPanel')) }}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
                {% endif %}
                {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
            {% endblock %}
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                {% block page_title %}Page Title{% endblock %}
                <small>{% block page_subtitle %}{% endblock %}</small>
            </h1>
            {% block avanzu_breadcrumb %}
                {{ render(controller('AppBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
            {% endblock %}
        </section>

        <!-- Alert Boxes -->
        {% if app.session.flashBag.has('success')
        or app.session.flashBag.has('error')
        or app.session.flashBag.has('notice')
        %}
            <section class=\"flash-messages content-header\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {% if app.session.flashBag.has('success') %}
                            <div class=\"alert alert-success alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                {% for msg in app.session.flashBag.get('success') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('error') %}
                            <div class=\"alert alert-danger alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                {% for msg in app.session.flashBag.get('error') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('notice') %}
                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                {% for msg in app.session.flashBag.get('notice') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('warning') %}
                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                {% for msg in app.session.flashBag.get('warning') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </section>
        {% endif %}

        <!-- Main content -->
        <section class=\"content\">
            {% block page_content %}{% endblock %}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <strong>Copyright &copy; {{ \"now\"|date(\"Y\") }} <a href=\"http://{{ footer_url }}\" target=\"_blank\">{{ site_name }}
        </footer>
    {% endblock %}

</div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>

{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "layout/base-layout.html.twig", "/home/mseesay/PROJET_OM/app/Resources/views/layout/base-layout.html.twig");
    }
}
