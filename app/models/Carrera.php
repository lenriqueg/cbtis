<?php

class Carrera extends \Eloquent {
	protected $fillable = [];

	public function grupo()
	{
		return $this->hasMany('Grupo');
	}
}