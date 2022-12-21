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
        return $this->belongsTo('App\Person','EMPLOYED');
    }

    public function nurse()
    {
        return $this->hasOne('App\Nurse','WORKS_AS');
    }

    public function staff()
    {
        return $this->hasOne('App\Staff','WORKS_AS');
    }

    public function technician()
    {
        return $this->hasOne('App\Technician','WORKS_AS');
    }
}
