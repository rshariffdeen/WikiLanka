<?php

/* ::base.html.twig */
class __TwigTemplate_f726e186499e640c24114678e31eb675b110c9e5af3475c52265895330cd534a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> 
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
        <title>Wiki Lanka</title>
        <meta name=\"description\" content=\"Knowledge hub for tourists in Sri Lanka\" />
        <meta name=\"author\" content=\"Pixelz\" />
        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wikilankastyle/css/style.css"), "html", null, true);
        echo "\" />
        <script src=\"js/modernizr.custom.63321.js\"></script>
\t\t<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
\t\t
        <style>\t
\t\t\t@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
\t\t\tbody {
\t\t\t\tbackground: #7f9b4e url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wikilankastyle/images/bg2.jpg"), "html", null, true);
        echo ") no-repeat center top;
\t\t\t\t-webkit-background-size: cover;
\t\t\t\t-moz-background-size: cover;
\t\t\t\tbackground-size: cover;
\t\t\t}
\t\t\t.container > header h1,
\t\t\t.container > header h2 {
\t\t\t\tcolor: #fff;
\t\t\t\ttext-shadow: 0 1px 1px rgba(0,0,0,0.7);
\t\t\t}
\t\t</style>
        
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "        </div>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Wiki Lanka";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  97 => 37,  92 => 32,  86 => 12,  80 => 39,  77 => 38,  75 => 37,  67 => 33,  65 => 32,  50 => 20,  40 => 13,  36 => 12,  23 => 1,  76 => 46,  31 => 3,  28 => 2,);
    }
}
