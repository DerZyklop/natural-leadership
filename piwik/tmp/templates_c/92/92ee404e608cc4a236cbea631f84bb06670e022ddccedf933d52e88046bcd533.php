<?php

/* _sparklineFooter.twig */
class __TwigTemplate_fa6cc4e5303d18c065fec316cf8697e27737d30e74d73259cb56ef126bafe474 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "_sparklineFooter.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }
}
