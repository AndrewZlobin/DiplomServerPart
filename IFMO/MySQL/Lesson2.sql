CREATE database library;
USE library;

CREATE TABLE Author (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(255) NOT NULL
) Engine=InnoDB;

desc Author;

ALTER TABLE Author ADD surname TEXT;
ALTER TABLE Author MODIFY COLUMN surname VARCHAR(255) NOT NULL;

ALTER TABLE Author ADD PRIMARY KEY (surname);

INSERT INTO Author (`name`, `surname`) VALUES ('Марк', 'Твен');

INSERT INTO Author (`name`, `surname`) VALUES ('Лев', 'Толстой');

INSERT INTO Author (`name`, `surname`) VALUES ('Антон', 'Чехов');

INSERT INTO Author (`name`, `surname`) VALUES ('Александр', 'Пушкин');

SELECT * FROM Author;

SELECT concat(`name`, ' ', `surname`) AS author FROM Author;

CREATE TABLE Book (
	`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `authorId` INT NOT NULL,
    foreign key (`authorId`)references Author(`id`) ON DELETE CASCADE
) Engine=InnoDB;

INSERT INTO Book (title, authorId) VALUES ('Приключения Тома Сойера', 1);
INSERT INTO Book (title, authorId) VALUES ('Война и мир', 2);
INSERT INTO Book (title, authorId) VALUES ('Вишневый сад', 3);
INSERT INTO Book (title, authorId) VALUES ('Принц и нищий', 1);

SELECT b.title, concat (a.name, ' ', a.surname) as Author
FROM Book b
INNER JOIN Author a
ON b.authorId = a.id;

SELECT b.title, concat (a.name, ' ', a.surname) as Author
FROM Book b  -- Левая таблица-- 
RIGHT JOIN Author a -- Правая таблица-- 
ON b.authorId = a.id;

-- Фильтр is null--  
SELECT concat (a.name, ' ', a.surname) as Author
FROM Book b
RIGHT JOIN Author a
ON b.authorId = a.id
WHERE b.title is NULL;

-- Разобраться с join и стандартными функциями SQL--
-- SUM(), AVG(), MIN(), MAX(), COUNT(), DISTINCT() --

