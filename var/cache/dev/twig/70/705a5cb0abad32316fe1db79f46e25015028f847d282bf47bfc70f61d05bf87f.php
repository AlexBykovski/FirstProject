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
        $__internal_1f39f27940a57916eb5c698064b0728d191e07531d0faa30dbe4632f7648e158 = $this->env->getExtension("native_profiler");
        $__internal_1f39f27940a57916eb5c698064b0728d191e07531d0faa30dbe4632f7648e158->enter($__internal_1f39f27940a57916eb5c698064b0728d191e07531d0faa30dbe4632f7648e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1f39f27940a57916eb5c698064b0728d191e07531d0faa30dbe4632f7648e158->leave($__internal_1f39f27940a57916eb5c698064b0728d191e07531d0faa30dbe4632f7648e158_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5df82c4acffd0d2a207a5101fe6c07ab9062e45b39739f2fce83ac6d59adb176 = $this->env->getExtension("native_profiler");
        $__internal_5df82c4acffd0d2a207a5101fe6c07ab9062e45b39739f2fce83ac6d59adb176->enter($__internal_5df82c4acffd0d2a207a5101fe6c07ab9062e45b39739f2fce83ac6d59adb176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5df82c4acffd0d2a207a5101fe6c07ab9062e45b39739f2fce83ac6d59adb176->leave($__internal_5df82c4acffd0d2a207a5101fe6c07ab9062e45b39739f2fce83ac6d59adb176_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f993af2fe4c887f00f3d186c7804b7518b0450e19831c5a721efc3ef84cebff8 = $this->env->getExtension("native_profiler");
        $__internal_f993af2fe4c887f00f3d186c7804b7518b0450e19831c5a721efc3ef84cebff8->enter($__internal_f993af2fe4c887f00f3d186c7804b7518b0450e19831c5a721efc3ef84cebff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f993af2fe4c887f00f3d186c7804b7518b0450e19831c5a721efc3ef84cebff8->leave($__internal_f993af2fe4c887f00f3d186c7804b7518b0450e19831c5a721efc3ef84cebff8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_452cca11bae17decd27b82fd2b32964414fcf7b3ca3e88a70651f42f4496b8aa = $this->env->getExtension("native_profiler");
        $__internal_452cca11bae17decd27b82fd2b32964414fcf7b3ca3e88a70651f42f4496b8aa->enter($__internal_452cca11bae17decd27b82fd2b32964414fcf7b3ca3e88a70651f42f4496b8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_452cca11bae17decd27b82fd2b32964414fcf7b3ca3e88a70651f42f4496b8aa->leave($__internal_452cca11bae17decd27b82fd2b32964414fcf7b3ca3e88a70651f42f4496b8aa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1082c535d1ac691e67ccdbf778f9e3d7d80138e4ba15afae1a18f268b8aa6295 = $this->env->getExtension("native_profiler");
        $__internal_1082c535d1ac691e67ccdbf778f9e3d7d80138e4ba15afae1a18f268b8aa6295->enter($__internal_1082c535d1ac691e67ccdbf778f9e3d7d80138e4ba15afae1a18f268b8aa6295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1082c535d1ac691e67ccdbf778f9e3d7d80138e4ba15afae1a18f268b8aa6295->leave($__internal_1082c535d1ac691e67ccdbf778f9e3d7d80138e4ba15afae1a18f268b8aa6295_prof);

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
