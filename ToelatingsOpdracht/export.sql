USE stage;

CREATE TABLE Vacatures
(
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
naam varchar(255),
contactUren int,
beschrijving LONGTEXT
);

INSERT INTO vacatures (naam, beschrijving, contactUren, locatie)
VALUES ("Bedrijfs manager", "Je bent de manager van bedrijf x en dus verantwoordelijk voor alle personeelszaken", 40, "Robijnstraat 1, 1812 RB Alkmaar");

ALTER TABLE vacatures
ADD locatie varchar(255);


INSERT INTO vacatures (naam, beschrijving, contactUren, locatie)
VALUES ("Intensive care", "Je zal op de afdeling Intesive Care komen te staan", 32, "Wilhelminalaan 12, 1815 JD Alkmaar");

INSERT INTO vacatures (naam, beschrijving, contactUren, locatie)
VALUES ("Receptie mederwerker", "Je zal achter de receptie zitten bij de info balie", 40, "Wilhelminalaan 12, 1815 JD Alkmaar");

INSERT INTO vacatures (naam, beschrijving, contactUren, locatie)
VALUES ("Systeem beheerder", "Je zal alle ICT systemen draaiende houden zodat er geen problemen zijn in het systeem", 24, "Wilhelminalaan 12, 1815 JD Alkmaar");
