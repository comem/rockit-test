<?php

class Genre extends Eloquent {

	protected $table = 'genres';
	public $timestamps = false;

	public function Artist()
	{
		return $this->belongsToMany('Artist');
	}

}