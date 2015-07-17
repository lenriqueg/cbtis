create table horas(
	id integer(10) unsigned not null auto_increment primary key,
	hora varchar(50) not null,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO horas (id, hora)
VALUES
	(1, '7:00-8:00'),
	(2, '8:00-9:00'),
	(3, '9:00-10:00'),
	(4, '10:00-11:00'),
	(5, '11:00-12:00'),
	(6, '12:00-13:00'),
	(7, '13:00-14:00');