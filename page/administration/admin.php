<?php  
	session_start();

	include_once('../../app/connexpdo.php');
	$idcom= connexpdo();

	$MARKERS = array();
	/*$marker = array('numMark' => 0,'nomMark' => "",'latMark' => 0,'lngMark' => 0 );*/


	$requete="SELECT * FROM incident WHERE longitude=0 AND lattitude=0"; 

	$resIncident=$idcom->query($requete);

	/* 
	$i=0;

	//extraction des infos sur tous la localisation des marqueurs sur la carte 

	while ($ligne=$result->fetch(PDO::FETCH_ASSOC)) {
		
		foreach ($ligne as $key => $value) {
			$marker[$key]=$value;	
		}

		$MARKERS[$i]= $marker;
		$i++;

	}*/

	//processus d'authentification des utilisateurs

	//connexion a la base de donnees  
	
	
	$req=$idcom->query("SELECT * FROM utilisateur");

	$user = array();

	while ($result= $req->fetchAll(PDO::FETCH_NUM)) {
	 	$user= $result;
	}

	/*if (isset($_POST['login']) AND isset($_POST['mdp'])) {
		$ok;

		for ($i=0; $i < count($user) ; $i++) { 

			if (in_array($_POST['login'], $user[$i]) AND in_array($_POST['mdp'], $user[$i])) {
				$ok=true;	
			}else{

				echo "ouais c pa bon ";
				/*header("Location:identification");
			}

		}	
		
	}*/



?>

<!DOCTYPE html>
<html lang="FR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo&signed_in=true&callback=initMap" async defer></script>
		<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    	<script src="../IDA2A/dist/js/vendor/jquery.min.js"></script>
    
		<script>
		var Markers=[];
			
			function initMap() {

		      var map = new google.maps.Map(document.getElementById('googleMap'), {
		        zoom: 12,
		        center: new google.maps.LatLng(5.3096600,-4.0126600)
		      });

		      /*Load(map);

		      var geocoder = new google.maps.Geocoder();

		      document.getElementById('affiche').addEventListener('click', function() {
		        geocodeAddress(geocoder, map);
		      });

		      document.getElementById('Marquer').addEventListener('click', function() {
		        Mark(geocoder, map);
		      });*/
		    }

		    
		    /*function geocodeAddress(geocoder, resultsMap) {
	
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
*/

		   
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
		

		<!-- Bootstrap CSS -->
		<title>Administration </title>
		<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../IDA2A/dist//css/flat-ui.min.css">
    	<link rel="shortcut icon" href="../IDA2A/page/administration/images/favicon.ico">
    	<link rel="stylesheet" type="text/css" href="../IDA2A/dist/css/obv.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			 

			.row
			{
				margin-top: 5px;
			}
			#ita
			{
				height: 35px;
				width: 55px;
			}
			#foot
			{
				height: 100px;
				width: 120px;	
			}


		</style>
	</head>
	<body>
	<div class="row">
		<div class="col-md-offset-1 col-lg-offset-1 col-md-10 col-lg-10">
			<nav class="navbar navbar-orange navbar-embossed">
				<form role="search" class="navbar-form navbar-right">
  					<div class="form-group">
  					<a href="" id="theme"><img src="../IDA2A/page/administration/images/theme.png"></a> 
    				<input type="text" placeholder="Search" class="form-control">
  					</div>
  					<button class="btn btn-orange" type="submit">Valider</button>
  					<a class="btn btn-orange" data-toggle="modal" href='#Aide'>Aide</a>
				</form>
			</nav>
			
			<div class="modal fade" id="Aide">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Administration: Mode d'emploi</h4>
							</div>
							<div class="modal-body">
								La premiere page de l'administration sert renseigner les coordonnees geographique des differents incident signales sur le site. <br>A part &ccedil;a les autres onglets servent a consulter les informations.
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

			<div class="row">
				<div class="col-md-12 col-lg-12">
					<nav class="navbar navbar-orange">
						<a class="navbar-brand" href="accueil"><img id="ita" src="../IDA2A/page/administration/images/ita.png"></a>
						<a class="navbar-brand txt-bv" >ACCUEIL</a>
						<div class="btn-group col-md-3 col-lg-3">
  							<button class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							INFORMATION<span class="caret"></span>
  							</button>
  							<ul class="dropdown-menu" role="menu">
    							<li><a>Informations g&eacute;n&eacute;rales</a></li>
    							<li><a>Informations par zone</a></li>
  							</ul>
						</div>
						<div class="btn-group col-md-3 col-lg-3">
  							<button class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							SUGGESTION<span class="caret"></span>
  							</button>
  							<ul class="dropdown-menu" role="menu">
    							<li><a >Suggestions publiques</a></li>
  							</ul>
						</div>
						<div class="btn-group col-md-3 col-lg-3">
  							<button class="btn btn-orange dropdown-toggle" type="button" data-toggle="dropdown">
    							STATISTIQUE<span class="caret"></span>
  							</button>
  							<ul class="dropdown-menu" role="menu">
    							<li><a >Statistiques g&eacute;n&eacute;rales</a></li>
    							<li><a >Statistiques par zone</a></li>
  							</ul>
						</div>
					</nav>
				</div>

				<!-- Structure du contenu-->
					<div class="contenu col-md-12 col-lg-12">
					<!--div contenant les contenu de tous les onglets-->
					<!--contenu de la page d'accueil-->
						<!--au lancement de la page d'accueil-->
						<div class=" col-xs-12  col-sm-12  col-md-12  col-lg-12 googleMap">
							<div class="row">
								<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<h3 align="center">Liste des incidents non-renseignes</h3>

									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										
									</div>
									<div class="panel panel-info">
										  <div class="panel-heading">
												<h3 class="panel-title">Panel title</h3>
										  </div>
										  <div class="panel-body">
												Panel content
										  </div>
									</div> -->
									<?php  
/*
									while ($obj=$resIncident->fetchObject()) {
										
										echo "<div class=\"panel panel-info\">";
										echo "<div class=\"panel-heading\">";
										echo "<h3 class=\"panel-title\">".$obj->num_incident."</h3>";
										echo "</div>";
										echo "<div class=\"panel-body\">";
										echo "";
										echo "</div>";
										echo "</div>";
										var_dump($obj);
									}*/

									
									?>

								<!-- </div>-->
							</div> 

							
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
							<div id="google" class="col-lg-12" style="height:450px;"></div>
						</div>

					</div>

					
					<div>

						<!--contenu de la page info generale-->
					<?php  
						include 'infgene.php';
										
					//contenu de la page d'info zone 
					  
						include 'infzone.php';
									
					//contenu par zone
					 
						include 'zone.html';
					
					//contenu de la page des solutions public
					 
						include 'sugg.php';
					 
					//contenu des stat genérales
					  
						include 'statg.html';						

					//contenu des stats par zone

						include 'statz.html';

					?>
					</div>
			</div>
		</div>
	</div>		
					

	<footer class="row">
		<div class="col-md-offset-1 col-lg-offset-1 col-md-10 col-lg-10 navbar-orange">
			<div class="row">
				<div class="col-md-offset-5 col-lg-offset-5 col-md-4 col-lg-4">
					<img id="foot" src="../IDA2A/page/administration/images/ita.png" class="img-responsive" alt="Image">
				</div>	   	
			</div>
			<div class="row">
			 	<div class="col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5">
			 		Tous Droits r&eacute;serv&eacute;s &agrave; 2A/IDA ITA-Marcory <sup>&copy;</sup>
			 	</div>
			 </div> 
		</div>
	</footer>

	
		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../IDA2A/dist/js/vendor/video.js"></script>
    <script src="../IDA2A/dist/js/flat-ui.min.js"></script>
    <script src="../IDA2A/dist/js/AdminBehave.js"></script>
    

	</body>
</html>