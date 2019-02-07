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

--create authors (fake)
INSERT INTO db.author (name, username, pswrd) VALUES ('John Smith', 'JS', 'password');
INSERT INTO db.author (name, username, pswrd) VALUES ('Pocahontas', 'Pgirl', 'abc123');
INSERT INTO db.author (name, username, pswrd) VALUES ('Geronimo', 'Gman', 'qwerty');

--create recipes
INSERT INTO db.recipe (title, instructions, author_id) VALUES ( 'No Bake Cookies', 'Mix the sugar, and milk in a pot on medium heat. Let boil for 1 min. Quickly stir in peanut butter, vanilla, and oatmeal. Drop by spoonful onto wax paper and let harden.', 2);
INSERT INTO db.recipe (title, instructions, author_id) VALUES ( 'Chocolate Chip Cookie Bars', 'Cream sugars and butter together. Mix in eggs, then salt, baking soda, and vanilla. Mix in flour. Drop by spoonful onto greased cookie sheet. Bake at 350 F for 8-10 min.', 3);
INSERT INTO db.recipe (title, instructions, author_id) VALUES ( 'Bananas and Cream', 'Slice bananas into 1/2 in sections. Pour table cream over them and sprinkle sugar.', 1);

--create ingredients/link recipe to them
--No Bake Cookies
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES ('Sugar', 1, 3, 1);
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES ('Milk', 1/2, 3, 1);
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES ('Cocoa', 3, 1, 1);
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES ('Peanut Butter', .5, 3, 1);
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES ('Vanilla', 1, 1, 1);
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES ('Oatmeal', 3, 3, 1);

--Choc. Chip Cookies
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES
  ('Butter', 1, 3, 2),
  ('Sugar', .75, 3, 2),
  ('Brown Sugar', .75, 3, 2),
  ('Egg', 2, 9, 2),
  ('Baking Soda', 1, 1, 2),
  ('Salt', 1, 1, 2),
  ('Vanilla', 1, 1, 2),
  ('Flour', 2.25, 3, 2),
  ('Chocolate Chips (Semi-Sweet)', .5, 3, 2)
  ;

--Bananas and Cream
INSERT INTO db.ingredient (ingredient, qty, measurement_id, recipe_id) VALUES ('Banana', 1, 9, 3),
  ('Table Cream', 3, 2, 3),
  ('Sugar', 1, 1, 3);


--add 'qty' row to db.measurement
INSERT INTO db.measurement (measurement) VALUES ('qty');



--TODO Change ingredient:qty to double (accept fractions and decimal)