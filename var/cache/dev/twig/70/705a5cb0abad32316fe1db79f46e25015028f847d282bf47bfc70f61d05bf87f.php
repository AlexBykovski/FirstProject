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
        $__internal_d0892e7a255d13647b37de7c15f60ad7524465eb14b2ce7d513d5d0c146d92af = $this->env->getExtension("native_profiler");
        $__internal_d0892e7a255d13647b37de7c15f60ad7524465eb14b2ce7d513d5d0c146d92af->enter($__internal_d0892e7a255d13647b37de7c15f60ad7524465eb14b2ce7d513d5d0c146d92af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d0892e7a255d13647b37de7c15f60ad7524465eb14b2ce7d513d5d0c146d92af->leave($__internal_d0892e7a255d13647b37de7c15f60ad7524465eb14b2ce7d513d5d0c146d92af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_23a1f04feae00a6d7766dcca7d79a55addbf83455c242d3fb71a71939ab66de9 = $this->env->getExtension("native_profiler");
        $__internal_23a1f04feae00a6d7766dcca7d79a55addbf83455c242d3fb71a71939ab66de9->enter($__internal_23a1f04feae00a6d7766dcca7d79a55addbf83455c242d3fb71a71939ab66de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome123!";
        
        $__internal_23a1f04feae00a6d7766dcca7d79a55addbf83455c242d3fb71a71939ab66de9->leave($__internal_23a1f04feae00a6d7766dcca7d79a55addbf83455c242d3fb71a71939ab66de9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_933ff79dd379d0b91d80272e6769e5167c62e6cd9c223a5b71cb87e95a284330 = $this->env->getExtension("native_profiler");
        $__internal_933ff79dd379d0b91d80272e6769e5167c62e6cd9c223a5b71cb87e95a284330->enter($__internal_933ff79dd379d0b91d80272e6769e5167c62e6cd9c223a5b71cb87e95a284330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_933ff79dd379d0b91d80272e6769e5167c62e6cd9c223a5b71cb87e95a284330->leave($__internal_933ff79dd379d0b91d80272e6769e5167c62e6cd9c223a5b71cb87e95a284330_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_51eedfc26225f3248f03e0c234a4e15d41b01bfc63d47c1175b3b4b8e593950f = $this->env->getExtension("native_profiler");
        $__internal_51eedfc26225f3248f03e0c234a4e15d41b01bfc63d47c1175b3b4b8e593950f->enter($__internal_51eedfc26225f3248f03e0c234a4e15d41b01bfc63d47c1175b3b4b8e593950f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_51eedfc26225f3248f03e0c234a4e15d41b01bfc63d47c1175b3b4b8e593950f->leave($__internal_51eedfc26225f3248f03e0c234a4e15d41b01bfc63d47c1175b3b4b8e593950f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f5b328849e1a110cd613983c67f595b55a5e50ac9ef6cd10498a1d4ab629a65 = $this->env->getExtension("native_profiler");
        $__internal_6f5b328849e1a110cd613983c67f595b55a5e50ac9ef6cd10498a1d4ab629a65->enter($__internal_6f5b328849e1a110cd613983c67f595b55a5e50ac9ef6cd10498a1d4ab629a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f5b328849e1a110cd613983c67f595b55a5e50ac9ef6cd10498a1d4ab629a65->leave($__internal_6f5b328849e1a110cd613983c67f595b55a5e50ac9ef6cd10498a1d4ab629a65_prof);

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
/*         <title>{% block title %}Welcome123!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
