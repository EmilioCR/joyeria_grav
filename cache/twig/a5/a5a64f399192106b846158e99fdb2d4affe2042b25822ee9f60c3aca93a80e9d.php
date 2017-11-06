<?php

/* item.html.twig */
class __TwigTemplate_be7f04c7727e7f6b9a57d0c6747ca8e20ae184ece019481cc01646d469762add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "<div class=\"item\">
\t";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

    <section class=\"jewel-image\">
        <img src=\"";
        // line 8
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "myJewel", array())), "path", array());
        echo "\" alt=\"";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "\">
    </section>

    <section class=\"jewel-details\">
        <h1>";
        // line 12
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
        <h2>Descripcion y Detalles</h2>
        <p>";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "description", array());
        echo "</p>
        <h3>Precio: ";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "price", array());
        echo "</h3>
        <h3>Contactenos:</h3>
        <ul>
            <li>Correo : <a href=\"#\">veganavascues@gmail.com</a></li>
            <li>TEL: 222-222-222</li>
        </ul>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  54 => 14,  49 => 12,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"item\">
\t{{ page.content}}

    <section class=\"jewel-image\">
        <img src=\"{{(header.myJewel|first).path}}\" alt=\"{{page.title}}\">
    </section>

    <section class=\"jewel-details\">
        <h1>{{ header.title }}</h1>
        <h2>Descripcion y Detalles</h2>
        <p>{{ header.description }}</p>
        <h3>Precio: {{ header.price }}</h3>
        <h3>Contactenos:</h3>
        <ul>
            <li>Correo : <a href=\"#\">veganavascues@gmail.com</a></li>
            <li>TEL: 222-222-222</li>
        </ul>
    </section>
</div>
{% endblock %}", "item.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/item.html.twig");
    }
}
