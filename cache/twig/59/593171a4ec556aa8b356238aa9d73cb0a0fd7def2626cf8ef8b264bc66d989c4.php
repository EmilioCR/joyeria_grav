<?php

/* contactenos.html.twig */
class __TwigTemplate_e9960209f83085072633ad762f5147d833d576ebb20a33364877f24eca882a47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contactenos.html.twig", 1);
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
        echo "<div class=\"about\">
\t";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "


    <section>
        <img src=\"";
        // line 9
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "atencionImage", array())), "path", array());
        echo "\" alt=\"";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "\">
        <h1>";
        // line 10
        echo $this->getAttribute(($context["header"] ?? null), "titleAtencion", array());
        echo "</h1>
        <h2>";
        // line 11
        echo $this->getAttribute(($context["header"] ?? null), "phone", array());
        echo "</h2>
    </section>

    <section>
        <img src=\"";
        // line 15
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "contactenosImage", array())), "path", array());
        echo "\" alt=\"";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "\">
        <h1>";
        // line 16
        echo $this->getAttribute(($context["header"] ?? null), "titleContactenos", array());
        echo "</h1>
        <h2>";
        // line 17
        echo $this->getAttribute(($context["header"] ?? null), "mail", array());
        echo "</h2>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "contactenos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  64 => 16,  58 => 15,  51 => 11,  47 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"about\">
\t{{ page.content}}


    <section>
        <img src=\"{{(header.atencionImage|first).path}}\" alt=\"{{page.title}}\">
        <h1>{{ header.titleAtencion }}</h1>
        <h2>{{ header.phone }}</h2>
    </section>

    <section>
        <img src=\"{{(header.contactenosImage|first).path}}\" alt=\"{{page.title}}\">
        <h1>{{ header.titleContactenos }}</h1>
        <h2>{{ header.mail }}</h2>
    </section>
</div>
{% endblock %}", "contactenos.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/contactenos.html.twig");
    }
}
