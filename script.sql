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
CREATE TABLE recettePics(
     idrecette int,
     sary VARCHAR(100),
     Foreign Key (idRecette) REFERENCES recette(idrecette)
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

CREATE TABLE actSportPics(
    idActSport int,
    sary VARCHAR(100),
    Foreign Key (idActSport) REFERENCES actSport(idActSport)
);

CREATE table exercice(
                         idExercice int PRIMARY KEY auto_increment,
                         nom VARCHAR(255),
                         details VARCHAR(255),
                         sary VARCHAR(255)
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

CREATE TABLE programmeUser(
    idPro int PRIMARY KEY auto_increment,
    idUser int,
    idRegime int,
    idActSport int,
    poidsInit double,
    daty date
);

insert into admin (nom,mdp) values ('admin','admin');
insert into user (email, mdp) values ('jean@gmail.com','jean');

INSERT INTO objectif VALUES(null,'reduire poids');
INSERT INTO objectif VALUES(null,'augmenter poids');


INSERT INTO regime (duree, idObjectif, poids, details, sexe, montant) VALUES
(10, 1, 70, 'Lorem ipsum', 1, 100.5),
(7, 2, 65, 'Dolor sit amet', 0, 150.75),
(30, 1, 80, 'Consectetur adipiscing elit', 1, 200.0),
(30, 2, 70, 'Sed do eiusmod tempor incididunt', 0, 120.0),
(30, 1, 75, 'Ut labore et dolore magna aliqua', 1, 180.25);

INSERT INTO recette (nom, details, sary) VALUES
('Recette 1', 'Lorem ipsum', 'image1.jpg'),
('Recette 2', 'Dolor sit amet', 'image2.jpg'),
('Recette 3', 'Consectetur adipiscing elit', 'image3.jpg'),
('Recette 4', 'Sed do eiusmod tempor incididunt', 'image4.jpg'),
('Recette 5', 'Ut labore et dolore magna aliqua', 'image5.jpg');


INSERT INTO RegimeRecette (idRegime, idRecette) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);


ALTER TABLE regime add column pourcViande double;

ALTER TABLE regime add column pourcPoisson double;

ALTER TABLE regime add column pourcVolaille double;

ALTER TABLE user add column isGold int;

CREATE TABLE prixGold(
    idPrixGold int primary key auto_increment,
    prix double,
    daty date
);






