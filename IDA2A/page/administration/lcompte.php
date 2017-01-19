<?php  

	$host="localhost";
	$base="projetbdd";
	$user="root";
	$pass="";

	$idcom= new PDO("mysql:host=$host;dbname=$base",$user,$pass);

	$req="SELECT * FROM compte,user WHERE compte.id_user=user.id_user";
	$result= $idcom->query($req);
	$retour=$result->fetchAll(PDO::FETCH_ASSOC);

	$lib=array();
	$nb=0;
	$i=0;

	$req="SELECT lib_prest as lib, count(id_prest) as nb from prestataire";
	$result=$idcom->query($req);
	while ( $d=$result->fetch()) {
		$lib[$i]=$d['lib'];
		$nb=(int) $d['nb'];
		$i++;
	}
	
	//var_dump($lib);exit();
	
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id='acpt' class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="btn-group btn-group-justified">
				<a type="button" class="btn btn-primary">
					<img src="../IDA2A/dist/img/icons/bajout.png" class="col-lg-offset-3 img-responsive" alt="Image">
					<h5>Créer un compte</h5>
				</a>
				<a type="button" class=" btn btn-info">
					<img src="../IDA2A/dist/img/icons/brech.png" class="col-lg-offset-3 img-responsive" alt="Image">
					<h5>Rechercher un compte</h5>
				</a>
			</div>
		</div>

		<div id='gest' class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-md-12 col-lg-12">
				<h4 class=" retour alike fback text-center clickable">Retour</h4>
			</div>
			<div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
				<form action="" method="POST"  id="creation" role="form">
					<legend>Gestion de compte</legend>
					
					<table class="table">
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<label for="">Nom :</label>
										<input type="text" class="form-control" name="nom" required="required" placeholder="Entrez votre nom ici...">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="">Prénoms :</label>
										<input type="text" class="form-control" name="prenom" require$d="required" placeholder="Entrez vos prenoms ici...">
									</div>
								</td>
							</tr>
							
							<tr>
								<td>
									<div class="form-group">
										<label for="">Date de naissance :</label>
										<input type="date" class="form-control" name="dateNais" required="required" placeholder="Entrez votre date de naissance ici...">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="">tel. :</label>
										<input type="number" class="form-control" name="num_phone" required="required" placeholder="Input field">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="">E-mail :</label>
										<input type="email" class="form-control" name="email" required="required" placeholder="Input field">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="">Pseudo :</label>
										<input type="text" class="form-control" name="pseudo" required="required" placeholder="Input field">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="">Mot de passe :</label>
										<input type="password" class="form-control" name="mdp" required="required" placeholder="Entrez votre mot de passe ici...">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="">Confirmation du mot de passe :</label>
										<input type="password" class="form-control" name="Cmdp" required="required" placeholder="Confirmez votre mot de passe ici...">
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<select name="id_tc" id="input" class="form-control" required="required">
										<option value= 4 >Administrateur</option>
										<option value= 3 >Agent de terrain</option>
										<option value= 2 >Agent decisionnel</option>
									</select>
								</td>
							</tr>
							<tr id="prest">
								<td colspan="2">
									<label>Société de l'agent</label>
									<select name="prest" class="form-control" required="required">
										<?php  
											$nbr=0;
											for ($i=0; $i <$nb ; $i++) { 
												$nbr=$i+1;
												echo "<option value= ".$nbr." >".$lib[$i]."</option>";
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan='2' class=''> 
									<button type="submit" class=" col-lg-offset-5 btn btn-primary">Ajouter</button>
									<button type="reset" class="btn btn-danger">Vider les champs</button>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<form action="" method="POST" role="form">
					<legend>Cr&eacute;ation de prestataire</legend>
					<table class="table table-hover">
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<label for="">nom du prestataire:</label>
										<input type="text" name="nmp" class="form-control" id="" placeholder="entrez le nom">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<button type="submit" class="btn btn-primary">Cr&eacute;er</button>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<div id="lco" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-md-12 col-lg-12">
				<h4 class=" retour alike fback text-center clickable">Retour</h4>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
				<form action="GestComptes.php" method="" role="form">
					<legend>RECHERCHE PAR PSEUDONYME</legend>
				
					<div class="form-group">
						<label for="">Pseudo:</label>
						<input type="text" class="form-control" id="" placeholder="Entrer le pseudo recherch&eacute;">
					</div>

					<button type="submit" class="btn btn-info">Rechercher</button>
				</form>
			</div>

			<table  class="table table-striped">
				<thead>
					<tr>
						<th>Image de Profil</th>
						<th>Informations personnelles</th>
						<th>Type d'utilisateur</th>
					</tr>
				</thead>
				<tbody>
					  
					<!--Partie géré en PHP-->
					<?php  
					for ($i = 0; $i < count($retour); $i++) {
						

					?>
						<tr>
						<td>
							<img src="#" class="img-responsive" alt="Image">
						</td>
						
						<td>
							<ul>
								<li>Pseudo : <?php echo $retour[$i]['pseudo'] ;?></li>
								<li>Nom : <?php  echo $retour[$i]['nom'];?></li>
								<li>Pr&eacute;noms :<?php  echo $retour[$i]['prenom'];?> </li>
								<li>Contact :<?php  echo $retour[$i]['num_phone'];?></li>
								<li>E-mail : <?php  echo $retour[$i]['email'];?></li>
							</ul>
						</td>

						<td class="text-center">
							<?php 
							if ($retour[$i]['id_tc']==="1") {
								echo "Utilisateurs simple" ;
							}elseif ($retour[$i]['id_tc']==="2") {
								echo "Agent decisionnel";
							}elseif ($retour[$i]['id_tc']==="3") {
								echo "Agent de terrain";
							}elseif ($retour[$i]['id_tc']==="4") {
								echo "Administrateur";
							}
							
							?>
							
						</td>
						<td class="action">

							<form id="<?php echo $i;?>" action="" method="">

								<?php 

								if ($retour[$i]['etat_cpt']==1) {
								?>


								<button type="submit" data-id=<?php echo $i;?> class="btn btn-warning ">Bloquer</button>
								
								<?php
								}else if($retour[$i]['etat_cpt']==0){
									?>
								<button type="submit" data-id=<?php echo $i;?> class="btn  btn-primary">Debloquer</button>
								<?php
								}
								 ?>					
								<button type="submit" data-id=<?php echo $i;?> class="btn btn-danger">Supprimer</button>
							</form>
						</td>
					</tr>

					<?php
					}	
					?>
					
				</tbody>
			</table>

		</div>
		<script type="text/javascript">


		$(function () {


			// bloc relatif a l'affichage des formulaires selon l'onglet clique
			$("#lco").hide();
			$("#gest").hide();
			
			$("#acpt > div > a:eq(0)").click(function (event) {
				$(this).parent().parent().slideUp(500);
				$("#gest").delay(500).slideDown(500);

			});

			$("#acpt > div > a:eq(1)").click(function (event) {
				
				$(this).parent().parent().slideUp(500);
				$("#lco").delay(500).slideDown(500);

			});

			$(".retour").click(function (event) {
				
				$("#lco").slideUp(500);
				$("#gest").slideUp(500);
				$("#acpt").delay(500).slideDown(500);
				

			});

			//bloc relatif a la creation des utilisateurs
			$('#gest > div > form ').on('submit',function (event) {
				event.preventDefault();

				$.post("../IDA2A/app/Comptes.php",$(this).serialize(), function (data) {
					alert(data);
				});
			});

			//bloc relatif a la gestion des comptes existant
			$(".action > form  > button ").on('click',function() {

				var id= $(this).attr("data-id");
				var instruction= $(this).html();
				
				

				$(".action > form").submit(function (event) {

				
					$.post("../IDA2A/app/Comptes.php", {instruction:instruction,id:id} , function (data) {
						alert(data);
					});	

				});
			});
			//bloc de la partie agent de terrain
			$("#prest").hide();
			var agent=$("#input").find("option [value=3]");

			$("#input").on("change", function () {
				if ($(this).val()==3) {
					$("#prest").show(500);	
				}else{
					$("#prest").hide(200);
				};
			});

		});

		</script>
	</body>
</html>
