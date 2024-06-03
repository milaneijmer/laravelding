<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accomodatiesOrders extends Model
{
    use HasFactory;
    
    public function bestellijn()
    {
        return $this->hasMany(bestellijn::class);
    }
}
