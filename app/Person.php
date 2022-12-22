<?php

namespace App;

use NeoEloquent;

class Person extends NeoEloquent {

    protected $label =  'Person';
    public $timestamps = false;
    protected $fillable = ['SSN','Country','Name','AddressCity','AddressState','AddressZIP','BirthDate','Phone','Email'];

    protected $dates = ['BirthDate'];

    public function employee()
    {
        return $this->hasOne('App\Employee','EMPLOYED');
    }

    public function physician()
    {
        return $this->hasOne('App\Physician','EMPLOYED');
    }

    public function patient()
    {
        return $this->hasOne('App\Patient','PATIENT');
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
