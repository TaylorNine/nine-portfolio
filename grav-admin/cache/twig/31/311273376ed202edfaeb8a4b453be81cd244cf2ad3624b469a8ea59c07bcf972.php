<?php

/* partials/about.html.twig */
class __TwigTemplate_4d88c68b43f2f46c9870ed2b1ccf7327c9a94b5ba505a14afbcd35178cde49a1 extends Twig_Template
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
<div class=\"container-fluid services\" id=\"about\">
    <div class=\"col-xs-12 col-sm-4 hidden-xs\">
        <img src=\"";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/portfolio/nine/nine-mobile-mock.png");
        echo "\" class=\"img-responsive center-block\">
    </div>
    <div class=\"col-xs-12 col-sm-8\">
        <h1 class=\"headline\">Get To Know Me</h1>
        <h2>WHO IS TAYLOR FEDT?</h2>
        <p>
            I’m a UX Designer and Front-End Developer from Minneapolis, Minnesota. I'm naturally curious and a lover of anything digital or technology related. Since I was about 11 or 12-years old I’ve had a passion for the web as a platform for showcasing art and content. At age 12 I successfully created my first website and enlisted my friends to write content that we could post. From that point on, <i>I was hooked!</i>
        </p>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://downloads/TaylorFedt_Resume_2016.pdf");
        echo "\" download=\"TaylorFedt_Resume_2016\">
            <button class=\"btn-cta btn-std-blue pull-left\">
                <span class=\"glyphicon glyphicon-download-alt\"></span>&nbsp;DOWNLOAD MY RESUME
            </button>
        </a>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "﻿{# ABOUT SECTION #}

<div class=\"container-fluid services\" id=\"about\">
    <div class=\"col-xs-12 col-sm-4 hidden-xs\">
        <img src=\"{{ url(\"theme://images/portfolio/nine/nine-mobile-mock.png\") }}\" class=\"img-responsive center-block\">
    </div>
    <div class=\"col-xs-12 col-sm-8\">
        <h1 class=\"headline\">Get To Know Me</h1>
        <h2>WHO IS TAYLOR FEDT?</h2>
        <p>
            I’m a UX Designer and Front-End Developer from Minneapolis, Minnesota. I'm naturally curious and a lover of anything digital or technology related. Since I was about 11 or 12-years old I’ve had a passion for the web as a platform for showcasing art and content. At age 12 I successfully created my first website and enlisted my friends to write content that we could post. From that point on, <i>I was hooked!</i>
        </p>
        <a href=\"{{ url(\"theme://downloads/TaylorFedt_Resume_2016.pdf\") }}\" download=\"TaylorFedt_Resume_2016\">
            <button class=\"btn-cta btn-std-blue pull-left\">
                <span class=\"glyphicon glyphicon-download-alt\"></span>&nbsp;DOWNLOAD MY RESUME
            </button>
        </a>
    </div>
</div>
</div>
";
    }
}
