<?php  
	$host="localhost";
	$base="projetbdd";
	$user="root";
	$pass="";

	$idcom = new PDO("mysql:host=".$host.";dbname=.$base",$user,$pass);


	if (isset($_POST['nom']) AND isset($_POST['prenoms']) AND isset($_POST['dateNais'])AND isset($_POST['num_phone'])AND isset($_POST['email'])AND isset($_POST['lib_cpt']) AND isset($_POST['pseudo'])AND isset($_POST['mdp'])) {


		$nom=$idcom->quote($_POST['nom']);
		$prenom=$idcom->quote($_POST['prenoms']);
		$dateNais=$idcom->quote($_POST['dateNais']);
		$num_phone=$idcom->quote($_POST['num_phone']);
		$email=$idcom->quote($_POST['email']);
		$pseudo=$idcom->quote($_POST['pseudo']);
		$mdp=$idcom->quote($_POST['mdp']);
		$lib_cpt=$idcom->quote($_POST['id_tc']);

		$reqUS="INSERT INTO user(nom,prenom,datenais,num_phone,email) VALUES($nom,$prenom,$dateNais,$num_phone,$email)";
		$reqCpt="INSERT INTO compte(pseudo,mdp,id_tc,etat_cpt,user) VALUES ($pseudo,$mdp,$lib_cpt,1,)";	
	/*	$req3="SELECT id_user from user ORDER BY id_user LIMIT 1";
	*/
		$nblignes= $idcom->exec($req);
	/*
		$lastID= $idcom->query($req3);

		$req1="INSERT INTO Compte(pseudo,mdp,lib_cpt,user) Values($pseudo,$mdp,$lib_cpt,2)";

		$compte=$idcom->exec($req1);*/



		if ($nblignes!=1) {
			$msg_err=$idcom->errorInfo();

			echo "Insertion impossible, code".$idcom->errorCode()."". $msg_err[2];
		}else {
			
		}

	}elseif (isset($_POST['nmp'])) {
		$prest=$_POST['nmp'];

		$req="INSERT INTO prestataire (lib_prest,dispo_prest) VALUES ('$prest',0) ";
		//var_dump($req);exit();
		$result=$idcom->query($req);
	}

	var_dump($_POST);

?>