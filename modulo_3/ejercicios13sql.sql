#1 
SELECT * FROM tiendas WHERE estado = 'WA';

#2
SELECT DISTINCT tipo FROM titulos WHERE contrato = 1;

#3
SELECT titulo, fecha_pub FROM titulos;

#4
SELECT titulo, precio FROM titulos WHERE precio > 10;

#5
SELECT titulo, tipo FROM titulos WHERE tipo = 'business';

#6
SELECT titulo FROM titulos WHERE titulo LIKE '%Computer%';

#7
SELECT titulo, tipo, precio FROM titulos WHERE (precio > 20 AND tipo = 'psychology');

#8
SELECT titulo, precio FROM titulos WHERE precio BETWEEN 10 AND 20 ORDER BY precio ASC;

#9
SELECT DISTINCT tipo FROM titulos WHERE id_pub = '0877';

#10
SELECT titulo, tipo, precio FROM titulos WHERE (tipo = 'psychology' AND precio > 20 AND titulo LIKE '%Computer%');

#11
SELECT titulo, avance, total_ventas FROM titulos WHERE (avance > 5000 AND total_ventas < 4000);

#12
SELECT DISTINCT tipo, total_ventas FROM titulos WHERE total_ventas BETWEEN 4000 AND 5000;

#13
SELECT titulo, tipo, total_ventas, precio FROM titulos WHERE (total_ventas > 1000 AND precio < 10 AND tipo IN ('business', 'mod_cook'));