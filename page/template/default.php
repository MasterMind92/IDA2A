<?php
session_start();
if (!isset($_SESSION['erreur'])) {
  $erreur=0;
  $_SESSION['erreur']=$erreur;
}
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

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div  id="Corps" class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="dist/img/projet/fond.jpg" width="100%" height="100%" class="img-responsive" alt="Image">
        <div id="Superdiv" class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">

        <!--     -->

          <img src="dist/img/projet/entete.jpg" width="100%" class="img-responsive" alt="Image">

        <!-- SLIDER -->

        <div id="Slider" class="carousel slide" data-ride="carousel">
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
          
          <div class="row">
            <div class= "col-xs-offset-3 col-xs-2  col-sm-offset-3 col-sm-2  col-md-offset-3 col-md-4  col-lg-offset-3 col-lg-2">
              Suivez-nous sur:
            </div>
            <div class= "col-xs-1  col-sm-1  col-md-1  col-lg-1">
              <a href=""> <img id="google" src="dist/img/projet/logo/google.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div class= "col-xs-1  col-sm-1  col-md-1  col-lg-1">
              <a href=""> <img id="fb" src="dist/img/projet/logo/fb.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div class= "col-xs-1  col-sm-1  col-md-1  col-lg-1">
              <a href=""> <img id="twit" src="dist/img/projet/logo/twit.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div class= "col-xs-1  col-sm-1  col-md-1  col-lg-1">
              <a href=""> <img id="insta" src="dist/img/projet/logo/insta.png" class="img-responsive" alt="Image" width="100%"  > </a>
            </div>
            <div  id="snap" class= "col-xs-1  col-sm-1  col-md-1  col-lg-1">
               <img  src="dist/img/projet/logo/snap.png" class="img-responsive" alt="Image" width="100%" > 
            </div>

          </div>

          <!--    -->
          <div class="Menu row">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                
                <div class="btn-group btn-group-justified">

                  <div class="btn-group">
                  <button class="btn btn-large btn-success dropdown-toggle" data-toggle="dropdown" type="button">ACCUEIL <span class="caret" > </span></button> 
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="accueil">Accueil</a> </li>
                    <li> <a href="">Groupe de travail</a> </li>
                    <li> <a href="">Personnes Ressources</a> </li>
                  </ul>
                </div>
                <a class="btn btn-large btn-success" href="problemes" role="button">INCIDENT</a>
                <a class="btn btn-large btn-success" href="solutions" role="button">SUGGESTIONS</a>
                <a class="btn btn-large btn-success" href="geolocalisation" role="button">GEOLOCALISATION</a>
                <a class="btn btn-large btn-success" href="identification" role="button">ADMINISTRATION</a>
                <a class="btn btn-large btn-success" href="contact" role="button">CONTACT</a>

              </div>
              </div>
            </div>
            
           </div>

            <!--    -->
          <div class="contenu row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
              <?php echo $content ; ?>
            </div>
            <div class="FlashInfo col-xs-2 col-sm-2 col-md-2 col-lg-2">
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
    <script src="dist/js/flat-ui.min.js"></script>
    <script type="text/javascript">
      
      $(function () {
      
        

        $('#snap').css({
          '':'',
          '':'',
          '':'',
          '':'',
          '':'',
        })

        $("#snap").on('mouseover',function(){
          $('#snap img').attr('src','dist/img/projet/logo/snapNeg.png');
        })
        .on('mouseout',function () {
            $('#snap img').attr('src','dist/img/projet/logo/snap.png');
        });

        $("#google").on('mouseover',function(){
          $('#google img').attr('src','dist/img/projet/logo/googleNeg.png');
        })
        .on('mouseout',function () {
            $('#google img').attr('src','dist/img/projet/logo/google.png');
        });

      });
    </script>

  </body>
</html>
