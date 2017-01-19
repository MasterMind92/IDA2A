<?php 
$host="localhost";
$base="coordonnees";
$user="root";
$pass="";

/*$MARKERS = array();
$marker = array('numMark' => 0,'nomMark' => "",'latMark' => 0,'lngMark' => 0 );

$idcom = new PDO("mysql:host=".$host.";dbname=".$base,$user,$pass);

$requete="SELECT * FROM Marker"; 
$result=$idcom->query($requete);
$i=0;
*/
//extraction des infos sur tous les markers

/*while ($ligne=$result->fetch(PDO::FETCH_ASSOC)) {
	
	foreach ($ligne as $key => $value) {
		$marker[$key]=$value;	
	}

	$MARKERS[$i]= $marker;
	$i++;

}
*/
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
		<script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo&signed_in=true&callback=initMap" async defer></script>
		
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

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

				<form action="" class="form-horizontal  " method="POST" role="form">
					<legend class="text-center">Formulaire d'insertion de marqueurs </legend>
				
					<!-- -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<label for="Lat">Latitude </label>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<input type="text" class="form-control" id="Lat" disabled name="Lat" placeholder="">
							</div>
						</div>
					</div>

					<!-- -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<label for="Lng">Longitutde</label>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<input type="text" class="form-control" id="Lng"  disabled name="Lng" placeholder="">
							</div>
						</div>
					</div>

					<!-- -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<label for="nom">Nom Ville</label>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<input type="text" class="form-control" id="adresse"   name="nom" placeholder="" value="Abidjan">
							</div>
						</div>
					</div>
					
					<!-- -->
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<button  type="button"  id="affiche" class="btn btn-primary btn-block">Afficher</button>
					</div>

					<!-- -->
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<button  type="button"  id="Marquer" class="btn btn-success btn-block">Marquer</button>
					</div>

					<!-- -->
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<button  type="submit"  id="submit" class="btn btn-danger btn-block">Soumettre</button>
					</div>
					
				</form>
				
			</div>

		</div>
		
		<div id="googleMap" class="col-lg-offset-1 col-lg-10" style="height:450px;"></div>

		

		<!-- jQuery -->
		<script src="js/JQuery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
		<script>

			var Markers=[];
			
			function initMap() {

		      var map = new google.maps.Map(document.getElementById('googleMap'), {
		        zoom: 12,
		        center: new google.maps.LatLng(5.3096600,-4.0126600)
		      });

		      Load(map);

		      var geocoder = new google.maps.Geocoder();

		      document.getElementById('affiche').addEventListener('click', function() {
		        geocodeAddress(geocoder, map);
		      });

		      document.getElementById('Marquer').addEventListener('click', function() {
		        Mark(geocoder, map);
		      });
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

		    //fonction de recuperation des coordonnees pendant evenement drag

		    function setposition(marker){

		    	var pos=marker.getPosition();

		    	 document.getElementById('Lng').value=pos.lng();
		         document.getElementById('Lat').value=pos.lat();
		    }



		    //fonction de marquage des endroits geocoder


		    function Mark (geocoder, map) {
		    	var address = document.getElementById('adresse').value;

	    	    geocoder.geocode({'address': address}, function(results, status) {
	        
			        if (status === google.maps.GeocoderStatus.OK) {
			        	 
			          var marker = new google.maps.Marker({
			            map: map,
			            position: results[0].geometry.location,
			            draggable: true,
				        animation: google.maps.Animation.DROP
			          });

	          	google.maps.event.addListener(marker,'drag',function () {
				      	 	 setposition(marker);
				      });
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

				for ( j = 0; j < <?php echo count($MARKERS);?> ; j++) {

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

		
		
	</body>
</html>