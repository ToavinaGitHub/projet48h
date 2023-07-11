create database 48h;
use 48h;
create table user(
                     idUser int primary key auto_increment,
                     nom varchar(255),
                     prenom varchar(255),
                     email varchar(255),
                     mdp varchar(255),
                     dtn date,
                     poids DECIMAL(10,3),
                     sexe int,
                     taille int
);

CREATE table userPics(
                         idUser int,
                         sary VARCHAR(100),
                         Foreign Key (idUser) REFERENCES user(idUser)
);

create table objectif(
                         idObjectif int PRIMARY KEY auto_increment,
                         nom VARCHAR(100)

);

CREATE table userObjectif(
                             idObjectif int,
                             idUser int,
                             Foreign Key (idObjectif) REFERENCES objectif(idObjectif),
                             Foreign Key (idUser) REFERENCES user(idUser)
);

CREATE Table regime(
                       idRegime int PRIMARY KEY auto_increment,
                       duree int,
                       idObjectif int,
                       poids int,
                       details VARCHAR(255),
                       sexe int,
                       montant DECIMAL(10,3),
                       Foreign Key (idObjectif) REFERENCES objectif(idObjectif)
);

CREATE Table recette(
                        idrecette int PRIMARY KEY auto_increment,
                        nom VARCHAR(255),
                        details VARCHAR(255),
                        sary VARCHAR(255)
);


CREATE table RegimeRecette(
                              idRegime int,
                              idRecette int,
                              Foreign Key (idRegime) REFERENCES regime(idRegime),
                              Foreign Key (idRecette) REFERENCES recette(idRecette)
);

CREATE table actSport(
                         idActSport int PRIMARY KEY auto_increment,
                         nom VARCHAR(255),
                         details VARCHAR(255),
                         poids int,
                         idObjectif int,
                         sexe int,
                         taille INT,
                         Foreign Key (idObjectif) REFERENCES objectif(idObjectif)
);

CREATE table exercice(
                         idExercice int PRIMARY KEY auto_increment,
                         nom VARCHAR(255),
                         details VARCHAR(255)
);

CREATE table actExercice(
                            idActSport int,
                            idExercice int,
                            Foreign Key (idActSport) REFERENCES actSport(idActSport),
                            Foreign Key (idExercice) REFERENCES exercice(idExercice)
);

CREATE table porteMonnaie(
                             idUser int,
                             montant DECIMAL(10,3),
                             Foreign Key (idUser) REFERENCES user(idUser)
);

CREATE table code(
                     idCode int PRIMARY KEY auto_increment,
                     valeur int,
                     montant DECIMAL(10,3),
                     etat VARCHAR(255)
);

CREATE table admin(
                      idAdmin int PRIMARY key auto_increment,
                      nom VARCHAR(255),
                      mdp VARCHAR(255)
);

insert into admin (nom,mdp) values ('admin','admin');

insert into user (idUser,nom,prenom,email,mdp,dtn,poids,sexe,taille) values (null,'Rakoto','Jean','jean@gmail.com','jean','1999/05/14','98','1','165');
insert into user (idUser,nom,prenom,email,mdp,dtn,poids,sexe,taille) values (null,'Rasoa','Linette','linette@gmail.com','linette','1999/05/14','58','0','155');
insert into user (idUser,nom,prenom,email,mdp,dtn,poids,sexe,taille) values (null,'Razafy','Rix','rix@gmail.com','rix','1999/05/14','52','0','168');
insert into user (idUser,nom,prenom,email,mdp,dtn,poids,sexe,taille) values (null,'Rajean','Toky','toky@gmail.com','toky','1999/05/14','60','1','165');
insert into user (idUser,nom,prenom,email,mdp,dtn,poids,sexe,taille) values (null,'Ravao','Toavina','toavina@gmail.com','toavina','1999/05/14','60','1','172');

insert into objectif(idObjectif,nom) values(null,'Gagner du poids');
insert into objectif(idObjectif,nom) values(null,'Perdre du poids');

insert into userObjectif(idObjectif,idUser) values (1,2);
insert into userObjectif(idObjectif,idUser) values (2,3);
insert into userObjectif(idObjectif,idUser) values (1,4);
insert into userObjectif(idObjectif,idUser) values (2,5);
insert into userObjectif(idObjectif,idUser) values (1,6);

select* from user u join userObjectif us on u.idUser=us.idUser;

alter table regime add column pourcViande double;
alter table regime add column pourcPoisson double;
alter table regime add column pourcPoulet double;