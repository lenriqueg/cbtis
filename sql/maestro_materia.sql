create table maestro_materia(
  id integer(10) unsigned not null primary key auto_increment,
	maestro_id integer(10) unsigned not null,
	FOREIGN KEY (maestro_id) REFERENCES maestros(id),
	materia_id integer(10) unsigned not null,
	FOREIGN KEY (materia_id) REFERENCES materias(id),
	ciclo_id integer(10) unsigned not null,
	FOREIGN KEY (ciclo_id) REFERENCES ciclos(id)
);
/*
CREATE TABLE maestro_materia (
  id integer(10) unsigned not null primari key auto_increment,
  maestro_id int(10) unsigned NOT NULL,
  materia_id int(10) unsigned NOT NULL,
  ciclo_id int(10) unsigned NOT NULL,
  KEY maestro_materia_ibfk_1 (maestro_id),
  KEY maestro_materia_ibfk_2 (materia_id),
  KEY maestro_materia_ibfk_3 (ciclo_id),
  CONSTRAINT maestro_materia_ibfk_1 FOREIGN KEY (maestro_id) REFERENCES maestros (id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT maestro_materia_ibfk_2 FOREIGN KEY (materia_id) REFERENCES materias (id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT maestro_materia_ibfk_3 FOREIGN KEY (ciclo_id) REFERENCES ciclos (id) ON DELETE CASCADE ON UPDATE CASCADE
);
*/