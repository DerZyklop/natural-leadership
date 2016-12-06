<?php

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_1ca064de4d520245cd015c70d66bb3fe24a0ce13512f60462e9d353feb172566 extends Twig_Template
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
        echo "<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
</div>";
    }
}
