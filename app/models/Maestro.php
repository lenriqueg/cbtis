<?php

class Maestro extends \Eloquent {
	protected $fillable = [];

	public $timestamps = false;

	public function materia()
	{
		return $this->belongsToMany('Materia', 'maestro_materia');
	}

	public function ciclo()
	{
		return $this->belongsToMany('Ciclo', 'maestro_materia');
	}
}