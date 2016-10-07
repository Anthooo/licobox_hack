<?php

/* LicoboxBundle:Default:index.html.twig */
class __TwigTemplate_ecbde34b02341c2da25d1d15b449f2eaee2b909f42e2ec3447decd5bac59890a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LicoboxBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c34dadbd1f100fb1cfe8eb48496ccd524d7b95e69327ea0d54e0172a2934639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c34dadbd1f100fb1cfe8eb48496ccd524d7b95e69327ea0d54e0172a2934639->enter($__internal_8c34dadbd1f100fb1cfe8eb48496ccd524d7b95e69327ea0d54e0172a2934639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LicoboxBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c34dadbd1f100fb1cfe8eb48496ccd524d7b95e69327ea0d54e0172a2934639->leave($__internal_8c34dadbd1f100fb1cfe8eb48496ccd524d7b95e69327ea0d54e0172a2934639_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71b6abc0771b51be96d502a4999afc7b8fccf23925c428db3974d21f2fb85d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b6abc0771b51be96d502a4999afc7b8fccf23925c428db3974d21f2fb85d90->enter($__internal_71b6abc0771b51be96d502a4999afc7b8fccf23925c428db3974d21f2fb85d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_user");
        echo "\">
    <label>Nom d'utilisateur</label><br>
    <input type=\"text\" name=\"username\"><br>
    <label>Mot de pass</label><br>
    <input type=\"password\" name=\"pass\"><br>
    <input type=\"submit\" value=\"Envoyer\">
</form>

";
        
        $__internal_71b6abc0771b51be96d502a4999afc7b8fccf23925c428db3974d21f2fb85d90->leave($__internal_71b6abc0771b51be96d502a4999afc7b8fccf23925c428db3974d21f2fb85d90_prof);

    }

    public function getTemplateName()
    {
        return "LicoboxBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}

<form action=\"{{ path('check_user') }}\">
    <label>Nom d'utilisateur</label><br>
    <input type=\"text\" name=\"username\"><br>
    <label>Mot de pass</label><br>
    <input type=\"password\" name=\"pass\"><br>
    <input type=\"submit\" value=\"Envoyer\">
</form>

{% endblock %}";
    }
}
