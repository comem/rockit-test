<?php

class Event extends Eloquent {

	protected $table = 'events';
	public $timestamps = true;

	public function Gift()
	{
		return $this->belongsToMany('Gift');
	}

	public function TicketCategory()
	{
		return $this->belongsToMany('TicketCategory');
	}

	public function Equipment()
	{
		return $this->belongsToMany('Equipment');
	}

	public function Platform()
	{
		return $this->belongsToMany('Platform');
	}

	public function PrintingType()
	{
		return $this->belongsToMany('PrintingType');
	}

	public function EventType()
	{
		return $this->belongsToMany('EventType');
	}

	public function Artist()
	{
		return $this->belongsToMany('Artist');
	}

	public function Member()
	{
		return $this->belongsToMany('Member');
	}

	public function Function()
	{
		return $this->belongsToMany('Function');
	}

}