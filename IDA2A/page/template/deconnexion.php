<?php 
	session_start();

	$_SESSION['erreur']=0;

 ?>

 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Deconnexion</title>
 </head>
 <body>
 	<?php echo "Vous avez ete deconnecte " ?>
 	<a href="../../index.php"> retourner a l'accueil</a>
 </body>
 </html>