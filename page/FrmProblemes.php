
			<div>
				<h2 align="center"> Indications </h2>
				<p> 
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. 
				</p>
			</div>

			<div>
				<h2 align="center"> Indiquez votre probleme ici </h2>

				<!-- CHAMP DE SELECTION DU PROFIL D'UTILISATEUR -->

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<fieldset >
								<legend>Profil</legend>
							
								
								<label>
									<input type="radio" name="profil" id="input" value="Exploitant">
									Exploitant
								</label>

								<label>
									<input type="radio" name="profil" id="input" value="Internaute">
									Internaute
								</label>

								<label>
									<input type="radio" name="profil" id="input" value="Admin">
									Administrateur
								</label>
							</fieldset>
						</div>
					</div>		
				</div>

				<!-- FORMULAIRE DE L'INTERNAUTE-->
				<div id="internaute">
					<form action="app/Traitement.php" method="POST" class="form-horizontal formInput" role="form" enctype="multipart/form-data">
						
						<!-- CHAMP DE SELECTION DU LIEU -->	
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<select name="CommuneInt" id="CommuneInt" class="form-control" required="required">
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
									<select name="ZoneInt" id="ZoneInt" class="form-control" required="required">
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
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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

				<div id="exploit">
					<!-- FORMULAIRE D'AUTHENTIFICATION -->
					<div class="authentification">
						<form id="FrmAuthExp" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="/" method="POST" role="form">
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

					<!-- FORMULAIRE DE SOUMISSION D'UN INCIDENT PAR L'EXPLOITANT -->
					<div class="formInput">
						<form action=""  method="POST" class="form-horizontal" role="form">
							
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
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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

				<div id="Admin">
					<!-- FORMULAIRE D'AUTHENTIFICATION DE L'ADMINISTRATEUR -->
					<div class="authentification">
						<form  id="FrmAuthAdmin" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="" method="POST" role="form">
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
									<button type="submit" class="btn btn-block btn-success">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
								
			</div>
			
		<script src="dist/js/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="dist/js/form.js"></script>	