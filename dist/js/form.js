
/**************************************************
*	Script de gestion des formulaires
***************************************************/
$(function () {

	/**************************************************
	*	Script de gestion des formulaires
	***************************************************/

	var Exploitant=$("input:radio:nth(0)");
	var Internaute=$("input:radio:nth(1)");
	var Administrateur=$("input:radio:nth(2)");
	
	$(".authentification").hide();
	$(".formInput").hide();

	
	Internaute.click(function () {
		$("#internaute .formInput").toggle("clip");
		$("#exploit .authentification").hide("clip");
		$("#admin .authentification").hide("clip");
	})

	Exploitant.click(function() {
		$("#internaute .formInput").hide("clip");
		$("#exploit .authentification").hide("clip");
		$("#admin .authentification").toggle("clip");
	});

	Administrateur.click(function() {
		$("#internaute .formInput").hide("clip");
		$("#admin .authentification").hide("clip");
		 $("#exploit .authentification").toggle("fold");
	});


	

});





