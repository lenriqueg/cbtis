<?php

class Grupo extends \Eloquent {
	protected $fillable = [];

	public function carrera()
	{
		return $this->belongsTo('Carrera');
	}

	public function turno()
	{
		return $this->belongsTo('Turno');
	}

	public function semestre()
	{
		return $this->belongsTo('Semestre');
	}

	public function materia()
	{
		return $this->belongsToMany('Materia');
	}

}