<?php

class Carrera extends \Eloquent {
	protected $fillable = [];

	public function ciclo()
	{
		return $this->belongsToMany('Ciclo');
	}
}