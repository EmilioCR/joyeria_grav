<?php

/* modular/download-section.html.twig */
class __TwigTemplate_53d4cf9af34766144cbc7b7a29db28d5529afc5409837b07c6a950ee7d6caf95 extends Twig_Template
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
    
        <h1>";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
        <p>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "text", array());
        echo "</p>
        <a href=\"";
        // line 6
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "downloadFile", array())), "path", array());
        echo "\" download=\"\">Download</a>
        
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/download-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
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
    
        <h1>{{ page.header.title }}</h1>
        <p>{{ page.header.text }}</p>
        <a href=\"{{(header.downloadFile|first).path}}\" download=\"\">Download</a>
        
</div>
", "modular/download-section.html.twig", "/Applications/MAMP/htdocs/joyeria/user/themes/navascues/templates/modular/download-section.html.twig");
    }
}
