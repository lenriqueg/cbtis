
create table horarios(
	id integer(10) unsigned not null auto_increment primary key,
	hora_id integer(10) unsigned not null,
	FOREIGN KEY (hora_id) REFERENCES horas(id),
	materia_id integer(10) unsigned not null,
	FOREIGN KEY (materia_id) REFERENCES materias(id),
	grupo_id integer(10) unsigned not null,
	FOREIGN KEY (grupo_id) REFERENCES grupos(id),
	aula_id integer(10) unsigned not null,
	FOREIGN KEY (aula_id) REFERENCES aulas(id),
	dia_id integer(10) unsigned not null,
	FOREIGN KEY (dia_id) REFERENCES dias(id),
	ciclo_id integer(10) unsigned not null,
	FOREIGN KEY (ciclo_id) REFERENCES ciclos(id)
);

create table clon_horarios(
	id integer(10),
	hora_id integer(10),
	materia_id integer(10),
	grupo_id integer(10),
	aula_id integer(10),
	dia_id integer(10),
	ciclo_id integer(10)
);