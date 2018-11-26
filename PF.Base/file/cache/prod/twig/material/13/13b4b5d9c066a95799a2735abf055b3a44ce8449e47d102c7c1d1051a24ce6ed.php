<?php

/* @Theme/macro/form.html */
class __TwigTemplate_6f9781fbddb582b3e273c333712370e8d8ff039ea89a218f8878cf4ede63aec5 extends Core\View\Base
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
        // line 8
        echo "
";
        // line 19
        echo "
";
        // line 37
        echo "
";
        // line 51
        echo "
";
        // line 56
        echo "
";
        // line 61
        echo "
";
        // line 65
        echo "
";
    }

    // line 1
    public function getcheckbox($__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t<div class=\"form-control formCheckbox\">
\t\t<label class=\"checkbox\">
\t\t\t<input type=\"checkbox\" name=\"val[";
            // line 4
            echo $this->getAttribute(($context["params"] ?? null), "name", array());
            echo "]\" ";
            if ($this->getAttribute(($context["params"] ?? null), "value", array())) {
                echo "checked";
            }
            echo "/> ";
            echo $this->getAttribute(($context["params"] ?? null), "title", array());
            echo "
\t\t</label>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getradio($__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "\t<div class=\"form-group formRadio";
            if ($this->getAttribute(($context["params"] ?? null), "switch", array())) {
                echo " formSwitch";
            }
            echo "\">
\t\t<label>";
            // line 11
            echo $this->getAttribute(($context["params"] ?? null), "title", array());
            echo "</label>
\t\t<div>
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["params"] ?? null), "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 14
                echo "\t\t\t<label class=\"radio-inline\"><input type=\"radio\" name=\"val[";
                echo $this->getAttribute(($context["params"] ?? null), "name", array());
                echo "]\" value=\"";
                echo $context["key"];
                echo "\" ";
                if (($this->getAttribute(($context["params"] ?? null), "value", array()) == $context["key"])) {
                    echo "checked";
                }
                echo "/> ";
                echo $context["option"];
                echo "</label>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getselect($__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t<div class=\"form-group ";
            if ($this->getAttribute(($context["params"] ?? null), "multiple", array())) {
                echo "multiple";
            }
            echo "\">
\t\t";
            // line 22
            if ($this->getAttribute(($context["params"] ?? null), "title", array())) {
                // line 23
                echo "\t\t<label class=\"control-label\">";
                echo $this->getAttribute(($context["params"] ?? null), "title", array());
                echo "</label>
\t\t";
            }
            // line 25
            echo "\t\t<select class=\"form-control\" id=\"__form_";
            echo $this->getAttribute(($context["params"] ?? null), "name", array());
            echo "\" name=\"val[";
            echo $this->getAttribute(($context["params"] ?? null), "name", array());
            echo "]";
            if ($this->getAttribute(($context["params"] ?? null), "multiple", array())) {
                echo "[]";
            }
            echo "\"";
            if ($this->getAttribute(($context["params"] ?? null), "multiple", array())) {
                echo " multiple";
            }
            echo ">
\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["params"] ?? null), "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 27
                echo "\t\t\t<option value=\"";
                echo $context["key"];
                echo "\"";
                if ((twig_in_filter($context["option"], $this->getAttribute(($context["params"] ?? null), "values", array())) || ($this->getAttribute(($context["params"] ?? null), "value", array()) == $context["key"]))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $context["option"];
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</select>
\t\t";
            // line 30
            if ($this->getAttribute(($context["params"] ?? null), "info", array())) {
                // line 31
                echo "\t\t<div class=\"help-block\">
\t\t\t";
                // line 32
                echo $this->getAttribute(($context["params"] ?? null), "info", array());
                echo "
\t\t</div>
\t\t";
            }
            // line 35
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function gettext($__name__ = null, $__title__ = null, $__placeholder__ = null, $__value__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "placeholder" => $__placeholder__,
            "value" => $__value__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "\t";
            if (((null === ($context["title"] ?? null)) && (null === ($context["placeholder"] ?? null)))) {
                // line 40
                echo "\t\t";
                $context["title"] = $this->getAttribute(($context["name"] ?? null), "title", array());
                // line 41
                echo "\t\t";
                $context["placeholder"] = $this->getAttribute(($context["name"] ?? null), "placeholder", array());
                // line 42
                echo "\t\t";
                $context["name"] = $this->getAttribute(($context["name"] ?? null), "name", array());
                // line 43
                echo "\t";
            }
            // line 44
            echo "\t<div class=\"form-group\">
\t\t";
            // line 45
            if (($context["title"] ?? null)) {
                // line 46
                echo "\t\t\t<label class=\"control-label\">";
                echo ($context["title"] ?? null);
                echo "</label>
\t\t";
            }
            // line 48
            echo "\t\t<input class=\"form-control\" id=\"__form_";
            echo ($context["name"] ?? null);
            echo "\" type=\"";
            echo (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
            echo "\" name=\"val[";
            echo ($context["name"] ?? null);
            echo "]\" value=\"";
            echo ($context["value"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" />
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getemail($__name__ = null, $__title__ = null, $__placeholder__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "placeholder" => $__placeholder__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "\t";
            $context["forms"] = $this;
            // line 54
            echo "\t";
            echo $context["forms"]->gettext(($context["name"] ?? null), ($context["title"] ?? null), ($context["placeholder"] ?? null), ($context["value"] ?? null), "email");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getpassword($__name__ = null, $__title__ = null, $__placeholder__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "placeholder" => $__placeholder__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "\t";
            $context["forms"] = $this;
            // line 59
            echo "\t";
            echo $context["forms"]->gettext(($context["name"] ?? null), ($context["title"] ?? null), ($context["placeholder"] ?? null), ($context["value"] ?? null), "password");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 62
    public function getsubmit($__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "<button type=\"submit\" class=\"btn btn-primary\">";
            echo ($context["title"] ?? null);
            echo "</button>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function gettextarea($__name__ = null, $__title__ = null, $__placeholder__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "placeholder" => $__placeholder__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "\t";
            if (((null === ($context["title"] ?? null)) && (null === ($context["placeholder"] ?? null)))) {
                // line 68
                echo "\t\t";
                $context["title"] = $this->getAttribute(($context["name"] ?? null), "title", array());
                // line 69
                echo "\t\t";
                $context["placeholder"] = $this->getAttribute(($context["name"] ?? null), "placeholder", array());
                // line 70
                echo "\t\t";
                $context["maxlength"] = $this->getAttribute(($context["name"] ?? null), "maxlength", array());
                // line 71
                echo "\t\t";
                $context["name"] = $this->getAttribute(($context["name"] ?? null), "name", array());
                // line 72
                echo "\t";
            }
            // line 73
            echo "
\t<div class=\"form-group\">
\t\t";
            // line 75
            if ( !(null === ($context["title"] ?? null))) {
                // line 76
                echo "\t\t\t<label class=\"form-control\">";
                echo ($context["title"] ?? null);
                echo "</label>
\t\t";
            }
            // line 78
            echo "\t\t<textarea class=\"form-control\" id=\"__form_";
            echo ($context["name"] ?? null);
            echo "\" name=\"val[";
            echo ($context["name"] ?? null);
            echo "]\" placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"";
            if (($context["maxlength"] ?? null)) {
                echo " maxlength=\"";
                echo ($context["maxlength"] ?? null);
                echo "\"";
            }
            echo ">";
            echo ($context["value"] ?? null);
            echo "</textarea>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Theme/macro/form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 78,  446 => 76,  444 => 75,  440 => 73,  437 => 72,  434 => 71,  431 => 70,  428 => 69,  425 => 68,  422 => 67,  407 => 66,  389 => 63,  377 => 62,  359 => 59,  356 => 58,  341 => 57,  323 => 54,  320 => 53,  305 => 52,  278 => 48,  272 => 46,  270 => 45,  267 => 44,  264 => 43,  261 => 42,  258 => 41,  255 => 40,  252 => 39,  236 => 38,  220 => 35,  214 => 32,  211 => 31,  209 => 30,  206 => 29,  191 => 27,  187 => 26,  172 => 25,  166 => 23,  164 => 22,  157 => 21,  145 => 20,  128 => 16,  111 => 14,  107 => 13,  102 => 11,  95 => 10,  83 => 9,  58 => 4,  54 => 2,  42 => 1,  37 => 65,  34 => 61,  31 => 56,  28 => 51,  25 => 37,  22 => 19,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Theme/macro/form.html", "/Applications/MAMP/htdocs/phpfox4.7/PF.Base/theme/default/html/macro/form.html");
    }
}
