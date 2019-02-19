<?php
$contact_sliders = array(
    '1' => array(
        'name' => 'Predajna 1',
        'img' => 'webroot/img/tmp/contact-01.jpg'
    ),
    '2' => array(
        'name' => 'Predajna 2',
        'img' => 'webroot/img/tmp/contact-01.jpg'
    ),
    '3' => array(
        'name' => 'Predajna 3',
        'img' => 'webroot/img/tmp/contact-01.jpg'
    ),
    '4' => array(
        'name' => 'Predajna 4',
        'img' => 'webroot/img/tmp/contact-01.jpg'
    ),
);
?>

<div class="bx bx--contact col-xs-100 col-md-60">
    <div class="contact__slider">
        <ul>
            <?php foreach ($contact_sliders as $id => $store) { ?>
            <li><img src="<?= $store['img'] ?>" alt="<?= $store['name'] ?>"></li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="col-xs-100 col-md-40">
    <div class="contact__map" id="map">
    </div>
</div>

<script>
// initialize
function initialize() {
    // variables
    var $map_holder = document.getElementById('map'),
        mapOptions = {
            zoom: 14
        };

    // create map
    map = new google.maps.Map($map_holder, mapOptions);

    // show map - set center
    var pos = new google.maps.LatLng(48.7477722, 22.1685773);
    map.setCenter(pos);

    // create marker
    var marker_pos = new google.maps.LatLng(48.7477722, 22.1685773);

    marker = new google.maps.Marker({
        position: marker_pos,
        map: map,
        icon: 'webroot/img/logos/ico-pin.png'
    });
    // on click zoom
    google.maps.event.addListener(marker, 'click', function() {
        map.setZoom(16);
        map.setCenter(marker.getPosition());
    });
}

// initialize map
google.maps.event.addDomListener(window, 'load', initialize);
</script>