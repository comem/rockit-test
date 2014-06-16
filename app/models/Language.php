<?php

class Language extends Eloquent {

	protected $table = 'languages';
	public $timestamps = false;

	public function User()
	{
		return $this->hasMany('User');
	}

}