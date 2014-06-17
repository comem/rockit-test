<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Group extends Eloquent {

	protected $table = 'groups';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function group_group()
	{
		return $this->hasOne('Group', 'childGroup_id');
	}

	public function resources()
	{
		return $this->hasMany('Ressource');
	}

	public function user()
	{
		return $this->hasMany('User');
	}

}