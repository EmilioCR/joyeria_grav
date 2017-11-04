<?php

/* modular/section.html.twig */
class __TwigTemplate_a96e21d59b095922bcfd09fda20f1b117027838226a045001a70588609018e66 extends Twig_Template
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
\t";
        // line 2
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "section", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 5
            echo "
        <div>
\t\t  <img src=\"";
            // line 7
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["image"], "myImage", array())), "path", array());
            echo "\" alt=\"";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "\">
        </div>

        <div class=\"section-title\">
            <h1>";
            // line 11
            echo $this->getAttribute($context["image"], "title", array());
            echo "</h1>
        </div>

        ";
            // line 14
            if ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["image"], "mySecondImage", array())), "path", array())) {
                // line 15
                echo "            <div>
              <img src=\"";
                // line 16
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["image"], "mySecondImage", array())), "path", array());
                echo "\" alt=\"";
                echo $this->getAttribute(($context["page"] ?? null), "title", array());
                echo "\">
            </div>
        ";
            }
            // line 19
            echo "        
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  63 => 19,  55 => 16,  52 => 15,  50 => 14,  44 => 11,  35 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
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
\t{{ page.content}}

    {% for image in page.header.section %}

        <div>
\t\t  <img src=\"{{(image.myImage|first).path}}\" alt=\"{{page.title}}\">
        </div>

        <div class=\"section-title\">
            <h1>{{ image.title }}</h1>
        </div>

        {% if (image.mySecondImage|first).path %}
            <div>
              <img src=\"{{(image.mySecondImage|first).path}}\" alt=\"{{page.title}}\">
            </div>
        {% endif %}
        
\t{% endfor %}
</div>
", "modular/section.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/modular/section.html.twig");
    }
}
