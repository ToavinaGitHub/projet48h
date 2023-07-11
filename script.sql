create database 48hc;
use 48hc;
create table user(
                     idUser int primary key auto_increment,
                     nom varchar(255),
                     prenom varchar(255),
                     email varchar(255),
                     mdp varchar(255),
                     dtn date,
                     poids DECIMAL(10,3),
                     sexe int,
                     taille int,
                     isGold int
);

INSERT INTO user VALUES(null,'Razakarivony','Toavina','toavina@gmail.com','toavina','2004-03-04',60,1,170,0);
INSERT INTO user VALUES(null,'Rabahaja','Toky','toky@gmail.com','toky','2003-07-22',65,1,170,0);
INSERT INTO user VALUES(null,'Rahajarison','Rianala','rianala@gmail.com','rianala','2004-11-25',54,0,169,0);
INSERT INTO user VALUES(null,'Rakoto','Be','koto@gmail.com','koto','2014-03-05',50,1,150,0);
INSERT INTO user VALUES(null,'Randria','Soa','soa@gmail.com','soa','2014-05-04',40,1,140,0);


CREATE table userPics(
                         idUser int,
                         sary VARCHAR(100),
                         Foreign Key (idUser) REFERENCES user(idUser)
);



create table objectif(
                         idObjectif int PRIMARY KEY auto_increment,
                         nom VARCHAR(100)
);




INSERT INTO objectif VALUES(null,'Reduire poids');
INSERT INTO objectif VALUES(null,'Augmenter poids');
INSERT INTO objectif VALUES(null,'Atteindre son IMC idéal');

CREATE table userObjectif(
                             idObjectif int,
                             idUser int,
                             Foreign Key (idObjectif) REFERENCES objectif(idObjectif),
                             Foreign Key (idUser) REFERENCES user(idUser)
);

INSERT INTO userObjectif VALUES(1,1);
INSERT INTO userObjectif VALUES(1,2);
INSERT INTO userObjectif VALUES(1,3);
INSERT INTO userObjectif VALUES(2,4);
INSERT INTO userObjectif VALUES(2,5);



CREATE Table regime(
                       idRegime int PRIMARY KEY auto_increment,
                       duree int,
                       idObjectif int,
                       poids int,
                       details VARCHAR(255),
                       sexe int,
                       montant DECIMAL(10,3),
                       pourcViande double,
                       pourcPoisson double,
                       pourcVolaille double
                       Foreign Key (idObjectif) REFERENCES objectif(idObjectif)
);


INSERT INTO regime VALUES(null,7,1,5,'Regime 1',1,12000,10,80,10);
INSERT INTO regime VALUES(null,10,1,5,'Regime 2',1,10000,10,90,0);
INSERT INTO regime VALUES(null,15,1,4,'Regime 3',1,11000,0,80,20);
INSERT INTO regime VALUES(null,20,1,3,'Regime 4',0,14000,50,40,10);
INSERT INTO regime VALUES(null,30,0,3,'Regime 5',1,15000,10,80,10);


CREATE Table recette(
                        idrecette int PRIMARY KEY auto_increment,
                        nom VARCHAR(255),
                        details VARCHAR(255),
                        sary VARCHAR(255)
);

INSERT INTO recette VALUES(null,'Recette1','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette2','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette3','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette4','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette5','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette6','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette7','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette8','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette9','Plus de Vita-C','recette1.jpg');
INSERT INTO recette VALUES(null,'Recette10','Plus de Vita-C','recette1.jpg');



CREATE table RegimeRecette(
                              idRegime int,
                              idRecette int,
                              Foreign Key (idRegime) REFERENCES regime(idRegime),
                              Foreign Key (idRecette) REFERENCES recette(idRecette)
);

INSERT INTO RegimeRecette VALUES(1,1);
INSERT INTO RegimeRecette VALUES(1,2);
INSERT INTO RegimeRecette VALUES(1,3);
INSERT INTO RegimeRecette VALUES(2,4);
INSERT INTO RegimeRecette VALUES(2,5);
INSERT INTO RegimeRecette VALUES(2,6);
INSERT INTO RegimeRecette VALUES(3,7);
INSERT INTO RegimeRecette VALUES(4,8);
INSERT INTO RegimeRecette VALUES(4,9);
INSERT INTO RegimeRecette VALUES(5,10);

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


INSERT INTO actSport VALUES(null,'Details act 1',4,1,1,150);
INSERT INTO actSport VALUES(null,'Details act 2',5,0,1,160);
INSERT INTO actSport VALUES(null,'Details act 3',6,1,0,155);
INSERT INTO actSport VALUES(null,'Details act 4',10,0,1,155);
INSERT INTO actSport VALUES(null,'Details act 5',15,1,1,160);
INSERT INTO actSport VALUES(null,'Details act 6',12,1,1,165);

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

INSERT INTO exercice VALUES(null,'exo 1','details 1','exercice1.jpg');
INSERT INTO exercice VALUES(null,'exo 2','details 2','exercice1.jpg');
INSERT INTO exercice VALUES(null,'exo 3 ','details 3','exercice1.jpg');
INSERT INTO exercice VALUES(null,'exo 4','details 4','exercice1.jpg');
INSERT INTO exercice VALUES(null,'exo 5','details 5','exercice1.jpg');
INSERT INTO exercice VALUES(null,'exo 6','details 6','exercice1.jpg');
INSERT INTO exercice VALUES(null,'exo 7','details 7','exercice1.jpg');

CREATE table actExercice(
                            idActSport int,
                            idExercice int,
                            Foreign Key (idActSport) REFERENCES actSport(idActSport),
                            Foreign Key (idExercice) REFERENCES exercice(idExercice)
);

INSERT INTO actExercice VALUES(1,1);
INSERT INTO actExercice VALUES(1,2);
INSERT INTO actExercice VALUES(1,3);
INSERT INTO actExercice VALUES(2,4);
INSERT INTO actExercice VALUES(2,5);
INSERT INTO actExercice VALUES(3,6);
INSERT INTO actExercice VALUES(3,7);
INSERT INTO actExercice VALUES(4,3);
INSERT INTO actExercice VALUES(5,1);
INSERT INTO actExercice VALUES(5,2);

CREATE table porteMonnaie(
                             idUser int,
                             montant DECIMAL(10,3),
                             Foreign Key (idUser) REFERENCES user(idUser)
);

INSERT INTO porteMonnaie values (1,30000);
INSERT INTO porteMonnaie values (2,30000);
INSERT INTO porteMonnaie values (3,30000);
INSERT INTO porteMonnaie values (4,30000);
INSERT INTO porteMonnaie values (5,30000);

CREATE table code(
                     idCode int PRIMARY KEY auto_increment,
                     valeur int,
                     montant DECIMAL(10,3),
                     etat VARCHAR(255)
);

INSERT INTO code VALUES(null,'234567876',10000,1);
INSERT INTO code VALUES(null,'234565336',10000,1);
INSERT INTO code VALUES(null,'245678736',12000,1);
INSERT INTO code VALUES(null,'567867336',20000,1);
INSERT INTO code VALUES(null,'233333376',10000,1);
INSERT INTO code VALUES(null,'245637876',10000,1);
INSERT INTO code VALUES(null,'356734376',10000,1);
INSERT INTO code VALUES(null,'267893333',10000,1);
INSERT INTO code VALUES(null,'789033333',10000,1);
INSERT INTO code VALUES(null,'567893345',200,1);
INSERT INTO code VALUES(null,'567389492',10000,1);
INSERT INTO code VALUES(null,'367890444',1000,1);
INSERT INTO code VALUES(null,'678934672',90000,1);
INSERT INTO code VALUES(null,'536272849',10000,1);
INSERT INTO code VALUES(null,'367849736',10000,1);

CREATE table admin(
                      idAdmin int PRIMARY key auto_increment,
                      nom VARCHAR(255),
                      email VARCHAR(255)
                      mdp VARCHAR(255)
);

INSERT INTO admin VALUES(null,'itu','itu@gmail.com','itu');

CREATE TABLE programmeUser(
    idPro int PRIMARY KEY auto_increment,
    idUser int,
    idRegime int,
    idActSport int,
    poidsInit double,
    daty date
);

INSERT INTO programmeUser VALUES (null,1,1,1,60,'2023-07-11');

CREATE TABLE prixGold(
    idPrixGold int primary key auto_increment,
    prix double,
    daty date
);

INSERT INTO prixGold VALUES(null,120000,'2023-07-11');












