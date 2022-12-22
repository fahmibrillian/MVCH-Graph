<?php

namespace App;

use NeoEloquent;

class Physician extends NeoEloquent {

    protected $label =  'Physician';
    protected $fillable = ['PhisicianID','PagerNumber','DEANumber','Speciality'];

    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo('App\Person','EMPLOYED');
    }

    public function visit(){
        return $this->hasMany('App\Visit','HANDLES');
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
