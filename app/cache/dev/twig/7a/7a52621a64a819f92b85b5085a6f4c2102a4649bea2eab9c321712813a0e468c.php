<?php

/* base.html.twig */
class __TwigTemplate_582618128f80090e8c9816e90b83a4bf13d9bad5569f1ecbefb0df228623b0de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_585d4c40178cdd8cc39a4dcb868ed27d989b325e4abff2eceb3bb3bd88cb6466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585d4c40178cdd8cc39a4dcb868ed27d989b325e4abff2eceb3bb3bd88cb6466->enter($__internal_585d4c40178cdd8cc39a4dcb868ed27d989b325e4abff2eceb3bb3bd88cb6466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.css\">


        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <header>
      <nav>
        <div class=\"nav-wrapper\">
           <!--  <a href=\"https://s22.postimg.org/ulblilwm9/2_Vy9v_S5_Imgur.jpg\">
                <img border=\"0\" alt=\"logo\">
            </a> -->
          <!-- <img src=\"a href=\"https://s22.postimg.org/ulblilwm9/2_Vy9v_S5_Imgur.jpg\" alt=\"logo\"></a>
          <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\"> -->
            <li><a href=\"sass.html\">Mes licornes</a></li>
            <li><a href=\"badges.html\">Capturer des licornes</a></li>
            <li><a href=\"collapsible.html\">Mon compte</a></li>
          </ul>
        </div>
      </nav>
    </header>
        

    <body>
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "name"), "method"));
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id_user"), "method"));
        echo "
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
        <footer>
   
        </footer>

    </body>

</html>
";
        
        $__internal_585d4c40178cdd8cc39a4dcb868ed27d989b325e4abff2eceb3bb3bd88cb6466->leave($__internal_585d4c40178cdd8cc39a4dcb868ed27d989b325e4abff2eceb3bb3bd88cb6466_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b51edb8a0e626834dd51095a6b8c76eaecfd3c1b1ba9e6315247d4dd95960cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51edb8a0e626834dd51095a6b8c76eaecfd3c1b1ba9e6315247d4dd95960cdd->enter($__internal_b51edb8a0e626834dd51095a6b8c76eaecfd3c1b1ba9e6315247d4dd95960cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b51edb8a0e626834dd51095a6b8c76eaecfd3c1b1ba9e6315247d4dd95960cdd->leave($__internal_b51edb8a0e626834dd51095a6b8c76eaecfd3c1b1ba9e6315247d4dd95960cdd_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7129ea290ae452137225d952843e8ae5458b641fe80de5fc1b993a06ba2122d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7129ea290ae452137225d952843e8ae5458b641fe80de5fc1b993a06ba2122d->enter($__internal_e7129ea290ae452137225d952843e8ae5458b641fe80de5fc1b993a06ba2122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7129ea290ae452137225d952843e8ae5458b641fe80de5fc1b993a06ba2122d->leave($__internal_e7129ea290ae452137225d952843e8ae5458b641fe80de5fc1b993a06ba2122d_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_38252f10acdd18b3d8b46b2a9a07b332ac4ab4a9895aa9a649b03afc36d20c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38252f10acdd18b3d8b46b2a9a07b332ac4ab4a9895aa9a649b03afc36d20c83->enter($__internal_38252f10acdd18b3d8b46b2a9a07b332ac4ab4a9895aa9a649b03afc36d20c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38252f10acdd18b3d8b46b2a9a07b332ac4ab4a9895aa9a649b03afc36d20c83->leave($__internal_38252f10acdd18b3d8b46b2a9a07b332ac4ab4a9895aa9a649b03afc36d20c83_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a99e1c104b4c3d5e02e951ca926d111449a48362b9b2da6a6408e34a3d1eece9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99e1c104b4c3d5e02e951ca926d111449a48362b9b2da6a6408e34a3d1eece9->enter($__internal_a99e1c104b4c3d5e02e951ca926d111449a48362b9b2da6a6408e34a3d1eece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a99e1c104b4c3d5e02e951ca926d111449a48362b9b2da6a6408e34a3d1eece9->leave($__internal_a99e1c104b4c3d5e02e951ca926d111449a48362b9b2da6a6408e34a3d1eece9_prof);

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
        return array (  138 => 40,  127 => 39,  115 => 14,  105 => 11,  99 => 10,  84 => 41,  81 => 40,  79 => 39,  75 => 38,  71 => 37,  47 => 16,  42 => 14,  39 => 13,  37 => 10,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.css\">


        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\" />
        {% endblock %}

        <title>{% block title %}Welcome!{% endblock %}</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <header>
      <nav>
        <div class=\"nav-wrapper\">
           <!--  <a href=\"https://s22.postimg.org/ulblilwm9/2_Vy9v_S5_Imgur.jpg\">
                <img border=\"0\" alt=\"logo\">
            </a> -->
          <!-- <img src=\"a href=\"https://s22.postimg.org/ulblilwm9/2_Vy9v_S5_Imgur.jpg\" alt=\"logo\"></a>
          <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\"> -->
            <li><a href=\"sass.html\">Mes licornes</a></li>
            <li><a href=\"badges.html\">Capturer des licornes</a></li>
            <li><a href=\"collapsible.html\">Mon compte</a></li>
          </ul>
        </div>
      </nav>
    </header>
        

    <body>
    {{ dump(app.session.get('name')) }}
    {{ dump(app.session.get('id_user')) }}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

        <footer>
   
        </footer>

    </body>

</html>
";
    }
}
