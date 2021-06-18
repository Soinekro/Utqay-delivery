<?php

namespace Database\Seeders;

use App\Models\Alied;
use App\Models\Client;
use App\Models\Disctrict;
use App\Models\image;
use App\Models\Motorizado;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Elder Jose Chumacero Jimenez',
            'email' => 'echumaceroj@mail.com',
            'password' => bcrypt('elder123'),
        ])->assignRole('Admin');

        $users = User::factory(200)->create();
        foreach ($users as $user) {

                Client::factory(1)->create([
                    'user_id' => $user->id,
                    'disctrict_id'=>Disctrict::all()->random()->id
                ]);
        }
        $users2 = User::factory(20)->create();
        foreach ($users2 as $user2) {

            Alied::factory(1)->create([
                'user_id' => $user2->id,
            ]);

        }/*
        $clients=Client::all();
        foreach ($clients as $client) {
            Motorizado::factory(1)->create([
            'user_id'=>$client->id,
            ]);
        } */

    }
}
