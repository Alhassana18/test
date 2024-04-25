CREATE TABLE livre(
    ISBN VARCHAR(30) PRIMARY KEY,
    Titre VARCHAR(30),
    Auteur VARCHAR(20)
);

-- Definition de la table membre
CREATE TABLE membre(
    NumeroMembre VARCHAR(255) PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    INE VARCHAR(255),
    Filiere VARCHAR(255),
    Classe VARCHAR(255),
    DateNaissance DATE
);

-- definiton de la table inscrire
CREATE TABLE Inscrire(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    INE VARCHAR(255),
    Filiere VARCHAR(255),
    classe VARCHAR(255),
    DateNaissance VARCHAR(255),
    DateInscription VARCHAR(255)
);

-- definition de la table emprunt
CREATE TABLE emprunt(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ISBN VARCHAR(255),
    NumeroMembre VARCHAR(255),
    DateEmprunt VARCHAR(255),
    DateRetourPrevu VARCHAR(255),
    DateRetourEffective VARCHAR(255),
    FOREIGN KEY (ISBN) REFERENCES Lvre(ISBN),
    FOREIGN KEY (NumeroMembre) REFERENCES Membre(NumeroMembre)
);

-- definition de le reservation
CREATE TABLE reservation(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ISBN VARCHAR(255),
    NumeroMembre VARCHAR(255),
    DateReservation VARCHAR(255),
    FOREIGN KEY (ISBN) REFERENCES Lvre(ISBN),
    FOREIGN KEY (NumeroMembre) REFERENCES Membre(NumeroMembre)
);

-- definition de la table utilisateur
CREATE TABLE utilisateur(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NumeroUtilisateur VARCHAR(255),
    MotDePasse VARCHAR(255)
);