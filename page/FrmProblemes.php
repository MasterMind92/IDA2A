
		
		<div class="formulaires">
			<div>
				<h2 align="center"> Indications </h2>
				<p> 
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div>
				<h2 align="center"> Indiquez votre probleme ici </h2>
				<form name="form" onsubmit="return verification();">
					<table cellspacing="10" id="FormUI">
						<script type="text/javascript">
							function verification (){
								
								var divLieu = document.getElementById('divLieu');  


								if (document.form.Lieu.value== "") {
									
									alert("Renseignez les coordonneees d'un lieu bien precis s'il vous plait.");
									divLieu.parentNode.style.backgroundColor= "rgb(230,86,58)";
									divLieu.innerText= 'Erreur !';
									document.form.Lieu.focus();
									return false;
								}
							}
						</script>
						<tr>
							<td> <input type="text" name="Lieu" placeholder=" Indiquez lieu ici... Commune,Quartier, Precision supplementaires"> </td>
							<td> <div > <span id="divLieu"> </span></div> </td>
						</tr>
						<tr>
							<td> <input type="file" name="photo"> </td>
							<td>  </td>
						</tr>
						<tr>
							<td colspan="2"> <textarea  placeholder="Vos commentaires..." name="Commentaire" rows="10" cols="90"></textarea></td>
						</tr>
						<tr>
							<td colspan="2"> <input type="submit" id="Submit" value="Envoyer"></td>
						</tr>
					</table>
				</form>
			</div>
			
		</div>
