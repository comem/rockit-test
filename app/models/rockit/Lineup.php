<?php

namespace Rockit;

class Lineup extends \Eloquent {

	protected $table = 'lineups';
	public $timestamps = false;

	public function instrument()
	{
		return $this->belongsTo('Instrument');
	}

	public function artist()
	{
		return $this->belongsTo('Artist');
	}

	public function musician()
	{
		return $this->belongsTo('Musician');
	}

}