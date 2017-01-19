<?php 
	session_start();
	
	$psd= array();
	$suj= array();
	$nmsg= array();
	$dmsg= array();
	$ps= array();
 	$nbs=0;
 	$conx= new PDO("mysql:host=localhost;dbname=projetbdd",'root','');
 	$req="SELECT s.lib_sujet as lib, count(s.id_sujet) as nbs, s.date_sujet as dat, c.pseudo as ini FROM sujet s, compte c where s.num_cpt=c.num_cpt";
 	$re= $conx->query($req);
 	$i=0;
 	while ($rs=$re->fetch()) {
	 	$suj[$i]=$rs['lib'];
	 	$ps[$i]=$rs['ini'];
	 	$dmsg[$i]=$rs['dat'];
	 	$nbs=(int) $rs['nbs'];
	 	$i++;	
 	}
 	$nbs+=17;
 	$nb=array();
 	$h=0;
 	for ($i=0; $i < $nbs ; $i++) { 
 		$req="SELECT count(m.num_msg) as nb FROM sujet s, message m where m.id_sujet=s.id_sujet AND s.id_sujet=$i+1";
 		$query="SELECT c.pseudo as psd, m.desc_msg FROM compte c, sujet s, message m where s.num_cpt=c.num_cpt AND m.id_sujet=s.id_sujet AND m.id_sujet=s.id_sujet ORDER BY m.num_msg DESC LIMIT 1";
 		$re= $conx->query($req);
 		while ($d = $re->fetch()) {
 			$nb[$i]= $d['nb'];
 		}

 	}
 	//var_dump($nb);exit();
 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Index</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/flat-ui.min.css">
    	<link rel="stylesheet" type="text/css" href="dist/css/obv.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Forum</h1>
		<div class="row">
			<!--Region du container-->
			
			<div class="col-xs-12 col-sm-12 col-md-10  col-lg-10 col-md-offset-1 col-lg-offset-1">
				
				<!--Region menu-->
				
				<?php 
					include 'menu.php';
				 ?>
				
				<!--region du message d'accueil-->
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Bienvenue!</h3>
						</div>
						<div class="panel-body">
							L'&eacute;quipe de d&eacute;veloppem...
						</div>
					</div>
				</div>

				<!--tableau des sujets (bouclé en php)-->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th class="col-lg-6">Discussion</th>
								<th class="col-lg-2">Initié par</th>
								<th class="col-lg-2">Messages</th>
								<th class="col-lg-2">Dernier message</th>
							</tr>
						</thead>
						<tbody>
							<!--Partie bouclé en php)-->
							 <?php 
							 	for ($i=0; $i < $nbs; $i++) { 
								 	echo "<tr>";
								 	echo "<td>".$suj[$i]."</td>";
								 	//echo "<td>".$ps[$i]."<br>le ".$dmsg[$i]." </td>";
								 	//echo "<td>".$nb[$i]."</td>";
								 	echo "</td>";
							 	}
							  ?>
							 <td></td>
								<td class="fo">Mot de l'admin</td>
								<td class="fo text-center">Admin01</td>
								<td class="fo text-center">01</td>
								<td class="text-center">
									<p>Admin01</p>
									<p>31/10/2016 22:21</p>
								
							</tr> 
							<!--<?php
							//definition des tableaux 
								/*$re= array();
								$psd= array();
								$suj= array();
								$nmsg= array();
								$lmsg= array();
								$ps= array();
							//requête pour avoir le nombre de ligne de la liste des sujets
								$sql='SELECT count(num_sujet) as n FROM sujet';
								$res=$conx->query($sql);

								while ($d <= $res->fetch()) 
								{
									$re[]=$d['n'];									
								}
							//requête pour recupérer les valeurs à mettre dans la liste des sujets
								$sql='SELECT s.lib_sujet as lib, c.pseudo as ps FROM sujet s, compte c WHERE s.num_cpt=c.num_cpt';
								$res->query($sql);

								while ($d <= $res->fetch()) 
								{
									$psd[]=$d['ps'];
									$suj[]=$d['lib'];					
								}								
							
								$sql='SELECT count(m.num_msg),'*/
							 ?>-->
						</tbody>
					</table>

				</div>

			<!--Fin de la region du container-->	
			</div>
			
		</div>
		<?php 
			include 'footer.php';
		 ?>
		<!-- jQuery -->
		<script src="dist/js/vendor/jquery.min.js"></script>
    	<script src="dist/js/flat-ui.min.js"></script>
    	<script src="dist/js/vendor/video.js"></script>
	</body>
</html>