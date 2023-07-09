create table caracComptable
(
    idCaraCompta        int auto_increment
        primary key,
    idDeviseCompta      int      null,
    idDeviseEquivalence int      null,
    debutExercice       datetime null
);

create table categorie
(
    idCategorie   int auto_increment
        primary key,
    typeCategorie text null
);


-------------------------------------------
create table codeJournal
(
    idCodeJournal   int auto_increment
        primary key,
    code            varchar(5)   null,
    intituleJournal varchar(255) null
);
--------------------------------------------
create table devise
(
    idDevise  bigint unsigned auto_increment
        primary key,
    nomDevise text null,
    constraint idDevise
        unique (idDevise)
);

create table deviseEquivalence
(
    idDeviseEquivalence int auto_increment
        primary key,
    idDevise            int    null,
    taux                double null
);

create table emp
(
    idEmp     int auto_increment
        primary key,
    email     varchar(80)   null,
    mdp       varchar(80)   null,
    nomEmp    varchar(80)   null,
    idTypeEmp int default 1 null
);

create table entreprise
(
    idEntreprise       int auto_increment
        primary key,
    nomEntreprise      varchar(80) null,
    objet              varchar(80) null,
    siege              varchar(80) null,
    nomDirigeant       varchar(80) null,
    numRegistre        varchar(80) null,
    numIdentiteFiscale varchar(80) null,
    numGestionCommerce varchar(80) null,
    numStatistique     varchar(80) null,
    logo               varchar(80) null,
    dateCreation       datetime    null,
    numTel             varchar(80) null,
    status             varchar(80) null
);

create table exerciceComptable
(
    idExercice        int auto_increment
        primary key,
    dateDebutExercice date null,
    dateFinExercice   date null
);

create table journal
(
    idJournal       int auto_increment
        primary key,
    dateJournal     date        null,
    piece           varchar(20) null,
    intitule        varchar(35) null,
    idDevise        int         null,
    idCompteGeneral int         null,
    idCompteTiers   int         null,
    idCodeJournal   int         null
);

create table planComptable
(
    idPlanCompta int auto_increment
        primary key,
    numComptable text null,
    idCategorie  int  null,
    intitule     text null
);

create table typeCompteTiers
(
    idType  int auto_increment
        primary key,
    nomType varchar(80) null
);

create table planTiers
(
    idPlanTiers int auto_increment
        primary key,
    idType      int         null,
    numero      varchar(80) null,
    intitule    text        null,
    constraint plantiers_ibfk_1
        foreign key (idType) references typeCompteTiers (idType)
);

create index idType
    on planTiers (idType);

create table typeEmploye
(
    idTypeEmp   int auto_increment
        primary key,
    typeEmploye varchar(80) null
);


