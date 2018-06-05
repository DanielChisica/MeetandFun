/**
 * Main function of the application that executes when the HTML file loads the linked script
 * with the API Key
 */
function initMap() {

    var options = { //Configuration of the div that contains the Map Application
        zoom: 8,
        center: {
            lat: 4.7110,
            lng: -74.0721
        }
    }

    var currentPosition; //Actual position of the Web browser, it is set in coordinates
    var marker1; //Initial marker fixed in the current position
    var marker2; //Second marker fixed in the current position, it has the draggable property
    var directionsService = new google.maps.DirectionsService();//DirectionsService is an object used to calculate directions
    var directionsDisplay = new google.maps.DirectionsRenderer();//DirectionsRenderer Render the results of calculated directions

    var map = new google.maps.Map(document.getElementById('map'), options);
    directionsDisplay.setMap(map); //Div of the map Application

    var panorama;

    /**
     * Adds a marker to the map, given an object with the specific coordinates
     * @param props Object with coordinates
     * @param icon String with an image location
     * @returns {google.maps.Marker} A marker displayed on the map
     */
    function addMarker(props,icon='') {
        var marker = new google.maps.Marker({
            position: props.coords,
            animation: google.maps.Animation.DROP,
            draggable: true,
            map: map,
            icon: icon
        });

        return marker;
    }

    /**
     * Gets coordinates of position object
     * @param position Object with a geolocation.
     * @returns {{coords: {lat: number, lng: number}}} Object with a position defined in coordinates
     */
    function getPos(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        return {
            coords: {
                lat: latitude,
                lng: longitude
            }
        };
    }

    window.onload = getMyLocation;

    /**
     * Initial function, executed when the Web Browser loads, this function request the user
     * to enable the gps service for obtain the current position of the device.
     */
    function getMyLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                currentPosition = getPos(position);
                console.log(currentPosition);
                panorama = new google.maps.StreetViewPanorama(
                    document.getElementById('pan'), {
                        position: currentPosition,
                        pov: {
                            heading: 34,
                            pitch: 10
                        }
                    });
                map.setStreetView(panorama);
                marker1 = addMarker(getPos(position));
                marker2 = addMarker(getPos(position),'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png');

                google.maps.event.addListener(marker2, 'click', function () { // This function is executed when marker2 is clicked

                    var initAddress = getMarkerPos(marker1);
                    var finalAddress = getMarkerPos(marker2);

                    console.log(initAddress);
                    console.log(finalAddress);

                    var request = {
                        origin: initAddress.coords,
                        destination: finalAddress.coords,
                        travelMode: 'TRANSIT'
                    };

                    directionsService.route(request, function (result, status) {
                        if (status == 'OK') {
                            directionsDisplay.setDirections(result);
                        }
                    });

                    document.getElementById('lat').setAttribute('value',finalAddress.coords.lat);
                    document.getElementById('lon').setAttribute('value',finalAddress.coords.lng);

                })
            })
        }
    };

    /**
     * Gets the position of a given marker
     * @param marker The given marker
     * @returns {{coords: {lat: *, lng: *}}} Object with coordinates
     */
    function getMarkerPos(marker) {
        var latitude = marker.getPosition().lat();
        var longitude = marker.getPosition().lng();
        return {
            coords: {
                lat: latitude,
                lng: longitude
            }
        };
    };
};

/**
 * The haversine formula determines the great-circle distance between two points on a sphere
 * given their longitudes and latitudes. This formula is used to determine distances between
 * locations in the earth
 * @param marker1pos The first marker with its position
 * @param marker2pos The second marker with its position
 * @returns {number} Distance in kilometers
 */
function haversineFormula(marker1pos, marker2pos) {


    lat1 = marker1pos.getPosition().lat();
    lon1 = marker1pos.getPosition().lng();
    lat2 = marker2pos.getPosition().lat();
    lon2 = marker2pos.getPosition().lng();

    var R = 6371; // Radius of the earth in km
    var dLat = deg2rad(lat2 - lat1);  // deg2rad below
    var dLon = deg2rad(lon2 - lon1);
    var a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2)
    ;
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var d = R * c; // Distance in km
    return d;
}

/**
 * This function transform degrees to Radians
 * @param deg Degress
 * @returns {number} Radians
 */
function deg2rad(deg) {
    return deg * (Math.PI / 180)
}
