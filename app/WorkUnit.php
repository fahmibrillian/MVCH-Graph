<?php

namespace App;

use NeoEloquent;

class WorkUnit extends NeoEloquent {

    protected $label = 'WorkUnit';
    protected $fillable = ['WorkUnitName','LocationFacility','LocationFloor'];
    public $timestamps = false;
    protected $id = 'id';

    public function careCenter()
    {
        return $this->hasMany('App\CareCenter','PART_OF');
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
