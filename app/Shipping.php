<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    // public $timestamps = false;

    protected $fillable = ['address', 'city', 'state', 'zipcode', 'country', 'phone'];


}
