<?php

class Staff extends Eloquent {

	protected $table = 'staffs';
	public $timestamps = false;

	public function Function()
	{
		return $this->belongsToMany('Skill');
	}

}