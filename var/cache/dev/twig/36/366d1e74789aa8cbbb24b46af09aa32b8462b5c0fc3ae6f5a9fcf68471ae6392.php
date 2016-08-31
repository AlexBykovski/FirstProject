<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56a48ba2d3c9543b964c4e9e1879e1eff8ebe5af5e1f372eddad05b7f19a6133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1428621fd8f82a9c7781847bd6557311fb05d07e4838624e2edcf9daae7c1cbb = $this->env->getExtension("native_profiler");
        $__internal_1428621fd8f82a9c7781847bd6557311fb05d07e4838624e2edcf9daae7c1cbb->enter($__internal_1428621fd8f82a9c7781847bd6557311fb05d07e4838624e2edcf9daae7c1cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1428621fd8f82a9c7781847bd6557311fb05d07e4838624e2edcf9daae7c1cbb->leave($__internal_1428621fd8f82a9c7781847bd6557311fb05d07e4838624e2edcf9daae7c1cbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ece8a39d740335fe0a62e85efe8f5ff50780c673f9823a3e084ecc11ab988c12 = $this->env->getExtension("native_profiler");
        $__internal_ece8a39d740335fe0a62e85efe8f5ff50780c673f9823a3e084ecc11ab988c12->enter($__internal_ece8a39d740335fe0a62e85efe8f5ff50780c673f9823a3e084ecc11ab988c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ece8a39d740335fe0a62e85efe8f5ff50780c673f9823a3e084ecc11ab988c12->leave($__internal_ece8a39d740335fe0a62e85efe8f5ff50780c673f9823a3e084ecc11ab988c12_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9824e636a8e761885fee15f127ff8efefc4dd8b556b472c40bfd9516e2ae3a3 = $this->env->getExtension("native_profiler");
        $__internal_d9824e636a8e761885fee15f127ff8efefc4dd8b556b472c40bfd9516e2ae3a3->enter($__internal_d9824e636a8e761885fee15f127ff8efefc4dd8b556b472c40bfd9516e2ae3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9824e636a8e761885fee15f127ff8efefc4dd8b556b472c40bfd9516e2ae3a3->leave($__internal_d9824e636a8e761885fee15f127ff8efefc4dd8b556b472c40bfd9516e2ae3a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa18bdc39aa5cdb94e972c3febc492b48ccb857a6bc4045de3230518111d95f8 = $this->env->getExtension("native_profiler");
        $__internal_fa18bdc39aa5cdb94e972c3febc492b48ccb857a6bc4045de3230518111d95f8->enter($__internal_fa18bdc39aa5cdb94e972c3febc492b48ccb857a6bc4045de3230518111d95f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa18bdc39aa5cdb94e972c3febc492b48ccb857a6bc4045de3230518111d95f8->leave($__internal_fa18bdc39aa5cdb94e972c3febc492b48ccb857a6bc4045de3230518111d95f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
