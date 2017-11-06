<?php

/* modular/pregunta.html.twig */
class __TwigTemplate_00984580efaaaa2583af695a36b0bba28e1e160622594bd40a0022670923d689 extends Twig_Template
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
        echo "<div class=\"section\">
  ";
        // line 2
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    <ol>
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "pregunta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "  
          <li><h4>";
            // line 6
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h4><p>";
            echo $this->getAttribute($context["item"], "respuesta", array());
            echo "</p></li>
          
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ol>
        
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/pregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\">
  {{ page.content}}
    <ol>
      {% for item in page.header.pregunta %}
  
          <li><h4>{{ item.title }}</h4><p>{{ item.respuesta}}</p></li>
          
      {% endfor %}
    </ol>
        
</div>
", "modular/pregunta.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/modular/pregunta.html.twig");
    }
}
