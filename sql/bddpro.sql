/****************************************************
*
*****************************************************/
create database projetbdd;
	use projetbdd;

/****************************************************
*
*****************************************************/
	create table commune(
		id_commune int auto_increment,
		nom_commune varchar(255),
		constraint pk_id_commune primary key (id_commune)
		)engine=INNODB;
/****************************************************
*
*****************************************************/
	create table internaute(
		id_internaute int auto_increment,
		nom_internaute varchar(255),
		prenom_internaute varchar(255),
		contact_internaute varchar(255),
		constraint pk_id_internaute primary key (id_internaute)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table catintervenant(
		id_catintervenant int auto_increment not null,
		libelle_intervenant varchar(255),
		constraint pk_idcatinterv primary key (id_catintervenant)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table intervention(
		id_intervention int auto_increment,
		desc_intervention text,
		status_intervention varchar(255),
		constraint pk_id_interv primary key (id_intervention)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table categorieutilisateur(
		id_catutilisateur int auto_increment not null,
		libelle varchar(255),
		constraint pk_id_catutilisateur primary key (id_catutilisateur)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table catincident(
		id_catincident int auto_increment not null,
		libelle varchar(255),
		constraint pk_id_catincident primary key (id_catincident)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table niveautraitement(
		id_niveau int auto_increment not null,
		libelle varchar(255),
		description text,
		constraint pk_niveautraitement primary key (id_niveau)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table zone(
		id_zone int auto_increment not null,
		libelle_zone varchar(255),
		id_commune int not null,
		constraint pk_id_zone primary key (id_zone),
		constraint fk_id_commune foreign key (id_commune)
		references commune (id_commune)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table station(
		id_station int auto_increment,
		nom_station varchar(255),
		code_station varchar(255),
		nat_station varchar(255),
		regl_station varchar(255),
		dm_service varchar(255),
		serv_station varchar(255),
		cap_nom varchar(255),
		de_ref varchar(255),
		id_commune int not null,
		constraint pk_station primary key (id_station),
		constraint fk_commune foreign key (id_commune)
		references commune (id_commune)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table suggestion(
		id_suggestion int auto_increment not null,
		lib_suggestion varchar(255),
		id_internaute int not null,
		constraint pk_suggestion primary key (id_suggestion),
		constraint fk_inter foreign key (id_internaute)
		references internaute (id_internaute)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table utilisateur(
		id_utilisateur int auto_increment not null,
		nom_utilisateur varchar(255),
		prenom_utilisateur varchar(255),
		contact_utilisateur varchar(255),
		email varchar(255),
		login varchar(255),
		motdepasse varchar(255),
		id_catutilisateur int not null,
		constraint pk_utilisateur primary key (id_utilisateur),
		constraint fk_catuser foreign key (id_catutilisateur)
		references categorieutilisateur (id_catutilisateur)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table intervenant(
		id_intervenant int auto_increment not null,
		libelle varchar(255),
		id_catintervenant int not null,
		constraint pk_intervenant primary key (id_intervenant),
		constraint fk_catintervenant foreign key (id_catintervenant)
		references catintervenant (id_catintervenant)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table incident(
		id_incident int auto_increment not null,
		lib_incident varchar(255),
		date_incident date,
		coord_gps varchar(255),
		descr_incident text,
		image blob,
		id_catincident int not null,
		id_zone int not null,
		id_utilisateur int not null,
		id_internaute int not null,
		constraint pk_incident primary key (id_incident),
		constraint fk_catincident foreign key (id_catincident)
		references catincident (id_catincident),
		constraint fk_zone foreign key (id_zone)
		references zone (id_zone),
		constraint fk_utilisateur foreign key (id_utilisateur)
		references utilisateur (id_utilisateur),
		constraint fk_internaute foreign key (id_internaute)
		references internaute (id_internaute)
		)engine=INNODB;


/****************************************************
*
*****************************************************/
	create table technologie(
		id_technologie int auto_increment not null,
		desc_technologie text,
		id_niveau int not null,
		constraint pk_technologie primary key (id_technologie),
		constraint fk_niveau foreign key (id_niveau)
		references niveautraitement (id_niveau)
		)engine=INNODB;

/****************************************************
*
*****************************************************/
	create table Compte(
		num_compte int(1) auto_increment,
		Lib_compte varchar(25),
		Login_compte varchar(25),
		Mdp_compte varchar(25),
		constraint pk_num_compte primary key (num_compte) 	
	)Engine = InnoDB;


/****************************************************
*
*****************************************************/
	insert into commune (nom_commune) values('Abobo'),
		('Adjame'),('Anyama'),('Attecoube'),('cocody'),('Koumassi'),
		('Marcory'),('Treichville'),('Plateau'),('Yopougon'),
		('Port-bouet');

/****************************************************
*
*****************************************************/
	insert into categorieutilisateur(libelle) values ('Exploitant'),('Administrateur'),('Internaute');


/****************************************************
*
*****************************************************/
	insert into catincident(libelle) values ('egout bouche'),('fosse sceptique'),('canniveau bouche'),('eaux stagnantes'),('Canalisation cassee'),('Avaloir bouchee');


/****************************************************
*
*****************************************************/
INSERT INTO utilisateur(nom_utilisateur,prenom_utilisateur,contact_utilisateur,email,login,motdepasse,id_catutilisateur) VALUES 
('Beugre','N\'ko Georges Axel','05 44 43 08','nuzumakix@yahoo.fr','Admin1','Bonjour',2),
('Dalo','Waly Marc-Andre','47 42 71 63','yakuzaken92@gmail.com','Admin2','Bonjour',2);


/****************************************************
*
*****************************************************/

insert into zone (libelle_zone,id_commune) values ('Plaque',1),('Anador',1),('Agbekoi',1),('Akeikoi',1),('Derriere Rail',1),('Samake',1),('Les 4 etages(Houphouet-Boigny)',1),('PK 18',1),('Avocatier',1),('N\'Dotre',1),('Belleville',1),('Dokui',1),('Sogefia',1),('Abobo Baoule',1),('Abobo Clotcha',1),('Williamsville',2),('Mosquee',2),('Bracodi',2),('Liberte',2),('220 logements',2),('Adjame marche',2),('Anyama Residentiel',3),('Anyama Berthe',3),('Anyama Cisse',3),('Ancienne Gendarmerie',3),('A la Morgue',3),('Angre',5),('Riviera palmeraie',5),('Riviera 2',5),('Riviera 3',5),('Riviera 4',5),('Riviera golf',5),('Bonoumin',5),('2 Plateaux',5),('Dokui',5),('Attogban',5),('Gobelet',5),('147 Logements',6),('Campement',6),('Prodomo',6),('Agouti',6),('Sopim',6),('Inchallah',6),('32',6),('05',6),('Divo',6),('Sicogi',6),('Soweto',6),('Boston',6),('Baudelaire',6),('Quartier du maire (Canetons)',6),('3 Ampoules',6),('Remblais(Colombe)',6),('Sans fil',6),('Akwaba',6),('Sogefia',6),('Saint-Etienne',6),('Anoumabo',7),('Remblais',7),('Residentiel',7),('Centre Commercial',7),('Sicogi',7),('Massarana',7),('Konankro',7),('Avenue 14',8),('Rue 12',8),('Rue des Brasseries',8),('Biafra',8),('A la rass',8),('Gare de Bassam',8),('Nanan Yamousso',8),('Cite Administrative',9),('Sorbonne',9),('Quartier Chien Mechant',9),('Carena',9),('Cite Esculable',9),('Mobibois',10),('Jean Folly',10),('Rue 12',10),('Adjoufou',10),('Casier',10),('Phare',10),('Gonzague Ville',10),('Anani',10),('Derriere Warf',10),('Abattoir',10),('Siporex',11),('Sideci',11),('Gesco',11),('Maroc',11),('Ananeraie',11),('Niangon',11),('Selmer',11),('Andokoi',11),('Koweit',11),('Sicogi',11),('Songon',11),('Toit Rouge',11),('Kilometre 17',11),('Rue Princesse',11),('Port-Bouet 2',11),('Wassacara',11),('Sable',11),('Banco',11),('Abobodoume',11),('Quartier Millionnaire',11),('Cite Verte',11),('Sogefia',11),('Cite CIE (Niangon)',11),('Academie (Niangon)',11);

