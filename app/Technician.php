<?php

namespace App;

use NeoEloquent;

class Technician extends NeoEloquent {

    protected $label = 'Technician';
    protected $fillable = ['CompetencySkill'];

    public $timestamps = false;

    public function employee()
    {
        return $this->belongsTo('App\Employee','WORKS_AS');
    }

    public function workUnit()
    {
        return $this->hasMany('App\WorkUnit','WORKS_AT');
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
