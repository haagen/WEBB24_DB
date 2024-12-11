USE PaperPlanes;

SHOW TABLES;
DESCRIBE Contacts;

SELECT name, noOfCars FROM Contacts;

SELECT name, birthday FROM Contacts WHERE noOfCars > 0;

SELECT * FROM Contacts;

INSERT INTO Contacts (name, birthday, noOfCars, newsletter) VALUES 
('Nisse Persson', '1946-12-13', 12, 'Nej'),
('Åsa Knutsson', NULL, 1, 'Ja'),
('Camilla Jönsson', '1986-03-22', 2, 'Ja');

SELECT name, birthday, noOfCars FROM Contacts 
WHERE birthday IS NOT NULL AND noOfCars > 0 AND noOfCars <= 10;

SELECT name, birthday, noOfCars FROM Contacts 
WHERE birthday IS NOT NULL AND noOfCars BETWEEN 1 AND 10;

SELECT COUNT(id) FROM Contacts WHERE birthday IS NOT NULL;

SELECT COUNT(id) AS birthdays FROM Contacts WHERE birthday IS NOT NULL;

-- SELECT id AS nyckel FROM Contacts;

SELECT COUNT(id) AS NumberOfContactsWithCars FROM Contacts WHERE noOfCars > 0; 

SELECT SUM(noOfCars) AS AntalBilar FROM Contacts;

SELECT newsletter, SUM(noOfCars) AS AntalBilar FROM Contacts GROUP BY newsletter;

SELECT * FROM Contacts;


CREATE TABLE Posts (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(200) NOT NULL, 
	body TEXT NULL
);

SELECT id, name, body FROM Posts ORDER BY id DESC LIMIT 10;

INSERT INTO Posts (
	name, 
	body
) VALUE (
	'Lena',
	'Hejsan! Detta är min första post!'
);

