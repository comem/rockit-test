<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Member extends Eloquent {

	protected $table = 'members';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Adress()
	{
		return $this->hasOne('Address');
	}

	public function Function()
	{
		return $this->belongsToMany('Skill');
	}

	public function Event()
	{
		return $this->belongsToMany('Event');
	}

}