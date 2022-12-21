<?php

namespace App;

use NeoEloquent;

class User extends NeoEloquent {

    protected $label = 'User';
    protected $fillable = ['Name', 'Email'];
}
