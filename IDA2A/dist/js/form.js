
/**************************************************
*	Script de gestion des formulaires
***************************************************/
$(function () {

	
	

	
	
	/**********************************************************************
	*	Partie relative a la gestion de la liste en fonction des communes
	***********************************************************************/


	var FrmInternaute= $("#adresse");
	
	FrmInternaute.change(function () {
		
		// alert($(this).find("option").length);
		 var commune = $(this).val();
		 //alert(Zone);

		 $.get("../IDA2A/page/data/"+commune+".html",function (data) {
		 	// $("#ZoneInt").children().appendTo(data);
		 	if ($("#ZoneInt").has("option:eq(1)")) {
		 		
		 		var compteur=$("#ZoneInt").find('option').length;
		 			
				$("#ZoneInt > option:gt(0)").remove();

		 	}

		 	$(""+data+"").insertAfter("#ZoneInt > option:eq(0)");
		 	
		 	//console.log(data);
		 	 $("#ZoneInt").on('change',function(){

		 	 	$.post("app/find.php",{idzone:$(this).val()},function (data) {
		 	 		//alert(data);
		 	 		$('.com').val("Abidjan,"+data);
		 	 		var affich=$('.com').val();
		 	 		console.log(affich);
		 	 	});
		 	 	//alert($(this).find('id').length);
		 	 	$('.com').val("Abidjan,"+$(this).val());
		 	 })
		 });
	});


	




	//formulaire d'authentification de l'administration 

	



	

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





