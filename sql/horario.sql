
create table horarios(
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
	--primary key(hora_id, maestro_id, materia_id, grupo_id, aula_id, dia_id, ciclo_id)
);