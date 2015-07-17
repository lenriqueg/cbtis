create table grupo_materia(
	id integer(10),
	grupo_id integer(10) unsigned not null,
	FOREIGN KEY (grupo_id) REFERENCES grupos(id),
	materia_id integer(10) unsigned not null,
	FOREIGN KEY (materia_id) REFERENCES materias(id)
);