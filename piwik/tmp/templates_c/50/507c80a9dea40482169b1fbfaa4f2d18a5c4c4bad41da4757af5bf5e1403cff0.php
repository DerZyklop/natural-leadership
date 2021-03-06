<?php

/* @Actions/indexSiteSearch.twig */
class __TwigTemplate_4a170ea4c8e644cd9292bfe8cfc6dcd6fe0db05b94771afb1f42dbf55d16db8b extends Twig_Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-6\">
        <h2 piwik-enriched-headline>";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchKeywords")), "html", null, true);
        echo "</h2>
        ";
        // line 5
        echo (isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords"));
        echo "

        <h2 piwik-enriched-headline>";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchNoResultKeywords")), "html", null, true);
        echo "</h2>
        ";
        // line 8
        echo (isset($context["noResultKeywords"]) ? $context["noResultKeywords"] : $this->getContext($context, "noResultKeywords"));
        echo "

        ";
        // line 10
        if (array_key_exists("categories", $context)) {
            // line 11
            echo "            <h2 piwik-enriched-headline>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchCategories")), "html", null, true);
            echo "</h2>
            ";
            // line 12
            echo (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"));
            echo "
        ";
        }
        // line 14
        echo "    </div>

    <div class=\"col-md-6\">
        <h2 piwik-enriched-headline>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetPageUrlsFollowingSearch")), "html", null, true);
        echo "</h2>
        ";
        // line 18
        echo (isset($context["pagesUrlsFollowingSiteSearch"]) ? $context["pagesUrlsFollowingSiteSearch"] : $this->getContext($context, "pagesUrlsFollowingSiteSearch"));
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Actions/indexSiteSearch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  59 => 17,  54 => 14,  49 => 12,  44 => 11,  42 => 10,  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">

    <div class=\"col-md-6\">
        <h2 piwik-enriched-headline>{{ 'Actions_WidgetSearchKeywords'|translate }}</h2>
        {{ keywords|raw }}

        <h2 piwik-enriched-headline>{{ 'Actions_WidgetSearchNoResultKeywords'|translate }}</h2>
        {{ noResultKeywords|raw }}

        {% if categories is defined %}
            <h2 piwik-enriched-headline>{{ 'Actions_WidgetSearchCategories'|translate }}</h2>
            {{ categories|raw }}
        {% endif %}
    </div>

    <div class=\"col-md-6\">
        <h2 piwik-enriched-headline>{{ 'Actions_WidgetPageUrlsFollowingSearch'|translate }}</h2>
        {{ pagesUrlsFollowingSiteSearch|raw }}
    </div>

</div>
";
    }
}
