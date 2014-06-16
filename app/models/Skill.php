<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Skill extends Eloquent {

	protected $table = 'skills';
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Member()
	{
		return $this->belongsToMany('Member');
	}

	public function Event()
	{
		return $this->belongsToMany('Event');
	}

	public function Staff()
	{
		return $this->hasMany('Staff');
	}

}