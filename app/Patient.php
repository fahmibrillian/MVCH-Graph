<?php

namespace App;

use NeoEloquent;

class Patient extends NeoEloquent {

    protected $label = 'Patient';
    protected $fillable = ['MRN'];

    public $timestamps = false;
}
