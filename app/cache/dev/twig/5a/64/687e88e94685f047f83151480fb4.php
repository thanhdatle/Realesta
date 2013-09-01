<?php

/* ScanBundle:MapBox:mapboxhome.html.twig */
class __TwigTemplate_5a64687e88e94685f047f83151480fb4 extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>Realesta - A powerful housing system</title>
    <meta name=\"viewport\" content=\"width=device-width\">

    <link rel=\"stylesheet\" href=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\" ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mystyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/escape-icons.css"), "html", null, true);
        echo " \">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700|Oswald:700' rel='stylesheet' type='text/css'>
    <link rel=\"shortcut icon\" href=\"/static/img/favicon.png\" >

    <script type=\"text/javascript\" src=\"//use.typekit.net/dzw0ehp.js\"></script>
    <script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
  
    <script type=\"text/javascript\">  var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-38903245-1']); _gaq.push(['_trackPageview']);  (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();  </script>

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script>window.jQuery || document.write('<script src=\"/static/js/vendor/jquery-1.8.2.min.js\"><\\/script>')</script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.spritely-0.6.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hero.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 33
        echo "    <script type=\"text/javascript\">
      \$(\"#txtLocation\").on(\"input\", function(e) {
          alert('input');
      });
    </script>

    <link rel=\"stylesheet\" href=\"http://cdn.leafletjs.com/leaflet-0.6/leaflet.css\" />
      <link href='//api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.standalone.css' rel='stylesheet' />
      <!--[if lte IE 8]>
        <link rel=\"stylesheet\" href=\"http://cdn.leafletjs.com/leaflet-0.6/leaflet.ie.css\" />
      <![endif]-->
      <script src=\"http://cdn.leafletjs.com/leaflet-0.6/leaflet.js\"></script>
      <script src='//api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.standalone.js'></script>

    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colorbox.css"), "html", null, true);
        echo "\">
    <script>
        \$(document).ready(function(){
            \$(\".house-info\").colorbox({iframe:true, width:\"80%\", height:\"90%\"});
        });
    </script>

    <style>
        body { margin:0px; padding:0px; }
        #map {
            
            width: 100%;
            height: 90%;
            position: absolute;
            
            left: 0px;
            z-index: 0;
            
            
            
            margin-top: 43px;
            margin-left: 0px;
            z-index: 0;

        }
/*        .searchbox {
            min-height: 40px !important;
        }
        .input-append {
            border: 1px solid #ccc;
            background-color: #e3e3e3;
            padding: 10px;
            border-radius: 5px;
            min-height: 40px !important;
        }
*/    </style>

    <style>
        /*css for mapbox*/
        body{font:12px/1.2 Verdana, sans-serif; padding:0 10px;}
        a:link, a:visited{text-decoration:none; color:#416CE5; border-bottom:1px solid #416CE5;}
        h2{font-size:13px; margin:15px 0 0 0;}
    </style>

    <title>Realesta - A powerful housing system</title>

</head>
<body>
<p><a id=\"iframe\" class='iframe' href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("mapbox_detail");
        echo "\" style=\"display:none;\">Outside Webpage (Iframe)</a></p>

<div id=\"wrapper\">
        <header>
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
        // line 150
        echo "                  ";
        // line 151
        echo "              ";
        // line 152
        echo "
              <button class=\"abt-search-btn\">Go</button>
              
        </div>
      </div>
      </form>
    </header>

    <div id=\"geocode-error\"></div>
    <div id='map'></div>

</div>




<script type='text/javascript'>
    var map = L.mapbox.map('map', 'myticmoon.map-1hexx4xe');
    map.setView([1.352, 103.819], 11);

    var marker1 = L.circle([1.303750, 103.814836], 250, {
        color: '#red',
        fillColor: '#f03',
        fillOpacity: 0
    }).addTo(map);

    marker1.on(\"click\", function() {
        \$(\"#iframe\").trigger('click');
    });

    var image1= L.imageOverlay('";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/house2.png"), "html", null, true);
        echo "', [[1.305750, 103.811836], [1.301750, 103.817836]], {opacity: 1});
    image1.addTo(map);
    image1.bringToBack();

    var marker2 = L.circle([1.320333, 103.80032], 250, {
        color: '#red',
        fillColor: '#g43',
        fillOpacity: 0.0
    }).addTo(map);

    marker2.on(\"click\", function() {
        \$(\"#iframe\").trigger('click');
    });

    var image2= L.imageOverlay('";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/house3.png"), "html", null, true);
        echo "', [[1.318333, 103.79832], [1.322333, 103.80332]], {opacity: 1});
    image2.addTo(map);
    image2.bringToBack();


    var marker3 = L.circle([1.315333, 103.78532], 250, {
        color: '#red',
        fillColor: '#b43',
        fillOpacity: 0
    }).addTo(map);

    marker3.on(\"click\", function() {
        \$(\"#iframe\").trigger('click');
    });

    var image3= L.imageOverlay('";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/house7.png"), "html", null, true);
        echo "', [[1.313333, 103.78232], [1.317333, 103.78732]], {opacity: 1});
    image3.addTo(map);
    image3.bringToBack();

    var marker4 = L.circle([1.332333, 103.79532], 250, {
        color: '#red',
        fillColor: '#m43',
        fillOpacity: 0
    }).addTo(map);

    marker4.on(\"click\", function() {
        \$(\"#iframe\").trigger('click');
    });

    var image4= L.imageOverlay('";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/house5.png"), "html", null, true);
        echo "', [[1.330333, 103.79232], [1.334333, 103.79732]], {opacity: 1});
    image4.addTo(map);
    image4.bringToBack();

    var marker5 = L.circle([1.310333, 103.82032], 250, {
        color: '#red',
        fillColor: '#y43',
        fillOpacity: 0
    }).addTo(map);

    marker5.on(\"click\", function() {
        \$(\"#iframe\").trigger('click');
    });

    var image5= L.imageOverlay('";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/house6.png"), "html", null, true);
        echo "', [[1.308333, 103.81732], [1.312333, 103.82232]], {opacity: 1});
    image5.addTo(map);
    image5.bringToBack();

    \$(document).ready(function(){
        \$(\".iframe\").colorbox({iframe:true, width:\"80%\", height:\"90%\"});
    });
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "ScanBundle:MapBox:mapboxhome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 239,  297 => 225,  280 => 211,  262 => 196,  245 => 182,  213 => 152,  211 => 151,  209 => 150,  153 => 96,  102 => 48,  98 => 47,  82 => 33,  78 => 31,  74 => 30,  70 => 29,  65 => 28,  63 => 27,  61 => 26,  59 => 25,  55 => 23,  50 => 21,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
