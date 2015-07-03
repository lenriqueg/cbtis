<?php

class Turno extends \Eloquent {
	protected $fillable = [];

	public $timestamps = false;

	public function grupo()
	{
		return $this->hasMany('Grupo');
	}
}