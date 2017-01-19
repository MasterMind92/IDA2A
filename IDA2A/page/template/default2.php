<?php 
$host="localhost";
$base="projetbdd";
$user="root";
$pass="";

$MARKERS = array();
$marker = array();

$idcom = new PDO("mysql:host=".$host.";dbname=".$base,$user,$pass);

$requete="SELECT * FROM incident"; 

$result=$idcom->query($requete);

$i=0;
//extraction des infos sur tous les markers
/*if (($ligne=$result->fetch(PDO::FETCH_ASSOC))==FALSE) {
    $MARKERS=null;
}else{*/
  
  while ($ligne=$result->fetch(PDO::FETCH_ASSOC)) {
  
  foreach ($ligne as $key => $value) {
    $marker[$key]=$value;
  }

  $MARKERS[$i]= $marker;
  $i++;

  }

  for ($i = 0; $i <count($MARKERS) ; $i++) {
    $MARKERS[$i]['statut_inc']=(int)$MARKERS[$i]['statut_inc'];
  }
/*}*/
/*var_dump($MARKERS);exit();*/

?>

<!DOCTYPE html> 
<html lang="en">  
  <head>
    <meta charset="utf-8">
    <title>Projet IDA2A</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.min.css" rel="stylesheet">
    <link href="dist/css/bidouille.css" rel="stylesheet">
    <script  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTC8cIfqIXdxrPWK5qo8NzAlfINAVaOyo&signed_in=true&callback=initMap" async defer></script>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div  id="Corps" class="row">
      <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="dist/img/projet/fond.jpg" width="100%" height="100%" class="img-responsive" alt="Image">
        <div id="Superdiv" class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">

        <!--     -->

          <img src="dist/img/projet/entete.jpg" width="100%" class="img-responsive" alt="Image">

        <!-- SLIDER -->

        <div id="Slider" class=" hidden-xs carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#Slider" data-slide-to="0" class=""></li>
                <li data-target="#Slider" data-slide-to="1" class=""></li>
                <li data-target="#Slider" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="dist/img/projet/entetecarte.jpg" width="100%">
                </div>
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="dist/img/projet/salete.jpg" width="100%">
                </div>
                <div class="item active">
                    <img data-src="Third slide" alt="Third slide" src="dist/img/projet/entete2.jpg" width="100%">
                    
                </div>
            </div>
            <a class="left carousel-control" href="#Slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#Slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
          <!-- -->
          <div class="row">
            <div class= "col-xs-3  col-sm-offset-3 col-sm-2  col-md-offset-3 col-md-4  col-lg-offset-3 col-lg-2">
              Suivez-nous sur:
            </div>
            <div class= "col-xs-3 col-sm-2  col-md-1  col-lg-1">
              <a href=""> <img id="google" src="dist/img/projet/logo/google.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div class= "col-xs-3  col-sm-2  col-md-1  col-lg-1">
              <a href=""> <img id="fb" src="dist/img/projet/logo/fb.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div class= "col-xs-3  col-sm-2  col-md-1  col-lg-1">
              <a href=""> <img id="twit" src="dist/img/projet/logo/twit.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div class= "col-xs-3  col-sm-2  col-md-1  col-lg-1">
              <a href=""> <img id="insta" src="dist/img/projet/logo/insta.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div  id="snap" class= "col-xs-3  col-sm-2  col-md-1  col-lg-1">
               <img  src="dist/img/projet/logo/snap.png" class="img-responsive" alt="Image" width="100%" > 
            </div>

          </div>

          <!-- -->

          <div class="Menu row">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <nav class="navbar navbar-default " role="navigation">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                  <?php 
                    $id=(int) $_SESSION['cpt_e'];
                    $conx= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
                    $query="SELECT i.num_inc as num, cat.libelle as ca, i.lib_inc as lib, i.date_inc as dat, i.sup_inc as sup,i.descr_incident as descr, c.nom_commune as com, z.libelle_zone as nz, e.nom_eco as nm, e.prenom_eco as pm FROM incident i, catincident cat, commune c, zone z, ecocitoyen e where i.id_catincident=cat.id_catincident AND i.id_zone=z.id_zone AND i.id_eco=e.id_eco AND z.id_commune=c.id_commune AND e.id_eco=$id AND i.statut_inc=2 AND i.sas IS NULL ORDER BY i.id_inc DESC LIMIT 1";
                    $launch= $conx->query($query);
                    $d=$launch->fetch();
                    $list[]=$d;
                    //var_dump($list);exit();

                  ?> 
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse navbar-ex1-collapse">

                  <a href="#" type="button" class="dropdown-toggle btn btn-success  navbar-btn" data-toggle="dropdown">ACCUEIL <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="accueil">Accueil</a> </li>
                    <li> <a href="">Groupe de travail</a> </li>
                    <li> <a href="">Personnes Ressources</a> </li>
                  </ul>
                  <a type="button" class="btn btn-success  navbar-btn" href="problemes" >PLAINTE</a>
                 <!--<a type="button" class="btn btn-success  navbar-btn" href="geolocalisation">GEOLOCALISATION</a> -->
                  <a type="button" class="btn btn-success" data-toggle="modal" <?php  if($list[0]==FALSE){ echo "disabled";} ?> href='#modal-id' >ENQUETE DE SATISFACTION</a>
                  <a type="button" class="btn btn-success  navbar-btn" href="../index.php">DECONNEXION</a>
                  
                  </div><!-- /.navbar-collapse -->
                </nav>
              </div>
            </div>
            
           </div>
           <!-- REQUETE DE LA PAGE MODAL -->
            
           <!-- CONTENU DE LA PAGE MODAL -->
           <div class="modal fade" id="modal-id">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Enquête de satisfaction</h4>
                 </div>
                 <div class="modal-body">
                   <p>Apr&egrave;s avoir re&ccedil;u la plainte n<sup>0</sup>:<strong><?php echo $list[0]['num']; ?></strong>, indiquant un problème de <strong><?php echo $list[0]['ca']." ".$list[0]['lib']; ?></strong>, portant sur un incident ayant eu lieu dans la commune de <strong><?php echo $list[0]['com']; ?></strong>, dans le quartier suivant:<strong><?php echo $list[0]['nz']." ".$list[0]['sup']; ?></strong>, &agrave; la date du <strong> <?php echo $list[0]['dat']; ?></strong> que vous: M/Mme <strong><?php echo $list[0]['nm']." ".$list[0]['pm']; ?></strong> nous avez envoyé, où vous avez stipul&eacute; que <strong><?php echo $list[0]['descr']; ?></strong>, Nous avons d&eacute;taché une équipe sur le terrain afin de r&eacute;soudre ce probl&egrave;me et serions plus qu'heureux de savoir si vous &ecirc;tes satisfait du r&eacute;sultat:</p>
                    <div class="btn-group">
                      <form class="clue" role="form">
                        <input type="hidden" name="num" value="<?php echo $list[0]['num'];?>">
                        <input type="hidden" name="id" value="1">         
                        <button type="submit" class="btn btn-info">Satisfait</button>
                      </form>
                      <form class="clue" role="form">
                        <input type="hidden" name="num" value="<?php echo $list[0]['num'];?>">
                        <input type="hidden" name="id" value="2">         
                        <button type="submit" class="btn btn-danger">Non satisfait</button>
                      </form>
                    </div>  
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  
                 </div>
               </div>
             </div>
           </div>
           <!-- <a href="app/enreg.php">liiiii</a> -->
            <!--  SECTION DE LA PAGE QUI PREND LE CONTENU DES DIFFERENTES PAGES   -->
          <div class="contenu row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">

              <?php echo $content ; ?>

            </div>
            <div class="FlashInfo hidden-xs hidden-sm col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <span>FLASH INFO</span>
            </div>
          </div>

          <!--    -->

          <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <img src="dist/img/projet/ita.jpg"  class="img-responsive" alt="Image">
            </div>
            <div class="col-xs-offset-1 col-xs-4 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-4">
              <img src="dist/img/projet/logo_sodeci.jpg"  height=""  class="img-responsive" alt="Image">
            </div>
            <div class="col-xs-offset-1 col-xs-3 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-3">
              <img src="dist/img/projet/environnement.jpg" class="img-responsive" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="dist/js/vendor/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/form.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    
    <script type="text/javascript">

    /*****************************************************************
        *   SCRIPT DE GESTION DE LA CARTE GOOGLE MAPS 
        ******************************************************************/
        var Markers=[];
      
      function initMap() {

          var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 12,
            center: new google.maps.LatLng(5.3096600,-4.0126600)
          });

          /*Load(map);*/

          var geocoder = new google.maps.Geocoder();

          document.getElementById('affiche').addEventListener('click', function() {
            geocodeAddress(geocoder, map);

          });

          document.getElementById('Marquer').addEventListener('click', function() {
            Mark(geocoder, map);
          });
        }

        
        function geocodeAddress(geocoder, resultsMap) {
  
          var address =$(".com").val();

          geocoder.geocode({'address': address}, function(results, status){
            
            if (status === google.maps.GeocoderStatus.OK) {
              
              resultsMap.setCenter(results[0].geometry.location);
              resultsMap.setZoom(16);

              document.getElementById('Lng').value=resultsMap.getCenter(results[0].geometry.location).lng();
              document.getElementById('Lat').value=resultsMap.getCenter(results[0].geometry.location).lat();
            
            } else  {

              alert('Geocode was not successful for the following reason: ' + status);
            
            }
          });
        }

        //fonction de recuperation des coordonnees pendant evenement drag

        function setposition(marker){

          var pos=marker.getPosition();

          document.getElementById('Lng').value=pos.lng();
          document.getElementById('Lat').value=pos.lat();
        }

        //fonction de marquage des endroits geocoder


        function Mark (geocoder, map) {

          var address = $(".com").val();

          geocoder.geocode({'address': address}, function(results, status) {
        
            if (status === google.maps.GeocoderStatus.OK) {
               
              var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
                draggable: true,
                animation: google.maps.Animation.DROP
              });

              google.maps.event.addListener(marker,'drag',function () {
                   setposition(marker);
              });
            }
          });
        }

    
      /*function Load (map) {

          var tabLat=[],tabLng=[],etat=[],i,j;

          <?php  
            for ($i = 0; $i < count($MARKERS); $i++) {
          
            echo "tabLat[".$i."]=".$MARKERS[$i]['lattitude']." ;";
            echo "tabLng[".$i."]=".$MARKERS[$i]['longitude']." ;";
            echo "etat[".$i."]=".$MARKERS[$i]['statut_inc']." ;";
          
            }

          ?>

        for ( j = 0; j < <?php echo count($MARKERS);?> ; j++) {

          if (etat[j]=="2") {
            var marker = new google.maps.Marker({
                  map: map,
                  position: new google.maps.LatLng(tabLat[j] ,tabLng[j]),
                  icon:'dist/img/icons/icon/markg(2).png',
                  animation: google.maps.Animation.DROP
                });
          } else if (etat[j]=="1") {
            var marker = new google.maps.Marker({
                  map: map,
                  position: new google.maps.LatLng(tabLat[j] ,tabLng[j]),
                  icon:'dist/img/icons/icon/marko.png',
                  animation: google.maps.Animation.DROP
                });
          }else{
          var marker = new google.maps.Marker({
                  map: map,
                  position: new google.maps.LatLng(tabLat[j] ,tabLng[j]),
                  animation: google.maps.Animation.DROP
                });
          }
        }
*/
      $(function () {

        $("#Marquer").attr("disabled","disabled");
        $("#submit").attr("disabled","disabled");

        $("#affiche").on("click",function  (event) {
           $("#Marquer").removeAttr("disabled");
        });

        $("#Marquer").on("click",function  (event) {
           $("#submit").removeAttr("disabled");
        });

        $("#submit").on("click",function  (event) {
           $("#Marquer").attr("disabled","disabled");
          $("#submit").attr("disabled","disabled");

        });

        $('#Accueil > div:nth(1)').css({
          "color":"rgb(68,195,123)",
        });


        $('#Accueil > div:nth(1)').hide();
        $('#Accueil > div:nth(2)').hide();


        $('#Accueil > div:nth(0) .suivant ').on('click', function() {
          
          $('#Accueil > div:nth(0)').slideUp(500);  
          $('#Accueil > div:nth(1)').show();  
        
        });


        $('#Accueil > div:nth(1) .suivant ').on('click', function() {
          
          $('#Accueil > div:nth(1)').slideUp(500);  
          $('#Accueil > div:nth(2)').show();  
        
        });

        $('#Accueil > div:nth(2) .suivant ').on('click', function() {
            
          $('#Accueil > div:nth(2)').slideDown(500, function() {
             $('#Accueil > div:nth(0)').slideDown(500);
          });    
        
        });

        $('.clue').on('submit', function () {
          //e.preventDefault();
          var form= $(this).serialize();
          $.post('../IDA2A/app/mod.php', form, function (data) {
            alert(data);
          });
          return false;
        })

        $('#submit').click(function (e) {

          e.preventDefault();

          var Lat = $('form').find('input[name=\'Lat\']').val();
          var Lng = $('form').find('input[name=\'Lng\']').val();/*
          var catincInt = $('form').find('select[name=\'catincInt\']').val();
          var incidentInt = $('form').find('select[name=\'incidentInt\']').val();*/
          var Commentaire = $('form').find('textarea[name=\'Commentaire\']').val();
          var commune = $('form').find('select[name=\'CommuneInt\']').val();
          var zone = $('form').find('select[name=\'ZoneInt\']').val();
          var precision = $('form').find('input[name=\'pre_sup\']').val();
        

        alert(Lat+" "+Lng+" "+catincInt+" "+incidentInt+" "+Commentaire+" "+commune+" "+zone+" "+precision);          

          $.post("app/enreg.php",{Commentaire:Commentaire,Lat:Lat,Lng:Lng,commune:commune,zone:zone,precision:precision},function (data) {
            alert(data);
          });
            
        });

      });

    </script>
  </body>
</html>