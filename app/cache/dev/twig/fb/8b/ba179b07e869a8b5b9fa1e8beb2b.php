<?php

/* ScanBundle:MapBox:mapboxhome.html.twig */
class __TwigTemplate_fb8bba179b07e869a8b5b9fa1e8beb2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pagecolor' => array($this, 'block_pagecolor'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    <script src='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.js'></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobile-1.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBZe9ftqbsTOChqaoGsWOBb-G06ydFRDqE&v=3.exp&sensor=false&libraries=places\"></script>
    <script>
//        \$(document).on(\"pageshow\", \"#mapboxhome\", function(){
        \$(document).ready(function() {
            \$(\"#searchButton\").click( function(e){
                alert('search button is clicked');

                var location = \$('#txtLocation').val();
                location = location.replace(\" \",\"+\");
                var query = location;
//                \$.ajax({
//                    url: 'http://open.mapquestapi.com/nominatim/v1/search?format=json&json_callback=callback&&limit=1&q=' + query,
//                    dataType: 'jsonp',
//                    jsonpCallback: 'callback',
//                    jsonpCallbackName: 'callback',
//                    success: success
//                });

                \$.ajax({ url:'http://maps.googleapis.com/maps/api/geocode/json?address=bugis+singapore&sensor=true',
                    success: function(data){
                        alert(data.results[0].geometry.location.lat);
                        /*or you could iterate the components for only the city and state*/
                        map.setView([data.results[0].geometry.location.lat, data.results[0].geometry.location.long], 15);
                    }
                });

                function success(resp){
                    alert('the ajax call to google api is successful');
                    alert('success');
                }

                e.preventDefault();
            });
            \$(\"#txtLocation\").on(\"input\", function(e) {
                var location = \$(this).val();
//                showFilterOption(false);

                if( location.length >= 1 ) {
                    //\$(\".reset\").show();
                    \$(\".listview\").show();
                    suggest(location);
                } else {
                    \$(\".listview\").hide();
                    //\$(\".reset\").hide();
                    //animateHome();
                }
            }).on(\"focus\", function(e) {
                        //showFilterOption(false);
                        \$(\".listview\").show();
                    });

            \$('#current_location').on('click', function(e) {
                e.preventDefault();
                getCurrentLocation();
            });
        });
            function suggest(address) {

            var tag = ['postal_code', 'geocode'];

            service = new google.maps.places.AutocompleteService();

            //service.getPlacePredictions({ input: address, types: ['geocode'], componentRestrictions: {country: 'de'} }, function(predictions, status) {
            service.getPlacePredictions({ input: address, types: ['geocode'], componentRestrictions: {country: 'sg'} }, function(predictions, status) {
                if (status != google.maps.places.PlacesServiceStatus.OK) {
                    return;
                } else {
                    var html = '<li data-icon=\"false\"><a id=\"current_location\">Get current location...</a></li>';
                    \$('#suggestions').html('');

                    for( var i = 0; i < predictions.length; i++ ) {
                        if( predictions[i].types && predictions[i].types.length > 0 ) {
                            for( var j = 0; j < predictions[i].types.length; j++ ) {
                                if( tag.indexOf(predictions[i].types[j]) > 0 ) {
                                    html += '<li data-icon=\"false\"><a>'+predictions[i].description+'</a></li>';
                                }
                            }
                        }
                    }

                    \$('#suggestions').append(html);
                    \$('#suggestions').listview( \"refresh\" );
                    \$('#suggestions').trigger( \"updatelayout\");

                    // Bind click event to each location result
                    \$(\"#suggestions li a\").bind(\"click\", function() {
                        var address = \$(this).html();
                        \$('.results')[0].innerHTML = '';

                        if( address.indexOf('Get current location...') >= 0 ) {
                            getCurrentLocation();
                        } else {
                            // Set selected location to search box
                            \$('#txtLocation').val(address);

                            // Get number of results
                            \$.ajax({
                                url: \"/home/search\",
                                type: \"POST\",
                                data: { 'address': address },
                                success: function(msg) {
                                    var data = \$.parseJSON(msg);
                                    var curr_group = 0;
                                    var time = 100;
                                    \$('.results')[0].innerHTML = \"\";

                                    // Iterate response result
                                    \$.each(data, function(key, vals) {
                                        if( curr_group != vals.group_id ) {
                                            \$('.results').append('<div class=\"group group' + vals.group_id + '\"></div>');
                                            curr_group = vals.group_id;
                                        }
                                        setTimeout(function() { addGirl(vals.group_id, vals) }, time);
                                        time += 150;
                                    });
                                }
                            });
                            \$('.listview').hide();
                            animateResult();
                        }
                        showFilterOption(false);
                    });
                }
            });
        }
        function getCurrentLocation() {
            if(!!navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geocoder    = new google.maps.Geocoder();
                    var latlng      = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    geocoder.geocode({ 'latLng' : latlng }, function(results, status) {
                        if( status != google.maps.GeocoderStatus.OK ) {
                            return;
                        } else {
                            if( results[0] ) {
                                \$('#txtLocation').val(results[0].formatted_address);
                                \$('.listview').hide();
                                animateResult();
                            }
                        }
                    });
                });
            }
        }
    </script>
    <link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.css' rel='stylesheet' />
    <!--[if lte IE 8]>
    <link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.ie.css' rel='stylesheet'>
    <link rel=\"stylesheet\" href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <![endif]-->
    <style>
        body { margin:0; padding:0; }
        #map {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 150px;
            left: 0px;
            z-index: 0;
        }
        .searchbox {
            min-height: 40px !important;
        }
        .input-append {
            border: 1px solid #ccc;
            background-color: #e3e3e3;
            padding: 10px;
            border-radius: 5px;
            min-height: 40px !important;
        }
    </style>
</head>
<body>
<div data-theme=\"h\" data-role=\"page\" class=\"";
        // line 181
        $this->displayBlock('pagecolor', $context, $blocks);
        echo "\" id=\"mapboxhome\">
    <form action=\"return false;\" class=\"form-inline\" id=\"searchform\">
        <div class=\"input-append\">
        <input class=\"input input-xxlarge\" name=\"txtLocation\" id=\"txtLocation\" type=\"text\" placeholder=\"Search.....\" style=\"height: 35px;\">
        <button class=\"btn btn-large\" id=\"searchButton\" type=\"button\">Search</button>
        </div>
    </form>
    <table border=\"0px\" cellpadding=\"0px\" cellspacing=\"0px\" class=\"listview\">
        <tr>
            <td colspan=\"4\">
                <ul id=\"suggestions\" data-role=\"listview\" data-inset=\"true\" data-filter=\"false\" data-filter-reveal=\"true\" data-theme=\"h\">
                    <li data-icon=\"false\"><a id=\"current_location\">Get current location...</a></li>
                </ul>
            </td>
        </tr>
    </table>
    <div id=\"geocode-error\"></div>
    <div id='map'></div>
</div>
<script type='text/javascript'>
    var map = L.mapbox.map('map', 'myticmoon.map-1hexx4xe');
    map.setView([1.3, 103], 15);
</script>
</body>
</html>";
    }

    public function block_pagecolor($context, array $blocks = array())
    {
        echo "pink";
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
        return array (  211 => 181,  183 => 156,  31 => 7,  27 => 6,  20 => 1,);
    }
}
