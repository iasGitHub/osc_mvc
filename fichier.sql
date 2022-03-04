CREATE IF NOT EXISTS DATABASE bd_osc;

CREATE TABLE IF NOT EXISTS `Entreprise`
(
    idE INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL,
    idUti INT(11),
    idQ INT(11),
    coordonnees VARCHAR(255),
    telFixe VARCHAR(20) UNIQUE,
    siegeSocial VARCHAR(255),
    dateCreation date,
    statutJuridique VARCHAR(100),
    registreComm VARCHAR(150) UNIQUE,
    ninea VARCHAR(200),
    adresseWeb VARCHAR(100),
    dispositifFormation BOOLEAN,
    qsp VARCHAR(20),
    organigramme BOOLEAN,
    domaine VARCHAR(200),
    FOREIGN KEY(idUti) REFERENCES `Utilisateur`(idUti),
    FOREIGN KEY(idQ) REFERENCES `Quartier`(idQ)
);

CREATE TABLE IF NOT EXISTS `Utilisateur`
(
    idUti INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    civilite VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    motDePasse VARCHAR(100),
    telephone VARCHAR(25) UNIQUE,
    poste VARCHAR(200)
);

CREATE TABLE IF NOT EXISTS `Employe`
(
    idEmp INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idE INT(11),
    nomEmp VARCHAR(255),
    prenomEmp VARCHAR(255),
    email VARCHAR(100) UNIQUE,
    telephone VARCHAR(25) UNIQUE,
    fonction VARCHAR(100),
    FOREIGN KEY(idE) REFERENCES `Entreprise`(idE)
);

CREATE TABLE IF NOT EXISTS `Quartier`
(
    idQ INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS `Commune`
(
    idC INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    idQ INT(11),
    FOREIGN KEY(idQ) REFERENCES `Quartier`(idQ)
);

CREATE TABLE IF NOT EXISTS `Departement`
(
    idDep INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomDep VARCHAR(255),
    idC INT(11),
    FOREIGN KEY(idC) REFERENCES `Commune`(idC)
);

CREATE TABLE IF NOT EXISTS `Region`
(
    idR INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomRegion VARCHAR(255),
    idDep INT(11),
    FOREIGN KEY(idDep) REFERENCES `Departement`(idDep)
);

CREATE TABLE IF NOT EXISTS `Pays`
(
    idPays INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    idR INT(11),
    FOREIGN KEY(idR) REFERENCES `Region`(idR)
);
