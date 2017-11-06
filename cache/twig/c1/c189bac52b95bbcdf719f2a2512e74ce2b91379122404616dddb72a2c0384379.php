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


        <div>
\t\t  <img src=\"";
        // line 6
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "myImage", array())), "path", array());
        echo "\" alt=\"";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "\">
        </div>  

        <a href=\"";
        // line 9
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute(($context["header"] ?? null), "page", array());
        echo "\"><h1>";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1></a>

        ";
        // line 11
        if ($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["image"] ?? null), "mySecondImage", array())), "path", array())) {
            // line 12
            echo "            <div>
              <img src=\"";
            // line 13
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "mySecondImage", array())), "path", array());
            echo "\" alt=\"";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "\">
            </div>
        ";
        }
        // line 16
        echo "        
</div>
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
        return array (  58 => 16,  50 => 13,  47 => 12,  45 => 11,  37 => 9,  29 => 6,  22 => 2,  19 => 1,);
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


        <div>
\t\t  <img src=\"{{(header.myImage|first).path}}\" alt=\"{{page.title}}\">
        </div>  

        <a href=\"{{base_url}}{{header.page}}\"><h1>{{ page.header.title }}</h1></a>

        {% if (image.mySecondImage|first).path %}
            <div>
              <img src=\"{{(header.mySecondImage|first).path}}\" alt=\"{{page.title}}\">
            </div>
        {% endif %}
        
</div>
", "modular/section.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/modular/section.html.twig");
    }
}
