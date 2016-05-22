drop database ProjetIDA2A;

create database ProjetIDA2A ;

use ProjetIDA2A;

create table Compte(
	num_compte int(1) auto_increment,
	Lib_compte varchar(25),
	Login_compte varchar(25),
	Mdp_compte varchar(25),
	constraint pk_num_compte primary key (num_compte) 	
)Engine = InnoDB;

INSERT INTO Compte(Lib_compte,Login_compte,Mdp_compte) VALUES 
('Principal','Administrateur_Principal','EnvironnementIDA2A'),
('Secondaire','Administrateur_Secondaire','EnvironnementIDA2A'),
('Developpeur','MasterMind92','youngmoney1992'),
('Developpeur','TheGrimmReaper','at%ofotemefi1er');





