create table turnos(
	id integer(10) unsigned not null auto_increment primary key,
	turno varchar(50) not null,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO turnos (id, turno)
VALUES
	(1, 'matutino'),
	(2, 'vespertino');
