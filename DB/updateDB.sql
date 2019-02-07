UPDATE db.recipe 
  SET id;


UPDATE db.author (
  id serial PRIMARY KEY,
  recipe_id int REFERENCES db.recipe (id),
  name varchar(45) NOT NULL
);

UPDATE db.title (
  id serial PRIMARY KEY,
  title varchar(45) NOT NULL,
  recipe_id int REFERENCES db.recipe (id)
);

UPDATE db.measurement (
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

--INSERT INTO db.measurement (measurement) 
--VALUES
--      ('Teaspoon'), ('Tablespoon'), ('Cup'), 
--      ('Ounce (fluid)'), ('Pint'), ('Quart'),
--      ('Gallon'), ('Ounce (mass)'), ('Pound');

UPDATE db.instructions (
  id serial PRIMARY KEY,
  content varchar(500) NOT NULL,
  recipe_id int REFERENCES db.recipe (id)
);

UPDATE db.ingredient (
  id serial PRIMARY KEY,
  ingredient varchar(45) NOT NULL,
  qty smallint NOT NULL, 
  measurement_id int REFERENCES db.measurement (id),
  recipe_id int REFERENCES db.recipe (id)
);


--The note is used by people using another person's recipe and 
-- wanting to save their own comments for the next time they use it.
UPDATE db.note (
  id serial PRIMARY KEY,
  recipe_id int REFERENCES db.recipe (id),
  author_id int REFERENCES db.author (id),   --author of the note
  content varchar(500) NOT NULL
);





--Changes based on wk04 grading

--remove title_id and instruction_id
ALTER TABLE db.recipe 
  DROP COLUMN title_id,
  DROP COLUMN instructions_id;

--include title, instructions, author_id
ALTER TABLE db.recipe 
  ADD COLUMN title varchar(45) NOT NULL,
  ADD COLUMN instructions varchar(500) NOT NULL,
  ADD COLUMN author_id varchar(45) NOT NULL
;



--add username & password
--remove recipe fk
ALTER TABLE db.author 
  --id serial PRIMARY KEY,
  --name varchar(45) NOT NULL,
  ADD COLUMN username  varchar(45) NOT NULL,
  ADD COLUMN pswrd  varchar(45) NOT NULL
;


--drop tables: title, instructions
DROP TABLE IF EXISTS db.title;
DROP TABLE IF EXISTS db.instructions;