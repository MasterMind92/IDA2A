<?php 
	if ($_POST) {
		$id=(int) $_POST['id'];
		//var_dump($id);exit();
		$conx= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
		$num=$conx->quote($_POST['num']);
		var_dump($num);exit();
		//REQUETE POUR MODIFIER LA DISPONIBILITE DE L'AGENT
		$query="UPDATE agent SET dispo_agent = 1 WHERE id_agent = $id";
		//$launch= $conx->query($query);
		//var_dump($launch);exit();
		
		//REQUETE POUR MODIFIER LE STATUT DE L'INCIDENT
		$query="UPDATE incident SET statut_inc = 2 WHERE num_inc = $num";
		//$launch= $conx->query($query);
		//var_dump($launch);exit();

		/*//REQUETE POUR ENREGISTRER L'INTERVENTION
			//requete pour recuperer l'identifiant de l'incident
		$req="SELECT id_incident FROM incident where num_incident= $num";
		$launch= $conx->query($req);
		$d=$launch->fetch();
		$inc= (int) $d[0];
			//requete pour creer une intervention
		$query="INSERT INTO intervention (date_intervention,id_incident, num_cpt) VALUES (CURDATE(),$inc,$id)";
		$launch= $conx->query($query);*/
		//var_dump($launch);exit();
		//header("location:../index.php");
	}
 ?>