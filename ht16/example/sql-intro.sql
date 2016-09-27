--
-- SQL to create sample database.
-- Tested with SQLite.
-- Should work in MySQL also, written in a compatible way.
--
-- Start SQLite using 
-- $ sqlite3 -column -header db.sqlite < example/sql-intro.sql

--
-- Create database (not in SQLite)
--
-- CREATE DATABASE Bth;


--
-- CREATE TABLE
--
DROP TABLE IF EXISTS Course;
CREATE TABLE Course
(
    "code" CHAR(6) PRIMARY KEY NOT NULL,
    "name" VARCHAR(40) NOT NULL,
    "points" REAL NOT NULL
);



--
-- INSERT INTO
--
INSERT INTO Course VALUES ("DV1462", "htmlphp", 7.5);

INSERT INTO Course VALUES 
    ("PA1436", "design", 7.5),
    ("DV1531", "python", 7.5),
    ("DV1532", "javascript1", 7.5);



--
-- UPDATE
--
UPDATE Course
    SET
        code = "PA1439"
    WHERE
        code = "DV1462"
    LIMIT 1;



--
-- SELECT
--
SELECT * FROM Course;
SELECT name FROM Course;
SELECT name, points FROM COURSE WHERE code = "PA1439";
SELECT * FROM COURSE WHERE code LIKE "PA%";



--
-- DELETE
--
DELETE FROM Course WHERE code LIKE "DV%";
DELETE FROM Course WHERE code IN ("PA1439", "PA1436");
DELETE FROM Course WHERE code = "PA1439" LIMIT 1;
SELECT COUNT(code) FROM Course;
