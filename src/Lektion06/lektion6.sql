SHOW DATABASES;

CREATE DATABASE PaperPlanes;

USE PaperPlanes;

CREATE TABLE Contacts (
	id INT PRIMARY KEY AUTO_INCREMENT, 			-- PRIMARY KEY innebär bla att fältet är NOT NULL
	name VARCHAR(200) NOT NULL,
	birthday DATE NULL, 
	noOfCars INT NOT NULL DEFAULT 0,
	newsletter ENUM('Ja', 'Nej') NOT NULL DEFAULT 'Nej'
);

SHOW TABLES;			-- Visa alla tabeller
DESCRIBE Contacts;		-- Beskriv hur Contacts ser ut

INSERT INTO Contacts (
	name
) VALUES (
	'Åke Karlsson'
);

INSERT INTO Contacts (
	name,
	birthday,
	newsletter
) VALUE (
	'Kalle Anka',
	'1992-08-29',
	'Ja'
);

INSERT INTO Contacts (
	name, 
	noOfCars
) VALUES (
	'Elsbieta Stinasdotter',
	2
);

-- När vi inte anger ett namn - får vi ett fel
INSERT INTO Contacts (
	noOfCars
) VALUES (19);

SELECT * FROM Contacts;

UPDATE Contacts SET noOfCars = 0; -- Varning alla kontakter kommer att uppdateras

UPDATE Contacts SET noOfCars = 3 WHERE id = 1;

UPDATE Contacts SET name = "Elsa Stinasdotter", birthday=CURDATE() WHERE id = 3;

INSERT INTO Contacts (
	name
) VALUES (
	'Martin'
);

SELECT * FROM Contacts;
DELETE FROM Contacts WHERE name = 'Martin';
DELETE FROM Contacts WHERE id = 26;
DELETE FROM Contacts WHERE name = 'Martin' AND id > 25;
DELETE FROM Contacts WHERE id IN (33,34,35);





