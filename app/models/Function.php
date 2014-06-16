<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Function extends Eloquent {

	protected $table = 'functions';
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