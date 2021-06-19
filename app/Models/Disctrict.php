<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disctrict extends Model
{
    protected $fillable =[
        'name',
    ];
    use HasFactory;

//relacion 1 a muchos
    public function motorizados(){
        return $this->hasMany(Motorizado::class);
    }

//relacion muchos a muchos
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
    public function provincia(){
        return $this->hasMany(Provincia::class);
    }
}
