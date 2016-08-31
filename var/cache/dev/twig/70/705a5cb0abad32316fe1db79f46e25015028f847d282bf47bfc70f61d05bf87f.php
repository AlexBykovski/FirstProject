<?php

/* base.html.twig */
class __TwigTemplate_98c984e4a17ca7665c4043c7d2410774f9059bf1c0ef6a2d4fde2a39dca22bb7 extends Twig_Template
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
        $__internal_873f0a22069d0fff157ed3696babb4073fd4bbf8fec18bccb2904f41d7d45e06 = $this->env->getExtension("native_profiler");
        $__internal_873f0a22069d0fff157ed3696babb4073fd4bbf8fec18bccb2904f41d7d45e06->enter($__internal_873f0a22069d0fff157ed3696babb4073fd4bbf8fec18bccb2904f41d7d45e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_873f0a22069d0fff157ed3696babb4073fd4bbf8fec18bccb2904f41d7d45e06->leave($__internal_873f0a22069d0fff157ed3696babb4073fd4bbf8fec18bccb2904f41d7d45e06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99e596625141da9df459253d13627b7dbe27ca946e2acfaf08e3ad37897f05f2 = $this->env->getExtension("native_profiler");
        $__internal_99e596625141da9df459253d13627b7dbe27ca946e2acfaf08e3ad37897f05f2->enter($__internal_99e596625141da9df459253d13627b7dbe27ca946e2acfaf08e3ad37897f05f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_99e596625141da9df459253d13627b7dbe27ca946e2acfaf08e3ad37897f05f2->leave($__internal_99e596625141da9df459253d13627b7dbe27ca946e2acfaf08e3ad37897f05f2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ff45425ad1797c831c27bbb0a37fba41e03fac138bc7abd1ab3f71e2ab8eca2 = $this->env->getExtension("native_profiler");
        $__internal_4ff45425ad1797c831c27bbb0a37fba41e03fac138bc7abd1ab3f71e2ab8eca2->enter($__internal_4ff45425ad1797c831c27bbb0a37fba41e03fac138bc7abd1ab3f71e2ab8eca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ff45425ad1797c831c27bbb0a37fba41e03fac138bc7abd1ab3f71e2ab8eca2->leave($__internal_4ff45425ad1797c831c27bbb0a37fba41e03fac138bc7abd1ab3f71e2ab8eca2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9419f1f26f6583e09a8aa5289e657c14b1437deb542fe4aba9c9551194280af1 = $this->env->getExtension("native_profiler");
        $__internal_9419f1f26f6583e09a8aa5289e657c14b1437deb542fe4aba9c9551194280af1->enter($__internal_9419f1f26f6583e09a8aa5289e657c14b1437deb542fe4aba9c9551194280af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9419f1f26f6583e09a8aa5289e657c14b1437deb542fe4aba9c9551194280af1->leave($__internal_9419f1f26f6583e09a8aa5289e657c14b1437deb542fe4aba9c9551194280af1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_268d4a305384cdfbe9853271854a6a6b642b517c5bc3e37543f3dfe3fe1d46c1 = $this->env->getExtension("native_profiler");
        $__internal_268d4a305384cdfbe9853271854a6a6b642b517c5bc3e37543f3dfe3fe1d46c1->enter($__internal_268d4a305384cdfbe9853271854a6a6b642b517c5bc3e37543f3dfe3fe1d46c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_268d4a305384cdfbe9853271854a6a6b642b517c5bc3e37543f3dfe3fe1d46c1->leave($__internal_268d4a305384cdfbe9853271854a6a6b642b517c5bc3e37543f3dfe3fe1d46c1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
