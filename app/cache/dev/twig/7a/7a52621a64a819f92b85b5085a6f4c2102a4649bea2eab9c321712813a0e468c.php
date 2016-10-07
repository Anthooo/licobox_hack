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
        $__internal_cc70feec3731ead308e118800dfbf72314b6a372f054d9fa1356176c50481876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc70feec3731ead308e118800dfbf72314b6a372f054d9fa1356176c50481876->enter($__internal_cc70feec3731ead308e118800dfbf72314b6a372f054d9fa1356176c50481876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 38
        echo "    ";
        // line 39
        echo "        ";
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
        
        $__internal_cc70feec3731ead308e118800dfbf72314b6a372f054d9fa1356176c50481876->leave($__internal_cc70feec3731ead308e118800dfbf72314b6a372f054d9fa1356176c50481876_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92fdf1b85853988ae11e71a6344a59cdd8d24f87987d271524378cbdd78e375d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fdf1b85853988ae11e71a6344a59cdd8d24f87987d271524378cbdd78e375d->enter($__internal_92fdf1b85853988ae11e71a6344a59cdd8d24f87987d271524378cbdd78e375d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_92fdf1b85853988ae11e71a6344a59cdd8d24f87987d271524378cbdd78e375d->leave($__internal_92fdf1b85853988ae11e71a6344a59cdd8d24f87987d271524378cbdd78e375d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_24e0fcc514ab4df7c9ce3c2edb1965f8f168d65ad6706e93f21fd712e48b967e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e0fcc514ab4df7c9ce3c2edb1965f8f168d65ad6706e93f21fd712e48b967e->enter($__internal_24e0fcc514ab4df7c9ce3c2edb1965f8f168d65ad6706e93f21fd712e48b967e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_24e0fcc514ab4df7c9ce3c2edb1965f8f168d65ad6706e93f21fd712e48b967e->leave($__internal_24e0fcc514ab4df7c9ce3c2edb1965f8f168d65ad6706e93f21fd712e48b967e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_f81c1f56d910dfb7f75d6f88e5c4507e12915edb7baa6d50995b949f1f7a881d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81c1f56d910dfb7f75d6f88e5c4507e12915edb7baa6d50995b949f1f7a881d->enter($__internal_f81c1f56d910dfb7f75d6f88e5c4507e12915edb7baa6d50995b949f1f7a881d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f81c1f56d910dfb7f75d6f88e5c4507e12915edb7baa6d50995b949f1f7a881d->leave($__internal_f81c1f56d910dfb7f75d6f88e5c4507e12915edb7baa6d50995b949f1f7a881d_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02887ce87f596ec6ac705b728f87fe4cdc0d837f5d5cd687f2f26412efc7a7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02887ce87f596ec6ac705b728f87fe4cdc0d837f5d5cd687f2f26412efc7a7e1->enter($__internal_02887ce87f596ec6ac705b728f87fe4cdc0d837f5d5cd687f2f26412efc7a7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02887ce87f596ec6ac705b728f87fe4cdc0d837f5d5cd687f2f26412efc7a7e1->leave($__internal_02887ce87f596ec6ac705b728f87fe4cdc0d837f5d5cd687f2f26412efc7a7e1_prof);

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
        return array (  133 => 40,  122 => 39,  110 => 14,  100 => 11,  94 => 10,  79 => 41,  76 => 40,  73 => 39,  71 => 38,  47 => 16,  42 => 14,  39 => 13,  37 => 10,  26 => 1,);
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
    {#{{ dump(app.session.get('name')) }}#}
    {#{{ dump(app.session.get('id_user')) }}#}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

        <footer>
   
        </footer>

    </body>

</html>
";
    }
}
