<?php

namespace rockit;

class Event extends \Eloquent {

	protected $table = 'events';
	public $timestamps = true;

	public function gifts()
	{
		return $this->belongsToMany('Gift');
	}

	public function ticketCategories()
	{
		return $this->belongsToMany('TicketCategory');
	}

	public function equipments()
	{
		return $this->belongsToMany('Equipment');
	}

	public function platforms()
	{
		return $this->belongsToMany('Platform');
	}

	public function printingTypes()
	{
		return $this->belongsToMany('PrintingType');
	}

	public function eventTypes()
	{
		return $this->belongsToMany('EventType');
	}

	public function artists()
	{
		return $this->belongsToMany('Artist');
	}

	public function members()
	{
		return $this->belongsToMany('Member');
	}

	public function skills()
	{
		return $this->belongsToMany('Skill');
	}

	public function representer()
	{
		return $this->belongsTo('Representer');
	}

}