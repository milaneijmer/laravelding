<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestellijn extends Model
{
    use HasFactory;

    public function bestellingen()
    {
        return $this->belongsTo(bestellingen::class, 'BestelId', 'id');
    }
    
    public function tickets()
    {
        return $this->belongsTo(tickets::class, 'TicketId', 'id');
    }
}
