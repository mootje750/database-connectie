CREATE DATABASE Winkel;

USE Winkel;

CREATE TABLE Producten (
    product_code INT AUTO_INCREMENT PRIMARY KEY,
    product_naam VARCHAR(200),
    prijs_per_stuk DECIMAL,
    omschrijving TEXT
);

ALTER TABLE Producten 
ADD COLUMN categorie ENUM('drinken', 'eten', 'kleding', 'electronica') NOT NULL;

SELECT * FROM Producten;

DROP TABLE Producten;