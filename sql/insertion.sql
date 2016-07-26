
/****************************************************
*
*****************************************************/


use projetbdd;

/****************************************************
*
*****************************************************/


INSERT INTO niveautraitement(libelle,description) VALUES('Primaire','Opération visant à enlever les matières flottantes et la partie décantable des matières en suspension'),('Secondaire','Traitement visant à réduire les matières en suspension et la polution carbonée en faisant intervenir l\'activité bactérienne'),('Secondaire avancé','Traitement visant une reduction plus poussée des matières en suspension et la polution carbonée en faisant intervenir l\'activité bactérienne'),('tertiaire','Traitement de niveau équivalent au traitement secondaire avancé pour la reduction des matières en suspension et la polution carbonée, mais qui vise une reduction de la charge en phosphore ou la desinfection ou encore la dephosphatation et la désinfection');

/****************************************************
*
*****************************************************/

INSERT INTO niveautraitement(libelle) VALUES('Performance structurale');

/****************************************************
*
*****************************************************/

INSERT INTO technologie(desc_technologie,id_niveau) VALUES('Fosse septique construite sur place',5),('Element epurateur classique',5),('Element epurateur modifié',5),('puit absorbant',1),('filtre à sable hors sol',1),('Filtre à sable classique',2),('Cabinet à fosse sèche',2),('Installation à vidange périodique',3),('Installation biologique',4),('Champ d\'évacuation',4),('Puit d\'évacuation',4),('Champ de polissage',4);

/****************************************************
*
*****************************************************/

INSERT INTO catintervenant(libelle_intervenant) VALUES('Sous-traitant'),('Service interne');

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
	insert into catincident(libelle) values ('egout'),('fosse'),('canniveau'),('eaux stagnantes'),('Canalisation'),('Avaloir');


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



