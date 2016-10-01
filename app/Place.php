<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['place_type_id','name', 'description','email','path','status','cost_address'];
}
