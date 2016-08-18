
		
<div class="formulaires">
	<div>
		<h2 align="center"> Indications </h2>
		<p> 
			
			Sur cette page vous pourrez soumettre une suggestion aux autorites competentes via le formulaire se trouvant ci-dessous.
		</p>
	</div>

	<div>
		<h2 align="center"> Selectionnez votre profil d'utiliisateur  </h2>
	</div>
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

	<div id="internaute" class="Sugg">
		<form action=""  method="POST" class=" suggestion form-horizontal formInput" role="form">
			
			<!--  -->

			<div class="form-group">
				<div class="row">
					<div class="  col-xs-offset-1 col-xs-11 col-sm-offset-1  col-sm-11 col-md-offset-1 col-md-11 col-lg-offset-1 col-lg-11">
						
						<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>

					</div>
				</div>		
			</div>
	
			<div class="form-group">
				<div class=" col-xs-offset-1 col-xs-6  col-sm-offset-1 col-sm-6  col-md-offset-1 col-md-6  col-lg-offset-1 col-lg-6">
					<button type="submit" class="btn btn-block btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>

	<div class="row">
		<div class="col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
			<div class="panel panel-success">
				  <div class="panel-heading">
						<h3 class="panel-title">Notification </h3>
				  </div>
				  <div class="panel-body succes">
						Le formulaire a ete soumis avec succes <span class="glyphicon glyphicon-ok "></span> 
						<a type="button" href="accueil" class="btn btn-success">OK</a>
				  </div>
			</div>
		</div>
	</div>

	<div id="exploit" class="Sugg">
		<div class="authentification">
			<form id="FrmAuthExp" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="/" method="POST" role="form">
				<legend> Veuillez vous identifier</legend>
			
				<div class="form-group">
					<input type="text" class="form-control input-lg" name="login" placeholder="votre login">
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" name="mdp" placeholder="Votre mot de passe">
				</div>
			
				<button type="submit" class="btn btn-danger btn-block ">Submit</button>
			</form>
		</div>
		<div class="formInput">
			<form action="" class="suggestion" name="form" method="POST" onsubmit="return verification();" role="form" >
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
							
						</div>
					</div>		
				</div>
		
				<div class="form-group">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<button type="submit" class="btn btn-block btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>	
	</div>	

	<div id="Admin" class="Sugg">
		<div class="authentification">
			<form id="FrmAuthAdmin" class=" col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" action="/" method="POST" role="form">
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
		<div class="formInput">
			<form action="" method="POST" class="suggestion form-horizontal" role="form">
					
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<textarea class="form-control" rows="5" cols="90" placeholder="Vos commentaires..." name="Commentaire" ></textarea>
							
						</div>
					</div>		
				</div>
		
				<div class="form-group">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<button type="submit" class="btn btn-block btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>				
</div>
			
<script src="dist/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="dist/js/form.js"></script>
