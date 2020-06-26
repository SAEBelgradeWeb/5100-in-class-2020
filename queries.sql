INSERT INTO proizvodi (naziv, opis) VALUES('letnja kosulja', 'nekakav opis');
INSERT INTO proizvodi SET naziv = 'Novi proizvod', opis = 'Opis novog proizvoda';

SELECT * FROM users;
SELECT name, last_name FROM users;
SELECT name AS 'ime', last_name AS 'prezime' FROM users;
SELECT * FROM users ORDER BY name;
SELECT * FROM posts ORDER BY created_at DESC;
SELECT * FROM users LIMIT 10 OFFSET 20;
SELECT * FROM users ORDER BY name LIMIT 10;
SELECT * FROM users WHERE id = 2;
SELECT * FROM users WHERE name = 'Vladimir';
SELECT * FROM users WHERE name != 'Vladimir';
SELECT * FROM users WHERE id > 15;
SELECT * FROM users WHERE id > 15 AND id < 20;
SELECT * FROM users WHERE last_name LIKE '%a%';

UPDATE proizvodi SET naziv = 'Ljetnja kosulja', opis = 'nesto novo' WHERE naziv = 'letnja kosulja';
DELETE FROM proizvodi WHERE id = 1;