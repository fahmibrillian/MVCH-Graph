<?php

namespace App;

use NeoEloquent;

class CareCenter extends NeoEloquent {

    protected $label =  'CareCenter';
    protected $fillable = ['CareCenterId','CareCenterName'];
    protected $id = 'id';

    public $timestamps = false;

    public function workUnit()
    {
        return $this->hasOne('App\WorkUnit','PART_OF');
    }
}
