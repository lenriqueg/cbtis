<?php

class Ciclo extends \Eloquent {
	protected $fillable = [];

	public function carrera()
	{
		return $this->belongsToMany('Carrera');
	}

	public function materia()
	{
		return $this->belongsToMany('Materia', 'maestro_materia');
	}

	public function maestro()
	{
		return $this->belongsToMany('Maestro', 'maestro_materia');
	}

}