<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{


    protected $fillable = ['email', 'password', 'email_verified_at'];
}
