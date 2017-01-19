<?php 
	$list=array();
	$id=(int) $_SESSION['cpt_a'];
	$conx= new PDO("mysql:host=localhost;dbname=projetbdd","root","");
	$query="SELECT i.id_inc as id, i.num_inc as num, cat.libelle as ca, i.lib_inc as lib, i.date_inc as dat, c.nom_commune as com, z.libelle_zone as nz FROM incident i, catincident cat, commune c, zone z, agent a where i.id_catincident=cat.id_catincident AND i.id_zone=z.id_zone AND i.id_agent=a.id_agent AND z.id_commune=c.id_commune AND a.id_agent=$id AND i.statut_inc=3";
	$launch= $conx->query($query);
	$d=$launch->fetch();
	$list[]=$d;
	$inc=(int)$list[0]['id'];
	//var_dump($list[0]['id']);exit();
	$query="SELECT id_int FROM intervention ORDER BY id_int DESC LIMIT 1";
	$launch= $conx->query($query);
	$res=$launch->fetch(PDO::FETCH_ASSOC);
	$int=(int) $res['id_int'];
	//var_dump($int);exit();
 ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<!-- FORMULAIRE GENERE EN PHP -->
	
		<table class="table ">
			<form action="app/traitementInt.php" method="POST" role="form">
				<legend>INFORMATIONS RECUES</legend>
				<tbody>
					<tr>
						<td class="col-lg-6">
							<div class="form-group">
								<label for="">Numero de l'incident</label>
								<input type="text" class="form-control" id="" name="num" value="<?php echo $list[0]['num']; ?>" disabled>
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Date de l'incident</label>
								<input type="text" class="form-control" id="" name="dat" value="<?php echo $list[0]['dat']; ?>" disabled>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="">Cat&eacute;gorie de l'incident</label>
								<input type="text" class="form-control" id="" name="cat" value="<?php echo $list[0]['ca']; ?>" disabled>
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Libell&eacute; de l'incident</label>
								<input type="text" class="form-control" id="" name="lib" value="<?php echo $list[0]['lib']; ?>" disabled>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="">Commune</label>
								<input type="text" class="form-control" id="" name="com" value="<?php echo $list[0]['com']; ?>" disabled>
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Zone</label>
								<input type="text" class="form-control" id="" name="zone" value="<?php echo $list[0]['nz']; ?>" disabled>
							</div>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							VALIDER LA RESOLUTION DU PROBLEME :
						</td>
						<td>
							<div class="form-group">
								
								<button type="button" data-toggle="modal" href='#modal-id'<?php if(is_null($list[0]['num'])){echo "disabled";} ?> class="col-lg-6 btn btn-primary">Resolue</button>

								<button type="button" data-toggle="modal" href='#modal-id2'<?php if(is_null($list[0]['num'])) {echo "disabled";} ?> class="col-lg-6 btn btn-danger">Non resolue</button>
							
							</div>
						</td>
					</tr>
				</tbody>
			</form>	
		</table>
		<!-- PAGE MODAL DE PLAINTE RESOLUE -->
		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Rapport d'activité</h4>
					</div>
					<form action="../IDA2A/app/incres.php" method="POST" role="form">
						<div class="modal-body">
							
							<table class="table table-striped">
								<tbody>
									<tr>
										<td >
											<div class="form-group">
												<textarea name="desc" id="inputDesc" class="form-control" rows="3" required="required"
													placeholder="Faites votre rapport ici..."></textarea>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<input type="hidden" name="id" value="<?php echo $id; ?>" >
							<input type="hidden" name="int" value="<?php echo $int; ?>" >
							<input type="hidden" name="num" value="<?php echo $list[0]['id']; ?>" >

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Enregistrer</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- PAGE MODAL DE PLAINTE NON RESOLUE -->
		<div class="modal fade" id="modal-id2">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Rapport d'activité</h4>
					</div>
					<form action="../IDA2A/app/incech.php" method="POST" role="form">
						<div class="modal-body">
							
							<table class="table table-striped">
								<tbody>
									<tr>
										<td >
											<div class="form-group">
												<textarea name="desc" id="inputDesc" class="form-control" rows="3" required="required"
													placeholder="Faites votre rapport ici..."></textarea>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<input type="hidden" name="int" value="<?php echo $int; ?>" >
							<input type="hidden" name="id" value="<?php echo $id; ?>" >
							<input type="hidden" name="num" value="<?php echo $list[0]['id']; ?>" >
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Enregistrer</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
</div>
