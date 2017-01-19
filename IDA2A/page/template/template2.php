<?php 	

//session_start();

/*var_dump($_SESSION);
exit();*/

  $id=(int) $_SESSION['cpt_e'];

  $conx= new PDO("mysql:host=localhost;dbname=ordurebdd","root","");
  
  $query="SELECT i.num_inc as num, i.lib_inc as lib, i.date_inc as dat, i.sup_inc as sup,i.descr_incident as descr, c.nom_commune as com, z.libelle_zone as nz, e.nom_eco as nm, e.prenom_eco as pm FROM incident i, commune c, zone z, ecocitoyen e where i.id_zone=z.id_zone AND i.id_eco=e.id_eco AND z.id_commune=c.id_commune AND e.id_eco=$id AND i.statut_inc=2 AND i.sas IS NULL ORDER BY i.id_inc DESC LIMIT 1";
  $launch= $conx->query($query);
  $d=$launch->fetch();
  $list[]=$d;
  //var_dump($d);exit();

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo&signed_in=true&callback=initMap" async defer></script>
		<title>Title Page</title>

		<!-- Loading Bootstrap -->
	    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  
	    <!-- Loading Flat UI -->
	    <link href="dist/css/flat-ui.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<!-- Header  -->

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="dist/img/projet/BanniereAnasur.jpg" width='100%' class="img-responsive" alt="Image">
			</div>
			
			<!-- Slider  -->

				<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="Slider" class="carousel slide" data-ride="carousel">
					    <ol class="carousel-indicators">
					        <li data-target="#Slider" data-slide-to="0" class=""></li>
					        <li data-target="#Slider" data-slide-to="1" class=""></li>
					        <li data-target="#Slider" data-slide-to="2" class="active"></li>
					    </ol>
					    <div class="carousel-inner">
					        <div class="item">
					            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" width='100%' src="dist/img/projet/entetecarte.jpg">
					        </div>
					        <div class="item">
					            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" width='100%' src="dist/img/projet/salete.jpg">
					        </div>
					        <div class="item active">
					            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Third slide" alt="Third slide" width='100%' src="dist/img/projet/entete2.jpg">
					            
					        </div>
					    </div>
					</div>
				</div>
 -->
				<!-- Menu 	
 -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="navbar">
							<div class="navbar-header">
			                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			                      <span class="sr-only">Toggle navigation</span>
			                      <span class="icon-bar"></span>
			                      <span class="icon-bar"></span>
			                      <span class="icon-bar"></span>
			                    </button>
			                 </div>
		                  		
		                    <div class="collapse navbar-collapse navbar-ex1-collapse">

			                  	<ul class="nav nav-pills nav-justified">
									<li>
										
										<a href="" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Accueil <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="accueil">Accueil</a></li>
											<li> <a href="">Groupe de travail</a> </li>
						                    <li> <a href="">Personnes Ressources</a> </li>
						                </ul>
									</li>
									<li>
										<a type="button" class="btn btn-primary" href="problemes" >PLAINTE</a>
									</li>

									<li>
										 <a type="button" class="btn btn-primary" <?php if(!$list[0]) {
										 	echo "disabled";
										 } ?> data-toggle="modal" href='#modal-id' >ENQUETE DE SATISFACTION</a>
									</li>
									<li>
										<a type="button" class="btn btn-primary " href="../index.php">DECONNEXION</a>
									</li>
								</ul>
			                </div>
						</div>
					</div>
				</div>

				
				
				<div class="modal fade" id="modal-id">
	             <div class="modal-dialog">
	               <div class="modal-content">
	                 <div class="modal-header">
	                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                   <h4 class="modal-title">Enquête de satisfaction</h4>
	                 </div>
	                 <div class="modal-body">
	                   <p>Apr&egrave;s avoir re&ccedil;u la plainte n<sup>0</sup>:<strong><?php echo $list[0]['num']; ?></strong>, indiquant un problème de <strong> d&eacute;p&ocirc;t d'ordure</strong>, situ&eacute; dans la commune de <strong><?php echo $list[0]['com']; ?></strong>, dans le quartier suivant:<strong><?php echo $list[0]['nz']." ".$list[0]['sup']; ?></strong>, &agrave; la date du <strong> <?php echo $list[0]['dat']; ?></strong> que vous: M/Mme <strong><?php echo $list[0]['nm']." ".$list[0]['pm']; ?></strong> nous avez envoyé, où vous avez stipul&eacute; que <strong><?php echo $list[0]['descr']; ?></strong>, Nous avons d&eacute;taché une équipe sur le terrain afin de r&eacute;soudre ce probl&egrave;me et serions plus qu'heureux de savoir si vous &ecirc;tes satisfait du r&eacute;sultat:</p>
	                    
	                    <div class="btn-group">
	                      <form class="clue" role="form">
	                        <input type="hidden" name="num" value="<?php echo $list[0]['num'];?>">
	                        <input type="hidden" name="id" value="1">         
	                        <button type="submit" class="btn btn-info">Satisfait</button>
	                      </form>
	                      
	                      <form class="clue" role="form">
	                        <input type="hidden" name="num" value="<?php echo $list[0]['num'];?>">
	                        <input type="hidden" name="id" value="2">         
	                        <button type="submit" class="btn btn-danger">Non satisfait</button>
	                      </form>

	                    </div>  
	                 </div>
	                 <div class="modal-footer">
	                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                 </div>
	               </div>
	             </div>
	           </div>
				
				<!-- CORPS DE LA PAGE  -->
				<div id="Corps" class="row">
				<!-- BANNIERE DU CORPS DE LA PAGE  -->

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<img src="dist/img/projet/entetecarte.jpg" width='100%' class="img-responsive" alt="Image">
					</div>

				<!-- PARTIE GAUCHE  -->

					<div id="contenu" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php echo $content ; ?>
					</div>
				</div>
				
				<!-- PIED DE PAGE  -->

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		              <img src="dist/img/projet/ita.jpg"  class="img-responsive" alt="Image">
		            </div>
		            <div class="col-xs-offset-1 col-xs-4 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-4">
		              <img src="dist/img/projet/logo_sodeci.jpg"   class="img-responsive" alt="Image">
		            </div>
		            <div class="col-xs-offset-1 col-xs-3 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-3">
		              <img src="dist/img/projet/anasur.jpg" height='100' class="img-responsive" alt="Image">
		            </div>
		          </div>
				</div>
			</div>
		</div>

			

			
		<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
	    <script src="dist/js/vendor/jquery.min.js"></script>

	    <!-- Include all compiled plugins (below), or include individual files as needed -->

	    <script src="dist/js/flat-ui.min.js"></script>
	    <script src="dist/js/form.js"></script> 
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript">

		function initMap() {

          var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 12,
            center: new google.maps.LatLng(5.3096600,-4.0126600)
          });

          /*Load(map);*/

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

    
     /* function Load (map) {

          var tabLat=[],tabLng=[],etat=[],i,j;

          $.getJSON("load.php",function  (data) {
          	
          	//alert(data);

			for ( i = 0; i < data.length; i++) {
          		
          		data[i].statut = parseInt(data[i].statut);
          		data[i].lng    = parseFloat(data[i].lng);
          		data[i].lat    = parseFloat(data[i].lat);
          		
          		tabLat[i] = data[i].lat;
          		tabLng[i] = data[i].lng;
          		etat[i]   = data[i].statut;
          	}

          	for ( j = 0; j < tabLng.length ; j++) {
	        

	          if (etat[j]==2) {
	            var marker = new google.maps.Marker({
	                  map: map,
	                  position: new google.maps.LatLng(tabLat[j] ,tabLng[j]),
	                  icon:'dist/img/icons/icon/markg(2).png',
	                  animation: google.maps.Animation.DROP
	                });

	          } else if (etat[j]==1) {

	            var marker = new google.maps.Marker({
	                  map: map,
	                  position: new google.maps.LatLng(tabLat[j] ,tabLng[j]),
	                  icon:'dist/img/icons/icon/marko.png',
	                  animation: google.maps.Animation.DROP
	                });
	          } else if (etat[j]==3) {

	            var marker = new google.maps.Marker({
	                  map: map,
	                  position: new google.maps.LatLng(tabLat[j] ,tabLng[j]),
	                  icon:'dist/img/icons/icon/markb.png',
	                  animation: google.maps.Animation.DROP
	                });
	          }else{
	          var marker = new google.maps.Marker({
	                  map: map,
	                  position: new google.maps.LatLng(tabLat[j] ,tabLng[j]),
	                  animation: google.maps.Animation.DROP
	                });	
	          }
	        }
          	
          });
        
    }*/


		$(function () {
			$("#Marquer").attr("disabled","disabled");
	        $("#submit").attr("disabled","disabled");

	        $("#affiche").on("click",function  (event) {
	           $("#Marquer").removeAttr("disabled");
	        });

	        $("#Marquer").on("click",function  (event) {
	           $("#submit").removeAttr("disabled");
	        });

	        $("#submit").on("click",function  (event) {
	           $("#Marquer").attr("disabled","disabled");
	          $("#submit").attr("disabled","disabled");

	        });
			 
	        $('#Accueil > div:nth(1)').css({
	          "color":"rgb(68,195,123)",
	        });


	        $('#Accueil > div:nth(1)').hide();
	        $('#Accueil > div:nth(2)').hide();

	        //gestion des bouttons suivant
	        $('#Accueil > div > button.suivant ').on('click', function() {
	          
	         	if ($(this).attr("data-id")==="3") {
  
			        $(this).parent().slideUp(500);
			        $("#Accueil > div:nth(0) ").slideDown(500);  

	         	}else{
	         		$(this).parent().slideUp(500);  
		        	$(this).parent().next().next().slideUp(500);  
			        $(this).parent().next().slideDown(500);  		
	         	}
	        
	        });

	        //gestion des boutons precedents
	        $('#Accueil > div > button.precedent ').on('click', function() {
	          
	         	if ($(this).attr("data-id")==="1") {
  
			        $(this).parent().slideUp(500);
			        $("#Accueil > div:nth(2) ").slideDown(500);  

	         	}else{

	         		$(this).parent().slideUp(500);   
			        $(this).parent().prev().slideDown(500);  		
	         	}
	         
	        });

		});

		</script>

	</body>
</html>