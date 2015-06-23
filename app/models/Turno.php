<?php

class Turno extends \Eloquent {
	protected $fillable = [];

	public function grupo()
	{
		return $this->hasMany('Grupo');
	}
}