<?php

namespace App;

use NeoEloquent;

class Physician extends NeoEloquent {

    protected $label =  'Physician';
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $fillable = ['PhisicianID','PagerNumber','DEANumber','Speciality'];

    public $timestamps = false;
}
