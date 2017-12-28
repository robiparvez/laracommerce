<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->admin;
    }

    // user(one) to address(many)
    public function hasAddress()
    {
        return $this->hasMany(Shipping::class);
    }

    // user(one) to orders(many)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
