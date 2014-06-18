<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Artist extends Eloquent {

	protected $table = 'artists';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function links()
	{
		return $this->hasMany('Link');
	}

	public function genres()
	{
		return $this->belongsToMany('Genre');
	}

	public function instruments()
	{
		return $this->belongsToMany('Instrument');
	}

	public function images()
	{
		return $this->hasMany('Image');
	}

	public function musicians()
	{
		return $this->belongsToMany('Musician');
	}

	public function events()
	{
		return $this->belongsToMany('Event');
	}

}