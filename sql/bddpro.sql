create database projetbdd;
	use projetbdd;
	
	create table commune(
		id_commune int auto_increment,
		nom_commune varchar(255),
		constraint pk_id_commune primary key (id_commune)
		)engine=INNODB;

	create table internaute(
		id_internaute int auto_increment,
		nom_internaute varchar(255),
		prenom_internaute varchar(255),
		contact_internaute varchar(255),
		constraint pk_id_internaute primary key (id_internaute)
		)engine=INNODB;

	create table catintervenant(
		id_catintervenant int auto_increment not null,
		libelle_intervenant varchar(255),
		constraint pk_idcatinterv primary key (id_catintervenant)
		)engine=INNODB;

	create table intervention(
		id_intervention int auto_increment,
		desc_intervention text,
		status_intervention varchar(255),
		constraint pk_id_interv primary key (id_intervention)
		)engine=INNODB;

	create table categorieutilisateur(
		id_catutilisateur int auto_increment not null,
		libelle varchar(255),
		constraint pk_id_catutilisateur primary key (id_catutilisateur)
		)engine=INNODB;
	
	create table catincident(
		id_catincident int auto_increment not null,
		libelle varchar(255),
		constraint pk_id_catincident primary key (id_catincident)
		)engine=INNODB;

	create table niveautraitement(
		id_niveau int auto_increment not null,
		libelle varchar(255),
		description text,
		constraint pk_niveautraitement primary key (id_niveau)
		)engine=INNODB;

	create table zone(
		id_zone int auto_increment not null,
		libelle_zone varchar(255),
		id_commune int not null,
		constraint pk_id_zone primary key (id_zone),
		constraint fk_id_commune foreign key (id_commune)
		references commune (id_commune)
		)engine=INNODB;

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

	create table suggestion(
		id_suggestion int auto_increment not null,
		lib_suggestion varchar(255),
		id_internaute int not null,
		constraint pk_suggestion primary key (id_suggestion),
		constraint fk_inter foreign key (id_internaute)
		references internaute (id_internaute)
		)engine=INNODB;

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

	create table intervenant(
		id_intervenant int auto_increment not null,
		libelle varchar(255),
		id_catintervenant int not null,
		constraint pk_intervenant primary key (id_intervenant),
		constraint fk_catintervenant foreign key (id_catintervenant)
		references catintervenant (id_catintervenant)
		)engine=INNODB;

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

	create table technologie(
		id_technologie int auto_increment not null,
		desc_technologie text,
		id_niveau int not null,
		constraint pk_technologie primary key (id_technologie),
		constraint fk_niveau foreign key (id_niveau)
		references niveautraitement (id_niveau)
		)engine=INNODB;

	insert into commune (nom_commune) values('Abobo'),
		('Adjame'),('Anyama'),('Attecoube'),('cocody'),('Koumassi'),
		('Marcory'),('Treichville'),('Plateau'),
		('Port-bouet');