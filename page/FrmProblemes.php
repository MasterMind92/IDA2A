
			<div>
				<h2 align="center"> Indications </h2>
				<p> 
					Sur cette page vous pourrez soumettre un incident aux autorites competentes via le formulaire se trouvant ci-dessous.
				</p>
			</div>

			<div>
				<h2 align="center"> Selectionnez votre profil d'utilisateur </h2>

				<!-- CHAMP DE SELECTION DU PROFIL D'UTILISATEUR -->

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<fieldset >
								<legend>Profil</legend>
							
								<label>
									<input type="radio" name="profil" id="input" value="Internaute">
									Internaute
								</label>

								<label>
									<input type="radio" name="profil" id="input" value="Autres">
									Autres
								</label>

							</fieldset>
						</div>
					</div>		
				</div>

				<!-- FORMULAIRE DE CHOIX DE PROFIL AUTRE QU'INTERNAUTE -->

				<div class="row">
					
					<div class="col-xs-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" id="Profil">
						
						<select name="profil" class="form-control" required="required">
							<option value=-1> Choisissez votre profil </option>
							<option value="Exploitant">Exploitant</option>
							<option value="Administrateur">Administrateur</option>
						</select>
					
					</div>
				</div>

				<!---------------------------------------------------------->
				<!--             FORMULAIRE DE L'INTERNAUTE               -->
				<!---------------------------------------------------------->


				<div id="internaute" class="Incident">
					
					<form action="" method="POST" class="form-horizontal formInput" role="form" enctype="multipart/form-data">
						
						<legend> <h2 align="center">Indiquez votre probleme ici</h2>  </legend>
						<!-- CHAMP DE PRECISION DE LA NATURE DU PROBLEME -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<label for="">Nature de l'incident </label>		
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<select  name= "catincInt" id="catincInt" class="form-control"   required="required">
										<option value="Regard">Regard </option>
										<option value="Canalisation">Canalisation </option>
										<option value="Egout">Egout</option>
									</select>		
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<select name= "incidentInt" id="incidentInt" class="form-control"  required="required">
										<option value="Bouche">Bouche</option>
										<option value="Cassee">Cassee</option>
									</select>		
								</div>
							</div>
						</div>

						<!-- CHAMP DE SELECTION DU LIEU -->	
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<select name="CommuneInt" id="CommuneInt" class="form-control" required="required">
										<option value=-1>Commune</option>
										<option value="1">Abobo</option>
										<option value="2">Adjame</option>
										<option value="3">Anyama</option>
										<option value="4">Attecoube</option>
										<option value="5">Cocody</option>
										<option value="6">Koumassi</option>
										<option value="7">Marcory</option>
										<option value="8">Plateau</option>
										<option value="9">Treichville</option>
										<option value="10">Port-Bouet</option>
										<option value="11">Yopougon</option>
								
									</select>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<select name="ZoneInt" id="ZoneInt" class="form-control" required="required">
										<option value=-1>Zone</option>
									</select>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<input type="text" name="precisionInt" id="precisionInt" class="form-control" value="" required="required"  title="" placeholder="precision supplementaire ">
								</div>
							</div>		
						</div>

						<!-- CHAMP DE SELECTION DE LA PHOTO DU LIEU -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<label for=""> Image du probleme(si possible)</label>
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
									<input type="file" class="form-control" name="photo" >
								</div>
							</div>		
						</div>
						
						<!-- CHAMP DE RECCEPTION DES COMMENTAIRES -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
								</div>
							</div>		
						</div>
						
						<!--  BOUTON DE SOUMISSION DU FORMULAIRE -->
						<div class="form-group">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<button type="submit" class="btn btn-block btn-success">Submit</button>
							</div>
						</div>
					</form>
				</div>
				
				<!---------------------------------------------------------------->
				<!-- 				FORMULAIRE DE L'EXPLOITANT 					-->
				<!---------------------------------------------------------------->

				<div id="exploit" class="Incident">
					
					<!-- FORMULAIRE D'AUTHENTIFICATION -->
					<div class="authentification">
						<form id="FrmAuthExp" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="../IDA2A/app/Traitement.php" method="POST" role="form">
							<legend> Veuillez vous identifier</legend>
						
							<div class="form-group">
								<input type="text" class="form-control input-lg" name="login" placeholder="votre login">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-lg" name="mdp" placeholder="Votre mot de passe">
							</div>
						
							<button type="submit" class="btn btn-warning btn-block ">Submit</button>
						</form>
					</div>

					<!---------------------------------------------------------------->
					<!-- FORMULAIRE DE SOUMISSION D'UN INCIDENT PAR L'EXPLOITANT -->
					<!---------------------------------------------------------------->
					<div class="formInput">
						<form action=""  method="POST" class="form-horizontal" role="form">
							
						<legend> <h2 align="center">Indiquez votre probleme ici</h2>  </legend>
							
							<!-- CHAMP DE PRECISION DE LA NATURE DU PROBLEME -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										<label for="">Nature de l'incident </label>		
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<select name="" id="input" class="form-control" required="required">
											<option value="">Regard Bouche</option>
											<option value="">Canalisation Cassee</option>
											<option value="">Egout Bouche</option>
											<option value=""></option>
											<option value=""></option>
										</select>		
									</div>
								</div>
							</div>

							<!-- CHAMP DE SELECTION DU LIEU -->	
							<div class="form-group">
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<select name="CommuneExp" id="CommuneExp" class="form-control" required="required">
											<option value=-1>Commune</option>
											<option value="Abobo">Abobo</option>
											<option value="Adjame">Adjame</option>
											<option value="Marcory">Marcory</option>
											<option value="Port-Bouet">Port-Bouet</option>
											<option value="Yopougon">Yopougon</option>
											<option value="Anyama">Anyama</option>
											<option value="Plateau">Plateau</option>
											<option value="Koumassi">Koumassi</option>
											<option value="Treichville">Treichville</option>
											<option value="Cocody">Cocody</option>
										</select>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<select name="ZoneExp" id="ZoneExp" class="form-control" required="required">
											<option value=-1>Zone</option>
										</select>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<input type="text" name="" id="input" class="form-control" value="" required="required"  title="" placeholder="precision supplementaire ">
									</div>
								</div>		
							</div>

							<!-- CHAMP DE SELECTION DE LA PHOTO DU LIEU -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for=""> Image du probleme(si possible)</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										<input type="file" class="form-control" name="photo" >
									</div>
								</div>		
							</div>

							<!-- CHAMP DE RECCEPTION DES COMMENTAIRES -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										
										<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
										
									</div>
								</div>		
							</div>
							<!--  BOUTON DE SOUMISSION DU FORMULAIRE -->
							<div class="form-group">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<button type="submit" class="btn btn-block btn-success">Submit</button>
								</div>
							</div>

							<!-- MODELE DE SELECTION DU TYPE D'INTERVENTION -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<select name="" id="input" class="form-control" required="required">
											<option value=""></option>
										</select>
									</div>
								</div>		
							</div>

						</form>
					</div>	
				</div>	

				<div id="Admin" class="Incident">
					<!-- FORMULAIRE D'AUTHENTIFICATION DE L'ADMINISTRATEUR -->
					<div class="authentification">
						<form  id="FrmAuthAdmin" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="../IDA2A/app/Traitement.php" method="POST" role="form">
							<legend> Veuillez vous identifier</legend>
						
							<!-- -->
							<div class="form-group">
								<input type="text" class="form-control input-lg" name="login" placeholder="votre login">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-lg" name="mdp" placeholder="Votre mot de passe">
							</div>
						
							<button type="submit" class="btn btn-danger btn-block ">Submit</button>
						</form>
					</div>

					<!-- FORMULAIRE DE SOUMISSION D'UN INCIDENT PAR L'ADMINISTRATEUR -->
					<div class="formInput">
						<form action="" method="POST" class="form-horizontal" role="form">
							
						<legend> <h2 align="center">Indiquez votre probleme ici</h2>  </legend>
							
							<!-- CHAMP DE PRECISION DE LA NATURE DU PROBLEME -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										<label for="">Nature de l'incident </label>		
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<select name="" id="input" class="form-control" required="required">
											<option value="">Regard Bouche</option>
											<option value="">Canalisation Cassee</option>
											<option value="">Egout Bouche</option>
											<option value=""></option>
											<option value=""></option>
										</select>		
									</div>
								</div>
							</div>

							<!-- CHAMP DE SELECTION DU LIEU -->	
							<div class="form-group">
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<select name="CommuneAdmin" id="CommuneAdmin" class="form-control" required="required">
											<option value=-1>Commune</option>
											<option value="Abobo">Abobo</option>
											<option value="Adjame">Adjame</option>
											<option value="Marcory">Marcory</option>
											<option value="Port-Bouet">Port-Bouet</option>
											<option value="Yopougon">Yopougon</option>
											<option value="Anyama">Anyama</option>
											<option value="Plateau">Plateau</option>
											<option value="Koumassi">Koumassi</option>
											<option value="Treichville">Treichville</option>
											<option value="Cocody">Cocody</option>
										</select>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<select name="ZoneAdmin" id="ZoneAdmin" class="form-control" required="required">
											<option value=-1>Zone</option>
										</select>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<input type="text" name="" id="input" class="form-control" value="" required="required"  title="" placeholder="precision supplementaire ">
									</div>
								</div>		
							</div>

							<!-- CHAMP DE SELECTION DE LA PHOTO  DU LIEU DE L'INCIDENT -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<input type="file" class="form-control" name="photo" >
									</div>
								</div>		
							</div>

							<!-- CHAMP DE RECEPTION DU FORMULAIRE -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										
										<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
										
									</div>
								</div>		
							</div>
							
							<!-- BOUTON DE SOUMISSION DU FORMULAIRE -->
							<div class="form-group">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<button type="submit" class=" btn btn-block btn-success">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>			
			</div>
			
		<script src="dist/js/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="dist/js/form.js"></script>	