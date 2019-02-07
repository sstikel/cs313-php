CREATE TABLE actor (
  id SERIAL PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);

CREATE TABLE movie (
  id SERIAL PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  year SMALLINT
);

INSERT INTO movie (name, year) VALUES ('Return of the Jedi', 1983);

INSERT INTO actor (name) VALUES ('Orlando Bloom'), 
('Mel Gibson'), 
('Daniel Radcliff');


UPDATE actor SET name = 'Melvin Gibson' WHERE id = 4;

CREATE TABLE movie_actor (
  id SERIAL PRIMARY KEY,
  movie_id INT NOT NULL REFERENCES movie(id),
  actor_id INT NOT NULL REFERENCES actor(id)
);

INSERT INTO movie_actor(movie_id, actor_id) VALUES
(2, 3),
(3, 1);