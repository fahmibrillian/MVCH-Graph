<?php

namespace App;

use NeoEloquent;

class Diagnose extends NeoEloquent {

    protected $label = 'Diagnose';
    protected $fillable = ['Time','Description'];
    public $timestamps = false;
}
