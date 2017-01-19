
/**************************************************************
*		SCRIPT DE GESTION DU COMPORTEMENT DE L'ADMINISTRATION 
***************************************************************/

$(function () {


	/* MASQUAGE DES DIFFERENTES PAGES  */	

	$('.Zone').hide();
	$('.Start').hide();
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
	$('#stg').hide();
	$('#stz').hide();
	$('#lco').hide();
	$('#gest').hide();
	$('#acpt').hide();
	/* EVENEMENT CLICK SUR LE BOUTON ACCUEIL */	
	
	$(".navbar-brand").click(function () {
		
		 $('.Start').slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $(".googleMap").fadeIn(500);
	})
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS GENERALES */	

	$("ul.dropdown-menu:eq(0) li:first > a").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $(".Start").fadeIn(500);

	});
	
	/* EVENEMENT CLICK SUR LE BOUTON INFOS PAR ZONE  */	

	$("ul.dropdown-menu:eq(0) li:eq(1) > a").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		  $(".Zone").fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LE BOUTON SUGGESTION */	

	$("ul.dropdown-menu:eq(1) li:first > a").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ABOBO */
	
	$("#ab").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#abobo').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ADJAME */
	
	$("#ad").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#adjame').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ANYAMA */
	
	$("#an").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#anyama').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE COCODY */
	
	$("#co").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#cocody').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE PLATEAU */
	
	$("#pl").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#plateau').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE MARCORY */
	
	$("#ma").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#marcory').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE PORT-BOUET */
	
	$("#po").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE YOPOUGON */
	
	$("#yo").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE KOUMASSI */
	
	$("#ko").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE TREICHVILLE */
	
	$("#tr").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#treichville').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LA ZONE ATTECOUBE */
	
	$("#at").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').fadeIn(500);
	});

	/* EVENEMENT CLICK SUR LE BOUTON STAT PAR ZONE  */
	
	$("ul.dropdown-menu:eq(2) li:first > a").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#stg').fadeIn(500);

	});
	
	/* EVENEMENT CLICK SUR LE BOUTON STAT PAR ZONE  */	

	$("ul.dropdown-menu:eq(2) li:eq(1) > a").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#stz').fadeIn(500);
	});

	/*EVENEMENT CLICK SUR LE BOUTON GESTION DES COMPTES*/

	$("ul.dropdown-menu:eq(3) li:eq(0) > a").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#acpt').fadeIn(500);
		 
	});

	//EVENEMENT CLICK SUR LE BOUTON DE RECHERCHE DE COMPTE
	$("#acpt > div.btn-group > a.btn:eq(0)").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#gest').fadeIn(500);
		 
	});

	//EVENEMENT CLICK SUR LE BOUTON DE RECHERCHE DE COMPTE
	$("#acpt > div.btn-group > a.btn:eq(1)").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $(".Zone").slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $('#lco').fadeIn(500);
		 
	});
	
	//EVENEMENT CLICK SUR BOUTON RETOUR

	$(".back").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('#acpt').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $(".Zone").fadeIn(500);
	});

	//EVENEMENT CLICK SUR LE BOUTON RETOUR DE GESTION DES COMPTES

	$("#gest >div > div > h4.fback").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('.Zone').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $("#acpt").fadeIn(500);
	});

	//EVENEMENT CLICK SUR LE BOUTON RETOUR DE RECHERCHE DE COMPTE

	$("#lco > div > h4.fback").click(function () {
		 $(".googleMap").slideUp(500, function (){$(this).remove();});
		 $(".Start").slideUp(500, function (){$(this).remove();});
		 $(".Suggestion").slideUp(500, function (){$(this).remove();});
		 $('#abobo').slideUp(500, function (){$(this).remove();});
		 $('#adjame').slideUp(500, function (){$(this).remove();});
		 $('#anyama').slideUp(500, function (){$(this).remove();});
		 $('#cocody').slideUp(500, function (){$(this).remove();});
		 $('#plateau').slideUp(500, function (){$(this).remove();});
		 $('#marcory').slideUp(500, function (){$(this).remove();});
		 $('#portbouet').slideUp(500, function (){$(this).remove();});
		 $('#yopougon').slideUp(500, function (){$(this).remove();});
		 $('#koumassi').slideUp(500, function (){$(this).remove();});
		 $('#treichville').slideUp(500, function (){$(this).remove();});
		 $('#attecoube').slideUp(500, function (){$(this).remove();});
		 $('#stg').slideUp(500, function (){$(this).remove();});
		 $('#stz').slideUp(500, function (){$(this).remove();});
		 $('#lco').slideUp(500, function (){$(this).remove();});
		 $('.Zone').slideUp(500, function (){$(this).remove();});
		 $('#gest').slideUp(500, function (){$(this).remove();});
		 $("#acpt").fadeIn(500);
	});


	//NOUVEAU CODE D'AFFICHAGE DES INFOS PAR ZONE 

	$(".Zone").find("h2").click(function (event) {
		alert("wai c bon");
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

	//script des actions de l'administrateur sur les comptes 



	$("#lco  .action").on("click",function() {
		$.post("../../IDA2A/app/GestComptes.php",{instruction:$(this).html()}, function (data) {
			alert(data);
		});
	});


	/******************************************************************************
	* 				REQUETE AJAX DE RECHERCHE DES PAGES
	*******************************************************************************/

	$("nav a[data-page] ").click(function (event) {
		
		var page=$(this).attr("data-page");
		

			if (page==="statg") {

				$.get("../IDA2A/page/administration/"+page+".html",function (data) {
					$("#conteneur").children().slideUp(500,function (argument) {
						$(this).remove();
					});
					$('#conteneur').delay(500).append(data);
				});

			} else if (page==="statz"){

				$.get("../IDA2A/page/administration/"+page+".html",function (data) {
					
					$("#conteneur").children().slideUp(500,function (argument) {
						$(this).remove();
					});
					$('#conteneur').delay(500).append(data);
				});

			}else{

				$.get("../IDA2A/page/administration/"+page+".php",function (data) {
					$("#conteneur").children().slideUp(500,function (argument) {
						$(this).remove();
					});

					$('#conteneur').delay(500).append(data);
					
				});
			}	
		});
		

	});
