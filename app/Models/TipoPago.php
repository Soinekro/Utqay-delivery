<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    protected $fillable = [
        'name',
    ];
    use HasFactory;
    //relacion 1 a muchos
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
    //relacion 1 a muchos polimorfica
    public function image(){
        return $this->morphOne(image::class,'imageable');
    }
}
