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
