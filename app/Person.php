<?php

namespace App;

use NeoEloquent;

class Person extends NeoEloquent {

    protected $label =  'Person';
    public $timestamps = false;
    protected $fillable = ['SSN','Country','Name','AddressCity','AddressState','AddressZIP','BirthDate','Phone','Email'];

    protected $dates = ['BirthDate'];

    public function employee()
    {
        return $this->belongsTo('App\Employee','EMPLOYED');
    }
}
