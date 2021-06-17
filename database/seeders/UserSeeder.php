<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Elder Jose Chumacero Jimenez',
            'email'=>'echumaceroj@mail.com',
            'password'=>bcrypt('elder123'),
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
