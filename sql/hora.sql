create table horas(
	id integer(10) unsigned not null auto_increment primary key,
	hora varchar(50) not null,
	turno_id integer(10) unsigned not null,
	FOREIGN KEY (turno_id) REFERENCES turnos(id),
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO horas (hora, turno_id)
VALUES
	('7:00-8:00', 1),
	('8:00-9:00', 1),
	('9:00-10:00', 1),
	('10:00-11:00', 1),
	('11:00-12:00', 1),
	('12:00-13:00', 1),
	('13:00-14:00', 3);