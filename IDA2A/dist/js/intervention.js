
/**************************************************
*	Script de gestion des formulaires
***************************************************/
$(function () {

	/**************************************************
	*	Script de gestion des formulaires
	***************************************************/

	var Exploitant=$("#Profil").find("option [value='Exploitant']");
	var Autre=$("input:radio:nth(1)");
	var Internaute=$("input:radio:nth(0)");
	var Administrateur=$("#Profil").find("option [value='Administrateur']");
	
	$(".authentification").hide();
	$(".formInput").hide();
	$(".panel").hide();
	$("#Profil").hide();	

	
	Internaute.click(function () {
		$(".authentification").hide(500);
		$(".formInput").hide(500);
		$("#internaute .formInput").toggle("clip");
		$("#exploit .authentification").hide("clip");
		$("#Admin .authentification").hide("clip");
		$("#Profil").hide();
	})

	Autre.click(function () {
		$("#internaute .formInput").hide("clip");
		$("#Profil").toggle(500);	 
	});

	$("#Profil > select").on('change', function () {
		if($(this).val()=="Exploitant"){
			
			$(".authentification").hide(500);
			$(".formInput").hide(500);
			$("#exploit .authentification").hide("clip");
			$("#Admin .authentification").toggle("fold");			
		}else if ($(this).val()=="Administrateur") {
			
			$(".authentification").hide(500);
			$(".formInput").hide(500);
			$("#Admin .authentification").hide("clip");
			 $("#exploit .authentification").toggle("fold");			
		}
	});

	/**********************************************************************
	*	Partie relative a la gestion de la liste en fonction des communes
	***********************************************************************/


	var FrmInternaute= $("#CommuneInt");
	var FrmExp= $("#CommuneExp");
	var FrmAdmin= $("#CommuneAdmin");

	FrmInternaute.change(function () {
		 
		 var commune = $(this).val() ;

		 $.get("../IDA2A/page/data/"+commune+".html",function (data) {
		 	 $("#ZoneInt").html(data);
		 });
	});


	FrmExp.change(function () {
		 
		 var commune = $(this).val() ;

		 $.get("../IDA2A/page/data/"+commune+".html",function (data) {
		 	 $("#ZoneExp").html(data);
		 });
	});


	FrmAdmin.change(function () {
		 
		 var commune = $(this).val() ;

		 $.get("../IDA2A/page/data/"+commune+".html",function (data) {
		 	 $("#ZoneAdmin").html(data);
		 });
	});


	/**********************************************************************
	*	Partie relative a la gestion des formulaires d'authentification 
	***********************************************************************/

	//formulaire d'authentification de l'exploitant 

	$("#FrmAuthExp").submit(function (event) {
		 
		 //Arret du postage de formulaire normal 
		event.preventDefault();


		 //recuperation des valeurs des elements du formulaire 

		 var form=$(this),
		 	login=form.find("input[name='login']").val(),
		 	mdp=form.find("input[name='mdp']").val();


		 //effectuation de la requete 

		$.post("../IDA2A/app/Traitement.php",{login:login, mdp:mdp},function (data) {
			

			 if (data=="ok") {
			 	$("#exploit .authentification").hide("clip");
			 	$("#exploit .formInput").show(500);

			 	// reinitialisation des champs 
				form.find("input[name='login']").val("");
				form.find("input[name='mdp']").val("");	

			 	$(this).add(".form-group",".authentification").removeClass("has-error");

			 }else {
				$(this).add(".form-group",".authentification").addClass("has-error");		 	
			 }
		});

	});


	//formulaire d'authentification de l'administration 

	$("#FrmAuthAdmin").submit(function (event) {
		 
		 //Arret du postage de formulaire normal 
		event.preventDefault();

		 //recuperation des valeurs des elements du formulaire 

		 var form=$(this),
		 	login=form.find("input[name='login']").val(),
		 	mdp=form.find("input[name='mdp']").val();

		 //effectuation de la requete 

		$.post("../IDA2A/app/Traitement.php",{login:login, mdp:mdp},function (data) {
			
			if (data=="ok") {
			 	
			 	$("#Admin .authentification").hide("clip");
			 	$("#Admin .formInput").show(500);
			 	$(this).add(".form-group",".authentification").removeClass("has-error");
			 	

			 	// reinitialisation des champs 
			 	form.find("input[name='login']").val("");
			 	form.find("input[name='mdp']").val("");
			 	

			 }else {

				$(this).add(".form-group",".authentification").addClass("has-error");			 	
			 }
			 
		});


	});



	/************************************************************************************
	*	PARTIE DU SCRIPT RELATIVE AUX POSTAGE DES FORMULAIRES PAR REQUETES AJAX 
	*************************************************************************************/
	
	$(".Sugg .formInput ").bind("submit",function (event) {
		
		//Arret du postage de formulaire normal 
		event.preventDefault();

		var infos;

		//reception des infos du formulaire 
		infos = $(this).find("textarea").val();

		$.post("../IDA2A/app/Traitement.php",{Commentaire:infos},function (data){
			
			 	alert(data);
		});

	});

	/************************************************************************************
	* 
	****************************************************************************
	*********/

	$(".Incident .formInput").bind("submit",function(e){
		
		//Arret du postage de formulaire normal 
		e.preventDefault();

		//reception des infos du formulaire 
		var form=  $(this).serialize();

		$.post("../IDA2A/app/TraitementInc.php",form,function (data){
			 	alert(data);
		});

	});

});





