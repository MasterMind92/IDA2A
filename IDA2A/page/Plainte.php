<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Assistant Controlleur</title>

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

			<div>
				<h2 align="center"> Indications </h2>
				<p> 
					<h6>Sur cette page vous pourrez soumettre un incident aux autorites competentes via le formulaire se trouvant ci-dessous.Cela peut se faire selon 3 options qui sont:</h6>
					<ol>
						<li>Accepter la géolocalisation automatique <strong>(inclut d'être sur les lieux de l'incident)</strong>.</li>
						<li>Localiser l'endroit via les onglet commune et zone du formulaire.</li>
						<li> <strong>Dans le cas où la deuxième option n'est pas assez précise</strong>, après marquage de l'incident, <strong>cliquer sur le marqueur(rouge) puis déplacez le jusqu'à l'endroit souhaité où le plus proche possible de la zone de l'incident</strong> <em>(là où c'est gaté la).</em></li>
					</ol>

				</p>
			</div>

			<div>

				<!---------------------------------------------------------->
				<!--             FORMULAIRE DE L'INTERNAUTE               -->
				<!---------------------------------------------------------->


				<div id="internaute" class="Incident">
					
					<form action="../IDA2A/app/TraitementInc.php" method="POST" class="form-horizontal formInput" role="form" enctype="multipart/form-data" >
						
						<legend> <h2 align="center">Indiquez votre probleme ici</h2>  </legend>
						<!-- CHAMP DE PRECISION DE LA NATURE DU PROBLEME -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<label for="">Nature de la plainte </label>		
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<select  title="indiquez l'élément qui a subit le dégat" name= "catincInt" id="catincInt" class="form-control"   required="required">
										<option value="5">Regard </option>
										<option value="2">Canalisation </option>
										<option value="4">Egout</option>
										<option value="1">Avaloir</option>
										<option value="3">Canniveau</option>
									</select>		
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<select title="indiquez la nature du dégat" name= "incidentInt" id="incidentInt" class="form-control"  required="required">
										<option value="Bouche">Bouche</option>
										<option value="Cassee">Cassee</option>
									</select>		
								</div>
							</div>
						</div>

						<!-- CHAMP DE SELECTION DU LIEU -->	
						 <!-- <div class="form-group">
							<div class="row">
								
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<select name="ZoneInt" id="ZoneInt" class="form-control" required="required">
										<option value=-1>Zone</option>
									</select>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<input type="text" name="precisionInt" id="precisionInt" class="form-control" value="" required="required"  title="" placeholder="precision supplementaire ">
								</div>
							</div>		
						</div> -->

						<!-- CHAMP DE SELECTION DE LA PHOTO DU LIEU -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<label for=""> Image du probleme(si possible)</label>
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
									<input title="c'est pas forcé" type="file" class="form-control" name="photo" >
								</div>
							</div>		
						</div>
						
						<!-- CHAMP DE RECCEPTION DES COMMENTAIRES -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<textarea class="form-control" rows="5" cols="90" placeholder="Décrivez du mieux que vous pouvez ce qui s'est passé..." name="Commentaire" ></textarea>
								</div>
							</div>		
						</div>
								
						<input type="hidden" class="form-control" id="Lat" name="Lat">
													
						<input type="hidden" class="form-control" id="Lng" name="Lng">

						<!-- -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<label for="nom">Localisation:</label>
								</div>
								
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<select title="Commune de l'incident" name="CommuneInt" id="adresse" class="form-control" required="required">
										<option value=-1>Commune</option>
										<option  value=1>Abobo</option>
										<option  value=2>Adjame</option>
										<option  value=3>Anyama</option>
										<option  value=4>Attecoube</option>
										<option  value=5>Cocody</option>
										<option  value=6>Koumassi</option>
										<option  value=7>Marcory</option>
										<option  value=8>Plateau</option>
										<option  value=9>Treichville</option>
										<option  value=10>Port-Bouet</option>
										<option  value=11>Yopougon</option>
									</select>
								</div>
								<input type="hidden" class="com">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<select title="quartier de l'incident" name="ZoneInt" id="ZoneInt" class="form-control" required="required">
										<option value="-1">Choisissez la zone</option>
									</select>
								</div>

								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<input type="text" class="form-control" id="precision"   name="pre_sup" placeholder="Entrez des precisions supplementaires..." >
								</div>
							</div>
						</div>
						
						<!-- -->
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<button  type="button"  id="affiche" class="btn btn-primary btn-block">1-Afficher</button>
						</div>

						<!-- -->
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<button  type="button"  id="Marquer" class="btn btn-success btn-block">2-Marquer</button>
						</div>

						<!--  BOUTON DE SOUMISSION DU FORMULAIRE -->
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<button  type="submit"  id="submit" enabled="false" class="btn btn-danger btn-block">3-Soumettre</button>
						</div>
						
					</form>	
				</div>				
			</div>
	</body>
</html>