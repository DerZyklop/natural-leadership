<?php

/* @Live/ajaxTotalVisitors.twig */
class __TwigTemplate_3363241320883438c7b0c505f75bd1345d84d1b3fd707f8069ea9a1b366b7063 extends Twig_Template
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
        $this->loadTemplate("@Live/_totalVisitors.twig", "@Live/ajaxTotalVisitors.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Live/ajaxTotalVisitors.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% include \"@Live/_totalVisitors.twig\" %}";
    }
}
