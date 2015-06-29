<?php

class Ciclo extends \Eloquent {
	protected $fillable = [];

	public $timestamps = false;

	public function carrera()
	{
		return $this->belongsToMany('Carrera');
	}

	public function materia()
	{
		return $this->belongsToMany('Materia');
	}

}