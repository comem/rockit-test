<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TicketCategory extends Eloquent {

	protected $table = 'ticket_categories';
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function events()
	{
		return $this->belongsToMany('Event');
	}

}