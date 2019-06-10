<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'titlu_mesaj','continut_mesaj', 'id_conversatie', 'id_expeditor'
    ];



    public function conversatie()
    {
        return $this->hasOne('App\Conversation', 'id', 'id_conversatie');
    }

    public function expeditor()
    {
        return $this->hasOne('App\User', 'id', 'id_expeditor');
    }
}
