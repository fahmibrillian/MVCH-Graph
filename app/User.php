<?php

namespace App;

use NeoEloquent;

class User extends NeoEloquent {

    protected $label = 'User'; // or array('User', 'Fan')

    protected $primaryKey = 'uuid';

    protected $fillable = ['name', 'email'];
}
