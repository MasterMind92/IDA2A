DROP DATABASE PROJETIDA2ADB;
CREATE DATABASE PROJETIDA2ADB;
USE PROJETIDA2ADB;


create table commune(
id_commune int(11) auto_increment not null,
nom_commune varchar(255),
adresse_commune varchar(255),
constraint pk_commune primary key (id_commune)
)
ENGINE=INNODB DEFAULT CHARSET=utf8;

create  table internaute(
id_internaute  int(11) auto_increment not null,
nom_internaute varchar(255),
prenom_internaute varchar(255),
contact_internaute varchar(255),
constraint pk_internaute primary key (id_internaute)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


create table categorieutilisateur (
id_catutil int(11) auto_increment not null,
lib_catutil varchar(255),
constraint pk_catutil primary key (id_catutil)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


create table catincident (
id_catincident int(11) auto_increment not null,
lib_catincident varchar(255),
constraint pk_catincident primary key (id_catincident)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


create table categorieintervention (
id_catinterv int(11) auto_increment not null,
lib_catinterv varchar(255),
constraint pk_cateinterv primary key (id_catinterv)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


create table utilisateur (
id_utilisateur int(11) auto_increment not null,
id_catutil int(11),
nom_utilisateur varchar(255),
prenom_utilisateur varchar(255),
contact_utilisateur varchar(255),
login varchar(255),
mot_de_passe varchar(255),
constraint pk_utilisateur primary key (id_utilisateur),
constraint fk_categorieutilisateur foreign key (id_catutil) 
references categorieutilisateur (id_catutil)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


create table station(
id_station int(11) auto_increment not null,
id_commune int(11),
nom_station varchar(255),
code_station varchar(255),
nat_station varchar(255) comment 'nature station',
reg_station varchar(255) comment'reglementation station ',
dm_service varchar(255) comment 'date de mise en service ',
service_inst varchar(255) comment'service instructeur' ,
cap_nom varchar(255) comment 'capacite nominale',  
de_ref varchar(255) comment 'debit de reference',
constraint pk_station primary key(id_station),
constraint fk_commune foreign key (id_commune) references commune (id_commune)
)
ENGINE=INNODB DEFAULT CHARSET=utf8;


create table suggestion(
id_suggestion int(11) auto_increment not null,
id_internaute int (11),
lib_suggestion varchar(255),
constraint pk_suggestion primary key (id_suggestion),
constraint fk_internaute foreign key (id_internaute) references internaute (id_internaute)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


create table zone (
id_zone int(11) auto_increment not null,
id_commune int(10),
lib_zone varchar(255),
constraint pk_zone primary key(id_zone),
constraint fk_commune foreign key (id_commune) 
references commune(id_commune)
);


create table incident  (
id_incident int(11) auto_increment not null,
id_utilisateur int(11),
id_zone int(11),
id_catincident int(11),
id_internaute int(11), 
date_incident date,
coord_gps varchar(255),
descr_incicent varchar(255),
constraint pk_incident primary key(id_incident),

constraint fk_catincident foreign key (id_catincident)
references catincident (id_catindident),

constraint fk_zone foreign key (id_zone) 
references zone(id_zone),

constraint fk_utilisateur foreign key (id_utilisateur) 
references utilisateur (id_utilisateur),

constraint fk_internaute foreign key (id_internaute) 
references internaute (id_internaute)
);

/*
create table intervention (
id_interv int(11) auto_increment not null,
id_catinterv int(11),
id_incident int(11),
desc_interv varchar(255),
datedebut_intervention date,
datefin_intervention date,
constraint pk_intervention primary key (id_interv),

constraint fk_categorieintervention foreign key (id_catinterv) 
references categorieintervention (id_catinterv),

constraint fk_incident foreign key (id_incident)
references incident (id_indident)
);*/