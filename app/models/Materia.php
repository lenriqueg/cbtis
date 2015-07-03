<?php

class Materia extends \Eloquent {
	protected $fillable = [];

	public $timestamps = false;

	public function grupo()
	{
		return $this->belongsToMany('Grupo');
	}

	public function maestro()
	{
		return $this->belongsToMany('Maestro');
	}

	public function ciclo()
	{
		return $this->belongsToMany('Ciclo');
	}
}