CREATE SCHEMA ta04;

CREATE TABLE ta04.author (
  id serial PRIMARY KEY,
  name varchar(45)
);

CREATE TABLE ta04.speaker (
  id serial PRIMARY KEY,
  name varchar(45),
  title varchar(80)
);

CREATE TABLE ta04.conference (
  id serial PRIMARY KEY,
  year smallint,
  month smallint
);

CREATE TABLE ta04.session (
  id serial PRIMARY KEY,
  conference_id int REFERENCES ta04.conference (id),
  name varchar(45)
);

CREATE TABLE ta04.note (
  id serial PRIMARY KEY,
  author_id int REFERENCES ta04.author (id),
  session_id int REFERENCES ta04.session (id),
  speaker_id int REFERENCES ta04.speaker (id),
  content varchar(500)
);