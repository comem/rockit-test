<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PrintingType extends Eloquent {

	protected $table = 'printing_types';
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Event()
	{
		return $this->belongsToMany('Event');
	}

}