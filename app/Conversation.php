<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    // $table->string('titlu_mesaj');
    // $table->boolean('citit');
    protected $fillable = [
        'titlu_mesaj','citit', 'id_expeditor', 'id_destinatar'
    ];

    public function expeditor()
    {
        return $this->hasOne('App\User', 'id', 'id_expeditor');
    }

    public function destinatar()
    {
        return $this->hasOne('App\User', 'id', 'id_destinatar');
    }

    public function mesaje()
    {
        return $this->hasMany('App\Message', 'id_conversatie', 'id');
    }
}
