/**
 * TODO
 * Resaltar sucursal seleccionada enl mapa
 * Eliminar doble marcador
 * Marcadores se cierren al hacer click en otro
 * **/
var map;
var ZOOM=16;
$(document).ready(
    function () {
        $(".muestra_sucursales").click(function (e) {
            e.preventDefault();
            query=$(this).attr("href");
            $.getJSON(query).
            done(function (data) {
                data;
                $("#despliega-sucursal .panel-heading").html("<h2>"+data.nombre+"</h2>");
                $("#despliega-sucursal .panel-body").stop().html(
                    "<p>"+data.direccion+"</br>"+
                    "Telefono:"+data.telefono+
                    "</p>").hide(0).slideDown("slow","linear");
                muestra_sucursal(data.direccion);
            })
        });
        $.getJSON("get_sucursal.php?all").done(function (data) {
            data.data.forEach(function (e) {
                dibuja_marcador(e);
            });
        });
        $(".muestra_sucursales")[0].click();
        $("#muestra-mas-cercana").click(get_mas_cercana);
    });
function dibuja_marcador(sucursal) {
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': sucursal.direccion}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
                title:sucursal.nombre
            });
            marker.info = new google.maps.InfoWindow({
                content: "<b>"+sucursal.nombre+"</b>"+"</br><p>"+sucursal.direccion+"</p>"
            });
            google.maps.event.addListener(marker, 'click', function() {
                marker.info.open(map, marker);
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}
function get_mas_cercana()
{
    $.getJSON("get_sucursal.php?all").done(function (data) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                map.setCenter(pos);
                map.setZoom(ZOOM);
                locations=[];
                data.data.forEach(function (sucursal) {
                    geocoder.geocode({'address': sucursal.direccion}, function(results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            locations.push(results[0].geometry.location);
                            if(locations.length==data.data.length)
                            {
                                var min=Number.POSITIVE_INFINITY;
                                var closest_location;
                                locations.forEach(function (location) {
                                    distance=google.maps.geometry.spherical.computeDistanceBetween(location,
                                        pos);
                                    if(distance<min){
                                        min=distance;
                                        closest_location=location;
                                        console.log("min",distance);
                                    }
                                });
                                muestra_ruta(pos,closest_location);
                            }
                        } else {
                            alert('Geocode was not successful for the following reason: ' + status);
                        }
                    });
                });
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });

        } else {
            handleLocationError(false, infoWindow, map.getCenter());
        }
    });

}
function muestra_ruta(origen,destino)
{
    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);
    var request = {
        origin: origen,
        destination: destino,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            map.setOptions({zoomControl:true,
                            draggable:true,
                clickableIcons:true});
        }
    });
}
function muestra_sucursal(direccion)
{
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': direccion}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            map.setZoom(ZOOM);
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}
