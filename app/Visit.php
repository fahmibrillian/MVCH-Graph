<?php

namespace App;

use NeoEloquent;

class Visit extends NeoEloquent {

    protected $label = 'Visit';
    protected $fillable = ['VisitID','VisitDate','VisitTime'];
    public $timestamps = false;

    public function patient()
    {
        return $this->belongsTo('App\Patient','VISIT');
    }

    public function physician()
    {
        return $this->belongsTo('App\Physician','HANDLES');
    }

    public function careCenter()
    {
        return $this->hasOne('App\CareCenter','VISITED');
    }

    public function obtainRecord()
    {
        return $this->hasOne('App\ObtainRecord','OBTAIN');
    }

    public function diagnose()
    {
        return $this->hasMany('App\Diagnose','DIAGNOSE');
    }
}
