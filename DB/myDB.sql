CREATE SCHEMA db;

CREATE TABLE db.recipe (
  id serial PRIMARY KEY,
);


CREATE TABLE db.author (
  id serial PRIMARY KEY,
  recipe_id int REFERENCES db.recipe (id),
  name varchar(45) NOT NULL
);

CREATE TABLE db.title (
  id serial PRIMARY KEY,
  title varchar(45) NOT NULL,
  recipe_id int REFERENCES db.recipe (id)
);

CREATE TABLE db.measurement (
  id serial PRIMARY KEY,
  measurement varchar(20) NOT NULL  
);

  --teaspoon
  --tablespoon
  --cup  
  --ounce (fluid)
  --pint
  --quart
  --gallon
  --ounce (mass)
  --pound

INSERT INTO db.measurement (measurement) 
VALUES
      ('Teaspoon'), ('Tablespoon'), ('Cup'), 
      ('Ounce (fluid)'), ('Pint'), ('Quart'),
      ('Gallon'), ('Ounce (mass)'), ('Pound');

CREATE TABLE db.instructions (
  id serial PRIMARY KEY,
  content varchar(500) NOT NULL,
  recipe_id int REFERENCES db.recipe (id)
);

CREATE TABLE db.ingredient (
  id serial PRIMARY KEY,
  ingredient varchar(45) NOT NULL,
  qty smallint NOT NULL, 
  measurement_id int REFERENCES db.measurement (id),
  recipe_id int REFERENCES db.recipe (id)
);



CREATE TABLE db.note (
  id serial PRIMARY KEY,
  recipe_id int REFERENCES db.recipe (id),
  author_id int REFERENCES db.author (id),   --author of the note
  content varchar(500) NOT NULL
);


SELECT COLUMN_NAME, DATA_TYPE
FROM INFORMATION_SCHEMA.COLUMNS
WHERE 
    TABLE_SCHEMA = 'db' AND
     TABLE_NAME = 'author' AND 
     COLUMN_NAME = 'pswrd';

ALTER TABLE db.author ALTER COLUMN pswrd TYPE VARCHAR(255);

UPDATE db.author SET pswrd = 'hello';