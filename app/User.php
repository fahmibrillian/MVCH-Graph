<?php

namespace App;

use NeoEloquent;

class User extends NeoEloquent {

    protected $label = 'User'; // or array('User', 'Fan')
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $fillable = ['name', 'email'];
}
