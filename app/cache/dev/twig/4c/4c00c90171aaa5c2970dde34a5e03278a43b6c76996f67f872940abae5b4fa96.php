<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e90187d1baa83e5245e7b5ed777af07d72fcf687f985ba4aafb19787d28ac00 extends Twig_Template
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
        $__internal_ef0575125ac92832fcf275e9e2b588b50d7173c807ddd6a1915e9d11b0f7d9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0575125ac92832fcf275e9e2b588b50d7173c807ddd6a1915e9d11b0f7d9ea->enter($__internal_ef0575125ac92832fcf275e9e2b588b50d7173c807ddd6a1915e9d11b0f7d9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef0575125ac92832fcf275e9e2b588b50d7173c807ddd6a1915e9d11b0f7d9ea->leave($__internal_ef0575125ac92832fcf275e9e2b588b50d7173c807ddd6a1915e9d11b0f7d9ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac4011af6144f33b898c0eb4f9b0f9eeaa723bba03f47a2d776bf99cd17fcc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4011af6144f33b898c0eb4f9b0f9eeaa723bba03f47a2d776bf99cd17fcc5a->enter($__internal_ac4011af6144f33b898c0eb4f9b0f9eeaa723bba03f47a2d776bf99cd17fcc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac4011af6144f33b898c0eb4f9b0f9eeaa723bba03f47a2d776bf99cd17fcc5a->leave($__internal_ac4011af6144f33b898c0eb4f9b0f9eeaa723bba03f47a2d776bf99cd17fcc5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c242c2265784167c982da3d603d059d7dd0751130f2d7a9da1e9a7da9905f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c242c2265784167c982da3d603d059d7dd0751130f2d7a9da1e9a7da9905f90->enter($__internal_5c242c2265784167c982da3d603d059d7dd0751130f2d7a9da1e9a7da9905f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c242c2265784167c982da3d603d059d7dd0751130f2d7a9da1e9a7da9905f90->leave($__internal_5c242c2265784167c982da3d603d059d7dd0751130f2d7a9da1e9a7da9905f90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08bb74209ec7c04d1dcfa9504c74aa5e0edcc927bfdf0351a18cd0d9ab778160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bb74209ec7c04d1dcfa9504c74aa5e0edcc927bfdf0351a18cd0d9ab778160->enter($__internal_08bb74209ec7c04d1dcfa9504c74aa5e0edcc927bfdf0351a18cd0d9ab778160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08bb74209ec7c04d1dcfa9504c74aa5e0edcc927bfdf0351a18cd0d9ab778160->leave($__internal_08bb74209ec7c04d1dcfa9504c74aa5e0edcc927bfdf0351a18cd0d9ab778160_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
