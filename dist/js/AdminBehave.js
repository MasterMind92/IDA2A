
/**************************************************************
*		SCRIPT DE GESTION DU COMPORTEMENT DE L'ADMINISTRATION 
***************************************************************/

$(function () {


	/* MASQUAGE DES DIFFERENTES PAGES  */	

	$('.Start').hide();
	$('.Zone').hide();
	$('.Suggestion').hide();
	$('#abobo').hide();
	$('#adjame').hide();
	$('#anyama').hide();
	$('#cocody').hide();
	$('#plateau').hide();
	$('#marcory').hide();
	$('#portbouet').hide();
	$('#yopougon').hide();
	$('#koumassi').hide();
	$('#treichville').hide();
	$('#attecoube').hide();

	/* EVENEMENT CLICK SUR LE BOUTON ACCUEIL */	
	
	$(".navbar-brand").click(function () {
		
		 $(".Start").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $(".Zone").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $("#googleMap").slideDown(500);
	})
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS GENERALES */	

	$("ul.dropdown-menu:eq(0) li:first > a").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $(".Zone").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $(".Start").slideDown(500);

	});
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS PAR ZONE  */	

	$("ul.dropdown-menu:eq(0) li:eq(1) > a").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		  $(".Zone").slideDown(500);
	});

	/* EVENEMENT CLICK SUR LE BOUTON SUGGESTION */	

	$("ul.dropdown-menu:eq(1) li:first > a").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $(".Suggestion").slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ABOBO */
	
	$("#ab").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#abobo').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ADJAME */
	
	$("#ad").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#adjame').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ANYAMA */
	
	$("#an").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#anyama').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE COCODY */
	
	$("#co").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#cocody').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE PLATEAU */
	
	$("#pl").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#plateau').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE MARCORY */
	
	$("#ma").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#marcory').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE PORT-BOUET */
	
	$("#po").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#portbouet').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE YOPOUGON */
	
	$("#yo").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#yopougon').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE KOUMASSI */
	
	$("#ko").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#koumassi').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE TREICHVILLE */
	
	$("#tr").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#attecoube').slideUp(500);
		 $('#treichville').slideDown(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ATTECOUBE */
	
	$("#at").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Zone").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideDown(500);
	});

	//EVENEMENT CLICK SUR BOUTON RETOUR

	$(".back").click(function () {
		 $("#googleMap").slideUp(500);
		 $(".Start").slideUp(500);
		 $(".Suggestion").slideUp(500);
		 $('#abobo').slideUp(500);
		 $('#adjame').slideUp(500);
		 $('#anyama').slideUp(500);
		 $('#cocody').slideUp(500);
		 $('#plateau').slideUp(500);
		 $('#marcory').slideUp(500);
		 $('#portbouet').slideUp(500);
		 $('#yopougon').slideUp(500);
		 $('#koumassi').slideUp(500);
		 $('#treichville').slideUp(500);
		 $('#attecoube').slideUp(500);
		  $(".Zone").slideDown(500);
	});


	//GESTION DU CHANGEMENT DE LA CHARTE GRAPHIQUE

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


	/******************************************************************************
	* 				REQUETE AJAX DES SOUMISSION DES FORMULAIRES 
	*******************************************************************************/

	


});