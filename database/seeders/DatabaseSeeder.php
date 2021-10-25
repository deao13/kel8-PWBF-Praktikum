<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\news;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

            User::create([
                'name' => 'Dea Oktavia',
                'email' => 'dea.oktavia-2020@vokasi.unair.ac.id',
                'password' => 'Janganlupalagi13'
            ]);

            User::create([
                'name' => 'Nadya Lovita Sari',
                'email' => 'nadya.lovita.sari-2020@vokasi.unair.ac.id',
                'password' => '@nadya0604'
            ]);
    }
}
