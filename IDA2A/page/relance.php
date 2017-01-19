<?php 
	$id=(int) $_SESSION['cpt_e'];
	$conx= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
	$query="SELECT i.num_inc as num, cat.libelle as ca, i.lib_inc as lib, i.date_inc as dat, c.nom_commune as com, z.libelle_zone as nz FROM incident i, catincident cat, commune c, zone z, agent a where i.id_catincident=cat.id_catincident AND i.id_zone=z.id_zone AND i.id_agent=a.id_agent AND z.id_commune=c.id_commune AND a.id_agent=$id AND i.statut_inc=4";
	$launch= $conx->query($query);
	$d=$launch->fetch();
	$list[]=$d;
	//var_dump($d);exit();

 ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h4 class="text-center"></h4>
	<p>Apr&egrave;s avoir re&ccedil;u la plainte n<sup>0</sup>:<strong><?php echo "'num incident'"; ?></strong>, portant sur un incident ayant eu lieu dans la commune de <strong><?php echo "'commune'"; ?></strong>, dans le quartier suivant:<strong><?php echo "'Zone'"; ?> <?php echo "'precision supp'"; ?></strong>, &agrave; la date du <strong> <?php echo "'date incident'"; ?></strong> que vous: M/Mme <strong><?php echo "'nom prenom'"; ?></strong> nous avez envoyé, où vous avez stipul&eacute; que <strong><?php echo "'description incident'"; ?></strong>, Nous avons d&eacute;taché une équipe sur le terrain afin de r&eacute;soudre ce probl&egrave;me et serions plus qu'heureux de savoir si vous &ecirc;tes satisfait du r&eacute;sultat:</p>
	<div class="btn-group">
		<button type="button" class="btn btn-info">Satisfait</button>
		<button type="button" class="btn btn-danger">Non satisfait</button>
	</div>
</div>
<div class="modal fade" id="modal-id">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Enquête de satisfaction</h4>
                 </div>
                 <div class="modal-body">
                   
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
               </div>
             </div>
           </div>