<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'seat_id', 'payment'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function seat() {
        return $this->belongsTo(Seat::class);
    }
}
