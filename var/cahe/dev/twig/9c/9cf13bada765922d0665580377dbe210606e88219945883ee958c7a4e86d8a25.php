<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* country/index.html.twig */
class __TwigTemplate_5a3228445f881de265de12858de0809c4f77f1bfcae84a66f7809743c3f9ef9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=ç, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <h1>Hello ";
        // line 10
        echo twig_escape_filter($this->env, ($context["pays"] ?? null), "html", null, true);
        echo "!</h1>
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "country/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "country/index.html.twig", "/Applications/MAMP/htdocs/Framework/templates/country/index.html.twig");
    }
}
