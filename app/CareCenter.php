<?php

namespace App;

use NeoEloquent;

class CareCenter extends NeoEloquent {

    protected $label =  'CareCenter';
    protected $fillable = ['CareCenterId','CareCenterName'];
    protected $id = 'id';

    public $timestamps = false;

    public function workUnit()
    {
        return $this->hasOne('App\WorkUnit','PART_OF');
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
