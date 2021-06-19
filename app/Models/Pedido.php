<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    use HasFactory;

    //relacion muchos a muchos
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function alieds()
    {
        return $this->belongsToMany(Alied::class);
    }

    //relacion uno a muchos inversa
    public function disctricts()
    {
        return $this->belongsTo(Disctrict::class);
    }
    public function motorizado()
    {
        return $this->belongsTo(Motorizado::class,);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function tipoPago()
    {
        return $this->belongsTo(TipoPago::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
