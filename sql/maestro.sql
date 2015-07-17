create table maestros(
	id integer(10) unsigned not null auto_increment primary key,
	clave varchar(50) not null,
	nombres varchar(150) not null,
	status boolean,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO maestros (id, clave, nombres, status)
VALUES
	(1, 'asd1342', 'luis enrique', true),
	(2, 'df89jjsu', 'jorge enrique', true),
	(3, 'sdfsdf78', 'matias romero', true),
	(4, 'gas57as', 'tizoc mendez', true),
	(5, 'jgdas55', 'claudia nohemi', true),
	(6, 'asdq3q', 'erick de jesus', true),
	(7, 'as907sd', 'maria de lourdes', true);
