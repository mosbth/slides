--
-- Skapa tabell Lärare
--
DROP TABLE IF EXISTS Larare2;
CREATE TABLE Larare2
(
  akronym CHAR(3) PRIMARY KEY,
  avdelning CHAR(3),
  tjanst VARCHAR(10),
  namn CHAR(20),
  lon INT,
  fodd DATETIME
);



--
-- Lägg till rader i tabellen Lärare
--
INSERT INTO Larare2
	VALUES
	('MOS', 'APS', 'Adjunkt', 'Mikael',   15000, '1968-03-07'),
	('MOL', 'AIS', 'Adjunkt', 'Mats-Ola', 25000, '1978-12-07'),
	('BBE', 'APS', 'Adjunkt', 'Betty',    15000, '1968-07-07'),
	('AJA', 'APS', 'Lektor', 'Andreas',  10000, '1988-08-07'),
	('CJH', 'APS', 'Lektor', 'Conny',    15000, '1943-01-07'),
	('CSA', 'APS', 'Lektor', 'Charlie',  30000, '1969-04-07'),
	('BHR', 'AIS', 'Professor', 'Birgitta', 15000, '1964-02-07'),
	('MAP', 'APS', 'Professor', 'Marie',    25000, '1972-06-07'),
	('LRA', 'APS', 'Professor', 'Linda',    30000, '1975-03-07'),
	('ACA', 'ATS', 'Professor', 'Anders',   10000, '1967-09-07');

-- DELETE FROM Larare2;
SELECT * FROM Larare2;


SELECT
	namn,
    lon
FROM Larare2
ORDER BY lon DESC
;


SELECT
	MAX(lon) AS "Max lön"
FROM Larare2
;


SELECT
	namn,
    lon
FROM Larare2
WHERE
	lon = 30000
;


SELECT
	namn,
    lon
FROM Larare2
WHERE
	lon = (SELECT MAX(lon) FROM Larare2)
;


--
-- subquery returns several rows
--
SELECT lon FROM Larare2 WHERE lon > 20000 ORDER BY lon;
SELECT
	namn,
    lon
FROM Larare2
WHERE
	lon IN ((SELECT lon FROM Larare2 WHERE lon > 20000 ORDER BY lon))
;


