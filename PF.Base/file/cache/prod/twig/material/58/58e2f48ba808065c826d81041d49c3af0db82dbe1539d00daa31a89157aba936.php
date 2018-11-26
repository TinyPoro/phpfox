<?php

/* admincp_client.html */
class __TwigTemplate_bffff6701ea3e5ba5b87a170145bc7f7dc573e6189df0e31f9b6971d9291893c extends Core\View\Base
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
        $context["Form"] = $this->loadTemplate("@Theme/macro/form.html", "admincp_client.html", 1);
        // line 2
        echo "
<form method=\"post\" action=\"";
        // line 3
        echo call_user_func_array($this->env->getFunction('url')->getCallable(), array("/restful_api/admincp/client"));
        echo "\" class=\"ajax_post\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 6
        if (($context["client_id"] ?? null)) {
            // line 7
            echo "\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            echo ($context["client_id"] ?? null);
            echo "\">
\t\t\t";
        }
        // line 9
        echo "\t\t\t";
        echo $context["Form"]->gettext("client_id", "", call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Client ID")), $this->getAttribute(($context["client"] ?? null), "client_id", array()));
        echo "
\t\t\t";
        // line 10
        echo $context["Form"]->gettext("client_name", "", call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Client Name")), $this->getAttribute(($context["client"] ?? null), "client_name", array()));
        echo "
\t\t\t";
        // line 11
        echo $context["Form"]->gettext("redirect_uri", "", call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Redirect URI")), $this->getAttribute(($context["client"] ?? null), "redirect_uri", array()));
        echo "
\t\t</div>

\t\t<div class=\"panel-footer\">
\t\t\t";
        // line 15
        echo $context["Form"]->getsubmit(call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Submit")));
        echo "
\t\t</div>
\t</div>

</form>";
    }

    public function getTemplateName()
    {
        return "admincp_client.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  47 => 11,  43 => 10,  38 => 9,  32 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admincp_client.html", "/Applications/MAMP/htdocs/phpfox4.7/PF.Site/Apps/core-restful-api/views/admincp_client.html");
    }
}
