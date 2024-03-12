Create Table Airbnb (
IdAirbnb int Primary key NOT NULL,
Airbnb varchar (100),
nbPersonne int,
nbChambre int,
nbLit int,
CanapeLit varchar (3),
LitBebe varchar (3),
Exterieur varchar (3) );

Insert into Airbnb Values 
(1, "Alibert", 10, 5, 6, "non", "non", "oui"),
(2, "Cazilhac", 7, 4, 3, "oui", "non", "oui"),
(3, "City'in", 4, 2, 2, "non", "oui", "non"),
(4, "Costes", 6, 2, 4, "non", "non", "oui"),
(5, "Côté Cour", 4, 1, 1, "oui", "oui", "non"),
(6, "Côté Coeur", 4, 1, 2, "oui", "oui", "oui"),
(7, "Family Home", 6, 2, 3, "oui", "oui", "non"),
(8, "Green", 2, 0, 1, "non", "non", "non"), 
(9, "Isly", 6, 3, 4, "non", "oui", "oui"),
(10, "La Bastide", 6, 2, 3, "oui", "oui", "oui"), 
(11, "Le 9", 4, 2, 2, "non", "oui", "non"),
(12, "Le Dome", 8, 3, 4, "oui", "non", "oui"),
(13, "Marty 1", 2, 0, 1, "non", "non", "oui"),
(14, "Marty 2", 5, 2, 3, "non", "oui", "oui"), 
(15, "Marty", 5, 2, 3, "non", "oui", "oui"),
(16, "Palaja", 8, 3, 3, "oui", "oui", "oui"),
(17, "Trivalle", 2, 0, 1, "non", "non", "non"),
(18, "Verdun", 4, 1, 1, "oui", "non", "non");