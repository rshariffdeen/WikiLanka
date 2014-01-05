<?php

/* WikiLankaStyleBundle:Default:index.html.twig */
class __TwigTemplate_e3bc64fa16221dd558d24434ad3a10e1251bd74912b5f513489a414c34d9165f extends Twig_Template
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
\t\t\t
\t\t\t<header>
\t\t\t
\t\t\t\t<h1><strong>Wiki Lanka</strong></h1>
\t\t\t\t<h2>Knowledge hub for tourists in Sri Lanka</h2>
\t\t\t\t<div class=\"support-note\">
\t\t\t\t\t<span class=\"note-ie\">Sorry, only modern browsers.</span>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</header>
\t\t\t
\t\t\t<section class=\"main\">
\t\t\t 
\t\t        <p align=\"center\" >
\t            <p align=\"center\">&nbsp;</p>
\t            <p align=\"center\"><strong><em>You are not Connected.</em></strong><br><br>
\t\t\t\tPlease disable pop-up blocking to enable facebook login
\t\t\t\t</p><p align=\"center\">
\t\t\t\t <form class=\"form-4\" action=\"home.php\">
\t\t\t\t <br><br>
   
\t  
\t  
 
\t  
\t  <input type=\"text\" class=\"input\" name=\"number\" required=\"true\" placeholder = \"enter your Mobile Number\">
      <input class = \"shareButton\" type=\"submit\" value=\"Connect to Facebook\" ><br>
\t 
\t  
    
\t\t\t        
          
\t\t\t         
\t\t\t\t</form>\t
        </p>
   
\t\t\t        
          
\t\t\t      </p>       
\t\t\t\t\t\t​
              <p align=\"center\">
               <h2 align=\"center\" > powered by <br>
              <a href=\"http://www.pixelzexplorer.org\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wikilankastyle/images/Logo_Pixelz.png"), "html", null, true);
        echo "\" width=\"124\" height=\"50\" alt=\"Pixelz\" longdesc=\"http://www.pixelzexplorer.org\"></a></h2></p>
\t\t\t</section>
\t\t\t

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
