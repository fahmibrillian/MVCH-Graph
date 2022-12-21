<?php

namespace App;

use NeoEloquent;

class Visit extends NeoEloquent {

    protected $label = 'Visit';
    protected $fillable = ['VisitID','VisitDate','VisitTime'];
    public $timestamps = false;

    public function patient()
    {
        return $this->hasOne('App\Patient','VISIT');
    }

    public function physician()
    {
        return $this->hasOne('App\Physician','VISIT');
    }

    public function careCenter()
    {
        return $this->hasOne('App\CareCenter','VISIT');
    }
}
