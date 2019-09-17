SHOW databases;
USE test;
CREATE table books(
id int auto_increment primary key,
title varchar(100) not null,
description varchar(255),
price decimal(6,2) not null,
count_book int not null,
count_paper int not null,
photo varchar(255),
idAuthor int
) Engine = InnoDb;

INSERT INTO books (title, description, price, count_book, count_paper, photo, idAuthor) VALUES (
'HTML', 'Книга об языке разметки HTML', 1200, 5, 450, 'HTML.png', 1);
INSERT INTO books (title, description, price, count_book, count_paper, photo, idAuthor) VALUES (
'CSS', 'Книга об стилистике сайта CSS', 1500, 7, 50, 'CSS.png', 2);
INSERT INTO books (title, description, price, count_book, count_paper, photo, idAuthor) VALUES (
'JavaScript', 'Книга об языке программирования на JavaScript', 1900, 2, 1250, 'JS.png', 3);
INSERT INTO books (title, description, price, count_book, count_paper, photo, idAuthor) VALUES (
'PHP', 'Программирование на языке PHP', 1000, 10, 1000, 'PHP.png', 4);

SELECT title,price,photo from books where price between 500 and 1500 order by price desc;

SELECT title,description from books where idAuthor = 3;

SELECT price FROM books WHERE count_book < 10;

SELECT * FROM books WHERE description LIKE '%программирование%';

SELECT title FROM books where price < 1700 AND idAuthor = 2;

SELECT count_book FROM books WHERE title LIKE 'J%';

SELECT title FROM books WHERE price < 2000 AND idAuthor = 4;

SELECT count_book from books where description LIKE 'программирование%' ORDER BY count_book asc;

SELECT * FROM books where idAuthor != 1;

SELECT * FROM books LIMIT 1,2;