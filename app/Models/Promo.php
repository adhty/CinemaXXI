<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = ['cover', 'title', 'deadline', 'description', 'term_condition'];
}
