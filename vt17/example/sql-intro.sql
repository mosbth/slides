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



--
-- Create another table to join from
--
DROP TABLE IF EXISTS CourseEvent;
CREATE TABLE CourseEvent (
    "code" TEXT,
    "period" TEXT,
    PRIMARY KEY("code", "period")
);

INSERT INTO CourseEvent VALUES
    ("DV1462", "2016-lp1"),
    ("DV1462", "2017-lp1"),
    ("DV1462", "2018-lp1"),
    ("PA1436", "2016-lp2"),
    ("PA1436", "2017-lp2"),
    ("PA1436", "2018-lp2");

SELECT * FROM CourseEvent;



--
-- Join two tables
--

-- Crossjoin
SELECT * FROM Course AS C, CourseEvent AS Ce
    WHERE 
        Ce.period LIKE "2016%";

-- Connect per key 
SELECT * FROM Course AS C, CourseEvent AS Ce
    WHERE 
        C.code = Ce.code AND
        Ce.period LIKE "2016%";

-- Pretty join
SELECT * FROM Course AS C
    INNER JOIN CourseEvent AS Ce
        ON C.code = Ce.code
    WHERE 
        Ce.period LIKE "2016%";
