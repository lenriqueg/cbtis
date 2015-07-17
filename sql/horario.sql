
create table horarios(
	hora_id integer(10) unsigned not null,
	FOREIGN KEY (hora_id) REFERENCES horas(id),
  maestro_id integer(10) unsigned not null,
  FOREIGN KEY (maestro_id) REFERENCES maestros(id),
	materia_id integer(10) unsigned not null,
	FOREIGN KEY (materia_id) REFERENCES materias(id),
	grupo_id integer(10) unsigned not null,
	FOREIGN KEY (grupo_id) REFERENCES grupos(id),
	aula_id integer(10) unsigned not null,
	FOREIGN KEY (aula_id) REFERENCES aulas(id),
	dia_id integer(10) unsigned not null,
	FOREIGN KEY (dia_id) REFERENCES dias(id),
	ciclo_id integer(10) unsigned not null,
	FOREIGN KEY (ciclo_id) REFERENCES ciclos(id),
	primary key(hora_id, maestro_id, materia_id, grupo_id, aula_id, dia_id, ciclo_id)
);
/*
CREATE TABLE `horarios` (
  `hora_id` int(10) unsigned NOT NULL,
  `maestro_id` int(10) unsigned NOT NULL,
  `materia_id` int(10) unsigned NOT NULL,
  `grupo_id` int(10) unsigned NOT NULL,
  `aula_id` int(10) unsigned NOT NULL,
  `dia_id` int(10) unsigned NOT NULL,
  `ciclo_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`hora_id`,`maestro_id`,`materia_id`,`grupo_id`,`aula_id`,`dia_id`,`ciclo_id`),
  KEY `horarios_ibfk_2` (`maestro_id`),
  KEY `horarios_ibfk_3` (`materia_id`),
  KEY `horarios_ibfk_4` (`grupo_id`),
  KEY `horarios_ibfk_5` (`aula_id`),
  KEY `horarios_ibfk_6` (`dia_id`),
  KEY `horarios_ibfk_7` (`ciclo_id`),
  CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`hora_id`) REFERENCES `horas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`maestro_id`) REFERENCES `maestros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `horarios_ibfk_3` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `horarios_ibfk_4` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `horarios_ibfk_5` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `horarios_ibfk_6` FOREIGN KEY (`dia_id`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `horarios_ibfk_7` FOREIGN KEY (`ciclo_id`) REFERENCES `ciclos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
)
*/
