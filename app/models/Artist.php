<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Artist extends Eloquent {

	protected $table = 'artists';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function Link()
	{
		return $this->hasMany('Link');
	}

	public function Genre()
	{
		return $this->belongsToMany('Genre');
	}

	public function Instrument()
	{
		return $this->belongsToMany('Instrument');
	}

	public function Image()
	{
		return $this->hasMany('Image');
	}

	public function Musician()
	{
		return $this->belongsToMany('Musician');
	}

	public function Event()
	{
		return $this->belongsToMany('Event');
	}

}