<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Skill extends Eloquent {

    protected $table = 'functions';
    public $timestamps = false;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function members() {
        return $this->belongsToMany('Member');
    }

    public function events() {
        return $this->belongsToMany('Event');
    }

    public function staffs() {
        return $this->hasMany('Staff');
    }

}
