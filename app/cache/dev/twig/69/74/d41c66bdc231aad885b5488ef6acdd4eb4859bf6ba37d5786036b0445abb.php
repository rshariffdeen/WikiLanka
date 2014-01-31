<?php

/* WikiLankaStyleBundle:Default:index.html.twig */
class __TwigTemplate_6974d41c66bdc231aad885b5488ef6acdd4eb4859bf6ba37d5786036b0445abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"codrops-top\"><p align=\"center\">Product of Pixelz</div><!--/ Codrops top bar -->

<header>

    <h1><strong>Wiki Lanka</strong></h1>
    <h2>Knowledge hub for tourists in Sri Lanka</h2>
    <div class=\"support-note\">
        <span class=\"note-ie\">Sorry, only modern browsers.</span>
    </div>

</header>

<section class=\"main\">

    <p align=\"center\" >
    <p align=\"center\">&nbsp;</p>
    <p align=\"center\"><strong><em>You are not Connected.</em></strong><br><br>
        Please disable pop-up blocking to enable facebook login
    </p><p align=\"center\">
    <form class=\"form-4\" action=\"home.php\">
        <br><br>





        <input type=\"text\" class=\"input\" name=\"number\" required=\"true\" placeholder = \"enter your Mobile Number\">
        <input class = \"shareButton\" type=\"submit\" value=\"Connect to Facebook\" ><br>






    </form>\t
</p>



</p>       
​
<p align=\"center\">
<h2 align=\"center\" > powered by <br>
    <a href=\"http://www.pixelzexplorer.org\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wikilankastyle/images/Logo_Pixelz.png"), "html", null, true);
        echo "\" width=\"124\" height=\"50\" alt=\"Pixelz\" longdesc=\"http://www.pixelzexplorer.org\"></a></h2></p>
</section>


";
    }

    public function getTemplateName()
    {
        return "WikiLankaStyleBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 46,  31 => 3,  28 => 2,);
    }
}
