<?php

/* authorize.html */
class __TwigTemplate_4a1e2faf96e4a3f7f52c6224400848cd29604f720d1f93d8615c646ef450139e extends Core\View\Base
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
        $context["Form"] = $this->loadTemplate("@Theme/macro/form.html", "authorize.html", 1);
        // line 2
        echo "<form method=\"post\"  class=\"form-group\">
\t<div class=\"table_clear\">
\t\t<h1 class=\"title\">";
        // line 4
        echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Do You Authorize {{ client_name }} ?", array("client_name" => $this->getAttribute(($context["aClientInfo"] ?? null), "client_name", array()))));
        echo "</h1>
\t</div>
\t<div class=\"table_clear\">
\t\t<button type=\"submit\" name=\"authorized\" value=\"yes\" class=\"button btn-primary\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Yes"));
        echo "</button>
\t\t<button type=\"submit\" name=\"authorized\" value=\"no\" class=\"button\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("No"));
        echo "</button>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "authorize.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "authorize.html", "/Applications/MAMP/htdocs/phpfox4.7/PF.Site/Apps/core-restful-api/views/authorize.html");
    }
}
