<?php

namespace App;

use NeoEloquent;

class ObtainRecord extends NeoEloquent {

    protected $label = 'ObtainRecord';
    protected $fillable = ['Date','Time','Weight','Height','BloodPressure','Pulse','Temperature','VisitReason','Symptoms'];
    public $timestamps = false;

    public function visit()
    {
        return $this->belongsTo('App\Visit','VISITED');
    }

    public function nurse()
    {
        return $this->belongsTo('App\Nurse','OBTAINING');
    }
}
