<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Equipment extends Eloquent {

	protected $table = 'equipments';
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Event()
	{
		return $this->belongsToMany('Event');
	}

}