<?php

/* AdminUnadBundle:Escuela:show.html.twig */
class __TwigTemplate_3052e1e935289ed3eb69f5dce0407d25ec702242d85d536557ae5584d6139bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                 <h4 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</h4>
            </div>\t\t\t<!-- /modal-header -->
            <div class=\"modal-body\">
  <table class=\"table table-bordered table-striped hidden-mobile\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sigla</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sigla"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Decano</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "decano"), "username"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "decano"), "nombres"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "decano"), "apellidos"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Secretaria Academica</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secretaria")) ? ((($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secretaria"), "nombres") . " ") . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secretaria"), "apellidos"))) : ("SIN")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("escuela");
        echo "\">
            Volver a la lista
        </a>
    </li>
    <li>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escuela_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
   
   ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "  <li>";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li> ";
        }
        // line 46
        echo "</ul>
            </div>\t\t\t<!-- /modal-body -->
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>\t\t\t<!-- /modal-footer -->
        
        <!-- /modal-dialog -->
";
    }

    public function getTemplateName()
    {
        return "AdminUnadBundle:Escuela:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  90 => 40,  129 => 64,  104 => 46,  77 => 26,  65 => 23,  100 => 56,  81 => 34,  20 => 1,  152 => 85,  146 => 68,  127 => 73,  118 => 76,  114 => 75,  53 => 18,  34 => 5,  126 => 56,  113 => 92,  479 => 308,  475 => 307,  471 => 306,  467 => 305,  463 => 304,  459 => 303,  455 => 302,  449 => 299,  431 => 287,  425 => 284,  419 => 281,  401 => 272,  395 => 269,  389 => 266,  383 => 263,  377 => 260,  353 => 239,  348 => 236,  345 => 235,  338 => 230,  331 => 21,  326 => 19,  320 => 16,  315 => 14,  311 => 13,  306 => 11,  302 => 10,  299 => 9,  296 => 8,  290 => 7,  284 => 420,  282 => 235,  277 => 232,  275 => 230,  188 => 146,  170 => 95,  160 => 130,  58 => 37,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 290,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 278,  409 => 132,  407 => 275,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 231,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 78,  132 => 51,  128 => 80,  107 => 36,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 76,  119 => 52,  102 => 63,  71 => 19,  67 => 26,  63 => 15,  59 => 14,  38 => 6,  94 => 55,  89 => 20,  85 => 33,  75 => 17,  68 => 14,  56 => 9,  87 => 58,  21 => 2,  26 => 3,  93 => 28,  88 => 38,  78 => 29,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 90,  158 => 67,  156 => 100,  151 => 63,  142 => 86,  138 => 84,  136 => 56,  121 => 73,  117 => 69,  105 => 73,  91 => 59,  62 => 23,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 28,  69 => 24,  47 => 16,  40 => 12,  37 => 24,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 75,  123 => 47,  120 => 61,  115 => 43,  111 => 66,  108 => 58,  101 => 46,  98 => 45,  96 => 43,  83 => 25,  74 => 30,  66 => 23,  55 => 21,  52 => 20,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 143,  176 => 140,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 66,  133 => 61,  130 => 41,  125 => 56,  122 => 77,  116 => 60,  112 => 59,  109 => 34,  106 => 64,  103 => 32,  99 => 37,  95 => 61,  92 => 32,  86 => 37,  82 => 35,  80 => 19,  73 => 27,  64 => 17,  60 => 22,  57 => 23,  54 => 20,  51 => 14,  48 => 19,  45 => 16,  42 => 10,  39 => 10,  36 => 12,  33 => 4,  30 => 5,);
    }
}
