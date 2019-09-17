CREATE TABLE IF NOT EXISTS library.book (
idbook INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(45) NOT NULL,
price DECIMAL NOT NULL,
author VARCHAR(45) NOT NULL)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS library.book_stat (
idStat INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
bookCount INT NOT NULL,
bookId INT NOT NULL)
ENGINE = InnoDB;

INSERT INTO book(title, price, author) VALUES ('Война и мир', 1500, 'Лев Толстой');
INSERT INTO book(title, price, author) VALUES ('Принц и нищий', 700, 'Марк Твен');
INSERT INTO book(title, price, author) VALUES ('Приключения Тома Сойера', 1200, 'Марк Твен');
INSERT INTO book(title, price, author) VALUES ('Вишневый сад', 300, 'Антон Чехов');

INSERT INTO book_stat(bookCount, bookId) VALUES (3, 1);

INSERT INTO book_stat(bookCount, bookId) VALUES (3, 1);
INSERT INTO book_stat(bookCount, bookId) VALUES (7, 2);
INSERT INTO book_stat(bookCount, bookId) VALUES (20, 3);

use library;
show tables;
select * from book;
select * from book_stat;

-- Вложенные запросы  

SELECT * from book
WHERE price > 
(
	SELECT round(AVG(price), 0)
    FROM book
);

-- Информация по книгам,
-- На которые есть записи в таблице
-- book_stat

SELECT * FROM book
WHERE idbook IN 
(
	SELECT bookId FROM book_stat
);

-- Информация по книгам,
-- На которые нет записей в таблице
-- book_stat (другой вариант)

SELECT * FROM book
WHERE NOT EXISTS
(
	SELECT * FROM book_stat
    WHERE book_stat.bookId = book.idbook
);

-- Оператор ANY (если какие-либо записи удовлетворяют
-- запросы - они вернутся)

SELECT title
FROM book
WHERE idbook = ANY
(
	SELECT bookId
    FROM book_stat
    WHERE bookCount > 3
);

CREATE VIEW book_view AS
SELECT title,price*2 AS price
FROM book;

UPDATE book set price = 4000 WHERE idbook = 2;

SELECT * FROM book_view;

DELIMITER $$

CREATE FUNCTION getBookCount() RETURNS INTEGER
BEGIN
	DECLARE val INTEGER;
	SELECT COUNT(*) INTO val FROM book;
	RETURN IFNULL (val, 0);
END$$

DELIMITER ;
SELECT * FROM book;
SELECT getBookCount();

DELIMITER $$

CREATE PROCEDURE getPrice(IN some_data DOUBLE)
BEGIN
	SELECT price-price*some_data FROM book;
END$$
DELIMITER ;

CALL getPrice(0.7); 

DELIMITER $$
CREATE PROCEDURE getMaxPriceByAuthor(OUT max_price INT, IN author_name VARCHAR(255))
BEGIN
	SELECT MAX(price) INTO max_price FROM book
	WHERE author = author_name;
END$$
DELIMITER ;

CALL getMaxPriceByAuthor(@mp, 'Марк Твен');
SELECT @mp AS max_price;

DELIMITER $$

CREATE PROCEDURE selectProc(IN firstParam INT, IN secondParam INT)
BEGIN

	SELECT b.price, b.title,
    CASE 
		WHEN b.price < firstParam THEN 'Дешевые книги'
        WHEN b.price > firstParam AND b.price < secondParam THEN 'Средняя цена'
        ELSE 'Дорогие книги'
    END AS result
    FROM book b;
END $$
    
DELIMITER ;

CALL selectProc(1000, 2000);
