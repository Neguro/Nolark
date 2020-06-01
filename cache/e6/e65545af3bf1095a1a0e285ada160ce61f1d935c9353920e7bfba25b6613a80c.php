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

/* casques.twig */
class __TwigTemplate_8c654a21d1402cb2cf2f81f950423f37ac5ad98fac479644276252bb100cf4a1 extends Template
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
        echo "<section id=\"casques\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["casques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["casque"]) {
            // line 3
            echo "        <article>
            <img src=\"../images/casques/";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "libelle", [], "any", false, false, false, 4), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "image", [], "any", false, false, false, 4), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
            ";
            // line 5
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["casque"], "stock", [], "any", false, false, false, 5),  -1)) {
                // line 6
                echo "                ";
                // line 7
                echo "                <p class=\"stockko\"><abbr data-tip=\"Sur commande uniquement\">stock</abbr></p>
            ";
            } elseif (0 <= twig_compare(twig_get_attribute($this->env, $this->source,             // line 8
$context["casque"], "stock", [], "any", false, false, false, 8), 10)) {
                // line 9
                echo "                ";
                // line 10
                echo "                <p class=\"stockok\"><abbr data-tip=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", [], "any", false, false, false, 10), "html", null, true);
                echo " casques en stock\">stock</abbr></p>
            ";
            } else {
                // line 12
                echo "                ";
                // line 13
                echo "                <p class=\"stockok\"><abbr data-tip=\"Plus que ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", [], "any", false, false, false, 13), "html", null, true);
                echo " casques en stock...\">stock</abbr></p>
            ";
            }
            // line 15
            echo "            <p class=\"prix\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "prix", [], "any", false, false, false, 15), "html", null, true);
            echo "€</p>
            <p class=\"marque\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
            <p class=\"modele\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>

            ";
            // line 20
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 20), 5)) {
                // line 21
                echo "                <img class=\"classement classement0";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 21), "html", null, true);
                echo "\" src=\"../images/casques/etoiles.gif\" alt=\"Classement ";
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 21) / 10), ["." => ","]), "html", null, true);
                echo " sur 5\">
            ";
            } else {
                // line 23
                echo "                <img class=\"classement classement";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 23), "html", null, true);
                echo "\" src=\"../images/casques/etoiles.gif\" alt=\"Classement ";
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 23) / 10), ["." => ","]), "html", null, true);
                echo " sur 5\">
            ";
            }
            // line 25
            echo "        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "casques.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  113 => 25,  105 => 23,  97 => 21,  94 => 20,  89 => 17,  85 => 16,  80 => 15,  74 => 13,  72 => 12,  66 => 10,  64 => 9,  62 => 8,  59 => 7,  57 => 6,  55 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "casques.twig", "C:\\wamp64\\www\\Nolark\\tpl\\casques.twig");
    }
}
