<?php

class Maestro extends \Eloquent {
	protected $fillable = [];

	public function materia()
	{
		return $this->belongsToMany('Materia');
	}
}