<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accombestellijn extends Model
{
    use HasFactory;

    public function bestellingen()
    {
        return $this->belongsTo(accomodatiesOrders::class, 'BestelId', 'id');
    }
    
    public function tickets()
    {
        return $this->belongsTo(accomodaties::class, 'AccomodatieId', 'id');
    }
}
