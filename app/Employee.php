<?php

namespace App;

use NeoEloquent;

class Employee extends NeoEloquent {

    protected $label =  'Employee';
    protected $fillable = ['EmployeeNumber','HireDate'];

    public $timestamps = false;

    protected $dates = ['HireDate'];

    public function person()
    {
        return $this->hasOne('App\Person','EMPLOYED');
    }

    public function nurse()
    {
        return $this->belongsTo('App\Nurse','WORKS_AS');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff','WORKS_AS');
    }

    public function technician()
    {
        return $this->belongsTo('App\Technician','WORKS_AS');
    }
}
