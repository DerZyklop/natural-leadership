<?php

/* @VisitsSummary/getSparklines.twig */
class __TwigTemplate_bc1e24958b7762237ec19470ec714b1ec81a9296afc6615945de9d7367a4b8ed extends Twig_Template
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
        $this->loadTemplate("@VisitsSummary/_sparklines.twig", "@VisitsSummary/getSparklines.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@VisitsSummary/getSparklines.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% include \"@VisitsSummary/_sparklines.twig\" %}";
    }
}
