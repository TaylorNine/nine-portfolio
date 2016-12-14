<?php

/* default.html.twig */
class __TwigTemplate_8d32bd6941603872716f8360d8e3924f6c187059d05c311e9113561d0163124b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'portfolio' => array($this, 'block_portfolio'),
            'contact' => array($this, 'block_contact'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->loadTemplate("partials/intro.html.twig", "default.html.twig", 4)->display($context);
        // line 5
        echo "\t";
        $this->loadTemplate("partials/about.html.twig", "default.html.twig", 5)->display($context);
        // line 6
        echo "
\t";
        // line 7
        $this->displayBlock('portfolio', $context, $blocks);
        // line 11
        echo "
\t";
        // line 12
        $this->displayBlock('contact', $context, $blocks);
        // line 15
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 7
    public function block_portfolio($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t";
        $this->loadTemplate("partials/portfolio.html.twig", "default.html.twig", 8)->display($context);
        // line 9
        echo "\t\t\t";
        $this->loadTemplate("partials/portfolio-modals.html.twig", "default.html.twig", 9)->display($context);
        // line 10
        echo "\t";
    }

    // line 12
    public function block_contact($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t";
        $this->loadTemplate("partials/contact.html.twig", "default.html.twig", 13)->display($context);
        // line 14
        echo "\t";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
        $this->loadTemplate("partials/footer.html.twig", "default.html.twig", 16)->display($context);
        // line 17
        echo "\t";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  81 => 16,  78 => 15,  74 => 14,  71 => 13,  68 => 12,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  50 => 15,  48 => 12,  45 => 11,  43 => 7,  40 => 6,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

{% block content %}
\t{% include 'partials/intro.html.twig' %}
\t{% include 'partials/about.html.twig' %}

\t{% block portfolio %}
\t\t\t{% include 'partials/portfolio.html.twig' %}
\t\t\t{% include 'partials/portfolio-modals.html.twig' %}
\t{% endblock %}

\t{% block contact %}
\t\t\t{% include 'partials/contact.html.twig' %}
\t{% endblock %}
\t{% block footer %}
\t\t{% include 'partials/footer.html.twig' %}
\t{% endblock %}
{% endblock %}
";
    }
}
