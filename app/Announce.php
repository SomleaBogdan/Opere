<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $fillable = [
        'owner_id','nume_produs', 'descriere_produs', 'imagine_produs', 'pret_produs'
    ];

    public function owner()
    {
        return $this->hasOne('App\User', 'id', 'owner_id');
    }
}
