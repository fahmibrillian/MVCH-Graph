<?php

namespace App;

use NeoEloquent;

class Patient extends NeoEloquent {

    protected $label = 'Patient';
    protected $fillable = ['MRN'];

    public $timestamps = false;

    public function person()
    {
        return $this->hasOne('App\Person','PATIENT');
    }
}
