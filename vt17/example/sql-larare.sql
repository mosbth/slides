--
-- Skapa tabell Lärare
--
DROP TABLE Larare;
CREATE TABLE Larare
(
  akronym CHAR(3) PRIMARY KEY,
  avdelning CHAR(3),
  namn CHAR(20),
  lon INT,
  fodd DATETIME
);



--
-- Lägg till rader i tabellen Lärare
--
INSERT INTO Larare
	VALUES
	('MOS', 'APS', 'Mikael',   15000, '1968-03-07'),
	('MOL', 'AIS', 'Mats-Ola', 25000, '1978-12-07'),
	('BBE', 'APS', 'Betty',    15000, '1968-07-07'),
	('AJA', 'APS', 'Andreas',  10000, '1988-08-07'),
	('CJH', 'APS', 'Conny',    15000, '1943-01-07'),
	('CSA', 'APS', 'Charlie',  30000, '1969-04-07'),
	('BHR', 'AIS', 'Birgitta', 15000, '1964-02-07'),
	('MAP', 'APS', 'Marie',    25000, '1972-06-07'),
	('LRA', 'APS', 'Linda',    10000, '1975-03-07'),
	('ACA', 'ATS', 'Anders',   10000, '1967-09-07');

DELETE FROM Larare;
SELECT * FROM Larare;

-- MIN, MAX lön
SELECT MAX(lon) FROM Larare;


-- Hur många lärare jobbar på de olika avdelningarna?
-- Hur mycket betalar respektive avdelning ut i lön varje månad?
-- Hur mycket är medellönen för de olika avdelningarna?


-- Hur många per avdelning
SELECT
	avdelning,
    COUNT(akronym) AS Antal
FROM Larare
GROUP BY
	avdelning;

-- Hur många per avdelning
SELECT
	avdelning,
    SUM(lon) AS Lönesumma
FROM Larare
GROUP BY
	avdelning;

-- Hur många per avdelning
SELECT
	avdelning,
    ROUND(AVG(lon)) AS Snittlön
FROM Larare
GROUP BY
	avdelning;



--
-- SQL för att visa de avdelningar där snittlönen är över 18 000
--
SELECT avdelning, AVG(lon) AS Medellon
FROM Larare
GROUP BY avdelning
HAVING Medellon > 17000
;


--
-- Beräkna ålder
-- 
SELECT
	*, TIMESTAMPDIFF(YEAR, fodd, CURDATE()) AS Ålder
    FROM Larare;



-- 
-- View with age
--
CREATE VIEW VLarare
AS
	SELECT
	*, TIMESTAMPDIFF(YEAR, fodd, CURDATE()) AS Ålder
    FROM Larare;

SELECT * FROM VLarare;



--
-- Joins and subqueries
--
DROP TABLE Kurs;
CREATE TABLE Kurs (
    kod CHAR(6) PRIMARY KEY NOT NULL,
    namn CHAR(40),
    poang FLOAT
);

INSERT INTO Kurs
	VALUES
	("DV1106", "Databasteknik och Webbapps", 7.5),
	("DV1219", "Databasteknik", 7.5),
	("PA1106", "Individuellt Projekt", 7.5),
    ("DV1207", "Db och Webb2", 7.5)
;

DROP TABLE Kurstillfalle;
CREATE TABLE Kurstillfalle (
	id 	INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	lasperiod 	INT NOT NULL,
	kod 	CHAR(6) NOT NULL,
	akronym 	CHAR(3) NOT NULL,
    FOREIGN KEY (kod) REFERENCES Kurs (kod),
    FOREIGN KEY (akronym) REFERENCES Larare (akronym)
);

INSERT INTO Kurstillfalle
(kod, akronym, lasperiod)
VALUES
("DV1106", "MOS", 1),
("DV1106", "MOS", 4),
("DV1219", "CJH", 2),
("DV1219", "MOS", 3),
("PA1106", "MOL", 1),
("PA1106", "BBE", 2)
;


--
-- När går alla kurser och vem håller i dem?
--
SELECT
	* 
FROM Kurstillfalle AS Kt
	INNER JOIN Kurs AS K
		ON K.kod = Kt.kod
;


DROP VIEW AllaKurstillfallen;
CREATE VIEW AllaKurstillfallen
AS

SELECT
	L.*, K.kod, K.namn AS kursnamn, Kt.lasperiod 
FROM Kurstillfalle AS Kt
	INNER JOIN Kurs AS K
		ON K.kod = Kt.kod
	INNER JOIN VLarare AS L
		ON L.akronym = Kt.akronym
;

--
-- Gör en snyggare rapport
--
SELECT
	CONCAT(K.kod, " ", K.namn) AS Kursnamn,
    lasperiod AS Läsperiod,
    CONCAT(L.namn, " (", L.akronym, ")") AS Kursansvarig
FROM Kurstillfalle AS Kt
	INNER JOIN Kurs AS K
		ON K.kod = Kt.kod
	INNER JOIN Larare AS L
		ON L.akronym = Kt.akronym
;

-- Skapa vy av rapporten


--
-- Vad är medelåldern på kursansvariga på kursen PA1106?
-- Vad är medellönen för de kursansvariga på kurser som ligger inom ämnet Programvaruteknik (kurskoder som startar med ‘PA’)?
--
SELECT 
kod, AVG(Ålder)
FROM AllaKurstillfallen
WHERE kod = "DV1106"
GROUP BY kod
;


--
-- OUTER
-- 
--
SELECT 
	*
FROM AllaKurstillfallen
;

SELECT
	L.*, K.kod, K.namn AS kursnamn, Kt.lasperiod 
FROM Kurstillfalle AS Kt
	RIGHT OUTER JOIN Kurs AS K
		ON K.kod = Kt.kod
	LEFT OUTER JOIN VLarare AS L
		ON L.akronym = Kt.akronym
;




-- 
-- SUBQUERY
-- Vilken/vilka lärare har flest uppdrag som kursansvarig?
--
DROP VIEW AntalKurstillfallen;
CREATE VIEW AntalKurstillfallen
AS
SELECT
	akronym,
    COUNT(kod) AS Tillfällen
FROM AllaKurstillfallen
GROUP BY akronym;

SELECT * FROM AntalKurstillfallen;
SELECT MAX(Tillfällen) FROM AntalKurstillfallen;

SELECT
	akronym
FROM AntalKurstillfallen
WHERE
	Tillfällen = 3
;

SELECT
	akronym
FROM AntalKurstillfallen
WHERE
	Tillfällen = (SELECT MAX(Tillfällen) FROM AntalKurstillfallen)
;



