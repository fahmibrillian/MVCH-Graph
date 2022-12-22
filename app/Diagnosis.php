<?php

namespace App;

use NeoEloquent;

class Diagnosis extends NeoEloquent {

    protected $label = 'Diagnosis';
    protected $fillable = ['DiagnosisCode','DiagnosisName'];
    public $timestamps = false;

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
