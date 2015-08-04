<?php

class Horario extends \Eloquent {
	protected $fillable = [];

	public $timestamps = false;

	public function materia()
	{
		return $this->belongsToMany('Materia', 'maestro_materia');
	}
}