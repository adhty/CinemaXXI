<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['ticket_id', 'number', 'status'];

    public function ticket() {
        return $this->belongsTo(Ticket::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
