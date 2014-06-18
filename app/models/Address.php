<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Address extends Eloquent {

    protected $table = 'addresses';
    public $timestamps = false;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function Member() {
        return $this->belongsToMany('Member');
    }

}
