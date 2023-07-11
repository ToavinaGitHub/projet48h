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
create;
CREATE table admin(
                      idAdmin int PRIMARY key auto_increment,
                      nom VARCHAR(255),
                      mdp VARCHAR(255)
);

insert into admin (nom,mdp) values ('admin','admin');
insert into user (email, mdp) values ('jean@gmail.com','jean');

insert into programme(idUser,idActSport,poidsInit,daty) values (11,1,57,'2021-01-25'),(9,3,67,'2021-01-20')