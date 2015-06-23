<?php

class Materia extends \Eloquent {
	protected $fillable = [];

	public function grupo()
	{
		return $this->belongsToMany('Grupo');
	}

	public function maestro()
	{
		return $this->belongsToMany('Maestro');
	}
}