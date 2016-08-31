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
        $__internal_41878ec51d73d9c59e5efe43de4905e800575c7e721d54af97d2cdad1ef997e2 = $this->env->getExtension("native_profiler");
        $__internal_41878ec51d73d9c59e5efe43de4905e800575c7e721d54af97d2cdad1ef997e2->enter($__internal_41878ec51d73d9c59e5efe43de4905e800575c7e721d54af97d2cdad1ef997e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41878ec51d73d9c59e5efe43de4905e800575c7e721d54af97d2cdad1ef997e2->leave($__internal_41878ec51d73d9c59e5efe43de4905e800575c7e721d54af97d2cdad1ef997e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56e01f89868156dd287e0d3c0d5f8cccc30bf0bbeaf5851ca222284082cc3fe3 = $this->env->getExtension("native_profiler");
        $__internal_56e01f89868156dd287e0d3c0d5f8cccc30bf0bbeaf5851ca222284082cc3fe3->enter($__internal_56e01f89868156dd287e0d3c0d5f8cccc30bf0bbeaf5851ca222284082cc3fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_56e01f89868156dd287e0d3c0d5f8cccc30bf0bbeaf5851ca222284082cc3fe3->leave($__internal_56e01f89868156dd287e0d3c0d5f8cccc30bf0bbeaf5851ca222284082cc3fe3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30bafeaeb97d379b81a28aad7c48200b59065f9dfdec706adafa81549d48e498 = $this->env->getExtension("native_profiler");
        $__internal_30bafeaeb97d379b81a28aad7c48200b59065f9dfdec706adafa81549d48e498->enter($__internal_30bafeaeb97d379b81a28aad7c48200b59065f9dfdec706adafa81549d48e498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30bafeaeb97d379b81a28aad7c48200b59065f9dfdec706adafa81549d48e498->leave($__internal_30bafeaeb97d379b81a28aad7c48200b59065f9dfdec706adafa81549d48e498_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1aecaa9a7694ee25e72294b278484b8bc89fa2107ee69c4912f6122d349ce70 = $this->env->getExtension("native_profiler");
        $__internal_c1aecaa9a7694ee25e72294b278484b8bc89fa2107ee69c4912f6122d349ce70->enter($__internal_c1aecaa9a7694ee25e72294b278484b8bc89fa2107ee69c4912f6122d349ce70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1aecaa9a7694ee25e72294b278484b8bc89fa2107ee69c4912f6122d349ce70->leave($__internal_c1aecaa9a7694ee25e72294b278484b8bc89fa2107ee69c4912f6122d349ce70_prof);

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
