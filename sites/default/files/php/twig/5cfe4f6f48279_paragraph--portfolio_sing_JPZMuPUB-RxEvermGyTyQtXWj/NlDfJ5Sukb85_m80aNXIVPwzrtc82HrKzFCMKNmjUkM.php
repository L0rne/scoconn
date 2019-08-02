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

/* themes/yg_agency/templates/paragraph--portfolio_single.html.twig */
class __TwigTemplate_a1d5a6a84d2ab0a7e53fed277c39351f8a2afac18ee6c1c5bd238c52fb5a0b4a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<div class=\"col-md-4 col-sm-6 portfolio-item\">
  <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
        echo "\">
    <div class=\"portfolio-hover\">
      <div class=\"portfolio-hover-content\">
        <i class=\"fa fa-plus fa-3x\"></i>
      </div>
    </div>
    <img class=\"img-fluid\" src=\"";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_portfolio_image", []), 0, [])), "html", null, true);
        echo "\" alt=\"\">
  </a>
  <div class=\"portfolio-caption\">
    <h4>";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
        echo "</h4>
    <p class=\"text-muted\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_abstract", []), 0, [])), "html", null, true);
        echo "</p>
  </div>
</div>

<div class=\"portfolio-modal modal fade\" id=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 col-md-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2>";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
        echo "</h2>
                  <p class=\"item-intro text-muted\">";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_abstract", []), 0, [])), "html", null, true);
        echo "</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_portfolio_image", []), 0, [])), "html", null, true);
        echo "\" alt=\"\">
                  <p>";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_description", []), 0, [])), "html", null, true);
        echo "</p>
                  <ul class=\"list-inline\">
                    <li>Client: ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_client", [])), "html", null, true);
        echo "</li>
                    <li>Category: ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_category", [])), "html", null, true);
        echo "</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fa fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/yg_agency/templates/paragraph--portfolio_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  117 => 34,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  84 => 16,  77 => 12,  73 => 11,  67 => 8,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_agency/templates/paragraph--portfolio_single.html.twig", "/home/lorne/htdocs/scoconn/docroot/themes/yg_agency/templates/paragraph--portfolio_single.html.twig");
    }
}
