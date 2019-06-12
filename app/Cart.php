<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = [
        'id_user', 'id_contact'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
    
    public function contact()
    {
        return $this->hasOne('App\ContactDetails', 'id_contact', 'id');
    }

    public function produse()
    {
        return $this->hasMany('App\CartProduct', 'id_cart', 'id');
    }
}
