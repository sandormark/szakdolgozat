CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  name VARCHAR(50),
  password VARCHAR(50),
  email VARCHAR(50)
);

INSERT INTO users (name, password,email) VALUES ('Admin', 'Adminpass','admineemail@gmail.com');
INSERT INTO users (name, password,email) VALUES ('Teszt', 'Tesztpass','tesztemail@gmail.com');



/*CREATE TABLE student (
    id int,
    name VARCHAR(255)
);

INSERT INTO student(id, name) VALUES
(1,'A'),
(2,'B'),
(3,'C');



/*CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  name VARCHAR(50),
  password VARCHAR(50)
);

INSERT INTO users (name, password) VALUES ('Admin', 'Admin');
INSERT INTO users (name, password) VALUES ('Teszt', 'Teszt');*/