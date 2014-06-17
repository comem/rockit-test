<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Ressource extends Eloquent {

	protected $table = 'ressources';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function groups()
	{
		return $this->belongsToMany('Group');
	}

}