<?php 
	if (isset($_POST['idzone'])) {
		$conx= new PDO("mysql:host=localhost;dbname=ordurebdd","root","");
		$query="SELECT c.nom_commune as com, z.libelle_zone as zone FROM zone z, commune c WHERE z.id_commune=c.id_commune AND z.id_zone=".$_POST['idzone'];
		$launch=$conx->query($query);
		$rec=$launch->fetchAll(PDO::FETCH_ASSOC);
		$res=$rec[0];
		//var_dump($res);exit();
		echo $res['com'].", ".$res['zone'];
	}
		
?>