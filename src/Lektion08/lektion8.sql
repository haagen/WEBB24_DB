


SHOW TABLES;


CREATE TABLE Companies (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(200) NOT NULL
);

CREATE TABLE Employees (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL, 
	email VARCHAR(200) NULL, 
	companiesId INT NOT NULL,
	FOREIGN KEY (companiesId) REFERENCES Companies (id)
);

INSERT INTO Companies (name) VALUES ('TeleTvå');
SELECT * FROM Companies;
INSERT INTO Employees (name, companiesId) VALUES ('Elvira', 1);
SELECT * FROM Employees;

DELETE FROM Companies WHERE id = 1;



CREATE TABLE Persons (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(200) NOT NULL
);

CREATE TABLE Cars (
	id INT PRIMARY KEY AUTO_INCREMENT, 
	name VARCHAR(200) NOT NULL 
);

CREATE TABLE Ownerships (
	id INT PRIMARY KEY AUTO_INCREMENT, 
	personsId INT NOT NULL, 
	carsId INT NOT NULL, 
	purchaseDate DATE NULL, 
	FOREIGN KEY (personsId) REFERENCES Persons(id),
	FOREIGN KEY (carsId) REFERENCES Cars(id)
);


INSERT INTO Persons (name) VALUES ('Elvira'), ('Sanja'), ('Adrian'), ('Anna');
SELECT * FROM Persons;

INSERT INTO Cars (name) VALUES ('Volvo'), ('Ford'), ('Opel'), ('Fiat');
SELECT * FROM Cars;

INSERT INTO Ownerships (personsId, carsId, purchaseDate) VALUES 
(1, 1, NULL), (2, 2, '2024-12-11'), (3, 4, '2023-12-11'), (4, 1, NULL), (4, 2, CURRENT_DATE);

SELECT * FROM Ownerships;

SELECT id FROM Cars WHERE name = 'Fiat';
SELECT personsId FROM Ownerships WHERE carsId = 4;
SELECT name FROM Persons WHERE id = 3;


-- Nästlade anrop

SELECT * FROM Employees;
SELECT * FROM Companies;
INSERT INTO Companies (name) VALUES ('Telia'), ('Tre'), ('Telnor');
INSERT INTO Employees (name, companiesId) VALUES ('Anes', 3), ('Keyse', 1), ('Danjal', 4), ('Lena', 2);

SELECT 
	id, name 
FROM 
	Companies 
WHERE 
	id IN (
		SELECT 
			companiesId 
		FROM 
			Employees 
		WHERE 
			name LIKE '%'
		);

SELECT
	id, name
FROM 
	Employees 
WHERE
	companiesId IN (
		SELECT id FROM Companies WHERE name = 'Telia'
	);
	
-- JOINS

SELECT e.id, e.name, e.companiesId, c.name FROM Employees e
INNER JOIN Companies c ON e.companiesId = c.id; 

SELECT c.id, c.name, o.purchaseDate, p.name FROM Cars c 
	INNER JOIN Ownerships o ON c.id = o.carsId
	INNER JOIN Persons p ON o.personsId = p.id
WHERE o.purchaseDate  IS NOT NULL;


-- UNIONS

SELECT id, name, 'Cars' AS Type FROM Cars WHERE id < 2
UNION
SELECT id, name, 'Employees' AS Type FROM Employees e WHERE id < 2;




