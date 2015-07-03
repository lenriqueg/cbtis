<?php

class Semestre extends \Eloquent {
	protected $fillable = [];

	public $timestamps = false;

	public function grupo()
	{
		return $this->hasMany('Grupo');
	}
}