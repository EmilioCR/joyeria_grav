<?php

/* modular/jewelry.html.twig */
class __TwigTemplate_8d756341d58c7d90d57388ef5054fb99e295035f15ce8c8fe02570de35ac2f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "jewel", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jewel"]) {
            // line 3
            echo "      <img src=\"";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["jewel"], "jewelImage", array())), "path", array());
            echo "\" alt=\"\">
    <div>
        <h5>";
            // line 5
            echo $this->getAttribute($context["jewel"], "jewelName", array());
            echo "</h5>
        <p>Precio: ";
            // line 6
            echo $this->getAttribute($context["jewel"], "jewelPrice", array());
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jewel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/jewelry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  36 => 6,  32 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
    {% for jewel in page.header.jewel %}
      <img src=\"{{ (jewel.jewelImage|first).path }}\" alt=\"\">
    <div>
        <h5>{{ jewel.jewelName }}</h5>
        <p>Precio: {{ jewel.jewelPrice }}</p>
    </div>
    {% endfor %}
</section>
", "modular/jewelry.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/modular/jewelry.html.twig");
    }
}
