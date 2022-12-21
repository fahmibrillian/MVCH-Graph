<?php

namespace App;

use NeoEloquent;

class Visit extends NeoEloquent {

    protected $label = 'Visit';
    protected $fillable = ['VisitID','VisitDate','VisitTime'];
    public $timestamps = false;
}
