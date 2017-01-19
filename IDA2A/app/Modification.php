<?php 
$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');





if(!empty($_POST)AND !empty($_FILES)){

	/************************************ 
	* Procedure de modification des news
	*************************************/

	if ($_POST['element']==="news") {
		
		//requetes de modification d'une news 
		if (isset($_POST['Date']) AND $_POST['Date']!="") {

			$MediaR= $connexion-> prepare('UPDATE News SET Date_news=:Date_news WHERE  Titre_news=:valeur');
			$MediaR->execute(array(
				'Date_news' => $_POST['Date'], 
				'valeur' => $_POST['modif'],  
			));
			
		}

		if (isset($_POST['Lieu'])  AND $_POST['Lieu']!="") {
			
			$MediaR= $connexion-> prepare('UPDATE News SET Lieu_news=:Lieu_news WHERE Titre_news=:valeur');
			$MediaR->execute(array(
				'Lieu_news' => $_POST['Lieu'], 
				'valeur' => $_POST['modif'],  
			));
		}

		if (isset($_POST['Commentaires'])  AND $_POST['Commentaires']!="") {
			
			$MediaR= $connexion-> prepare('UPDATE News SET Commentaire_news=:Commentaire_news WHERE Titre_news=:valeur');
			$MediaR->execute(array(
				'Commentaire_news' => $_POST['Commentaires'], 
				'valeur' => $_POST['modif'],  
			));
		}


		if (isset($_FILES['Media'])  AND $_FILES['Media']['name']!="") {
			
			$MediaS= $connexion-> prepare('SELECT * FROM News WHERE Titre_news=:valeur');
			$MediaS->execute(array(
				'valeur' => $_POST['modif'], 
			));

			while ($data=$MediaS->fetch()) {

				$url="../../".$data['Media_news'];

				unlink($url);
			}


			// procedure de chargement des images

			$media=$_FILES['Media'];
			$ext = strtolower(substr($media['name'],-3));

			$allow_ext= array("jpg","png","gif");
			$url1= "public/media/".$media['name'];

			//sequence de  verification de l'extension 
			if(in_array($ext, $allow_ext)){

				move_uploaded_file($media['tmp_name'], "../../public/media/".$media['name']);	

			}else{
				$erreur="le fichier uploader n'est pas une image ni une video";
			}
			//requete preparee 
			$MediaR= $connexion-> prepare('UPDATE News SET Media_news=:Media_news WHERE  Titre_news=:valeur');
			$MediaR->execute(array(
				'Media_news' => $url1, 
				'valeur' => $_POST['modif'],  
			));
		}

		if (isset($_POST['Titre1'])  AND $_POST['Titre1']!="") {
			
			$MediaR= $connexion-> prepare('UPDATE News SET Titre_news=:Titre_news WHERE  Titre_news=:valeur');
			$MediaR->execute(array(
				'Titre_news' => $_POST['Titre1'], 
				'valeur' => $_POST['modif'],  
			));
		}


		/************************************
		*Procedure de modification des images
		*************************************/

	} elseif ($_POST['element']==="image") {


		$MediaS= $connexion->prepare('SELECT * FROM Media WHERE id_media=:valeur');
		$MediaS->execute(array(
			'valeur' => $_POST['modif']
		));

		while ($data=$MediaS->fetch()) {

			$url="../../".$data['location_media'];

			unlink($url);
		}


		// procedure de chargement des images

		$media=$_FILES['Image'];
		$ext = strtolower(substr($media['name'],-3));

		$allow_ext= array("jpg","png","gif");
		$url1= "public/media/".$media['name'];

		if(in_array($ext, $allow_ext)){

			move_uploaded_file($media['tmp_name'], "../../public/media/".$media['name']);

		}else{
			$erreur="le fichier uploader n'est pas un image ni une video";
		}

		// requete de remplacement de l'image dans la base de donnees 

		$MediaR= $connexion->prepare('UPDATE Media SET titre_media=:titre_media, desc_media=:desc_media, location_media=:location_media WHERE id_media=:valeur');
		$MediaR->execute(array(
			'titre_media' => $_POST['Titre'], 
			'desc_media' => $_POST['desc'], 
			'location_media' => $url1, 
			'valeur' => $_POST['modif'], 
		));

		/************************************
		* Procedure de modification des videos
		*************************************/
	} elseif ($_POST['element']==="video") {
		
		$MediaS= $connexion-> prepare('SELECT * FROM Video WHERE titre_projet=:valeur');
		$MediaS->execute(array(
			'valeur' => $_POST['modif'], 
		));

		while ($data=$MediaS->fetch()) {

			$url="../../".$data['url_image_projet'];

			unlink($url);
		}

		// requete de remplacement de l'image dans la base de donnees 

		$MediaR= $connexion-> prepare('UPDATE Video SET titre_video=:titre_video,lien_video=:lien_video  WHERE titre_video=:valeur');
		$MediaR->execute(array( 
			'titre_video' => $_POST['Titre1'], 
			'lien_video' => $_POST['Lien'], 
			'valeur' => $_POST['Titre'], 
		));

		/**************************************
		 *Procedure de modification des projets
		****************************************/
		
	} elseif ($_POST['element']==="projet") {
		

		$MediaS= $connexion-> prepare('SELECT * FROM Projet WHERE titre_projet=:valeur');
		$MediaS->execute(array(
			'valeur' => $_POST['modif'] 
		));

		while ($data=$MediaS->fetch()) {

			$url="../../".$data['url_image_projet'];

			unlink($url);
		}

		// procedure de chargement des images

		$media=$_FILES['Image'];
		$ext = strtolower(substr($media['name'],-3));

		$allow_ext= array("jpg","png","gif");
		$url1= "public/media/".$media['name'];

		if(in_array($ext, $allow_ext)){

			move_uploaded_file($media['tmp_name'], "../../public/media/".$media['name']);	

		}else{
			$erreur="le fichier uploader n'est pas un image ni une video";
		}

		// requete de remplacement de l'image dans la base de donnees 

		$MediaR= $connexion-> prepare('UPDATE Projet SET type_projet=:type_projet, titre_projet=:titre_projet, commentaires_projet=:commentaires_projet, url_image_projet=:url_image_projet WHERE titre_projet=:valeur');
		$MediaR->execute(array(
			'type_projet' => $_POST['Type_projet'], 
			'titre_projet' => $_POST['Titre'], 
			'commentaires_projet' => $_POST['commentaire'], 
			'url_image_projet' => $url1, 
			'valeur' => $_POST['modif']
		));
	}

/*print_r($_POST);
print_r($_FILES);*/

}







?>