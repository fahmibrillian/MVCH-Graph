<?php

namespace App;

use NeoEloquent;

class Staff extends NeoEloquent {

    protected $label = 'Staff';
    protected $fillable = ['Jobclass'];

    public $timestamps = false;

    public function employee()
    {
        return $this->hasOne('App\Employee','WORKS_AS');
    }

    public function workUnit()
    {
        return $this->hasMany('App\WorkUnit','WORKS_AT');
    }
}
