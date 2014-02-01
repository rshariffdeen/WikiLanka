<?php

/* WikiLankaStyleBundle:Index:index.html.twig */
class __TwigTemplate_cc980b67aabf2f3cca2443e7f349d89a2a2b1db169ac1d976a85201a7ca14c1f extends Twig_Template
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

    <p align=\"center\">
    <form class=\"form-4\" action=\"home\">
        <br><br>





        <input type=\"text\" class=\"input\" name=\"number\" required=\"true\" placeholder = \"enter your Mobile Number\">
        <input class = \"shareButton\" type=\"submit\" value=\"Submit\" ><br>






    </form>\t
</p>



</p>       
​
<p align=\"center\">
<h2 align=\"center\" > powered by <br>
    <a href=\"http://www.pixelzexplorer.org\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wikilankastyle/images/Logo_Pixelz.png"), "html", null, true);
        echo "\" width=\"124\" height=\"50\" alt=\"Pixelz\" longdesc=\"http://www.pixelzexplorer.org\"></a></h2></p>
</section>


";
    }

    public function getTemplateName()
    {
        return "WikiLankaStyleBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 42,  31 => 3,  28 => 2,);
    }
}
