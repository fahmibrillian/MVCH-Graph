<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;

use NeoEloquent;

class User extends NeoEloquent implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, Authorizable;
    protected $label = 'User';
    protected $fillable = ['role', 'username', 'password'];

    public function nurse()
    {
        return $this->hasOne('App\Nurse', 'CREDENTIALS');
    }

    public function physician()
    {
        return $this->hasOne('App\Physician', 'CREDENTIALS');
    }

    public function staff()
    {
        return $this->hasOne('App\Staff', 'CREDENTIALS');
    }

    public function technician()
    {
        return $this->hasOne('App\Technician', 'CREDENTIALS');
    }
}
