CREATE TABLE grupo_materia (
  id integer(10) unsigned not null auto_increment primary key,
  grupo_id int(10) unsigned NOT NULL,
  materia_id int(10) unsigned NOT NULL,
  FOREIGN KEY (grupo_id) REFERENCES grupos (id),
  FOREIGN KEY (materia_id) REFERENCES materias (id)
);