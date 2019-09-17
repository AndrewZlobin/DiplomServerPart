CREATE DATABASE climbers;
use climbers;
show tables;

INSERT INTO `routes` (`mountainName`, `mountainHeight`, `mountainCountry`, `mountainDistrict`) VALUES
('Горный массив Монте-Роза', 4092 , 'Швейцария', 'Вале'),
('Пик Бэйкер', 3285, 'США', 'Вашингтон'),
('Скала Хаф-Доум', 2694, 'США', 'Калифорния'),
('Гора Килиманджаро', 5895, 'Африка', 'Танзания'),
('Стратовулкан Эльбрус', 5642, 'Россия', 'Кавказ'),
('Гора Белуха', 4509, 'Россия', 'Алтай'),
('Стратовулкан Этна', 3350, 'Италия', 'Сицилия'),
('Гора Мак-Кинли', 6194, 'США', 'Аляска');

INSERT INTO `climbers` (`climberName`, `climberAddress`) VALUES
('Михаил', 'Санкт-Петербург'),
('Станислав', 'Москва'),
('Егор', 'Екатеринбург'),
('Александр', 'Самара'),
('Андрей', 'Петрозаводск'),
('Мария', 'Москва'),
('Екатерина', 'Самара'),
('Дарья', 'Хабаровск');

INSERT INTO `climbing` (`climbingDateStart`, `climbingDateEnd`, `climbingGroup`, `routes_idRoute`, `climbers_idClimber`) VALUES
('2015-11-04', '2015-11-06', 'First', 1, 2),
('2015-12-07', '2015-12-10', 'Second', 2, 4),
('2016-01-01', '2016-01-05', 'First', 3, 6),
('2016-05-05', '2015-05-15', 'Third', 4, 1),
('2017-07-09', '2015-07-13', 'Second', 5, 3),
('2017-12-12', '2017-12-16', 'Second', 6, 5),
('2018-02-08', '2015-02-16', 'Other', 7, 7);

-- Для каждой горы показать список групп,
-- осуществлявших восхождение,
-- в хронологическом порядке 
SELECT  mn.`mountainName` AS Mountain, cg.`climbingGroup` AS GroupNumber
FROM `routes` mn, `climbing` cg
WHERE idRoute = idClimbing
GROUP BY idClimbing;
-- HAVING climbingGroup = 'First';

-- Предоставить возможность добавления новой вершины,
-- с указанием названия вершины, высоты и страны местоположения
SELECT * FROM routes
WHERE
(
	INSERT INTO
)