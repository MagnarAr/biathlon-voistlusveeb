function initMap() {
    var image = {
        url: 'https://cdn2.iconfinder.com/data/icons/IconsLandVistaMapMarkersIconsDemo/256/MapMarker_Flag_Azure.png',
        scaledSize: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(30, 50)
    }
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: {lat: 58.0490916, lng: 26.5021351},
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        zoomControl: false,
        disableDoubleClickZoom: true,
        streetViewControl: false,
    });

    var marker = new google.maps.Marker({
        position: {lat: 57.72281, lng: 27.048186},
        map: map,
        icon: image,
        title: 'Haanja staadion'
    });

    var marker = new google.maps.Marker({
        position: {lat: 58.0490916, lng: 26.5021351},
        map: map,
        icon: image,
        title: 'Tehvandi staadion'
    });


}