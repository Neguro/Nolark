<?php

/* casques.twig */
class __TwigTemplate_30510cb1d621e057a32d7b97270970bc09593349ebb1bb8706e5a9daf887b1b8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "libelle", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", array()), "html", null, true);
            echo "\">
            ";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, $context["casque"], "stock", array()) ==  -1)) {
                // line 6
                echo "                ";
                // line 7
                echo "                <p class=\"stockko\"><abbr data-tip=\"Sur commande uniquement\">stock</abbr></p>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 8
$context["casque"], "stock", array()) >= 10)) {
                // line 9
                echo "                ";
                // line 10
                echo "                <p class=\"stockok\"><abbr data-tip=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", array()), "html", null, true);
                echo " casques en stock\">stock</abbr></p>
            ";
            } else {
                // line 12
                echo "                ";
                // line 13
                echo "                <p class=\"stockok\"><abbr data-tip=\"Plus que ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", array()), "html", null, true);
                echo " casques en stock...\">stock</abbr></p>
            ";
            }
            // line 15
            echo "            <p class=\"prix\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "prix", array()), "html", null, true);
            echo "€</p>
            <p class=\"marque\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "nom", array()), "html", null, true);
            echo "</p>
            <p class=\"modele\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", array()), "html", null, true);
            echo "</p>

            ";
            // line 20
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()) == 5)) {
                // line 21
                echo "                <img class=\"classement classement0";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()), "html", null, true);
                echo "\" src=\"../images/casques/etoiles.gif\" alt=\"Classement ";
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()) / 10), array("." => ",")), "html", null, true);
                echo " sur 5\">
            ";
            } else {
                // line 23
                echo "                <img class=\"classement classement";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()), "html", null, true);
                echo "\" src=\"../images/casques/etoiles.gif\" alt=\"Classement ";
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()) / 10), array("." => ",")), "html", null, true);
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
        return array (  106 => 27,  99 => 25,  91 => 23,  83 => 21,  80 => 20,  75 => 17,  71 => 16,  66 => 15,  60 => 13,  58 => 12,  52 => 10,  50 => 9,  48 => 8,  45 => 7,  43 => 6,  41 => 5,  33 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "casques.twig", "C:\\wamp64\\www\\Nolark\\tpl\\casques.twig");
    }
}
