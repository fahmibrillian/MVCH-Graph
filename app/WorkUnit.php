<?php

namespace App;

use NeoEloquent;

class WorkUnit extends NeoEloquent {

    protected $label = 'WorkUnit';
    protected $fillable = ['WorkUnitName','LocationFacility','LocationFloor'];
    public $timestamps = false;
    protected $id = 'id';

    public function careCenter()
    {
        return $this->hasMany('App\CareCenter','PART_OF');
    }
}
