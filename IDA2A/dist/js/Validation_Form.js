/*---------------------------------------
La fonction surligne est la fonction 
appelee quand un champ est vide 
----------------------------------------*/

function surligne(champ, erreur){
	if(erreur){
		champ.style.border="2px solid red";
		champ.style.borderWidth= "2px 4px 2px 4px";
	}else{
		champ.style.border="2px solid rgb(41,250,47)";
		champ.style.borderWidth= "2px 4px 2px 4px";
	}
}


/*----------------------------------------
	fonction de verification du champ nom
-----------------------------------------*/

function verif(champ){
	if(champ.value.length <= 1){
		surligne(champ,true);
		return false;
	}
	else{
		surligne(champ,false);
		return true;
	}
}


/*-----------------------------------------
	fonction de verification du formulaire
------------------------------------------*/

function verifFormNews(f){
	var CatOK= verif(f.Categorie);
	var TitreOK= verif(f.Titre);
	var LieuOK= verif(f.Lieu);
	var ComOk= verif(f.Commentaires);
	
	if (CatOK && TitreOK && LieuOK && ComOk){
		return true;
	}
	else{
		alert("veuillez remplir  correctement tous les champs ");
		return false;
	}
}

function verifFormMedia(f){
	var TitreOK= verif(f.Titre);
	var DescOK= verif(f.desc);
	
	if (TitreOK && DescOK){
		return true;
	}
	else{
		alert("veuillez remplir  correctement tous les champs ");
		return false;
	}
}

function verifFormVideo(f){
	var TitreOK= verif(f.Titre);
	var LienOK= verif(f.Lieu);
	var ComOk= verif(f.Commentaires);
	
	if (CatOK && TitreOK && LieuOK && ComOk){
		return true;
	}
	else{
		alert("veuillez remplir  correctement tous les champs ");
		return false;
	}
}

function verifFormProjet(f){
	
	var TypeOK= verif(f.Type);
	var NomOK= verif(f.Nom);
	var ComOK= verif(f.commentaire);
	
	if (TitreOK && DescOK && ComOK){
		return true;
	}
	else{
		alert("veuillez remplir  correctement tous les champs ");
		return false;
	}
}