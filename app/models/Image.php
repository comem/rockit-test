<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Image extends Eloquent {

	protected $table = 'images';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Artist()
	{
		return $this->belongsTo('Artist');
	}

}