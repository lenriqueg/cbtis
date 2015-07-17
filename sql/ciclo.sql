create table ciclos(
	id integer(10) unsigned not null auto_increment primary key,
	ciclo varchar(50) not null,
	status boolean,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO ciclos (id, ciclo, status)
VALUES
	(1, '2015 Enero - Julio', true),
	(2, '2015 Agosto - Diciembre', true);