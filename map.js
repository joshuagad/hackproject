mapboxgl.accessToken = 'pk.eyJ1Ijoiam9zaHVhZ2FkIiwiYSI6ImNpaG4wYXd2ODBvb3F0dGx6dTZmeGVlZXQifQ.Kkp19uppZO2snbCqQqkT5A';

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/joshuagad/cjn766fuo1rqw2snbl2ynogpw',
    center: [121.03, 14.61],
    zoom: 11
});

map.on('load', function() {
/*    $.getJSON("./js/frontline.json", {}, function(data) {
        data.features.forEach(function(marker) {
            var el = document.createElement('div');
            el.className = 'label';
            if (marker.properties.type=="school") {
                el.style.color = marker.properties.color;
                //el.style.fontSize = "1.2rem";
            }
            else if (marker.properties.type=="church") {
                //el.style.fontSize = "1.5rem";
                el.innerHTML = marker.properties.name;
            }
            new mapboxgl.Marker({
                //element: el,
                anchor: 'bottom',
                color: marker.properties.color
            })
              .setLngLat(marker.geometry.coordinates)
              .addTo(map);
        });
    });
*/
});
