

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Loading Bootstrap -->
	    <link href="../Suivi/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  
	    <!-- Loading Flat UI -->
	    <link href="../Suivi/dist/css/flat-ui.min.css" rel="stylesheet">
	    <link href="../Suivi/dist/css/style.css" rel="stylesheet">

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
				<img src="../Suivi/dist/img/projet/banniere.jpg" width='100%' class="img-responsive" alt="Image">
			</div>
			
			<!-- Slider  -->

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="Slider" class="carousel slide" data-ride="carousel">
					    <ol class="carousel-indicators">
					        <li data-target="#Slider" data-slide-to="0" class=""></li>
					        <li data-target="#Slider" data-slide-to="1" class=""></li>
					        <li data-target="#Slider" data-slide-to="2" class="active"></li>
					    </ol>
					    <div class="carousel-inner">
					        <div class="item">
					            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" width='100%' src="../Suivi/dist/img/projet/entetecarte.jpg">
					        </div>
					        <div class="item">
					            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" width='100%' src="../Suivi/dist/img/projet/salete.jpg">
					        </div>
					        <div class="item active">
					            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Third slide" alt="Third slide" width='100%' src="../Suivi/dist/img/projet/entete2.jpg">
					            
					        </div>
					    </div>
					</div>
				</div>

				<!-- Menu  -->

				<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse navbar-ex1-collapse">

                  <a href="#" type="button" class="dropdown-toggle btn btn-success  navbar-btn" data-toggle="dropdown">ACCUEIL <b class="caret"></b></a>
	                  <ul class="dropdown-menu" role="menu">
	                    <li> <a href="accueil">Accueil</a> </li>
	                    <li> <a href="">Groupe de travail</a> </li>
	                    <li> <a href="">Personnes Ressources</a> </li>
	                  </ul>
	                  
	                  
	                  
	                  
                  </div>

				<div class="navbar">
					<div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	                      <span class="sr-only">Toggle navigation</span>
	                      <span class="icon-bar"></span>
	                      <span class="icon-bar"></span>
	                      <span class="icon-bar"></span>
	                    </button>
	                  </div>



					<ul class="nav nav-pills nav-justified">
						<li>
							<ul class="dropdown-menu" role="menu">
			                    <li> <a href="accueil">Accueil</a> </li>
			                    <li> <a href="">Groupe de travail</a> </li>
			                    <li> <a href="">Personnes Ressources</a> </li>
			                 </ul>
						</li>
						<li>
							<a type="button" class="btn btn-success  navbar-btn" href="intervention">INTERVENTION</a>
						</li>
						<li>
							<a type="button" class="btn btn-success  navbar-btn" href="geolocalisation">GEOLOCALISATION</a>
						</li>
						<li>
							<a type="button" class="btn btn-success  navbar-btn" href="intervention">INTERVENTION</a>
						</li>
						<li>
							<a type="button" class="btn btn-success  navbar-btn" href="../index.php">DECONNEXION</a>
						</li>
					</ul>

				</div>
				
				<!-- CORPS DE LA PAGE  -->
				<div id="Corps" class="row">
				<!-- BANNIERE DU CORPS DE LA PAGE  -->

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<img src="../Suivi/dist/img/projet/entetecarte.jpg" width='100%' class="img-responsive" alt="Image">
					</div>

				<!-- PARTIE GAUCHE  -->

					<div id="contenu" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php echo $content ; ?>
					</div>
				</div>
				
				<!-- PIED DE PAGE  -->

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		              <img src="../Suivi/dist/img/projet/ita.jpg"  class="img-responsive" alt="Image">
		            </div>
		            <div class="col-xs-offset-1 col-xs-4 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-4">
		              <img src="../Suivi/dist/img/projet/logo_sodeci.jpg"   class="img-responsive" alt="Image">
		            </div>
		            <div class="col-xs-offset-1 col-xs-3 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-3">
		              <img src="../Suivi/dist/img/projet/anasur.jpg" height='100' class="img-responsive" alt="Image">
		            </div>
		          </div>
				</div>
			</div>
		</div>




		<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
	    <script src="../Suivi/dist/js/vendor/jquery.min.js"></script>

	    <!-- Include all compiled plugins (below), or include individual files as needed -->

	    <script src="../Suivi/dist/js/vendor/video.js"></script>
	    <script src="../Suivi/dist/js/flat-ui.min.js"></script>
	    <script src="../Suivi/dist/js/form.js"></script> 
		<!-- Bootstrap JavaScript -->
		<script src="../Suivi/dist/js/flat-ui.min.js"></script>
		<script type="text/javascript">

		$(function () {
			 
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