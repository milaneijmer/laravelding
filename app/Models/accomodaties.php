<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accomodaties extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'soort_kamer',
        'beschrijving',
        'fotopad',
        'prijs'
    ];
}
