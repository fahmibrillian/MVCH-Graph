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
