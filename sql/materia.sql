CREATE TABLE materias (
	id int(10) unsigned NOT NULL AUTO_INCREMENT,
	materia varchar(150) NOT NULL,
	hrs_teoricas int(10) DEFAULT NULL,
	hrs_practicas int(10) DEFAULT NULL,
	status boolean,
	PRIMARY KEY (id),
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO materias (id, materia, hrs_teoricas, hrs_practicas, status)
VALUES
	(1, 'ingles', 2, 0, true),
	(2, 'algebra', 4, 0, true),
	(3, 'fisica', 4, 0, true),
	(5, 'quimica', 4, 2, true),
	(6, 'tics', 2, 4, true),
	(7, 'mantenimiento', 2, 2, true);