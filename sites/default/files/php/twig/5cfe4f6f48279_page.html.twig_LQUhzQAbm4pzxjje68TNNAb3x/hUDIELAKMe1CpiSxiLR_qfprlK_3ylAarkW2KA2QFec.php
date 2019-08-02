<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/yg_agency/templates/page.html.twig */
class __TwigTemplate_fd72a5bc0808ef6b817d05975bb2572e86092b0649e92861a32bfda6939d8aee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 59, "if" => 60, "block" => 77];
        $filters = ["escape" => 65];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : (""));
        // line 60
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "primary_menu", []))) {
            // line 61
            echo "  
  ";
            // line 62
            if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
                // line 63
                echo "     <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        ";
                // line 65
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        ";
                // line 70
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
                echo "
      </div>
    </nav>
      ";
            }
            // line 73
            echo "  
";
        }
        // line 75
        echo "
";
        // line 77
        $this->displayBlock('main', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 159
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 193
        echo "

";
    }

    // line 77
    public function block_main($context, array $blocks = [])
    {
        // line 78
        echo "  <div role=\"main\" class=\"js-quickedit-main-content\">
    <div class=\"\">


      ";
        // line 83
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 84
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 89
            echo "      ";
        }
        // line 90
        echo "
      ";
        // line 92
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 93
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 98
            echo "      ";
        }
        // line 99
        echo "
      ";
        // line 101
        echo "      ";
        // line 102
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 103
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 104
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 105
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 106
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : (""))];
        // line 109
        echo "      <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 112
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 113
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 116
            echo "        ";
        }
        // line 117
        echo "
        ";
        // line 119
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 120
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 123
            echo "        ";
        }
        // line 124
        echo "
        ";
        // line 126
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 127
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 130
            echo "        ";
        }
        // line 131
        echo "
        ";
        // line 133
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 134
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 137
            echo "        ";
        }
        // line 138
        echo "
        ";
        // line 140
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 144
        echo "      </div>

      ";
        // line 147
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 148
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 153
            echo "      ";
        }
        // line 154
        echo "   </div>
   </div>
";
    }

    // line 84
    public function block_header($context, array $blocks = [])
    {
        // line 85
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            
          </div>
        ";
    }

    // line 93
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 94
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 113
    public function block_highlighted($context, array $blocks = [])
    {
        // line 114
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 120
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 121
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 127
    public function block_action_links($context, array $blocks = [])
    {
        // line 128
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 134
    public function block_help($context, array $blocks = [])
    {
        // line 135
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 140
    public function block_content($context, array $blocks = [])
    {
        // line 141
        echo "          <a id=\"main-content\"></a>
          ";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 148
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 149
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 159
    public function block_footer($context, array $blocks = [])
    {
        // line 160
        echo "  <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            ";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-4\">
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 169
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
        echo "\">
                  <i class=\"fa fa-twitter\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
        echo "\">
                  <i class=\"fa fa-facebook\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
        echo "\">
                  <i class=\"fa fa-linkedin\"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            ";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_1", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/yg_agency/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 186,  355 => 179,  347 => 174,  339 => 169,  331 => 164,  325 => 160,  322 => 159,  315 => 150,  312 => 149,  309 => 148,  303 => 142,  300 => 141,  297 => 140,  290 => 135,  287 => 134,  280 => 128,  277 => 127,  270 => 121,  267 => 120,  260 => 114,  257 => 113,  250 => 95,  247 => 94,  244 => 93,  237 => 85,  234 => 84,  228 => 154,  225 => 153,  222 => 148,  219 => 147,  215 => 144,  212 => 140,  209 => 138,  206 => 137,  203 => 134,  200 => 133,  197 => 131,  194 => 130,  191 => 127,  188 => 126,  185 => 124,  182 => 123,  179 => 120,  176 => 119,  173 => 117,  170 => 116,  167 => 113,  164 => 112,  158 => 109,  156 => 106,  155 => 105,  154 => 104,  153 => 103,  152 => 102,  150 => 101,  147 => 99,  144 => 98,  141 => 93,  138 => 92,  135 => 90,  132 => 89,  129 => 84,  126 => 83,  120 => 78,  117 => 77,  111 => 193,  107 => 159,  105 => 158,  102 => 157,  100 => 77,  97 => 75,  93 => 73,  86 => 70,  78 => 65,  74 => 63,  72 => 62,  69 => 61,  67 => 60,  65 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_agency/templates/page.html.twig", "/home/lorne/htdocs/scoconn/docroot/themes/yg_agency/templates/page.html.twig");
    }
}
