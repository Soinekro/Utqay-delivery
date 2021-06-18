<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Motorizado;
use App\Models\Product;
use App\Models\TipoPago;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipopagos=TipoPago::all();
        $motorizados=Motorizado::all();
        $products=Product::all();
        foreach ($tipopagos as $tipopago) {
            Image::factory(1)->create([
                'imageable_id'=> $tipopago->id,
                'imageable_type'=>TipoPago::class,
            ]);
        }
        foreach ($motorizados as $motorizado) {
            Image::factory(1)->create([
                'imageable_id'=> $motorizado->id,
                'imageable_type'=>Motorizado::class,
            ]);
        }
        foreach ($products as $product) {
            Image::factory(1)->create([
                'imageable_id'=> $product->id,
                'imageable_type'=>Product::class,
            ]);
        }
    }
}
