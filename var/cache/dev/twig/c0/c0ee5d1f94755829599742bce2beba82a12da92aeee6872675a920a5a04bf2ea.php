<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1a8d71c0c4f5835f603dbdbe3acdd350335b868dd5e3c958ae2e6cb7d8d266db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1805e521882dad8c072a86a4e19b38f4e778c170f20617714a63d3e38a76ab3 = $this->env->getExtension("native_profiler");
        $__internal_a1805e521882dad8c072a86a4e19b38f4e778c170f20617714a63d3e38a76ab3->enter($__internal_a1805e521882dad8c072a86a4e19b38f4e778c170f20617714a63d3e38a76ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1805e521882dad8c072a86a4e19b38f4e778c170f20617714a63d3e38a76ab3->leave($__internal_a1805e521882dad8c072a86a4e19b38f4e778c170f20617714a63d3e38a76ab3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2d235bb6d8c18ad9195399a0e00b4d14e196f9a8b51ff5599e6e9d1cbbc6101 = $this->env->getExtension("native_profiler");
        $__internal_e2d235bb6d8c18ad9195399a0e00b4d14e196f9a8b51ff5599e6e9d1cbbc6101->enter($__internal_e2d235bb6d8c18ad9195399a0e00b4d14e196f9a8b51ff5599e6e9d1cbbc6101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e2d235bb6d8c18ad9195399a0e00b4d14e196f9a8b51ff5599e6e9d1cbbc6101->leave($__internal_e2d235bb6d8c18ad9195399a0e00b4d14e196f9a8b51ff5599e6e9d1cbbc6101_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57ea446866a6e69efe0caa17564efd19d817a4960d76a753e56e91dd5cbddf36 = $this->env->getExtension("native_profiler");
        $__internal_57ea446866a6e69efe0caa17564efd19d817a4960d76a753e56e91dd5cbddf36->enter($__internal_57ea446866a6e69efe0caa17564efd19d817a4960d76a753e56e91dd5cbddf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_57ea446866a6e69efe0caa17564efd19d817a4960d76a753e56e91dd5cbddf36->leave($__internal_57ea446866a6e69efe0caa17564efd19d817a4960d76a753e56e91dd5cbddf36_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_513d6308e1a965b2eaa149cd34e5b7b372d47bc87e507804c3a8a120e5c71a10 = $this->env->getExtension("native_profiler");
        $__internal_513d6308e1a965b2eaa149cd34e5b7b372d47bc87e507804c3a8a120e5c71a10->enter($__internal_513d6308e1a965b2eaa149cd34e5b7b372d47bc87e507804c3a8a120e5c71a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_513d6308e1a965b2eaa149cd34e5b7b372d47bc87e507804c3a8a120e5c71a10->leave($__internal_513d6308e1a965b2eaa149cd34e5b7b372d47bc87e507804c3a8a120e5c71a10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
