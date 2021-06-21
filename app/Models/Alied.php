<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alied extends Model
{protected $guarded =[
    'id',
    'created_at',
    'updated_at',
];
    use HasFactory;

    //relacion 1 a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }
    //relacion muchos a muchos
    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
    //relacion 1 a 1
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
