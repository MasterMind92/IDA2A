<?php 
$host="localhost";
$base="coordonnees";
$user="MasterMind";
$pass="youngmoney1992";

$MARKERS = array();
$marker = array('numMark' => 0,'nomMark' => "",'latMark' => 0,'lngMark' => 0 );

$idcom = new PDO("mysql:host=".$host.";dbname=".$base,$user,$pass);

$requete="SELECT * FROM Marker"; 
$result=$idcom->query($requete);
$i=0;

//extraction des infos sur tous les markers

while ($ligne=$result->fetch(PDO::FETCH_ASSOC)) {
  
  foreach ($ligne as $key => $value) {
    $marker[$key]=$value; 
  }

  $MARKERS[$i]= $marker;
  $i++;

}

?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Maps</title>
    <style type="text/css">
      body{
        height: 1200px;
      }
    </style>
    
    <!-- Bootstrap CSS -->
    <link href="../IDA2A/dist/vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row">
      <div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
        <a class="btn btn-large btn-block btn-default" href="accueil" role="button">Retour au site </a>
      </div>
    </div>
    <div id="googleMap" class="col-lg-offset-1 col-lg-10" style="height:550px;"></div>

    

    <!-- jQuery -->
    <script src="../IDA2A/dist/js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="../IDA2A/dist/vendor/js/bootstrap.min.js"></script>
    
    <script>

      
      
      function initMap() {

          var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 12,
            center: new google.maps.LatLng(5.3096600,-4.0126600)
          });

          Load(map);
        }

        
        function geocodeAddress(geocoder, resultsMap) {
  
          var address = document.getElementById('adresse').value;


          
          geocoder.geocode({'address': address}, function(results, status){
            
            if (status === google.maps.GeocoderStatus.OK) {
              
              resultsMap.setCenter(results[0].geometry.location);
              resultsMap.setZoom(16);

              document.getElementById('Lng').value=resultsMap.getCenter(results[0].geometry.location).lng();
              document.getElementById('Lat').value=resultsMap.getCenter(results[0].geometry.location).lat();
            
            } else  {

              alert('Geocode was not successful for the following reason: ' + status);
            
            }
          });
        }



    
      function Load (map) {

            var tabLat=[],tabLng=[],i,j;

            <?php  
              for ($i = 0; $i < count($MARKERS); $i++) {
            
              echo "tabLat[".$i."]=".$MARKERS[$i]['latMark']." ;";
              echo "tabLng[".$i."]=".$MARKERS[$i]['lngMark']." ;";
            
              }

            ?>

          for ( j = 0; j < <?php echo count($MARKERS); ?>; j++) {

            var marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng( tabLat[j] ,tabLng[j]),
                    draggable: true,
                    animation: google.maps.Animation.DROP
                  });
          
          }
      }


       
    $(function () {

      $('#submit').click(function (e) {

          e.preventDefault();

          var Lat = $('form').find('input[name=\'Lat\']').val();
          var Lng = $('form').find('input[name=\'Lng\']').val();
          var Nom = $('form').find('input[name=\'nom\']').val();
          

          $.post("traitement.php",{nom:Nom,Lat:Lat,Lng:Lng},function (data) {
             alert(data);
          });
            
        });

    });
        
        
  

    </script>

    
    <script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo&signed_in=true&callback=initMap" async defer></script>
  </body>
</html>