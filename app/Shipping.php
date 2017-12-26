<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $timestamps = false;

    protected $fillable = ['address', 'city', 'state', 'zipcode', 'country', 'phone']

}
