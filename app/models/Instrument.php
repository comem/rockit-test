<?php

class Instrument extends Eloquent {

	protected $table = 'instruments';
	public $timestamps = false;

	public function artists()
	{
		return $this->belongsToMany('Artist');
	}

}