<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products';

    //da aggiungere per definire i dati che devono esserre recuperati dal form
    protected $fillable =["name", "price", "description" ];
}
