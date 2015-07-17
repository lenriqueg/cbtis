create table semestres(
	id integer(10) unsigned not null auto_increment primary key,
	semestre varchar(30) not null,
	status boolean,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO semestres (id, semestre, status)
VALUES
	(1, 'primer semestre', true),
	(2, 'segundo semestre', true),
	(3, 'tercer semestre', true),
	(4, 'cuarto semestre', true),
	(5, 'quinto semestre', true),
	(6, 'sexto semestre', true);