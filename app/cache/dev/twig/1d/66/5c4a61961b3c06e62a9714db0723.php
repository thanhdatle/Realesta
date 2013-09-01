<?php

/* ScanBundle:MapBox:mapboxwelcome.html.twig */
class __TwigTemplate_1d665c4a61961b3c06e62a9714db0723 extends Twig_Template
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
        // line 103
        echo "                  ";
        // line 104
        echo "              ";
        // line 105
        echo "
              <button class=\"abt-search-btn\">Go</button>
              
        </div>
      </div>
      </form>
    </header>

    <table border=\"0px\" cellpadding=\"0px\" cellspacing=\"0px\" class=\"listview\">
        <tr>
            <td colspan=\"4\">
                <ul id=\"suggestions\" data-role=\"listview\" data-inset=\"true\" data-filter=\"false\" data-filter-reveal=\"true\" data-theme=\"h\" style=\"display:none;\">
                    <li data-icon=\"false\" style=\"display:none;\"><a id=\"current_location\">Get current location...</a></li>
                </ul>
            </td>
        </tr>
    </table>

<div id=\"home\" class=\"places\">
    <div class=\"hero\">
      <div id=\"hero-container\">


        <div class=\"slide active\">
          <a href=\"/\" class=\"thumb\" data-popup data-analytics=\"DetailLink, Marquee, Ghent\">
            <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/3.jpg"), "html", null, true);
        echo "\" class=\"hero-img\" />
          </a>
          <div class=\"slide-content\">
            <h1><br>Make decision easy<br>Because we understand you the best.</h1>
            <h2><strong class=\"city\">Binjai Crest</strong></span>apply for <strong class=\"small\"></strong><strong>2,588,888 S\$</strong></h2>
            <p><a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"yellow-btn\" data-popup data-analytics=\"DetailLink, Marquee, Ghent\">See all hottest deals in your province!</a></p>
          </div>
        </div>
      
    
      <div class=\"slide \">
        <a href=\"/scheveningen/?a=LON&amp;w=T&amp;p=H&amp;i1=6&amp;i2=2\" class=\"thumb\" data-popup data-analytics=\"DetailLink, Marquee, Scheveningen\">
            <img data-src=\"img/2.jpg\" class=\"hero-img hero-replace\" />
        </a>
        
        <div class=\"slide-content\">
            <h1>House looking after graduation?<br> we got your back<br> easy than ever.</h1>
            <h2><strong class=\"city\">HDB appartment for rent</strong> for <strong class=\"small\"></strong><strong>2000 S\$</strong></h2>
            <p><a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"yellow-btn\" data-popup data-analytics=\"DetailLink, Marquee, Scheveningen\">See all hottest deals in town!</a></p>
        </div>
      </div>
      
    
      <div class=\"slide \">
        <a href=\"/lisbon/?a=LON&amp;w=T&amp;p=H&amp;i1=6&amp;i2=2\" class=\"thumb\" data-popup data-analytics=\"DetailLink, Marquee, Lisbon\">
            <img data-src=\"img/1.jpg\" class=\"hero-img hero-replace\" />
        </a>
        
        <div class=\"slide-content\">
            <h1>Housing causes you headache? <br>It's now<br>easier than ever.</h1>
            <h2><strong class=\"city\">Michael's @ Chestnut</strong> for <strong class=\"small\"></strong><strong>3,108,000 S\$</strong></h2>
            <p><a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"yellow-btn\" data-popup data-analytics=\"DetailLink, Marquee, Lisbon\">See all hottest deals in town!</a></p>
        </div>
      </div>
      
    
      <div class=\"slide \">
        <a href=\"/leiden/?a=LON&amp;w=T&amp;p=H&amp;i1=6&amp;i2=2\" class=\"thumb\" data-popup data-analytics=\"DetailLink, Marquee, Leiden\">
            <img data-src=\"img/4.jpg\" class=\"hero-img hero-replace\" />
        </a>
        
        <div class=\"slide-content\">
            <h1>Made for local people <br>We know your need<br>and do out best <br>to meet it.</h1>
            <h2><strong class=\"city\">Mandarin Park</strong> <span class=\"icon-clear\"></span> for <strong class=\"small\"></strong><strong>6,900,000 S\$</strong></h2>
            <p><a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"yellow-btn\" data-popup data-analytics=\"DetailLink, Marquee, Leiden\">See all hottest deals in town!</a></p>
        </div>
      </div>
    </div>  
    
      
      <div class=\"hero-bullets\" style=\"position:absolute; z-index:100; color:#FFF;\">
        <ul>
          <li><a href=\"#\" rel=\"0\" class=\"active\"></a></li>
          <li><a href=\"#\" rel=\"1\" ></a></li>
          <li><a href=\"#\" rel=\"2\" ></a></li>
          <li><a href=\"#\" rel=\"3\" ></a></li>
        </ul>
      </div>
    
      <div data-smoothscroll=\"#cheapest\">
        <a href=\"#\" class=\"flip\"><span class=\"icon-big-down-arrow\"></span></a>
      </div>

    </div>


  <div class=\"container\">
    <section id=\"cheapest\">
      <h1><em>Hottest deals</em> in town</h1>
      <div class=\"display\">
        
        <div class=\"large\">
          <a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"house-info\" data-popup data-analytics=\"DetailLink, Home_Cheapest_1, Leiden\">
          <img src=\"img/5.jpg\" class=\"hero-img hero-replace\" />
          <div class=\"info\">
            <h1 class=\"city\">Binjai Crest</h1>
            <h1 class=\"country\">2,588,888 S\$</h1>
          
            <h2>3,100 sqft <strong>288.00 sqm </strong></h2>
            
          
          </div>
          <div class=\"hover\"></div>
          </a>
        </div>
        
        <div class=\"small-group\">
                    <div class=\"small money\">
                      
                      <a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"house-info\" data-popup data-analytics=\"DetailLink, Home_Cheapest_2, Scheveningen\">
                        <img src=\"img/6.jpg\" class=\"hero-img\" />
                        <div class=\"info\">
                          <h1 class=\"city\">Michael's @ Chestnut</h1>
                          <h2><strong>3,108,000 S\$</strong> on Application</h2>
                          <div class=\"additionnal\">
                            <strong>3,980 sqft / 369.75 sqm </strong> 99-year Leasehold
                          </div>
                        </div>
                        <div class=\"hover\"></div>
                      </a>
                      
                    </div>
                              
                                

                    <div class=\"small money\">
                      
                      <a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"house-info\" data-popup data-analytics=\"DetailLink, Home_Cheapest_3, Ghent\">
                        <img src=\"img/7.jpg\" class=\"hero-img\" />
                        <div class=\"info\">
                          <h1 class=\"city\">Jln Kg Chantek</h1>
                          <h2><strong>38,500,000 S\$</strong> offers</h2>
                          <div class=\"additionnal\">
                            <strong>12,000 sqft / 1,114.83 sqm </strong> Free Hold
                          </div>
                        </div>
                        <div class=\"hover\"></div>
                      </a>
                      
                    </div>
                              
                                

                    <div class=\"small money\">
                      
                      <a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"house-info\" data-popup data-analytics=\"DetailLink, Home_Cheapest_4, Bruges\">
                        <img src=\"img/8.jpg\" class=\"hero-img\" />
                        <div class=\"info\">
                          <h1 class=\"city\">Mandarin Park</h1>
                          <h2><strong>6,900,000 S\$</strong> Offers</h2>
                          <div class=\"additionnal\">
                            <strong>5,100 sqft / 473.80 sqm </strong> Freehold
                          </div>
                        </div>
                        <div class=\"hover\"></div>
                      </a>
                      
                    </div>
                              
                                

                    <div class=\"small money\">
                      
                      <a href=\"http://escapeflight.com/barcelona/?a=LON&w=T&p=W&i1=2&i2=1\" class=\"house-info\" data-popup data-analytics=\"DetailLink, Home_Cheapest_5, Lake Genval\">
                        <img src=\"img/9.jpg\" class=\"hero-img\" />
                        <div class=\"info\">
                          <h1 class=\"city\">GCB - Jalan Kampong</h1>
                          <h2><strong>12,880,000 S\$</strong> Offers</h2>
                          <div class=\"additionnal\">
                            <strong>4,100 sqft / 380.90 sqm </strong> Freehold
                          </div>
                        </div>
                        <div class=\"hover\"></div>
                      </a>
                      
                    </div>
                              
        </div>

        <a href=\"/?a=LON&amp;w=T&amp;p=M&amp;i1=6&amp;i2=2\" class=\"more\" data-analytics=\"Search, Home_Cheapest\"><strong>Show me more</strong> hot deals</a>
        </div>
    </section>

  </div>
  <!--FEEDBACK-->
  ";
        // line 296
        echo "  ";
        // line 297
        echo "  ";
        // line 298
        echo "  ";
        // line 299
        echo "  <!--end FEEDBACK-->

    <footer style=\"margin-top:30px;\">
    <div class=\"container\">
      <p id=\"weather-source\">Realesta data by <a href=\"http://www.wunderground.com/\" target=\"_blank\" data-analytics=\"Outbound Links, Wunderground\">wunderground.com</a></p>
      <p id=\"follow-us\">Follow <strong>Realesta</strong> updates on <a href=\"https://twitter.com/escapeflight\" class=\"white-btn\" target=\"_blank\" data-analytics=\"Outbound Links, Twitter\">Twitter</a></p>
      
      ";
        // line 307
        echo "        ";
        // line 308
        echo "        ";
        // line 309
        echo "          ";
        // line 310
        echo "          ";
        // line 311
        echo "          ";
        // line 312
        echo "          ";
        // line 313
        echo "          ";
        // line 314
        echo "        ";
        // line 315
        echo "        
        ";
        // line 317
        echo "      ";
        // line 318
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
        // line 329
        echo "        </div>
        
        <div id=\"copyright\">&copy; 2013 Realesta <span id=\"rights\">We rock team, NTU. All rights reserved.</span></div>
        
        <div class=\"clear\"></div>
      </div>
    </div>
    </footer>
  
  <div id=\"loading\"><div id=\"loading-animation\">Loading ...</div></div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "ScanBundle:MapBox:mapboxwelcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 329,  394 => 318,  392 => 317,  389 => 315,  387 => 314,  385 => 313,  383 => 312,  381 => 311,  379 => 310,  377 => 309,  375 => 308,  373 => 307,  364 => 299,  362 => 298,  360 => 297,  358 => 296,  190 => 130,  163 => 105,  161 => 104,  159 => 103,  96 => 42,  92 => 41,  84 => 35,  80 => 33,  76 => 32,  72 => 31,  67 => 30,  65 => 29,  63 => 28,  61 => 27,  57 => 25,  52 => 23,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
