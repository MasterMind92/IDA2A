<?php 
	if (isset($_POST['desc']) AND isset($_POST['id']) AND isset($_POST['num'])) {
		
		$conx= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
		$num= (int)$_POST['num'];
		$id= (int)$_POST['id'];
		$query="UPDATE incident SET statut_inc=3 WHERE id_inc=$num";
		//var_dump($query);
		$launch= $conx->query($query);
		//var_dump($launch);exit();
		$desc= $conx->quote($_POST['desc']);
		//var_dump($desc);exit();
		$query="INSERT INTO intervention (desc_int,date_f,id_inc,id_agent) VALUES($desc,now(),$num,$id)";
		$launch= $conx->query($query);

		$query="UPDATE agent SET dispo_agent=0 WHERE id_agent=$id";
		//var_dump($query);
		$launch= $conx->query($query);
		if ($launch==false) {
			echo "probleme avec la base de données";
		}else{
			echo "Rapport envoyé avec succès";
			//exit();
			header("location:../index.php");
		}
	}else{
		echo "Aucune donnée envoyée";
	}
?>