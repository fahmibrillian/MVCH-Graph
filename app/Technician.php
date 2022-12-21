<?php

namespace App;

use NeoEloquent;

class Technician extends NeoEloquent {

    protected $label = 'Technician';
    protected $fillable = ['CompetencySkill'];

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
