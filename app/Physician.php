<?php

namespace App;

use NeoEloquent;

class Physician extends NeoEloquent {

    protected $label =  'Physician';
    protected $fillable = ['PhisicianID','PagerNumber','DEANumber','Speciality'];

    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo('App\Person','EMPLOYED');
    }

    public function visit(){
        return $this->hasMany('App\Visit','HANDLES');
    }
}
