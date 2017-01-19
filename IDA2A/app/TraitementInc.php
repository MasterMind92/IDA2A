		<?php 
	
	session_start();

	//connexion a la base de donnees  
	include('connexpdo.php');
	$idcom= connexpdo("projetbdd");

	//initialisation de la requete 
/*
	$requete="SELECT * FROM Compte LIMIT 4";

	$result = $idcom->query($requete);

	$users = array(''=>'',''=>'',''=>'',);

	//Importation des classes 

	include('Class.php');

	$users= $result->fetchAll(PDO::FETCH_ASSOC);
	
	$trouve = FALSE;

	for ($i = 0; $i < 4; $i++) {

		if ($_POST['login'] == $users[$i]['Login_compte'] AND  $_POST['mdp']== $users[$i]['Mdp_compte']) {
			$trouve=TRUE;
		}
	}
	
	if ($trouve==TRUE) {
		echo "ok";
	}

	*/	

	if ( isset($_POST['incidentInt']) AND isset($_POST['CommuneInt']) AND isset($_POST['ZoneInt'])AND isset($_POST['precisionInt']) AND isset($_POST['Commentaire'])){
		// verification de l'existence de l'image

		if(!empty($_FILES)){

			//stockage du fichier 
			$media=$_FILES['photo'];

			//mise en memoire de l'extension de l'image 
			$ext = strtolower(substr($media['name'],-3));
			
			$allow_ext= array("jpg","png","gif");

			//mise en memoire de l'url de destination du fichier 
			$url= "../dist/img/projet/imgInc/".$media['name'];


			//verification de l'extension du fichier 

			if(in_array($ext, $allow_ext)){
			
				move_uploaded_file($media['tmp_name'], "../../dist/img/projet/imgInc/".$media['name']);
				
				echo "L'image a ete enregistree";
			}
		}

		//reception des donnees via le formulaire 
		$cpt=$_SESSION['cpt_e'];
	/*	$libInc= $idcom->quote($_POST['catincInt']);*/
		/*$incid= $idcom->quote($_POST['incidentInt']);*/
		$incid= "Depot d'ordure";
		$zone= $idcom->quote($_POST['ZoneInt']);
		$pres= $idcom->quote($_POST['precisionInt']);
		$com= $idcom->quote($_POST['Commentaire']);
		
		$requete = $idcom->query("INSERT INTO  incident(lib_inc,date_inc,longitude,lattitude,descr_incident,sup_inc,id_catincident,id_zone,id_eco,statut_inc) VALUES ($incid,CURDATE(),0,0,$com,$pres,$libInc,$zone,$cpt,0)");
		if ($requete) {
			$year="";
			$com="";
			$id="";
			$z="";
			$req =$idcom->query("SELECT i.id_inc as id, YEAR(i.date_inc) as y, z.id_zone as zone, c.nom_commune as com FROM incident i, zone z, commune c WHERE i.id_zone=z.id_zone AND z.id_commune=c.id_commune ORDER BY i.id_inc DESC LIMIT 1");
			$d=$req->fetch();
			$id=$d['id'];
			$year=$d['y'];
			$z=$d['zone'];
			$com=$d['com'];
			$y= substr($year,2);
			$c= substr($com,0,3);
			$str=$y."/".$id."/".$z."/".$c;
			$i=(int) $id;
			$req=$idcom->query("UPDATE incident SET num_inc='$str' where id_inc=$i");
			echo 'Votre plainte a bien &eacute;t&eacute; prise en compte';
		}else{
			echo " sa marche pas ";
		}

	}else{
		echo "erreur";
		var_dump($_POST);
	}