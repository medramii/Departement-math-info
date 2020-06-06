create database departement;
use departement;


/*- table About -*/
CREATE TABLE about(
  la_fpt      text (250) ,
  nom_doyen   varchar (30) ,
  photo_doyen mediumblob ,
  mot_vice    text (250)
);

/*- table Contact -*/
CREATE TABLE contact(
  email    varchar (30),
  tel      varchar (15),
  fax      varchar (15),
  site     varchar (30),
  facebook varchar (30)
);


/*- table Enseignant -*/
CREATE TABLE enseignant(
  num      int PRIMARY KEY,
  nom      varchar (30) NOT NULL,
  prenom   varchar (30) NOT NULL,
  CIN      varchar (50) NOT NULL,
  grade    varchar (50),
  sexe     varchar (50),
  adresse  varchar (250),
  tel      varchar (15),
  email    varchar (50),
  photo    mediumblob,
  username varchar (25) NOT NULL,
  password varchar (25) NOT NULL
);


/*- table Chef Departement -*/
CREATE TABLE chef_dept(
  num int PRIMARY KEY,
  date_debut date,
  date_fin   date,
  CONSTRAINT enseignant_chef_dept_fk FOREIGN KEY (num) REFERENCES enseignant(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Departement -*/
CREATE TABLE departement(
  code              int PRIMARY KEY auto_increment,
  nom               varchar (30) NOT NULL,
  discription       text (250),
  chef              int,
  CONSTRAINT chef_dept_fk FOREIGN KEY (chef) REFERENCES chef_dept(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Chef Filiere -*/
CREATE TABLE chef_flr(
  num        int PRIMARY KEY,
  date_debut date,
  date_fin   date,
  CONSTRAINT enseignant_chef_flr_fkn FOREIGN KEY (num) REFERENCES enseignant(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Filiere -*/
CREATE TABLE filiere(
  num               int PRIMARY KEY auto_increment,
  nom               varchar (30) NOT NULL,
  discription       mediumblob,
  chef              int,
  departement       int,
  CONSTRAINT chef_flr_fk FOREIGN KEY (chef) REFERENCES chef_flr(num) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT Filiere_Departement_fk FOREIGN KEY (departement) REFERENCES departement(code) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Filiere_Enseignant -*/
CREATE TABLE filiere_enseignant(
  num_ens       int NOT NULL,
  num_flr       int NOT NULL,
  emploie_temp  mediumblob,
	CONSTRAINT filiere_enseignant_pk PRIMARY KEY (num_ens,num_flr),
  CONSTRAINT enseignant_fk FOREIGN KEY (num_ens) REFERENCES enseignant(num) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT filiere_fk FOREIGN KEY (num_flr) REFERENCES filiere(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Reunion -*/
CREATE TABLE reunion(
  num           int PRIMARY KEY auto_increment,
  objet         varchar (50),
  discription   text (100),
  date_reunion  datetime,
  lieu_reunion  varchar (50),
  realiseur      int,
  CONSTRAINT chef_reunion_flr_fk FOREIGN KEY (realiseur) REFERENCES chef_flr(num) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT chef_reunion_dept_fk FOREIGN KEY (realiseur) REFERENCES chef_dept(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Convocation -*/
CREATE TABLE convocation(
  linvite      int NOT NULL,
  reunion       int NOT NULL,
  convocation   mediumblob NOT NULL,
  present       boolean,
	CONSTRAINT convocation_PK PRIMARY KEY (reunion,linvite),
	CONSTRAINT convocation_reunion_fk FOREIGN KEY (reunion) REFERENCES reunion(num) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT convocation_enseignant_fk FOREIGN KEY (linvite) REFERENCES enseignant(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Courier -*/
CREATE TABLE courier(
  num            int PRIMARY KEY auto_increment,
  titre          varchar (30) NOT NULL,
  discription    text (500) NOT NULL,
  attachement    mediumblob,
  date_pub           TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  emitteur int NOT NULL,
  CONSTRAINT courier_enseignant_fk FOREIGN KEY (emitteur) REFERENCES enseignant(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Courier Recu -*/
CREATE TABLE courier_recu(
  courier  int NOT NULL,
  destinataire int NOT NULL,
	CONSTRAINT courier_recu PRIMARY KEY (courier,destinataire),
  CONSTRAINT courier_recu_courier_fk FOREIGN KEY (courier) REFERENCES courier(num) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT courier_recu_enseignant_fk FOREIGN KEY (destinataire) REFERENCES enseignant(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Avis -*/
CREATE TABLE avis(
  num            int PRIMARY KEY auto_increment,
  titre          varchar (50) NOT NULL,
  discription    text(250) NOT NULL,
  attachement    varchar (50) NULL,
  date_pub       TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  auteur int NOT NULL,
  CONSTRAINT avis_enseignant_fk FOREIGN KEY (auteur) REFERENCES enseignant(num) ON DELETE CASCADE ON UPDATE CASCADE
);

/*- table Annonce -*/
CREATE TABLE annonce(
  num         int PRIMARY KEY auto_increment,
  titre       varchar (30) NOT NULL,
  discription text(250) NOT NULL,
  date_pub    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  photo 	  Mediumblob NULL,
  auteur	  int NOT NULL,
  CONSTRAINT annonce_chef_dep_fk FOREIGN KEY (auteur) REFERENCES chef_dept(num) ON DELETE CASCADE ON UPDATE CASCADE
)
