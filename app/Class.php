<?php 
#Classe Utilisateur

class User
{
	public $num_compte; 
	public $lib_compte; 
	public $login_compte; 
	public $mdp_compte;

	public function User($num,$lib,$log,$mdp)
	{
		$this->num_compte=$num;
		$this->lib_compte=$lib;
		$this->login_compte=$log;
		$this->mdp_compte=$mdp;
	} 
}


 ?>