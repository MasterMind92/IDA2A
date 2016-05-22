
/**************************************************************
*		SCRIPT DE GESTION DU COMPORTEMENT DE L'ADMINISTRATION 
***************************************************************/

$(function () {


	/* MASQUAGE DES DIFFERENTES PAGES  */	

	$('.Start').hide();
	$('.Zone').hide();
	$('.Suggestion').hide();


	/* EVENEMENT CLICK SUR LE BOUTON ACCUEIL */	
	
	$(".navbar-brand").click(function () {
		
		 $(".Start").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $(".Zone").slideUp(500);
		 $("#Accueil").slideDown(500);
	})
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS GENERALES */	

	$("ul.dropdown-menu:eq(0) li:first > a").click(function () {
		 $("#Accueil").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Start").slideDown(500);

	});
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS PAR ZONE  */	

	$("ul.dropdown-menu:eq(0) li:eq(1) > a").click(function () {
		 $("#Accueil").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Suggestion").slideUp(500);
		  $(".Zone").slideDown(500);
	});

	/* EVENEMENT CLICK SUR LE BOUTON SUGGESTION */	

	$("ul.dropdown-menu:eq(1) li:first > a").click(function () {
		 $("#Accueil").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideDown(500);
	});

});