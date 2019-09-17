use lesson3;

SELECT * FROM cart_good;

-- Товары, которых нет в корзине (например, корзина 2)--

SELECT gFirst.`idGood` AS good_Id, gFirst.`name` AS good_name 
FROM good gFirst
WHERE gFirst.idGood NOT IN
(
	SELECT gSecond.idGood 
	FROM good gSecond
	INNER JOIN cart_good cg ON cg.idGood = gSecond.idGood
	WHERE cg.idCart = 2
);
-- 
-- SELECT cg.idCart
-- FROM cart_good cg
-- INNER JOIN good g ON cg.idGood = g.idGood
-- GROUP BY cg.idCart
-- HAVING AVG(SUM(cg.amount*g.price));
