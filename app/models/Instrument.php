<?php

class Instrument extends Eloquent {

	protected $table = 'instruments';
	public $timestamps = false;

	public function Artist()
	{
		return $this->belongsToMany('Artist');
	}

}