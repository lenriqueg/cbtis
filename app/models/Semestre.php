<?php

class Semestre extends \Eloquent {
	protected $fillable = [];

	public function grupo()
	{
		return $this->hasMany('Grupo');
	}
}