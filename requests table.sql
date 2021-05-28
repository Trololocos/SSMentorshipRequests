/* The CHAR types are just a byte indicating an enum type. 
This can be implemented for the champions too, later on. */

CREATE TABLE requests (
added DATETIME,
discord VARCHAR(25),
league CHAR,
region VARCHAR(10),
opgg VARCHAR(32),
position VARCHAR(10),
champion VARCHAR(32),
timezone CHAR,
info VARCHAR(255),
status CHAR,
mentor VARCHAR(25),
accepted DATETIME,
completed DATETIME,
remarks VARCHAR(255)
);