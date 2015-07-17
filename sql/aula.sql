create table aulas(
	id integer(10) unsigned not null auto_increment primary key,
	aula varchar(50) not null,
	descripcion varchar(50),
	status boolean,
	created_at timestamp,
	updated_at timestamp
);
INSERT INTO aulas (id, aula, descripcion, status)
VALUES
	(1, 'a1', 'edificio principal', true),
	(2, 'a2', 'edificio principal', true),
	(3, 'a3', 'edificio principal planta 2', true),
	(4, 'a4', 'edificio principal planta 2', true),
	(5, 'l1', 'laboratorio computo edificio principal', true),
	(6, 'l2', 'laboratorio de computo edifico final', true),
	(7, 'b1', 'edificio secundario', true),
	(8, 'b2', 'edifico secundario', true),
	(9, 'b3', 'edificio secundario planta 2', true),
	(10, 'b4', 'edificio secundario planta 2', true);