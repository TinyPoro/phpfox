<?php

/* admincp.html */
class __TwigTemplate_e800d5cfbdc7278f34f7f6d8c8f6c5c738297698097864342c5a96775acf2de6 extends Core\View\Base
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
        if (($context["clients"] ?? null)) {
            // line 2
            echo "<div class=\"panel panel-default\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-admin\" >
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width:20px\"></th>
\t\t\t\t<th>";
            // line 8
            echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("ID"));
            echo "</th>
\t\t\t\t<th>";
            // line 9
            echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Secret Key"));
            echo "</th>
\t\t\t\t<th>";
            // line 10
            echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Name"));
            echo "</th>
\t\t\t\t<th>";
            // line 11
            echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Active"));
            echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 16
                echo "\t\t\t<tr class=\"";
                if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                    echo " tr";
                }
                echo "\">
\t\t\t\t<td class=\"t_center\">
\t\t\t\t\t<a href=\"#\" class=\"js_drop_down_link\"></a>
\t\t\t\t\t<div class=\"link_menu\">
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
                // line 21
                echo call_user_func_array($this->env->getFunction('url')->getCallable(), array("/restful_api/admincp/client", array("id" => $this->getAttribute($context["client"], "client_id", array()))));
                echo "\" class=\"popup\">";
                echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Edit"));
                echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
                // line 22
                echo call_user_func_array($this->env->getFunction('url')->getCallable(), array("/restful_api/admincp/client/delete", array("id" => $this->getAttribute($context["client"], "client_id", array()))));
                echo "\" class=\"sJsConfirm\">";
                echo call_user_func_array($this->env->getFunction('_p')->getCallable(), array("Delete"));
                echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td>";
                // line 26
                echo $this->getAttribute($context["client"], "client_id", array());
                echo "</td>
\t\t\t\t<td>";
                // line 27
                echo $this->getAttribute($context["client"], "client_secret", array());
                echo "</td>
\t\t\t\t<td>";
                // line 28
                echo $this->getAttribute($context["client"], "client_name", array());
                echo "</td>
\t\t\t\t<td class=\"t_center\">
\t\t\t\t\t<div class=\"js_item_is_active\"";
                // line 30
                if ($this->getAttribute($context["client"], "is_active", array())) {
                } else {
                    echo " style=\"display:none;\"";
                }
                echo ">
\t\t\t\t\t\t<a href=\"#?call=restful_api.toggleClient&amp;id=";
                // line 31
                echo $this->getAttribute($context["client"], "client_id", array());
                echo "&amp;active=0\" class=\"js_item_active_link\" title=\"{_p var='Deactivate'}\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"js_item_is_not_active\"";
                // line 33
                if ($this->getAttribute($context["client"], "is_active", array())) {
                    echo " style=\"display:none;\"";
                }
                echo ">
\t\t\t\t\t\t<a href=\"#?call=restful_api.toggleClient&amp;id=";
                // line 34
                echo $this->getAttribute($context["client"], "client_id", array());
                echo "&amp;active=1&amp;\" class=\"js_item_active_link\" title=\"{_p var='Activate'}\"></a>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
";
        } else {
            // line 44
            echo "<div class=\"alert alert-empty\">
\tThere are no items found.
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "admincp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  141 => 39,  122 => 34,  116 => 33,  111 => 31,  104 => 30,  99 => 28,  95 => 27,  91 => 26,  82 => 22,  76 => 21,  65 => 16,  48 => 15,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admincp.html", "/Applications/MAMP/htdocs/phpfox4.7/PF.Site/Apps/core-restful-api/views/admincp.html");
    }
}
