<?php

/* partials/portfolio.html.twig */
class __TwigTemplate_52c9dc63639b6556b802541b90ca5d874e3ae9be4820ad56e7656715f93b7a2d extends Twig_Template
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
        $context["pURL"] = "theme://images/portfolio/";
        // line 2
        echo "    <!-- PORTFOLIO -->
    <div class=\"container-fluid portfolio\" id=\"work\">
      <div class=\"col-xs-12\">
        <h1 class=\"headline\">View My Work</h1>
      </div>
      <!-- PORTFOLIO THUMBNAILS -->
      <!-- WORK 1: CELEBRATE YOUR LAKE -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-1\">
          <div class=\"image-wrapper\">
            <img src=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/portfolio/celebrate-your-lake/00-thumbnail.jpg");
        echo "\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 2: REFER-A-FRIEND -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-2\">
          <div class=\"image-wrapper\">
            <img src=\"";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/portfolio/ya-raf/00-thumbnail.jpg");
        echo "\" class=\"center-block img-responsive\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
       </div>  
      <!-- WORK 3: DORITOS AVENGERS -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-3\">
          <div class=\"image-wrapper\">
            <img src=\"";
        // line 38
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/portfolio/doritos-avengers/00-thumbnail.jpg");
        echo "\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 4: MONTEJO -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-4\">
          <div class=\"image-wrapper\">
            <img src=\"";
        // line 51
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/portfolio/montejo/00-thumbnail.jpg");
        echo "\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 5: BAKEQUIP -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-5\">
          <div class=\"image-wrapper\">
            <img src=\"";
        // line 64
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/portfolio/bakequip/00-thumbnail.jpg");
        echo "\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 6: NAKED JUICE -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-6\">
          <div class=\"image-wrapper\">
            <img src=\"";
        // line 77
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/portfolio/naked-juice/00-thumbnail.jpg");
        echo "\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- /PORTFOLIO THUMBNAILS -->
";
    }

    public function getTemplateName()
    {
        return "partials/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 77,  98 => 64,  82 => 51,  66 => 38,  50 => 25,  34 => 12,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "﻿{% set pURL = 'theme://images/portfolio/' %}
    <!-- PORTFOLIO -->
    <div class=\"container-fluid portfolio\" id=\"work\">
      <div class=\"col-xs-12\">
        <h1 class=\"headline\">View My Work</h1>
      </div>
      <!-- PORTFOLIO THUMBNAILS -->
      <!-- WORK 1: CELEBRATE YOUR LAKE -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-1\">
          <div class=\"image-wrapper\">
            <img src=\"{{ url(\"theme://images/portfolio/celebrate-your-lake/00-thumbnail.jpg\") }}\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 2: REFER-A-FRIEND -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-2\">
          <div class=\"image-wrapper\">
            <img src=\"{{ url(\"theme://images/portfolio/ya-raf/00-thumbnail.jpg\") }}\" class=\"center-block img-responsive\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
       </div>  
      <!-- WORK 3: DORITOS AVENGERS -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-3\">
          <div class=\"image-wrapper\">
            <img src=\"{{ url(\"theme://images/portfolio/doritos-avengers/00-thumbnail.jpg\") }}\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 4: MONTEJO -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-4\">
          <div class=\"image-wrapper\">
            <img src=\"{{ url(\"theme://images/portfolio/montejo/00-thumbnail.jpg\") }}\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 5: BAKEQUIP -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-5\">
          <div class=\"image-wrapper\">
            <img src=\"{{ url(\"theme://images/portfolio/bakequip/00-thumbnail.jpg\") }}\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- WORK 6: NAKED JUICE -->
      <div class=\"col-xs-12 col-sm-4 col-lg-4\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#work-6\">
          <div class=\"image-wrapper\">
            <img src=\"{{ url(\"theme://images/portfolio/naked-juice/00-thumbnail.jpg\") }}\" class=\"img-responsive center-block\">
            <div class=\"work-wrapper\">
              <div class=\"work-item\">
                <h3><span class=\"glyphicon glyphicon-zoom-in\"></span></h3>
              </div>
            </div>
          </a>
        </div>
        </div>
      <!-- /PORTFOLIO THUMBNAILS -->
";
    }
}
