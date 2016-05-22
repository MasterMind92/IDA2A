<?php 
#Classe Utilisateur

class User
{
	private $num_compte; 
	private $lib_compte; 
	private $login_compte; 
	private $mdp_compte;

	public function User($num,$lib,$log,$mdp)
	{
		$this->num_compte=$num;
		$this->lib_compte=$lib;
		$this->login_compte=$log;
		$this->mdp_compte=$mdp;
	} 

	public function getNum()
	{
	    return $this->num_compte;
	}

	public function getLib()
	{
	    return $this->lib_compte;
	}

	public function getLog()
	{
	    return $this->login_compte;
	}

	public function getMdp()
	{
	    return $this->mdp_compte;
	}
}



 ?>