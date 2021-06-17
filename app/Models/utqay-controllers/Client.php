<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    //relacion 1 a muchos
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
}
