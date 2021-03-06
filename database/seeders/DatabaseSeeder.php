<?php

namespace Database\Seeders;

use App\Models\Motorizado;
use App\Models\Pedido;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(DisctrictSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(TipoPagoSeeder::class);

        \App\Models\Product::factory(50)->create();
        Motorizado::factory(10)->create();
        Pedido::factory(400)->create();
        $this->call(PedidoSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
