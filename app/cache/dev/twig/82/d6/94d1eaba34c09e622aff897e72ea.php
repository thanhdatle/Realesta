<?php

/* ScanBundle:MapBox:mapboxdetail.html.twig */
class __TwigTemplate_82d694d1eaba34c09e622aff897e72ea extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]--><head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>Realesta - A powerful housing system</title>
    <meta name=\"viewport\" content=\"width=device-width\">

    <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mystyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/escape-icons.css"), "html", null, true);
        echo " \">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700|Oswald:700' rel='stylesheet' type='text/css'>
    <link rel=\"shortcut icon\" href=\"/static/img/favicon.png\" >

    <script type=\"text/javascript\" src=\"//use.typekit.net/dzw0ehp.js\"></script>
    <script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
  
    <script type=\"text/javascript\">  var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-38903245-1']); _gaq.push(['_trackPageview']);  (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();  </script>

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script>window.jQuery || document.write('<script src=\"/static/js/vendor/jquery-1.8.2.min.js\"><\\/script>')</script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.spritely-0.6.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        // line 30
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hero.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 35
        echo "    <script type=\"text/javascript\">
      \$(\"#txtLocation\").on(\"input\", function(e) {
          alert('input');
      });
    </script>

    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\">
    <script>
        \$(document).ready(function(){
            \$(\".house-info\").colorbox({iframe:true, width:\"80%\", height:\"90%\"});
        });
    </script>

  </head>


  <body>
  \t<div id=\"wrapper\">
\t\t<header>
      <div id=\"header-overlay\"></div>
      <form id=\"header-bar\" method=\"get\" action=\"/\">
        <div class=\"container\">
        <h1><a href=\"/\">Realesta</a></h1>
        <div id=\"airport\" class=\"dropdown alpha-one\">
          <h2>Search at</h2>
          <div class=\"display\">
              <div class=\"flip\">
                <div class=\"flip-content\">S</div>
              </div>
              <div class=\"flip\">
                <div class=\"flip-content\">I</div>
              </div>
              <div class=\"flip\">
                <div class=\"flip-content\">N</div>
              </div>
          </div>
         
          <ul>
          
            <li>
            <input type=\"radio\" name=\"a\" id=\"airport-LON\" value=\"LON\" />
            <label for=\"airport-LON\">London</label>
            <span class=\"icon-check\"></span>
            </li>
          
            <li>
            <input type=\"radio\" name=\"a\" id=\"airport-LHR\" value=\"LHR\"  />
            <label for=\"airport-LHR\">Tokyo</label>
            <span class=\"icon-check\"></span>
            </li>
          
            <li>
            <input type=\"radio\" name=\"a\" id=\"airport-LGW\" value=\"LGW\"  />
            <label for=\"airport-LGW\">HCM City</label>
            <span class=\"icon-check\"></span>
            </li>
          
            <li class=\"dropdown-link\">
              <a href=\"#other\" id=\"show-sentence-2\">Other city</a>
            </li>
          </ul>
        </div>
        
        <div id=\"dates\" style=\"width:auto;\">
        
              <h2>Location</h2>
              <input class=\"abt-search-box\" name=\"txtLocation\" id=\"txtLocation\" type=\"text\" placeholder=\"Location...\">
              
              ";
        // line 105
        echo "                  ";
        // line 106
        echo "              ";
        // line 107
        echo "
              <button class=\"abt-search-btn\">Go</button>
              
        </div>
      </div>
      </form>

\t\t</header>
\t\t

<div id=\"destination\">
\t<div class=\"close-btn\"><a href=\"/\" data-analytics=\"DetailLink, back_home\">Check our <strong>top destinations</strong></a></div>
\t<div id=\"detail-container\">
\t\t<script type=\"text/javascript\" src=\"/static/js/destination.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/static/js/passengers.js\"></script>
\t\t
\t\t<div id=\"highlighted-flight\">
\t\t\t
\t\t\t\t


<!--FLIGHT-->
<div class=\"flight\">
\t<div class=\"price\">&pound;<strong>305</strong></div>

\t<div class=\"in\">
\t\t<div class=\"departure\">
\t\t\tFriday 30, 8:10PM <strong>Heathrow (LHR)</strong>
\t\t</div>
\t\t<div class=\"duration\">
\t\t\t<strong>1h 10m</strong>
\t\t</div>
\t</div>
\t
\t<div class=\"out\">
\t\t<div class=\"departure\">
\t\t\t6:15PM <strong>Charles de<br>Gaulle (CDG)</strong>
\t\t</div>
\t\t<div class=\"duration\">
\t\t\t<strong>1h 15m</strong>
\t\t</div>
\t</div>

    <div class=\"passengers\">
        <div class=\"minus\"> </div>
        <div class=\"people\">
            <div class=\"people-number\">
                <p></p>
            </div>
        </div>
        <div class=\"plus\"> </div>
    </div>
\t
\t<div class=\"check\">
\t\t<a href=\"/redirection/105/997916/?a=LON&amp;w=T&amp;p=W&amp;i1=2&amp;i2=1\" target=\"_blank\" data-analytics=\"CheckFlightLinks, link_highlighted, Moret\">Check flights<span></a>
\t</div>
\t
\t<div class=\"clearfix\"></div>
</div>
<!--end FLIGHT-->

\t\t\t
\t\t</div>
\t\t
\t
\t\t
\t\t<div id=\"dest-title\">
\t\t\t<h1>Moret <strong>France</strong></h1>
\t\t\t<p>This weekend <strong>August 30<em>th</em> - 1<em>st</em></strong></p>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t
\t\t<div class=\"weather-bar\">
\t\t\t<ul class=\"col-3\">
\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<span class=\"day\"><strong>Friday</strong>August 30</span>
\t\t\t\t\t
\t\t\t\t\t\t<span class=\"weather\"><span class=\"icon-partlycloudy\"></span> <strong class=\"hot\">25°</strong><em class=\"separator\">/</em><em class=\"cold\">11°</em></span>
\t\t\t\t\t\t<span class=\"vert-bar\"></span>
\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<span class=\"day\"><strong>Saturday</strong>August 31</span>
\t\t\t\t\t
\t\t\t\t\t\t<span class=\"weather\"><span class=\"icon-partlycloudy\"></span> <strong class=\"hot\">24°</strong><em class=\"separator\">/</em><em class=\"cold\">10°</em></span>
\t\t\t\t\t\t<span class=\"vert-bar\"></span>
\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<span class=\"day\"><strong>Sunday</strong>September 01</span>
\t\t\t\t\t
\t\t\t\t\t\t<span class=\"weather\"><span class=\"icon-clear\"></span> <strong class=\"hot\">20°</strong><em class=\"separator\">/</em><em class=\"cold\">8°</em></span>
\t\t\t\t\t\t<span class=\"vert-bar\"></span>
\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t\t
\t\t\t</ul>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div id=\"destination-preview\" class=\"hero\" style=\"width:100%; height:100%;\">
\t\t\t<img style=\"width:100%; height:100%;\" src=\"img/17.jpg\" alt=\"\" />
\t\t</div>
\t\t
\t\t<div class=\"flights\">
\t\t\t
\t\t\t\t<div id=\"flights-wrapper\">
\t\t\t\t\t
\t\t\t\t\t\t


<!--FLIGHT-->
<div class=\"item \">
\t<div class=\"price\">&pound;<strong>305</strong> <span>total / person</span></div>

\t<!--DEPARTURE-->
\t<div class=\"info-departure\">
\t\t<div class=\"in\">
\t\t\tFriday 30, 8:10PM <strong>Heathrow (LHR)</strong>
\t\t</div>
\t\t<div class=\"duration\">
\t\t\t<strong>1h 10m</strong>
\t\t</div>
\t\t<div class=\"out\">
\t\t\t10:20PM <em class=\"late\"></em><strong>Charles de<br>Gaulle (CDG)</strong>
\t\t</div>
\t
\t\t<div class=\"info\" data-tooltip>
\t\t\t
\t\t\t<a href=\"#flight-transit\"  data-smoothscroll=\"#flight-transit\">i</a>
\t\t\t<div class=\"info-popup tooltip\">
\t\t\t\t<h2>Transit to Moret</h2>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p>These transit times are estimates, so you can't hold it against us if your journey takes a bit longer</p>
\t\t\t\t\t<p><a href=\"#flight-transit\"  data-smoothscroll=\"#flight-transit\" class=\"white-btn\">See transit instructions</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"place\">
\t\t\taround 11:55PM <em class=\"late\"></em><strong>Moret</strong>
\t\t</div>
\t
\t\t<div class=\"clearfix\"></div>
\t</div>

\t<!--DEPARTURE-->
\t<div class=\"info-arrival\">
\t
\t\t<div class=\"place\">
\t\t\tSunday 01 <strong>Moret</strong>
\t\t</div>
\t\t<div class=\"info\" data-tooltip>
\t\t\t
\t\t\t<a href=\"#flight-transit\"  data-smoothscroll=\"#flight-transit\">i</a>
\t\t\t<div class=\"info-popup tooltip\">
\t\t\t\t<h2>Transit to Moret</h2>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p>These transit times are estimates, so you can't hold it against us if your journey takes a bit longer</p>
\t\t\t\t\t<p><a href=\"#flight-transit\" data-smoothscroll=\"#flight-transit\" class=\"white-btn\" data-analytics=\"DetailPage, Flight_info_button, Moret\">See transit instructions</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t
\t\t<div class=\"in\">
\t\t\t6:15PM <strong>Charles de<br>Gaulle (CDG)</strong>
\t\t</div>
\t\t<div class=\"duration\">
\t\t\t<strong>1h 15m</strong>
\t\t</div>
\t\t<div class=\"out\">
\t\t\t6:30PM <em class=\"late\"></em><strong>Heathrow (LHR)</strong>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>


    <div class=\"passengers\">
        <div class=\"plus\"> </div>
        <div class=\"people\">
            <div class=\"people-number\">
                <p></p>
            </div>
        </div>
        <div class=\"minus\"> </div>
    </div>
\t<div class=\"check\">
\t\t<a href=\"/redirection/105/997916/?a=LON&amp;w=T&amp;p=W&amp;i1=2&amp;i2=1\" target=\"_blank\" data-analytics=\"CheckFlightLinks, link_1, Moret\">Check flights<span>on <em>tripsta.co.uk</em></span></a>
\t</div>
\t
\t<div class=\"clearfix\"></div>
</div>
<!--end FLIGHT-->

\t\t\t\t\t
\t\t\t\t\t\t
\t
\t<div class=\"clearfix\"></div>
</div>
<!--end FLIGHT-->

\t<!--FEEDBACK-->
\t<div id=\"getsat-widget-4829\"></div>
\t<script type=\"text/javascript\" src=\"https://loader.engage.gsfn.us/loader.js\"></script>
\t<script type=\"text/javascript\">if (typeof GSFN !== \"undefined\"){ GSFN.loadWidget(4829,{\"containerId\":\"getsat-widget-4829\"});}</script>
\t<div id=\"highlight-wrapper\"></div>
\t<!--end FEEDBACK-->
  </body>

    <footer style=\"margin-top:30px;\">
    <div class=\"container\">
      <p id=\"weather-source\">Realesta data by <a href=\"http://www.wunderground.com/\" target=\"_blank\" data-analytics=\"Outbound Links, Wunderground\">wunderground.com</a></p>
      <p id=\"follow-us\">Follow <strong>Realesta</strong> updates on <a href=\"https://twitter.com/escapeflight\" class=\"white-btn\" target=\"_blank\" data-analytics=\"Outbound Links, Twitter\">Twitter</a></p>
      
      ";
        // line 329
        echo "        ";
        // line 330
        echo "        ";
        // line 331
        echo "          ";
        // line 332
        echo "          ";
        // line 333
        echo "          ";
        // line 334
        echo "          ";
        // line 335
        echo "          ";
        // line 336
        echo "        ";
        // line 337
        echo "        
        ";
        // line 339
        echo "      ";
        // line 340
        echo "      
    </div>
    
    <div id=\"copy\">
      <div class=\"container\">
        <div id=\"copy-right\">
          <a href=\"/terms/\">Terms and Conditions</a>
          <span class=\"separator\">|</span>
          <a href=\"/privacy/\">Privacy</a>
          <span class=\"separator\">|</span>
          ";
        // line 351
        echo "        </div>
        
        <div id=\"copyright\">&copy; 2013 Realesta <span id=\"rights\">We rock team, NTU. All rights reserved.</span></div>
        
        <div class=\"clear\"></div>
      </div>
    </div>
    </footer>
</html>";
    }

    public function getTemplateName()
    {
        return "ScanBundle:MapBox:mapboxdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 351,  409 => 340,  407 => 339,  404 => 337,  402 => 336,  400 => 335,  398 => 334,  396 => 333,  394 => 332,  392 => 331,  390 => 330,  388 => 329,  165 => 107,  163 => 106,  161 => 105,  96 => 42,  92 => 41,  84 => 35,  80 => 33,  76 => 32,  72 => 31,  67 => 30,  65 => 29,  63 => 28,  61 => 27,  57 => 25,  52 => 23,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
