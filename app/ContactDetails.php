<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $fillable = [
        'nume', 'prenume', 'telefon_mobil', 'adresa', 'oras', 'judet', 'tara', 'cod_postal'
    ];
}


