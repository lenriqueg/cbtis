<?php

class Materia extends \Eloquent {
	protected $fillable = [];

	public function grupo()
	{
		return $this->belongsToMany('Grupo');
	}

	public function maestro()
	{
		return $this->belongsToMany('Maestro', 'maestro_materia');
	}

	public function ciclo()
	{
		return $this->belongsToMany('Ciclo', 'maestro_materia');
	}
}