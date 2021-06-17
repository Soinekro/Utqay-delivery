<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disctrict extends Model
{
    use HasFactory;

//relacion 1 a muchos
    public function motorizados(){
        return $this->hasMany(Motorizado::class);
    }

//relacion muchos a muchos
    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
