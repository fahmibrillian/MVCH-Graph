<?php

namespace App;

use NeoEloquent;

class Diagnose extends NeoEloquent {

    protected $label = 'Diagnose';
    protected $fillable = ['Time','Description'];
    public $timestamps = false;

    public function physician()
    {
        return $this->belongsTo('App\Physician','DIAGNOSE');
    }

    public function diagnosis()
    {
        return $this->hasOne('App\Diagnosis','HAVE DIAGNOSIS');
    }

    public function visit()
    {
        return $this->belongsTo('App\Visit','DIAGNOSE');
    }
}
