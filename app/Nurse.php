<?php

namespace App;

use NeoEloquent;

class Nurse extends NeoEloquent {

    protected $label =  'Nurse';
    protected $fillable = ['CertificateDegree','NursingLicense','Speciality'];

    public $timestamps = false;

    public function employee()
    {
        return $this->belogsTo('App\Employee','WORKS_AS');
    }

    public function careCenter()
    {
        return $this->hasMany('App\CareCenter','WORKS_AT');
    }

    public function obtainRecord()
    {
        return $this->hasMany('App\ObtainRecord','OBTAINING');
    }

    public function getConnection()
    {
        try {
            return parent::getConnection();
        } catch (\Exception $e) {
            try {
                return $this->resolveConnection('neo4j_replica1');
            } catch (\Exception $e) {
                return $this->resolveConnection('neo4j_replica2');
            }
        }
    }
}
