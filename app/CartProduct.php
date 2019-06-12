<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{

    protected $fillable = [
        'nume_produs', 'imagine_produs', 'pret_produs', 'id_cart'
    ];

    public function owner()
    {
        return $this->belongsTo('App\Cart', 'id_cart', 'id');
    }

                // $table->string('nume_produs');
            // $table->string('imagine_produs');
            // $table->double('pret_produs');
            // $table->bigInteger('id_cart')->unsigned();
}
