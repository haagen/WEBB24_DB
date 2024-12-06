
-- Skapa en databas
CREATE DATABASE Football;

-- Använd football som databas
USE Football;

-- Visa vilka tabeller som finns
SHOW TABLES;

-- Skapa en tabell för våra klubbar
CREATE TABLE Clubs (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(200) NOT NULL
);

-- Beskriv / visa tabellen
DESCRIBE Clubs;

-- Stoppa in data i Clubs
INSERT INTO Clubs
(
	name
)
VALUES
(
	'Snogeröds IF'
);


-- Hämta alla kolumner och alla rader från Clubs
SELECT * FROM Clubs;