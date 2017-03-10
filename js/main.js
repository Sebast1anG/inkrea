$(document).ready(function() {

            google.maps.event.addDomListener(window, 'load', init);
            var map;

            function init() {
                var mapOptions = {
                    center: new google.maps.LatLng(51.2348955, 22.54456),
                    zoom: 16,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT,
                    },
                    disableDoubleClickZoom: true,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    },
                    scaleControl: true,
                    scrollwheel: true,
                    panControl: true,
                    streetViewControl: true,
                    draggable: true,
                    overviewMapControl: true,
                    overviewMapControlOptions: {
                        opened: false,
                    },
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [{
                        "featureType": "all",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#167294"
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                            "lightness": -24
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [{
                            "color": "#1c2138"
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "weight": 1.07
                        }, {
                            "lightness": 7
                        }]
                    }, {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "lightness": -7
                        }]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#005870"
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#093851"
                        }]
                    }, {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#fffaff"
                        }]
                    }, {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#11648d"
                        }]
                    }, {
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#11648d"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#005870"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#005870"
                        }]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#005870"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#fcfcfc"
                        }]
                    }]
                }
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                marker = new google.maps.Marker({
                    icon: 'img/marker.png',
                    position: new google.maps.LatLng('51.2348955', '22.54456'),
                    map: map,
                    title: 'Inkrea Agencja Marketingowa',
                    desc: '',
                    tel: '',
                    email: '',
                    web: ''
                });
                link = '';
                bindInfoWindow(marker, map, 'Inkrea Agencja Marketingowa', '', '', '', '', link);

                function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
                    var infoWindowVisible = (function() {
                        var currentlyVisible = false;
                        return function(visible) {
                            if (visible !== undefined) {
                                currentlyVisible = visible;
                            }
                            return currentlyVisible;
                        };
                    }());
                    iw = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', function() {
                        if (infoWindowVisible()) {
                            iw.close();
                            infoWindowVisible(false);
                        } else {
                            var html = "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>" + title + "</h4><p>" + desc + "<p><p>" + telephone + "<p><a href='mailto:" + email + "' >" + email + "<a></div>";
                            iw = new google.maps.InfoWindow({
                                content: html
                            });
                            iw.open(map, marker);
                            infoWindowVisible(true);
                        }
                    });
                    google.maps.event.addListener(iw, 'closeclick', function() {
                        infoWindowVisible(false);
                    });
                }
            }

            $('#content-portfolio-slider')
                .cycle({
                    slideResize: 0,
                    slideExpr: '.slide',
                    speed: '2000',
                    timeout: 4000,
                });

        });