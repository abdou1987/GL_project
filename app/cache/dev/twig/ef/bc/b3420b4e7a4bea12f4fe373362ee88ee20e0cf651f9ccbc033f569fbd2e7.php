<?php

/* abdhelloBundle:Default:index.html.twig */
class __TwigTemplate_efbcb3420b4e7a4bea12f4fe373362ee88ee20e0cf651f9ccbc033f569fbd2e7 extends Twig_Template
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
        echo "Hello 


<select name=\"sss\">
    <option>choisir nb</option>


        <option value=\"1\">   1</option>
        <option value=\"2\">   2</option>


        
    </select>

<select name=\"ss\">

 <option>choisir categorie</option>
";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userss"));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 19
            echo "
        <option value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "users"), "id"), "html", null, true);
            echo "\">   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "users"), "nom"), "html", null, true);
            echo "</option>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        
    </select>
";
    }

    public function getTemplateName()
    {
        return "abdhelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
