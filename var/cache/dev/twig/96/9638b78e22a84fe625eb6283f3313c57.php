<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* movies/edit.html.twig */
class __TwigTemplate_654ae752b95558fbb66888327123f97d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/edit.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "movies/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"w-4/5 m-auto text-left\">
        <div class=\"py-15\">
            <h1 class=\"text-6xl\">
                Edit Movie Review
            </h1>
        </div>
    </div>

    <div class=\"w-4/5 m-auto pt-20\">
        <form
                action=\"/movies\"
                method=\"POST\"
                enctype=\"multipart/form-data\">
            <input
                    type=\"text\"
                    name=\"title\"
                    value=\"Review title\"
                    class=\"bg-transparent block border-b-2 w-full h-20 text-6xl outline-none\">

            <textarea
                    name=\"description\"
                    placeholder=\"Review Description\"
                    class=\"py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos veritatis, omnis dolores error ad molestias cum accusantium odit doloremque ratione illo architecto commodi placeat deleniti provident eveniet cupiditate eius at.</textarea>

            <button
                    type=\"submit\"
                    class=\"uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl\">
                Submit Review
            </button>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "movies/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
    <div class=\"w-4/5 m-auto text-left\">
        <div class=\"py-15\">
            <h1 class=\"text-6xl\">
                Edit Movie Review
            </h1>
        </div>
    </div>

    <div class=\"w-4/5 m-auto pt-20\">
        <form
                action=\"/movies\"
                method=\"POST\"
                enctype=\"multipart/form-data\">
            <input
                    type=\"text\"
                    name=\"title\"
                    value=\"Review title\"
                    class=\"bg-transparent block border-b-2 w-full h-20 text-6xl outline-none\">

            <textarea
                    name=\"description\"
                    placeholder=\"Review Description\"
                    class=\"py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos veritatis, omnis dolores error ad molestias cum accusantium odit doloremque ratione illo architecto commodi placeat deleniti provident eveniet cupiditate eius at.</textarea>

            <button
                    type=\"submit\"
                    class=\"uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl\">
                Submit Review
            </button>
        </form>
    </div>
{% endblock %}", "movies/edit.html.twig", "/home/dezoo/symfony_project/templates/movies/edit.html.twig");
    }
}
