
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
		 $("#googleMap").slideDown(500);
	})
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS GENERALES */	

	$("ul.dropdown-menu:eq(0) li:first > a").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Start").slideDown(500);

	});
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS PAR ZONE  */	

	$("ul.dropdown-menu:eq(0) li:eq(1) > a").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Suggestion").slideUp(500);
		  $(".Zone").slideDown(500);
	});

	/* EVENEMENT CLICK SUR LE BOUTON SUGGESTION */	

	$("ul.dropdown-menu:eq(1) li:first > a").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideDown(500);
	});


	//CHANGEMENT DE LA CHARTE GRAPHIQUE

	var i=1;
	$("#theme").click(function (event) {
		 
		 if ((i%2)==0) {
		 	
		 	//arret de la redirection du lien 

			 event.preventDefault();

			 //changement visuel des elements de l'administration 

			 $("nav ").removeClass("navbar-inverse").addClass("navbar-orange");
			 $("nav .btn").removeClass("btn-success").addClass("btn-orange");
			 $("footer > div").addClass("btn-orange").css("backgroundColor","");	
			 i++;

		 }else {

		 	
			 //arret de la redirection du lien 

			 event.preventDefault();

			 //changement visuel des elements de l'administration 

			 $("nav ").removeClass("navbar-orange").addClass("navbar-inverse");
			 $("nav .btn").removeClass("btn-orange").addClass("btn-success");
			 $("footer > div").removeClass("btn-orange").css("backgroundColor","#34495e");
			 i++;

		 }
	})

});