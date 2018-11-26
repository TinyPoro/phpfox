<?php

/* @Base/layout.html */
class __TwigTemplate_7b4d1ad4cec8a2ffca37e4a9ac33a3d912148bdde94a7d2aa41f9babdda01d71 extends Core\View\Base
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
        echo ($context["content"] ?? null);
    }

    public function getTemplateName()
    {
        return "@Base/layout.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Base/layout.html", "/Applications/MAMP/htdocs/phpfox4.7/PF.Base/views/layout.html");
    }
}
