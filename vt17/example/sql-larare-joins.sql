DROP TABLE IF EXISTS Kurstillfalle2;
DROP TABLE IF EXISTS Kurs2;
DROP TABLE IF EXISTS Larare2;

--
-- Skapa tabell Lärare
--
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



--
--
--
CREATE TABLE Kurs2 (
    kod CHAR(6) PRIMARY KEY NOT NULL,
    namn CHAR(40),
    poang FLOAT
);

INSERT INTO Kurs2
	VALUES
	("DV1106", "Databasteknik och Webbapps", 7.5),
	("DV1219", "Databasteknik", 7.5),
	("PA1106", "Individuellt Projekt", 7.5),
    ("DV1207", "Db och Webb2", 7.5)
;


--
--
--
CREATE TABLE Kurstillfalle2 (
	id 	INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	lasperiod 	INT NOT NULL,
	kod 	CHAR(6) NOT NULL,
	akronym 	CHAR(3) NOT NULL,
    FOREIGN KEY (kod) REFERENCES Kurs2 (kod),
    FOREIGN KEY (akronym) REFERENCES Larare2 (akronym)
);

INSERT INTO Kurstillfalle2
(kod, akronym, lasperiod)
VALUES
("DV1106", "MOS", 1),
("DV1106", "MOS", 4),
("DV1219", "CJH", 2),
("DV1219", "MOS", 3),
("PA1106", "MOL", 1),
("PA1106", "BBE", 2)
;


SELECT * FROM Larare2;
SELECT * FROM Kurs2;
SELECT * FROM Kurstillfalle2;


--
-- När går alla kurser och vem håller i dem?
--
SELECT
	* 
FROM Kurstillfalle2 AS Kt
	INNER JOIN Kurs2 AS K
		ON K.kod = Kt.kod
;

--
-- Finns det kurser som inte har ett kurstillfälle?
--
SELECT
	* 
FROM Kurs2 AS K
	INNER JOIN Kurstillfalle2 AS Kt
		ON K.kod = Kt.kod
;

SELECT
	* 
FROM Kurs2 AS K
	LEFT OUTER JOIN Kurstillfalle2 AS Kt
		ON K.kod = Kt.kod
;


--
-- Finns det lärare som inte är kursansvariga?
--
SELECT
	* 
FROM Larare2 AS L
	INNER JOIN Kurstillfalle2 AS Kt
		ON Kt.akronym = L.akronym
;

SELECT
	* 
FROM Larare2 AS L
	LEFT OUTER JOIN Kurstillfalle2 AS Kt
		ON Kt.akronym = L.akronym
;



--
-- Triple join
--
SELECT
	L.*,
    K.kod,
    K.namn AS kursnamn,
    Kt.lasperiod 
FROM Kurstillfalle2 AS Kt
	INNER JOIN Kurs2 AS K
		ON K.kod = Kt.kod
	INNER JOIN Larare2 AS L
		ON L.akronym = Kt.akronym
;


--
-- Gör en snyggare rapport
--
SELECT
	CONCAT(K.kod, " ", K.namn) AS Kursnamn,
    lasperiod AS Läsperiod,
    CONCAT(L.namn, " (", L.akronym, ")") AS Kursansvarig
FROM Kurstillfalle2 AS Kt
	INNER JOIN Kurs2 AS K
		ON K.kod = Kt.kod
	INNER JOIN Larare2 AS L
		ON L.akronym = Kt.akronym
;

-- Skapa vy av rapporten och använd den