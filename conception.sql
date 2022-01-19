create database restaurant;

use restaurant;

-- php artisan make:model Repas -m
-- php artisan make:model Ingredients -m
-- php artisan make:model Repas_Ingredients -m
-- php artisan make:model Repas_Crees -m
-- php artisan make:model Ventes -m

-- php artisan migrate 

-- php artisan make:controller RepasController -r
-- php artisan make:controller RepasIngredientsController -r
-- php artisan make:controller VentesController -r

-- php artisan make:resource RepasResource
-- php artisan make:resource RepasIngredientsResource


CREATE TABLE repas(
   id INT AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(nom)
);

CREATE TABLE ingredients(
   id INT AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   quantite INT NOT NULL,
   unite VARCHAR (3),
   PRIMARY KEY(id),
   UNIQUE(nom)
);

CREATE TABLE repas__ingredients(
   id INT AUTO_INCREMENT,
   repas_id INT NOT NULL,
   ingredients_id INT NOT NULL,
   quantite INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(repas_id) REFERENCES repas(id),
   FOREIGN KEY(ingredients_id) REFERENCES ingredient(id)
);

CREATE TABLE repas__crees(
   id INT AUTO_INCREMENT,
   repas_id INT NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE ventes(
   id INT AUTO_INCREMENT,
   repas_crees_id BIGINT(20) UNSIGNED,
   PRIMARY KEY(id),
   FOREIGN KEY(repas_crees_id) REFERENCES repas__crees(id)
);

INSERT INTO Ingredients (nom, quantite, unite, created_at) VALUES ('Pain burger', 10, 'nb', now());
INSERT INTO Ingredients (nom, quantite, unite, created_at) VALUES ('Tomates', 10, 'nb', now());
INSERT INTO Ingredients (nom, quantite, unite, created_at) VALUES ('Oeuf', 10, 'nb', now());
INSERT INTO Ingredients (nom, quantite, unite, created_at) VALUES ('Salade', 10, 'nb', now());
INSERT INTO Ingredients (nom, quantite, unite, created_at) VALUES ('Oignon', 10, 'nb', now());
INSERT INTO Ingredients (nom, quantite, unite, created_at) VALUES ('Mortadelle', 10, 'g', now());
INSERT INTO Repas (nom, created_at) VALUES ('Hamburger', now());

INSERT INTO repas__ingredients (repas_id, ingredients_id, quantite,  created_at) VALUES (1, 7, 3, now());
INSERT INTO repas__ingredients (repas_id, ingredients_id, quantite,  created_at) VALUES (1, 8, 3, now());
INSERT INTO repas__ingredients (repas_id, ingredients_id, quantite,  created_at) VALUES (1, 9, 3, now());
INSERT INTO repas__ingredients (repas_id, ingredients_id, quantite,  created_at) VALUES (1, 10, 3, now());
INSERT INTO repas__ingredients (repas_id, ingredients_id, quantite,  created_at) VALUES (1, 11, 3, now());
INSERT INTO repas__ingredients (repas_id, ingredients_id, quantite,  created_at) VALUES (1, 12, 3, now());

