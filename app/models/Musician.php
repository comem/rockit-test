<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Musician extends Eloquent {

	protected $table = 'musicians';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Artist()
	{
		return $this->belongsToMany('Artist');
	}

}