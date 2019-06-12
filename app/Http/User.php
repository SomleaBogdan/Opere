<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nume', 'prenume', 'email', 'password', 'nr_matricol', 'an_studiu', 'telefon', 'imagine_profil'
    ];

    public function announces()
    {
        return $this->hasMany('App\Announce', 'owner_id', 'id');
    }

    public function mesaje_trimise()
    {
        return $this->hasMany('App\Conversation', 'id_expeditor', 'id');
    }

    public function mesaje_primite()
    {
        return $this->hasMany('App\Conversation', 'id_destinatar', 'id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}
