<?php

namespace App;

use NeoEloquent;

class Diagnosis extends NeoEloquent {

    protected $label = 'Diagnosis';
    protected $fillable = ['DiagnosisCode','DiagnosisName'];
    public $timestamps = false;
}
