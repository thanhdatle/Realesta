/**
 * Created with JetBrains PhpStorm.
 * User: MONKEY D.LUFFY
 * Date: 8/22/13
 * Time: 10:09 PM
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function() {
    $("#searchButton").click( function(e){
        var location = $('#txtLocation').val();
        location = location.replace(" ","+");
        var long = '';
        var lat = '';
        $.ajax({ url:'http://maps.googleapis.com/maps/api/geocode/json?address='+location+'&sensor=true',
            success: function(data){
                lat = data.results[0].geometry.location.lat;
                long = data.results[0].geometry.location.lng;
                map.setView([lat, long], 15);
                e.preventDefault();
            }
        });

    });
    $("#txtLocation").on("input", function(e) {
        var location = $(this).val();
//                showFilterOption(false);

        if( location.length >= 1 ) {
            //$(".reset").show();
            $(".listview").show();
            suggest(location);
        } else {
            $(".listview").hide();
            //$(".reset").hide();
            //animateHome();
        }
    }).on("focus", function(e) {
            //showFilterOption(false);
            $(".listview").show();
        });

    $('#current_location').on('click', function(e) {
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
            var html = '<li data-icon="false"><a id="current_lopcation">Get current location...</a></li>';
            $('#suggestions').html('');

            for( var i = 0; i < predictions.length; i++ ) {
                if( predictions[i].types && predictions[i].types.length > 0 ) {
                    for( var j = 0; j < predictions[i].types.length; j++ ) {
                        if( tag.indexOf(predictions[i].types[j]) > 0 ) {
                            html += '<li data-icon="false"><a>'+predictions[i].description+'</a></li>';
                        }
                    }
                }
            }

            $('#suggestions').append(html);
            $('#suggestions').listview();
            listview( "refresh" );
            $('#suggestions').trigger( "updatelayout");

            // Bind click event to each location result
            $("#suggestions li a").bind("click", function() {
                var address = $(this).html();
                //$('.results')[0].innerHTML = '';

                if( address.indexOf('Get current location...') >= 0 ) {
                    getCurrentLocation();
                } else {
                    // Set selected location to search box
                    $('#txtLocation').val(address);

                    // Get number of results
//                    $.ajax({
//                        url: "/home/search",
//                        type: "POST",
//                        data: { 'address': address },
//                        success: function(msg) {
//                            var data = $.parseJSON(msg);
//                            var curr_group = 0;
//                            var time = 100;
//                            $('.results')[0].innerHTML = "";
//
//                            // Iterate response result
//                            $.each(data, function(key, vals) {
//                                if( curr_group != vals.group_id ) {
//                                    $('.results').append('<div class="group group' + vals.group_id + '"></div>');
//                                    curr_group = vals.group_id;
//                                }
//                                setTimeout(function() { addGirl(vals.group_id, vals) }, time);
//                                time += 150;
//                            });
//                        }
//                    });
                    $('.listview').hide();
//                    animateResult();
                }
//                showFilterOption(false);
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
                        $('#txtLocation').val(results[0].formatted_address);
                        $('.listview').hide();
                        animateResult();
                    }
                }
            });
        });
    }
}