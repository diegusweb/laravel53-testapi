<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceTypes extends Model
{
    protected $fillable = ['name', 'description'];

    public function category()
    {
        return $this->belongsTo('App\PLaceTypes');
    }

}
