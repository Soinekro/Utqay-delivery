<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded =[
        'id',
        'created_at',
        'updated_at',
    ];
    use HasFactory;
//relacion 1 a muchos inversa
    public function alied(){
        return $this->belongsTo(Alied::class);
    }
//relacion muchos a muchos
    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
