<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Platform extends Eloquent {

	protected $table = 'platforms';
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Event()
	{
		return $this->belongsToMany('Event');
	}

}