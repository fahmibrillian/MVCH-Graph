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
