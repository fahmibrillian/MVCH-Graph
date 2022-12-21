<?php

namespace App;

use NeoEloquent;

class Patient extends NeoEloquent {

    protected $label = 'Patient';
    protected $fillable = ['MRN'];

    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo('App\Person','PATIENT');
    }

    public function visit(){
        return $this->hasMany('App\Visit','VISIT');
    }
}
