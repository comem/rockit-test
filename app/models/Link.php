<?php

class Link extends Eloquent {

	protected $table = 'links';
	public $timestamps = false;

	public function Artist()
	{
		return $this->belongsTo('Artist');
	}

}