<?php

/* partials/base.html.twig */
class __TwigTemplate_0276a542d65a6eb0fd99a92ae66f0022b14ff1addd7816a0f43a52ac912d6dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'preload' => array($this, 'block_preload'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "</head>
<body>
\t\t";
        // line 39
        $this->displayBlock('preload', $context, $blocks);
        // line 46
        echo "\t\t";
        $this->displayBlock('nav', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('bottom', $context, $blocks);
        // line 142
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>Taylor Fedt's Portfolio Site</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t<script src=\"https://use.fontawesome.com/687e34942c.js\"></script>
\t<script src=\"https://use.typekit.net/xyb4dxz.js\"></script>
\t<script>try{Typekit.load({ async: true });}catch(e){}</script>

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.min.css", 1 => 109), "method");
        // line 15
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/preloader.css", 1 => 111), "method");
        // line 16
        echo "\t\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t";
        // line 17
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/styles.css", 1 => 110), "method");
        // line 18
        echo "
        ";
        // line 19
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 20
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/pace.js", 1 => 100), "method");
        // line 32
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 33
        echo "    ";
    }

    // line 39
    public function block_preload($context, array $blocks = array())
    {
        // line 40
        echo "\t\t<div class=\"pace-wrapper\">
\t\t\t<div class=\"pace\">
\t\t\t\t<div class=\"pace-progress\"></div>
\t\t\t</div>
\t\t</div>
\t\t";
    }

    // line 46
    public function block_nav($context, array $blocks = array())
    {
        // line 47
        echo "\t\t<div class=\"ix-nav\">
\t\t\t<div class=\"left\">
\t\t\t  <img src=\"";
        // line 49
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/nine-logo.svg");
        echo "\" width=\"120\">
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t  <div id=\"nav-button-wrapper\">
\t\t\t\t<button class=\"nav-button\" onclick=\"openNav()\">
\t\t\t\t  <div class=\"bar1\"></div>
\t\t\t\t  <div class=\"bar2\"></div>
\t\t\t\t  <div class=\"bar3\"></div>
\t\t\t\t</button>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t<div id=\"navigation\" class=\"side-navigation\">
\t\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
\t\t\t<a href=\"#intro\">INTRO</a>
\t\t\t<a href=\"#about\">ABOUT</a>
\t\t\t<a href=\"#work\">WORK</a>
\t\t\t<a href=\"#contact\">CONTACT</a>
\t\t\t<div class=\"social-icons\">
\t\t\t\t<span class=\"fa fa-behance-square\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"fa fa-facebook-official\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"fa fa-behance-square\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t</div>
        ";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "        ";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
    }

    // line 80
    public function block_bottom($context, array $blocks = array())
    {
        // line 81
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
\t\t<script>
\t\t\$(document).ready(function(){
\t\t\t// Add smooth scrolling to all links
\t\t\t\$(\"a\").on('click', function(event) {

\t\t\t// Make sure this.hash has a value before overriding default behavior
\t\t\tif (this.hash !== \"\") {
\t\t\t\t// Prevent default anchor click behavior
\t\t\t\tevent.preventDefault();

\t\t\t\t// Store hash
\t\t\t\tvar hash = this.hash;

\t\t\t\t// Using jQuery's animate() method to add smooth page scroll
\t\t\t\t// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
\t\t\t\t\$('html, body').animate({
\t\t\t\tscrollTop: \$(hash).offset().top
\t\t\t\t}, 800, function(){

\t\t\t\t// Add hash (#) to URL when done scrolling (default click behavior)
\t\t\t\twindow.location.hash = hash;
\t\t\t\t});
\t\t\t} // End if
\t\t\t});
\t\t});
\t\t</script>
\t\t<script>
        \$(window).load(function() {
            // Fade the wrapper out when page load completes
            \$(\"div.pace-wrapper\").delay(1000).fadeOut( 1000, function() {
            // Page load and animation complete
            console.log(\"Page Loaded\");
            });
        });
        </script>
        <script>
        function openNav() {
            document.getElementById(\"navigation\").style.width = \"300px\";
            document.getElementById(\"main\").style.marginLeft = \"250px\";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById(\"navigation\").style.width = \"0\";
            document.getElementById(\"main\").style.marginLeft = \"0\";
        }
        </script>
        <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 81,  214 => 80,  209 => 77,  205 => 78,  202 => 77,  199 => 76,  169 => 49,  165 => 47,  162 => 46,  153 => 40,  150 => 39,  146 => 33,  143 => 32,  140 => 31,  137 => 30,  133 => 22,  130 => 21,  127 => 20,  125 => 19,  122 => 18,  120 => 17,  117 => 16,  114 => 15,  111 => 14,  108 => 13,  100 => 34,  98 => 30,  87 => 23,  85 => 13,  80 => 11,  76 => 10,  73 => 9,  71 => 8,  67 => 6,  64 => 5,  58 => 142,  56 => 80,  53 => 79,  51 => 76,  48 => 75,  45 => 46,  43 => 39,  39 => 37,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
    }

    public function getSource()
    {
        return "{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>Taylor Fedt's Portfolio Site</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/animate.min.css', 109) %}
\t\t{% do assets.addCss('theme://css/preloader.css', 111) %}
\t\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t{% do assets.addCss('theme://css-compiled/styles.css', 110) %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t<script src=\"https://use.fontawesome.com/687e34942c.js\"></script>
\t<script src=\"https://use.typekit.net/xyb4dxz.js\"></script>
\t<script>try{Typekit.load({ async: true });}catch(e){}</script>

    {% block javascripts %}
        {% do assets.addJs('theme://js/pace.js', 100) %}
\t\t{% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body>
\t\t{% block preload %}
\t\t<div class=\"pace-wrapper\">
\t\t\t<div class=\"pace\">
\t\t\t\t<div class=\"pace-progress\"></div>
\t\t\t</div>
\t\t</div>
\t\t{% endblock preload %}
\t\t{% block nav %}
\t\t<div class=\"ix-nav\">
\t\t\t<div class=\"left\">
\t\t\t  <img src=\"{{ url(\"theme://images/nine-logo.svg\") }}\" width=\"120\">
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t  <div id=\"nav-button-wrapper\">
\t\t\t\t<button class=\"nav-button\" onclick=\"openNav()\">
\t\t\t\t  <div class=\"bar1\"></div>
\t\t\t\t  <div class=\"bar2\"></div>
\t\t\t\t  <div class=\"bar3\"></div>
\t\t\t\t</button>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t<div id=\"navigation\" class=\"side-navigation\">
\t\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
\t\t\t<a href=\"#intro\">INTRO</a>
\t\t\t<a href=\"#about\">ABOUT</a>
\t\t\t<a href=\"#work\">WORK</a>
\t\t\t<a href=\"#contact\">CONTACT</a>
\t\t\t<div class=\"social-icons\">
\t\t\t\t<span class=\"fa fa-behance-square\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"fa fa-facebook-official\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"fa fa-behance-square\" aria-hidden=\"true\"></span>
\t\t\t</div>
\t\t</div>
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
\t\t<script>
\t\t\$(document).ready(function(){
\t\t\t// Add smooth scrolling to all links
\t\t\t\$(\"a\").on('click', function(event) {

\t\t\t// Make sure this.hash has a value before overriding default behavior
\t\t\tif (this.hash !== \"\") {
\t\t\t\t// Prevent default anchor click behavior
\t\t\t\tevent.preventDefault();

\t\t\t\t// Store hash
\t\t\t\tvar hash = this.hash;

\t\t\t\t// Using jQuery's animate() method to add smooth page scroll
\t\t\t\t// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
\t\t\t\t\$('html, body').animate({
\t\t\t\tscrollTop: \$(hash).offset().top
\t\t\t\t}, 800, function(){

\t\t\t\t// Add hash (#) to URL when done scrolling (default click behavior)
\t\t\t\twindow.location.hash = hash;
\t\t\t\t});
\t\t\t} // End if
\t\t\t});
\t\t});
\t\t</script>
\t\t<script>
        \$(window).load(function() {
            // Fade the wrapper out when page load completes
            \$(\"div.pace-wrapper\").delay(1000).fadeOut( 1000, function() {
            // Page load and animation complete
            console.log(\"Page Loaded\");
            });
        });
        </script>
        <script>
        function openNav() {
            document.getElementById(\"navigation\").style.width = \"300px\";
            document.getElementById(\"main\").style.marginLeft = \"250px\";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById(\"navigation\").style.width = \"0\";
            document.getElementById(\"main\").style.marginLeft = \"0\";
        }
        </script>
        <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js\"></script>
    {% endblock %}
</body>
</html>
";
    }
}
