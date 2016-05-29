<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.min.css" rel="stylesheet">
    <link href="dist/css/bidouille.css" rel="stylesheet">
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <a class="btn btn-large btn-success" href="accueil" role="button">Retour au site </a>
    <div id="map"></div>
    <script type="text/javascript">

    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 5.3096600, lng: -4.0126600},
        zoom: 10
      });
    }

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo&callback=initMap">
    </script>
  </body>
</html>