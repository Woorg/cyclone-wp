<?php

  $copyright = get_field('copyright', 'option');
  $address = get_field('address', 'option');
  $phone = get_field('phone', 'option');
  $email = get_field('email', 'option');

?>


<div class="contacts">
  <div class="contacts__container container">
      <div class="contacts__top flex flex_top">
          <div class="contacts__col">
              <div class="contacts__contact">Институт Географических Информационных Технологий</div>
              <div class="contacts__contact">Адрес: 199155, Санкт-Петербург, наб. реки Смоленки, 33</div>
          </div>
          <div class="contacts__col">
              <div class="contacts__contact">Телефон/факс:<a class="contacts__link" href="<?php echo 'tel:+' . str_replace( array(
                    "+",
                    ")",
                    "(",
                    " ",
                    "-",
                    "<",
                    ">",
                    "/",
                    "s",
                    "p",
                    "a",
                    "n"
                  ), "", $phone ); ?>"><?php echo $phone; ?></a>
              </div>
              <div class="contacts__contact">Почта:<a class="contacts__link" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
              </div>
          </div>
      </div>
      <div class="contacts__area">
          <div class="contacts__map" id="map"></div>
      </div>
  </div>
</div>
<!-- end contacts -->


<?php
  $lat    = get_field( 'lat' );
  $lng    = get_field( 'lng' );
  $marker = get_field( 'marker' );
?>


<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: <?php echo floatval($lat);  ?>, lng: <?php echo floatval($lng);  ?>};
  // The map, centered at Uluru
  var map = new google.maps.Map( document.getElementById('map'), {
      zoom: 17,
      center: uluru,
      disableDefaultUI: true,
      zoomControl: true,
      styles: [
        {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#444444"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#f2f2f2"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                {
                    "saturation": -100
                },
                {
                    "lightness": 45
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#5199ff"
                },
                {
                    "visibility": "on"
                }
            ]
        }
    ]
    }
  );
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, icon: '<?php echo $marker['url']; ?>', map: map});
}
</script>