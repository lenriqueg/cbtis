<?php

class Ciclo extends \Eloquent {
	protected $fillable = [];

	public function carrera()
	{
		return $this->belongsToMany('Carrera');
	}

}