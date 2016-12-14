<?php

/* partials/intro.html.twig */
class __TwigTemplate_4e29fc53b07ed2ef70f170f82acbff1f930bfed93226aadf59612e6405637c1f extends Twig_Template
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
        // line 1
        echo "﻿";
        // line 2
        echo "
<div class=\"container-fluid hero\" id=\"intro\">
    <img src=\"";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/taylor.png");
        echo "\" class=\"portrait center-block\" />
    <h1>MY NAME IS<br class=\"hidden-xs\">&nbsp;<span>TAYLOR FEDT.</span></h1>
    <h5>I am an extremely passionate <span class=\"blue\">UX Designer</span> and <span class=\"blue\">Front-End Development nerd.</span></h5>
    <div class=\"col-xs-12 col-md-8 col-md-offset-2 cta-area\">
        <!-- <div class=\"col-xs-12 col-sm-4 col-md-4\"><a href=\"#about\"><button class=\"btn-cta btn-cta-green\">GET TO KNOW ME</button></div> -->
        <div class=\"col-xs-6\">
            <a href=\"#work\"><button class=\"btn-cta btn-cta-blue pull-right\"><span class=\"hidden-xs\">SEE MY WORK</span><span class=\"visible-xs hidden-sm hidden-md hidden-lg\">WORK</span></button></a>
        </div>
        <div class=\"col-xs-6\">
            <a href=\"#contact\"><button class=\"btn-cta btn-cta-red pull-left\"><span class=\"hidden-xs\">GET IN TOUCH</span><span class=\"visible-xs hidden-sm hidden-md hidden-lg\">CONTACT</span></button></a>
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "﻿{# INTRO SECTION #}

<div class=\"container-fluid hero\" id=\"intro\">
    <img src=\"{{ url(\"theme://images/taylor.png\") }}\" class=\"portrait center-block\" />
    <h1>MY NAME IS<br class=\"hidden-xs\">&nbsp;<span>TAYLOR FEDT.</span></h1>
    <h5>I am an extremely passionate <span class=\"blue\">UX Designer</span> and <span class=\"blue\">Front-End Development nerd.</span></h5>
    <div class=\"col-xs-12 col-md-8 col-md-offset-2 cta-area\">
        <!-- <div class=\"col-xs-12 col-sm-4 col-md-4\"><a href=\"#about\"><button class=\"btn-cta btn-cta-green\">GET TO KNOW ME</button></div> -->
        <div class=\"col-xs-6\">
            <a href=\"#work\"><button class=\"btn-cta btn-cta-blue pull-right\"><span class=\"hidden-xs\">SEE MY WORK</span><span class=\"visible-xs hidden-sm hidden-md hidden-lg\">WORK</span></button></a>
        </div>
        <div class=\"col-xs-6\">
            <a href=\"#contact\"><button class=\"btn-cta btn-cta-red pull-left\"><span class=\"hidden-xs\">GET IN TOUCH</span><span class=\"visible-xs hidden-sm hidden-md hidden-lg\">CONTACT</span></button></a>
        </div>
    </div>
</div>
</div>";
    }
}
