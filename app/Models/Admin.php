<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Admin extends Model implements AuthenticatableContract, CanResetPasswordContract{

    use Authenticatable, CanResetPassword;

    protected $table = 'admin';
    protected $fillable = ['hoten', 'username', 'email', 'password'];

    public static $rules = [
        'hoten' => 'required',
        'username' => 'required',
        'email' => 'required',
    ];
    
}
