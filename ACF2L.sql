CREATE TABLE Utilisateurs (
    user_email VARCHAR(255) PRIMARY KEY,  -- Utilisation de l'adresse e-mail comme clé primaire
    civilite VARCHAR(10) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    numRue VARCHAR(10),
    rue VARCHAR(255),
    codePostal VARCHAR(10),
    ville VARCHAR(255),
    situationFamiliale VARCHAR(20) NOT NULL,
    dateDebut DATE,
    dateFin DATE,
    mineur INT NOT NULL,
    majeur INT NOT NULL,
    parent INT NOT NULL,
    handicap VARCHAR(255),
    telephone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,  -- Ajout du champ mot de passe
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);




CREATE TABLE Reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    vol_initiation BOOLEAN,
    cours_pilotage BOOLEAN,
    balade_aerienne BOOLEAN,
    formation_pilote BOOLEAN,
    date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
