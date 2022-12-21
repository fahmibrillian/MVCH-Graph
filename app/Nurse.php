<?php

namespace App;

use NeoEloquent;

class Nurse extends NeoEloquent {

    protected $label =  'Nurse';
    protected $fillable = ['CertificateDegree','NursingLicense','Speciality'];

    public $timestamps = false;

    public function employee()
    {
        return $this->hasOne('App\Employee','WORKS_AS');
    }

    public function careCenter()
    {
        return $this->hasMany('App\CareCenter','WORKS_AT');
    }
}
