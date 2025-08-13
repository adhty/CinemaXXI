<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = ['city_id', 'name', 'address', 'image'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function studios()
    {
        return $this->hasMany(Studio::class);
    }
}
