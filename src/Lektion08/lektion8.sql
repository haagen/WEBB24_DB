

DROP TABLE Card;
CREATE TABLE Card (
	id INT PRIMARY KEY AUTO_INCREMENT,
	`condition` ENUM('Good', 'Bad', 'Ugly') DEFAULT 'Good'
);

-- Pokemon
-- PokemonUser
-- User


SELECT id, name FROM Users WHERE id IN (SELECT UsersId FROM PokemonUser);