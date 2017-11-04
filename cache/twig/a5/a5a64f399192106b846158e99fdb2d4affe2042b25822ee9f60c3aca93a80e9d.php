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

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "item", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "
\t\t<section class=\"jewel-image\">
\t\t\t<img src=\"";
            // line 10
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["item"], "myImage", array())), "path", array());
            echo "\" alt=\"";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "\">
\t\t</section>

\t\t<section class=\"jewel-details\">
        \t<h1>";
            // line 14
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h1>
        \t<h2>Descripcion y Detalles</h2>
        \t<p>";
            // line 16
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
        \t<h3>Precio: ";
            // line 17
            echo $this->getAttribute($context["item"], "price", array());
            echo "</h3>
        \t<h3>Contactenos:</h3>
        \t<ul>
        \t\t<li>Correo : <a href=\"#\">veganavascues@gmail.com</a></li>
        \t\t<li>TEL: 222-222-222</li>
        \t</ul>
        </section>
        
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
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
        return array (  80 => 26,  65 => 17,  61 => 16,  56 => 14,  47 => 10,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

    {% for item in page.header.item %}

\t\t<section class=\"jewel-image\">
\t\t\t<img src=\"{{(item.myImage|first).path}}\" alt=\"{{page.title}}\">
\t\t</section>

\t\t<section class=\"jewel-details\">
        \t<h1>{{ item.title }}</h1>
        \t<h2>Descripcion y Detalles</h2>
        \t<p>{{ item.description }}</p>
        \t<h3>Precio: {{ item.price }}</h3>
        \t<h3>Contactenos:</h3>
        \t<ul>
        \t\t<li>Correo : <a href=\"#\">veganavascues@gmail.com</a></li>
        \t\t<li>TEL: 222-222-222</li>
        \t</ul>
        </section>
        
\t{% endfor %}
</div>
{% endblock %}", "item.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/item.html.twig");
    }
}
