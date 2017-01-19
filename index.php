<?php  
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portail d'accès</title>

    	<!-- Loading Bootstrap -->
    	<link href="IDA2A/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    	<!-- Loading Flat UI -->
    	<link href="IDA2A/dist/css/flat-ui.min.css" rel="stylesheet">
    	<link href="IDA2A/dist/css/bidouille.css" rel="stylesheet">
    	<link href="IDA2A/dist/css/obv.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--contenu de la page de connexion-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- PARTIE CONNEXION -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
				<a type="button" data-try="1" class="clk btn btn-Orange btn-group-justified"><legend>Connexion <span class="caret"></span></legend></a>
				<form id="1" class="frm" action="IDA2A/app/profctrl.php" method="POST" role="form" >					
				
					<div class="diz form-group">
						<label for="login">Login :</label>
						<input type="text" name="login" class="form-control" id="login" required="required"placeholder="veuillez entrer votre e-mail" >
					</div>

					<div class="diz form-group">
						<label for="mdp">Mot de passe :</label>
						<input type="password" name="mod" class="form-control" id="mdp" required="required">
					</div>
				
					<button type="submit" class="btn btn-Orange">connectez-vous</button>
				</form>
			</div>

			<!-- PARTIE INSCRIPTION -->
			
			<div  class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<a type="button" data-try="2" class="clk btn btn-Orange btn-group-justified"><legend>Inscription <span class="caret"></span></legend></a> 
				<form id="2" class="frm" action="IDA2A/app/insc.php" method="POST" role="form">
				 	
				 	<table class="diz table">
				 		<tbody>
			 				<tr>
			 					<td>
			 						<div class=" form-group">
							 			<label for="">Pr&eacute;noms:</label>
							 			<input type="text" name="pnom" class="form-control" id="" required="required" placeholder="&eacute;crivez ici..." >
							 		</div>
				 				</td>
				 				<td>
				 					<div class=" form-group">
								 		<label for="">Nom:</label>
							 			<input type="text" name="nom" class="form-control" id="" required="required" placeholder="&eacute;crivez ici...">
							 		</div>
			 					</td>
							</tr>
				 			<tr>
				 				<td colspan="2">
				 					<div class="form-group">
										<label for="">E-mail:</label>
								 		<input type="email" name="mail" id="input" class="form-control" value="" required="required" placeholder="youandi@smth.xx" title="" >
								 	</div>
				 				</td>
			 				</tr>
			 				<tr>
								<td>
				 					<div class=" form-group">
							 			<label for="">login:</label>
							 			<input type="text" name="pseudo" class="form-control" id="" required="required" placeholder="&eacute;crivez ici..." >
							 		</div>
				 				</td>
				 				<td>
				 					<div class=" form-group">
							 			<label for="">Mot de passe</label>
							 			<input type="password" name="pass" class="form-control" id="" required="required" placeholder="&eacute;crivez ici...">
							 		</div>
				 				</td>
				 			</tr>
				 			<!--<tr>
				 				<td>
				 					<div class=" form-group">
							 			<label for="">mot de passe</label>
							 			<input type="password" name="pass" class="form-control" id="" required="required" placeholder="&eacute;crivez ici...">
							 		</div>
				 				</td>
				 				<td>
				 					 <div class=" form-group">
							 			<label for="">verification du mot de passe</label>
							 			<input type="password" name="vpass" class="form-control" id="" required="required" placeholder="&eacute;crivez ici...">
							 		</div> 
				 				</td>
				 			</tr>-->
				 			<tr>
			 					<td>
			 						<div class=" form-group">
							 			<label for="">Contact</label>
							 			<input type="number" name="cont" class="form-control" id="" required="required" placeholder="&eacute;crivez ici..." >
							 		</div>
			 					</td>
			 					<td>
									
			 					</td>
			 				</tr>
			 			</tbody>
					</table>

				 	<div class="form-group">
				 		<button type="submit" class="btn btn-primary">Envoyer</button>
				 		<button id="reset" type="reset" class="btn btn-danger">Vider les champs</button>
				 	</div>
				</form>
			</div>
		</div>
	<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="IDA2A/dist/js/vendor/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="IDA2A/dist/js/vendor/video.js"></script>
    <script src="IDA2A/dist/js/flat-ui.min.js"></script>
   <!--  <script src="IDA2A/dist/js/Validation_Form.js"></script> -->    
    <!-- CODE JS DE LA PARTIE CONNEXION -->
    
    <script type="text/javascript">
    	$(function () {
    		$('#2').hide();
    		$('.clk').click(function () {
    			var a=$(this).attr('data-try');
				$('.frm').slideUp(500);
    			$('#'+a).slideDown(500);
    		});
    		//ajax du formulaire
    		$('form#2').on('submit', function (e) {
    			
    			e.preventDefault();
    			var form=  $(this).serialize();
    				
				$.post("IDA2A/app/insc.php",form,function (data){
			 		alert(data);
				});
				
				$("#reset").trigger('click');
			});

			$('form#1').on('submit', function (e) {
    			
    			var form=  $(this).serialize();
    				
				$.post("IDA2A/app/profctrl.php",form,function (jqxhr){
			 		/*if (data == 0) {
			 			alert("mauvais login ou mot de passe saisi");	
			 		};*/
					//alert(jqxhr.responseText);s
					
				});
				
			});
    	});
    </script>
    <!-- onblur="return verif();" -->
	</body>
</html>