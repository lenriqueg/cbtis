create table dias(
	id integer(10) unsigned not null auto_increment primary key,
	dia varchar(30) not null,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO dias (id, dia)
VALUES
	(1, 'Lunes'),
	(2, 'Martes'),
	(3, 'Miercoles'),
	(4, 'Jueves'),
	(5, 'Viernes');