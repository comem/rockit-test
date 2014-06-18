<?php

class Staff extends Eloquent {

	protected $table = 'staffs';
	public $timestamps = false;

	public function skills()
	{
		return $this->belongsToMany('Skill');
	}

}