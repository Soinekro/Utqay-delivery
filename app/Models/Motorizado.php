<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorizado extends Model
{
    protected $guarded =[
        'id',
        'created_at',
        'updated_at',
    ];
    use HasFactory;

//relacion 1 a muchos inversa
    public function disctrict(){
        return $this->belongsTo(Disctrict::class);
    }

//relacion 1 a muchos
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
//relacion 1 a muchos polimorfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
    //relacion 1 a 1
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
