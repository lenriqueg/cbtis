create table carreras(
	id integer(10) unsigned not null auto_increment primary key,
	carrera varchar(100) not null,
	status boolean,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO carreras (id, carrera, status)
VALUES
	(1, 'tecnologias de informacion', true),
	(2, 'mantenimiento', true),
	(3, 'logistica', true);