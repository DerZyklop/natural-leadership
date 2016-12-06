<?php

/* @VisitsSummary/index.twig */
class __TwigTemplate_cdabceadbf50c6b430137fd69f75391872502f45231f3e9818f87a2771392ab5 extends Twig_Template
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
        // line 2
        echo "<h2 piwik-enriched-headline
    data-graph-id=\"VisitsSummary.getIndexGraph\"
        >";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EvolutionOverPeriod")), "html", null, true);
        echo "</h2>

";
        // line 6
        echo (isset($context["graphEvolutionVisitsSummary"]) ? $context["graphEvolutionVisitsSummary"] : $this->getContext($context, "graphEvolutionVisitsSummary"));
        echo "

<h2 class=\"visitsSummaryReportTitle\">";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Report")), "html", null, true);
        echo "</h2>
";
        // line 9
        $this->loadTemplate("@VisitsSummary/_sparklines.twig", "@VisitsSummary/index.twig", 9)->display($context);
    }

    public function getTemplateName()
    {
        return "@VisitsSummary/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  33 => 8,  28 => 6,  23 => 4,  19 => 2,);
    }

    public function getSource()
    {
        return "{# This graphId must be unique for this report #}
<h2 piwik-enriched-headline
    data-graph-id=\"VisitsSummary.getIndexGraph\"
        >{{ 'General_EvolutionOverPeriod'|translate }}</h2>

{{ graphEvolutionVisitsSummary|raw }}

<h2 class=\"visitsSummaryReportTitle\">{{ 'General_Report'|translate }}</h2>
{% include \"@VisitsSummary/_sparklines.twig\" %}
";
    }
}
