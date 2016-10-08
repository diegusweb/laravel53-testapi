<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['place_id','city_id', 'title','address','lat','lng','status'];
}
