CREATE TABLE client(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    nomSociete VARCHAR(100) NOT NULL,
    typeSociete VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    motDePasse VARCHAR(50) NOT NULL,
);


INSERT INTO Client(nom, prenom, nomSociete, typeSociete, email, motDePasse) VALUES('BADOU','Aurelie','IZLY','Restauration', 'aureliebadou@gmail.com', '777' );
