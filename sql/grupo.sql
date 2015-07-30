create table grupos(
	id integer(10) unsigned not null auto_increment primary key,
	grupo varchar(30) not null,
	carrera_id integer(10) unsigned not null,
	FOREIGN KEY (carrera_id) REFERENCES carreras(id),
	turno_id integer(10) unsigned not null,
	FOREIGN KEY (turno_id) REFERENCES turnos(id),
	semestre_id integer(10) unsigned not null,
	FOREIGN KEY (semestre_id) REFERENCES semestres(id),
	status boolean not null,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO grupos (grupo, carrera_id, turno_id, semestre_id, status)
VALUES
	('101', 1, 1, 1, 0),
	('102', 1, 2, 1, 0),
	('103', 2, 1, 1, 0),
	('104', 2, 2, 1, 0),
	('105', 3, 1, 1, 0),
	('106', 3, 2, 1, 0),
	('201', 1, 1, 2, 0),
	('202', 1, 2, 2, 0),
	('203', 2, 1, 2, 0),
	('204', 2, 2, 2, 0),
	('205', 3, 1, 2, 0),
	('206', 3, 2, 2, 0),
	('301', 1, 1, 3, 0),
	('302', 1, 2, 3, 0),
	('303', 2, 1, 3, 0),
	('304', 2, 2, 3, 0),
	('305', 3, 1, 3, 0),
	('306', 3, 2, 3, 0),
	('401', 1, 1, 4, 0),
	('402', 1, 2, 4, 0),
	('403', 2, 1, 4, 0),
	('404', 2, 2, 4, 0),
	('405', 3, 1, 4, 0),
	('406', 3, 2, 4, 0),
	('501', 1, 1, 5, 0),
	('502', 1, 2, 5, 0),
	('503', 2, 1, 5, 0),
	('504', 2, 2, 5, 0),
	('505', 3, 1, 5, 0),
	('506', 3, 2, 5, 0),
	('601', 1, 1, 6, 0),
	('602', 1, 2, 6, 0),
	('603', 2, 1, 6, 0),
	('604', 2, 2, 6, 0),
	('605', 3, 1, 6, 0),
	('606', 3, 2, 6, 0);